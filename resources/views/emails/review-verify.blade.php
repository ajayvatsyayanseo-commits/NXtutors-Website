<!doctype html>
<html>
<body style="margin:0;padding:24px;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:560px;margin:auto;background:#ffffff;border-radius:12px;">
    <tr><td style="padding:28px;">
      <h1 style="font-size:20px;margin:0 0 12px;">Confirm your review</h1>
      <p style="font-size:15px;line-height:1.6;margin:0 0 12px;">
        Hi {{ $review->name }}, thank you for reviewing <strong>{{ $teacher->name }}</strong> on NXTutors.
      </p>
      <p style="font-size:15px;line-height:1.6;margin:0 0 20px;">
        Please confirm this is your email address. Once confirmed, our team checks the review and publishes it.
      </p>
      <p style="margin:0 0 20px;">
        <a href="{{ $url }}" style="display:inline-block;background:#f59e0b;color:#111827;text-decoration:none;font-weight:bold;padding:12px 20px;border-radius:8px;">Confirm my review</a>
      </p>
      <p style="font-size:13px;line-height:1.6;color:#6b7280;margin:0;">
        This link works for {{ $hours }} hours. If you did not write this review, ignore this email and it will not be published.
      </p>
    </td></tr>
  </table>
</body>
</html>
