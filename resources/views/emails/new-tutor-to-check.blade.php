<!doctype html>
<html>
<body style="margin:0;padding:24px;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
  {{-- Privacy: no ID images, document number, phone or email here (App\Mail\NewTutorToCheckMail). --}}
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;margin:auto;background:#ffffff;border-radius:12px;">
    <tr><td style="padding:28px;">
      <h1 style="font-size:20px;margin:0 0 12px;">New tutor to check: {{ $name }}</h1>
      <p style="font-size:15px;line-height:1.6;margin:0 0 16px;">
        A new tutor has joined NXTutors. Please check their ID and approve them; the Verified badge appears only after you approve.
      </p>
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:14px;line-height:1.7;margin:0 0 20px;">
        <tr><td style="color:#6b7280;padding-right:16px;">Name</td><td>{{ $name }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">City</td><td>{{ $city !== '' ? $city : 'Not given yet' }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Subjects</td><td>{{ $subjects ? implode(', ', $subjects) : 'Not given yet' }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Mode</td><td>{{ $mode !== '' ? $mode : 'Not given yet' }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Signed up via</td><td>{{ $source }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Profile</td><td>{{ $live ? 'Already live (no Verified badge yet)' : 'Not live yet: waiting for your approval' }}</td></tr>
      </table>
      <p style="margin:0 0 20px;">
        <a href="{{ $reviewUrl }}" style="display:inline-block;background:#f59e0b;color:#111827;text-decoration:none;font-weight:bold;padding:12px 20px;border-radius:8px;">Open the review page</a>
      </p>
      <p style="font-size:13px;line-height:1.6;color:#6b7280;margin:0;">
        The ID photos and contact details are on the review page, behind the admin sign-in. They are never sent by email.
      </p>
    </td></tr>
  </table>
</body>
</html>
