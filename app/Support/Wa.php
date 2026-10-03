<?php

namespace App\Support;

/**
 * WhatsApp button URLs for views. Every button goes through /wa/…, which
 * records what the parent was looking at (a Ref, App\Services\WhatsAppHandoff)
 * and then opens WhatsApp with a message that ends in that Ref.
 *
 *   Wa::tutor($t->user_id, 'card', $aiPage ?? [])   tutor cards
 *   Wa::tutor($tutor->user_id, 'profile')             profile "Book a demo"
 *   Wa::page('footer')                                any other button
 *
 * On click the browser adds vcity / varea, the place the visitor saved on the
 * site (include/footer.blade.php); WhatsAppController uses them only to fill
 * a place the page does not give.
 */
final class Wa
{
    /** Page-context keys passed on (the chat widget's $aiPage shape). */
    private const CONTEXT = ['subject', 'board', 'class', 'city', 'area'];

    public static function tutor(string|int|null $userId, string $src = 'card', array $context = []): string
    {
        $token = rtrim(strtr(base64_encode(((string) $userId).'-nxt'), '+/', '-_'), '=');

        return route('wa.tutor', ['ref' => $token] + self::query($src, $context));
    }

    public static function page(string $src = 'page', array $context = []): string
    {
        return route('wa.go', self::query($src, $context));
    }

    private static function query(string $src, array $context): array
    {
        $q = ['src' => $src, 'from' => self::from()];
        foreach (self::CONTEXT as $k) {
            if (isset($context[$k]) && is_scalar($context[$k]) && trim((string) $context[$k]) !== '') {
                $q[$k] = mb_substr(trim((string) $context[$k]), 0, 60);
            }
        }

        return $q;
    }

    /** The page the button is on, as a path with its query (UTM tags included). */
    private static function from(): string
    {
        try {
            return mb_substr(request()->getRequestUri(), 0, 400);
        } catch (\Throwable) {
            return '/';
        }
    }
}
