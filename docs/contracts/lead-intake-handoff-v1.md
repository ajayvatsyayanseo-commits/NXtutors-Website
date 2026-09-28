# Website → Lead Intake hand-off, v1

**Status:** agreed 28 Sep 2026. Owner of the website side: NXtutors-Website. Consumer: `nxtutors-lead-intake-agent`.

## Why

A parent who compared tutors, chatted with NXT AI, or pressed "Book a demo" on a
profile arrives on WhatsApp with one line of text. Lead Intake re-asked everything and
could not tell *which* tutor was meant; names are not unique and some tutors go by
more than one name. Every WhatsApp button on the website now carries a **Ref code**
that points to what the parent did, and Lead Intake reads it.

## 1. The Ref code in the WhatsApp message

Every prefilled message the website opens ends with a line such as:

    Ref: NX-7K3Q2M

* Format: `NX-` followed by 6 characters from `23456789ABCDEFGHJKMNPQRSTUVWXYZ`
  (no 0/O, 1/I/L). Match case-insensitively and upper-case it:
  `(?i)\bref\s*[:#-]?\s*(NX-[2-9A-HJ-NP-Z]{6})\b`
* The parent may edit the text. The Ref may be missing, altered, or pasted again in
  a later message. Take the **last** valid Ref seen in the conversation.
* A Ref holds no phone number or name of the parent. On its own it is not
  personal data.
* It lives for 30 days.

## 2. Fetching a Ref

    GET https://www.nxtutors.com/internal/agent/handoffs/{code}

Signed like the existing agent feed (`App\Http\Middleware\VerifyAgentSignature`):

| Header | Value |
|---|---|
| `X-Nxt-Agent` | `lead_intake_agent` |
| `X-Nxt-Timestamp` | unix seconds; ±300 s window |
| `X-Nxt-Signature` | `v1=` + hex HMAC-SHA256 of the canonical string, key = the website's `AGENT_FEED_SIGNING_KEY` |

Canonical string (the path includes the query string exactly as sent; the body of a GET is empty):

    GET\n/internal/agent/handoffs/NX-7K3Q2M\n1759000000\ne3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855

Responses:

* `200`, the context below.
* `404 {"error":"not_found"}` if the code is unknown or expired.
* `401`/`403`/`503` if the signature is wrong, the agent is unknown, or the feed is not configured.

Lead Intake must never block a reply on this call. Use a 2-second timeout; on any
failure it carries on exactly as before.

```json
{
  "version": 1,
  "code": "NX-7K3Q2M",
  "kind": "tutor_profile",
  "intent": "book_demo",
  "created_at": "2026-09-28T10:00:00+05:30",
  "expires_at": "2026-10-28T10:00:00+05:30",
  "source": {
    "url": "https://www.nxtutors.com/tutor/gurugram/MTk5Ny1ueHQ/ajay-vatsyayan",
    "page_type": "tutor_profile",
    "page_title": "Ajay Vatsyayan – Maths tutor in Gurugram",
    "utm": {"utm_source": "google"}
  },
  "primary_tutor_id": "1997",
  "tutors": [
    {
      "tutor_id": "1997",
      "public_ref": "MTk5Ny1ueHQ",
      "name": "Ajay Vatsyayan",
      "other_names": ["Ajay Sir", "Ajay Vatsyayan Classes"],
      "role": "primary",
      "city": "Gurugram",
      "area": "Wazirabad",
      "travel_areas": ["DLF Phase 1–5", "Golf Course Extension Road"],
      "subjects": ["Maths", "Physics"],
      "boards": ["IB", "IGCSE", "CBSE"],
      "teaching_modes": ["Home", "Online"],
      "fee_label": "₹3,000–₹5,000 / hour",
      "profile_url": "https://www.nxtutors.com/tutor/gurugram/MTk5Ny1ueHQ/ajay-vatsyayan",
      "is_sample": false
    }
  ],
  "compare": null,
  "chat": null,
  "known": {
    "student_class": null,
    "subjects": ["Maths"],
    "board": "IB",
    "city": "Gurugram",
    "locality": null,
    "tuition_mode": null,
    "preferred_time": null
  }
}
```

The fields:

* `kind` is one of `tutor_profile`, `tutor_card`, `compare`, `chat`, `page`,
  `demo_form`, `contact`, `general`. It records where the button was.
* `intent` is one of `book_demo`, `enquire_tutor`, `compare`, `chat_continue`, `general`.
* `tutors[].role` is one of `primary` (the tutor the button was for), `compared`, or
  `shown` (cards the AI chat showed).
* `tutor_id` is the website's `register.user_id` (`"1997"`, `"NXT-2026-W7PBUU"`).
  It is the **only** identity to use. Names are not unique.
* `is_sample: true` means a sample profile that is not a real tutor. Never offer or
  book one by name. Treat the parent as wanting a match for the same subject and area.
* `compare` is `{"ranked_tutor_ids": [...], "winner_tutor_id": "..."}` or null.
* `chat` is `{"conversation_id": "...", "summary": "...", "user_turns": 4}` or null.
  `summary` is plain text: what the parent asked, and the tutors shown. It
  has 10+ digit numbers removed and is at most 1,200 characters.
* `known` uses Lead Intake's `LeadFields` names. `tuition_mode` is `home`, `online`
  or `either`. Every key may be null. Only non-null values count as known.

## 3. Resolving a tutor named in free text

For "I want a demo with Abhinandan" with no Ref:

    GET https://www.nxtutors.com/internal/agent/tutors/resolve?name=Abhinandan&city=Gurugram&subject=Maths

This call is signed the same way. `city` and `subject` are optional. The response is
`{"candidates": [<tutor as above, plus "match": "exact|other_name|partial">]}`. It
returns at most 5 candidates, real tutors first, then by closeness of the name.

What Lead Intake does with the result:

* **1 real candidate:** that tutor.
* **Several:** ask the parent to choose. Show a numbered list with name, subjects
  and area, for example `1) Abhinandan Tiwary – Maths, Gurugram`.
* **None:** fall back to the team.

## 4. What Lead Intake does with the context

1. It seeds the lead and session with every non-null `known` value and adds them to
   `do_not_ask_again`. It records the source as `website:<kind>` and saves the Ref
   on the lead.
2. It remembers the primary tutor, or the compare winner, as the preferred tutor
   by `tutor_id`.
3. Its first reply shows it understood, in one short line. It then asks only
   what is still missing. For example: "Thanks! You'd like a free demo with Ajay
   Vatsyayan (IB/IGCSE Maths, Gurugram). Which class is your child in, and
   home or online?"
4. The Demo Command Center hand-off carries `subject.tutor_id` = the preferred
   tutor's `tutor_id`.
5. The staff notification includes the Ref and
   `https://www.nxtutors.com/super/ref/{code}`, where the team can see the full
   context.

## 5. Staff view

`/super/ref/{code}` (super admin only) shows the same context to people.
