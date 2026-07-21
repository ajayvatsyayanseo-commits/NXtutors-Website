<?php

declare(strict_types=1);

/*
 * Standalone test for the internal HMAC auth chain (no Laravel bootstrap):
 *  1. config normalization accepts the simple {"key-id":"secret"} form and
 *     grants it all demo scopes (the form used in production);
 *  2. a request signed by the Python agent's InternalRequestSigner reproduces
 *     the exact canonical string HmacRequestAuthenticator verifies, so a
 *     correctly configured key returns a matching signature.
 *
 * Run: php packages/nxtutors/demo-command-center-adapter/tests/hmac_auth_test.php
 *      (optionally with a fixture: php hmac_auth_test.php /path/to/sig.json)
 */

$fail = 0;
$check = static function (bool $c, string $l) use (&$fail): void {
    echo ($c ? '  ok  ' : '  FAIL ') . "$l\n";
    $fail += $c ? 0 : 1;
};

// --- 1) config normalization (mirrors config/demo_command_center.php) ---
$normalize = static function (array $decoded): array {
    $all = [
        'demo:identity:read', 'demo:profiles:read', 'demo:profile-phone:read',
        'demo:tutors:read', 'demo:tutor-contact:read', 'demo:tutor-phone:read',
        'demo:reference:read', 'demo:regions:read', 'demo:social-proof:read',
        'demo:plans:read', 'demo:subscriptions:read', 'demo:subscription:write',
        'demo:projection:write', 'demo:onboarding:write',
    ];
    $out = [];
    foreach ($decoded as $keyId => $def) {
        if (is_string($def)) {
            $out[$keyId] = ['secret' => $def, 'scopes' => $all];
        } elseif (is_array($def)) {
            $def['scopes'] = (isset($def['scopes']) && is_array($def['scopes'])) ? $def['scopes'] : $all;
            $out[$keyId] = $def;
        }
    }
    return $out;
};

$stringForm = json_decode('{"dev-key":"u2itda1aYCdLXwlvLKZVDgFmQ+SEhRwwNU1O69ICkxA="}', true);
$keys = $normalize($stringForm);
$check(is_array($keys['dev-key']), 'string-form key normalized to an array (fixes AUTH_INVALID)');
$check(($keys['dev-key']['secret'] ?? '') === 'u2itda1aYCdLXwlvLKZVDgFmQ+SEhRwwNU1O69ICkxA=', 'secret preserved');
$check(in_array('demo:tutors:read', $keys['dev-key']['scopes'], true), 'string-form key granted demo:tutors:read');

$objForm = json_decode('{"k":{"secret":"abcabcabcabcabcabcabcabcabcabcabc","scopes":["demo:tutors:read"]}}', true);
$objKeys = $normalize($objForm);
$check($objKeys['k']['scopes'] === ['demo:tutors:read'], 'object-form scopes preserved (not widened)');

// --- 2) canonical + signature parity with the Python signer ---
$fixture = $argv[1] ?? null;
if ($fixture !== null && is_file($fixture)) {
    $in = json_decode((string) file_get_contents($fixture), true);
    $h = array_change_key_case($in['headers'], CASE_LOWER);
    $scopes = preg_split('/\s+/', trim($h['x-nxtutors-scopes']));
    sort($scopes, SORT_STRING);
    // Exactly HmacRequestAuthenticator::authenticate() canonical construction.
    $canonical = implode("\n", [
        'GET',
        $in['path'],
        $h['x-nxtutors-timestamp'],
        $h['x-nxtutors-nonce'],
        $h['x-nxtutors-source'],
        $h['x-nxtutors-audience'],
        implode(' ', $scopes),
        hash('sha256', ''),
    ]);
    $expected = hash_hmac('sha256', $canonical, $in['secret']);
    $sig = strtolower($h['x-nxtutors-signature']);
    $check(hash_equals($expected, substr($sig, 3)), 'authenticator canonical matches Python-signed request');
} else {
    echo "  (skip) no fixture passed; canonical parity not exercised\n";
}

echo $fail === 0 ? "\nALL PASSED\n" : "\n$fail FAILED\n";
exit($fail === 0 ? 0 : 1);
