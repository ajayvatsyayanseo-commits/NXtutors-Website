<?php

namespace App\Services;

use App\Models\GeneratedPage;
use Illuminate\Support\Str;

class NxtSchemaBuilder
{
    public function build(GeneratedPage $page): array
    {
        $baseUrl = rtrim(config('app.url'), '/');
        $url = $baseUrl . '/p/' . ltrim((string)$page->slug, '/');

        $orgName = config('app.name', 'NXTutors');

        // ✅ Update these to real public paths if needed
        $logoUrl  = $baseUrl . '/frount/assets/images/logo.png';
        $imageUrl = $baseUrl . '/frount/assets/images/og-default.jpg';

        $city     = trim((string)($page->city ?? ''));
        $state    = trim((string)($page->state ?? ''));
        $country  = trim((string)($page->country ?? 'India'));
        $location = trim((string)($page->location ?? ''));
        $hyper    = trim((string)($page->hyper_location ?? ''));

        // Detect skill vs academic
        $isSkill = empty($page->boards) && empty($page->classes_tracks);

        // Labels
        $subjects = is_array($page->subjects) ? $page->subjects : [];
        $boards   = is_array($page->boards) ? $page->boards : [];
        $classes  = is_array($page->classes_tracks) ? $page->classes_tracks : [];
        $primary  = (string)($page->primary_keyword ?? '');

        $serviceMode = (string)($page->service_mode ?? 'home');
        $serviceModeLabel = match ($serviceMode) {
            'online' => 'Online Tutoring',
            'institute' => 'Coaching / Institute',
            default => 'Home Tutoring',
        };

        // Service name & course name
        $serviceName = $isSkill
            ? ($primary ?: $this->titleCase(($subjects[0] ?? 'Skill') . ' Classes in ' . $location . ' ' . $city))
            : ($primary ?: $this->titleCase(($subjects[0] ?? 'Home Tutor') . ' in ' . $location . ' ' . $city));

        $courseName = $isSkill
            ? ($subjects[0] ?? 'Skill Training')
            : (($subjects[0] ?? 'Subject') . ' Tuition');

        // Address (best effort)
        $address = array_filter([
            'streetAddress'    => $hyper ?: $location,
            'addressLocality'  => $city ?: null,
            'addressRegion'    => $state ?: null,
            'addressCountry'   => $country ?: null,
        ]);

        // Area served
        $areaServed = array_values(array_filter([
            $hyper ?: null,
            $location ?: null,
            $city ?: null,
        ]));

        // ✅ Offer (safe placeholders)
        $offerName = $isSkill ? 'Trial Session' : 'Demo Class';
        $offerDesc = $isSkill
            ? 'Book a trial session to evaluate instructor fit and learning plan.'
            : 'Book a free demo to match a verified tutor for your class and board.';

        // FAQ schema from DB
        $faqMain = [];
        $faqs = is_array($page->faqs) ? $page->faqs : [];
        foreach (array_slice($faqs, 0, 15) as $f) {
            $q = trim((string)($f['q'] ?? ''));
            $a = trim((string)($f['a'] ?? ''));
            if ($q === '' || $a === '') continue;

            $faqMain[] = [
                '@type' => 'Question',
                'name'  => $q,
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text'  => $a,
                ],
            ];
        }

        // Breadcrumb list
        $breadcrumbItems = $this->breadcrumbs($baseUrl, $page);

        // 1) WebPage (✅ added about)
        $webPage = [
            '@context' => 'https://schema.org',
            '@type'    => 'WebPage',
            '@id'      => $url . '#webpage',
            'url'      => $url,
            'name'     => $page->meta_title ?? $page->title,
            'description' => $page->meta_description ?? '',
            'inLanguage'  => 'en-IN',
            'isPartOf' => [
                '@type' => 'WebSite',
                '@id'   => $baseUrl . '#website',
                'name'  => $orgName,
                'url'   => $baseUrl,
            ],
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url'   => $imageUrl,
            ],
            'breadcrumb' => [
                '@id' => $url . '#breadcrumb',
            ],
            'about' => array_map(fn($s) => [
                '@type' => 'Thing',
                'name'  => $s
            ], array_values(array_filter($subjects))),
        ];

        // 2) EducationalOrganization (main org)
        $eduOrg = [
            '@context' => 'https://schema.org',
            '@type'    => 'EducationalOrganization',
            '@id'      => $url . '#eduorg',
            'name'     => $orgName,
            'url'      => $baseUrl,
            'logo'     => $logoUrl,
            'address'  => array_merge(['@type' => 'PostalAddress'], $address),
            'areaServed' => array_map(fn($a) => ['@type' => 'Place', 'name' => $a], $areaServed),
            'sameAs' => array_values(array_filter([
                config('services.nxtutors.facebook'),
                config('services.nxtutors.instagram'),
                config('services.nxtutors.linkedin'),
                config('services.nxtutors.google_business'),
            ])),
        ];

        // 3) LocalBusiness (✅ use EducationalOrganization type to avoid duplication + better relevance)
        $localBusiness = [
            '@context' => 'https://schema.org',
            '@type'    => 'EducationalOrganization',
            '@id'      => $url . '#localbusiness',
            'name'     => $orgName,
            'url'      => $baseUrl,
            'image'    => $imageUrl,
            'logo'     => $logoUrl,
            'description' => 'Personalized tutoring services with verified educators.',
            'address'  => array_merge(['@type' => 'PostalAddress'], $address),
            'areaServed' => array_map(fn($a) => ['@type' => 'Place', 'name' => $a], $areaServed),
            'sameAs' => array_values(array_filter([
                config('services.nxtutors.facebook'),
                config('services.nxtutors.instagram'),
                config('services.nxtutors.linkedin'),
                config('services.nxtutors.google_business'),
            ])),
        ];

        // 4) Service (✅ added OfferCatalog + safer priceSpecification)
        $service = [
            '@context' => 'https://schema.org',
            '@type'    => 'Service',
            '@id'      => $url . '#service',
            'name'     => $serviceName,
            'serviceType' => $serviceModeLabel,
            'provider' => [
                '@type' => 'EducationalOrganization',
                'name'  => $orgName,
                'url'   => $baseUrl,
            ],
            'areaServed' => array_map(fn($a) => ['@type' => 'Place', 'name' => $a], $areaServed),
            'hasOfferCatalog' => [
                '@type' => 'OfferCatalog',
                'name'  => 'Tutoring Plans',
            ],
            'offers' => [
                '@type' => 'Offer',
                'name'  => $offerName,
                'url'   => $url,
                'availability' => 'https://schema.org/InStock',
                'priceSpecification' => [
                    '@type' => 'PriceSpecification',
                    'priceCurrency' => 'INR',
                    'price' => '0',
                ],
            ],
        ];

        // 5) Course
        $courseDesc = $isSkill
            ? 'Structured skill learning with personalized sessions.'
            : 'Board-aligned tutoring with concept clarity and exam readiness.';

        $course = [
            '@context' => 'https://schema.org',
            '@type'    => 'Course',
            '@id'      => $url . '#course',
            'name'     => $courseName,
            'description' => $courseDesc,
            'provider' => [
                '@type' => 'Organization',
                'name'  => $orgName,
                'sameAs' => $baseUrl,
            ],
        ];

        // 6) Person (representative, safe)
        $person = [
            '@context' => 'https://schema.org',
            '@type'    => 'Person',
            '@id'      => $url . '#tutor',
            'name'     => 'Verified Tutor (Representative)',
            'jobTitle' => $isSkill ? 'Instructor' : 'Tutor',
            'worksFor' => [
                '@type' => 'Organization',
                'name'  => $orgName,
            ],
            'knowsAbout' => array_values(array_filter([
                $subjects[0] ?? null,
                $boards[0] ?? null,
                $classes[0] ?? null,
                $serviceModeLabel,
            ])),
        ];

        // 7) Offer (top-level)
        $offerSchema = [
            '@context' => 'https://schema.org',
            '@type'    => 'Offer',
            '@id'      => $url . '#offer',
            'name'     => $offerName,
            'url'      => $url,
            'availability' => 'https://schema.org/InStock',
            'description'  => $offerDesc,
            'priceSpecification' => [
                '@type' => 'PriceSpecification',
                'priceCurrency' => 'INR',
                'price' => '0',
            ],
        ];

        // 8) FAQPage (only if FAQs exist)
        $faqPage = [
            '@context' => 'https://schema.org',
            '@type'    => 'FAQPage',
            '@id'      => $url . '#faq',
            'mainEntity' => $faqMain,
        ];

        // 9) BreadcrumbList
        $breadcrumb = [
            '@context' => 'https://schema.org',
            '@type'    => 'BreadcrumbList',
            '@id'      => $url . '#breadcrumb',
            'itemListElement' => $breadcrumbItems,
        ];

        // Return JSON strings for blade printing
        return array_values(array_filter([
            $this->json($webPage),
            $this->json($eduOrg),
            $this->json($localBusiness),
            $this->json($service),
            $this->json($course),
            $this->json($person),
            $this->json($offerSchema),
            !empty($faqMain) ? $this->json($faqPage) : null,
            $this->json($breadcrumb),
        ]));
    }

    private function breadcrumbs(string $baseUrl, GeneratedPage $page): array
    {
        $items = [];
        $pos = 1;

        $items[] = $this->crumb($pos++, 'Home', $baseUrl . '/');

        if (!empty($page->city)) {
            $items[] = $this->crumb($pos++, (string)$page->city, $baseUrl . '/page?city=' . urlencode((string)$page->city));
        }

        if (!empty($page->location)) {
            $items[] = $this->crumb(
                $pos++,
                (string)$page->location,
                $baseUrl . '/page?city=' . urlencode((string)$page->city) . '&location=' . urlencode((string)$page->location)
            );
        }

        $subjects = is_array($page->subjects) ? $page->subjects : [];
        if (!empty($subjects[0])) {
            $items[] = $this->crumb($pos++, (string)$subjects[0], $baseUrl . '/page?subject=' . urlencode((string)$subjects[0]));
        }

        $items[] = $this->crumb(
            $pos++,
            (string)($page->title ?? 'Page'),
            rtrim($baseUrl, '/') . '/p/' . ltrim((string)$page->slug, '/')
        );

        return $items;
    }

    private function crumb(int $position, string $name, string $url): array
    {
        return [
            '@type'    => 'ListItem',
            'position' => $position,
            'name'     => $name,
            'item'     => $url,
        ];
    }

    private function json(array $schema): string
    {
        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    private function titleCase(string $s): string
    {
        $s = trim(preg_replace('/\s+/', ' ', $s));
        return Str::title($s);
    }
}
