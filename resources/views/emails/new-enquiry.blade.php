<!doctype html>
<html>
<body style="margin:0;padding:24px;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
  {{-- Privacy: no phone number, email address or free-text message here (App\Mail\NewEnquiryMail). --}}
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;margin:auto;background:#ffffff;border-radius:12px;">
    <tr><td style="padding:28px;">
      <h1 style="font-size:20px;margin:0 0 12px;">{{ $heading }}</h1>
      <p style="font-size:15px;line-height:1.6;margin:0 0 16px;">A family has sent a new enquiry. Please follow up and set its stage on the Enquiries page.</p>
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:14px;line-height:1.7;margin:0 0 20px;">
        @foreach($rows as $label => $value)
          <tr><td style="color:#6b7280;padding-right:16px;vertical-align:top;">{{ $label }}</td><td>{{ $value }}</td></tr>
        @endforeach
      </table>
      <p style="margin:0 0 20px;">
        <a href="{{ $adminUrl }}" style="display:inline-block;background:#f59e0b;color:#111827;text-decoration:none;font-weight:bold;padding:12px 20px;border-radius:8px;">Open the enquiry</a>
      </p>
      <p style="font-size:13px;line-height:1.6;color:#6b7280;margin:0;">
        The phone number, email and the parent's own message are on the admin page, behind the sign-in. They are never sent by email.
      </p>
    </td></tr>
  </table>
</body>
</html>
