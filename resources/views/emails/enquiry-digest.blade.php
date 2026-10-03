<!doctype html>
<html>
<body style="margin:0;padding:24px;background:#f4f6fb;font-family:Arial,Helvetica,sans-serif;color:#111827;">
  {{-- Privacy: parent names only; no phone numbers, emails or messages (App\Mail\EnquiryDigestMail). --}}
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px;margin:auto;background:#ffffff;border-radius:12px;">
    <tr><td style="padding:28px;">
      <h1 style="font-size:20px;margin:0 0 12px;">Enquiries this morning</h1>
      <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:14px;line-height:1.7;margin:0 0 16px;">
        <tr><td style="color:#6b7280;padding-right:16px;">Received in the last 24 hours</td><td><strong>{{ $received24 }}</strong></td></tr>
        @foreach($bySource as $source => $n)
          <tr><td style="color:#6b7280;padding-right:16px;padding-left:12px;">{{ $source }}</td><td>{{ $n }}</td></tr>
        @endforeach
        <tr><td style="color:#6b7280;padding-right:16px;">Still New (not yet contacted)</td><td>{{ $newOpen }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Open and unassigned</td><td>{{ $unassigned }}</td></tr>
        <tr><td style="color:#6b7280;padding-right:16px;">Demos today</td><td>{{ $demosToday }}</td></tr>
      </table>
      <h2 style="font-size:16px;margin:0 0 8px;">Overdue follow-ups ({{ count($overdue) }}{{ count($overdue) >= 25 ? '+' : '' }})</h2>
      @if($overdue)
        <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:14px;line-height:1.6;margin:0 0 20px;width:100%;">
          @foreach($overdue as $o)
            <tr><td style="padding:4px 0;border-bottom:1px solid #eef1f6;"><a href="{{ $o['url'] }}">#{{ $o['id'] }} {{ $o['name'] }}</a> · {{ $o['what'] }} <span style="color:#b91c1c;">due {{ $o['due'] }}</span></td></tr>
          @endforeach
        </table>
      @else
        <p style="font-size:14px;margin:0 0 20px;color:#6b7280;">None.</p>
      @endif
      <p style="margin:0 0 20px;">
        <a href="{{ $adminUrl }}" style="display:inline-block;background:#f59e0b;color:#111827;text-decoration:none;font-weight:bold;padding:12px 20px;border-radius:8px;">Open Enquiries</a>
      </p>
      <p style="font-size:13px;line-height:1.6;color:#6b7280;margin:0;">Phone numbers and emails are on the admin page, behind the sign-in. They are never sent by email.</p>
    </td></tr>
  </table>
</body>
</html>
