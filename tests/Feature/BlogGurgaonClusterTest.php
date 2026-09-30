<?php

namespace Tests\Feature;

use App\Support\BlogTopics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\Concerns\LegacySchema;
use Tests\TestCase;

/** The Gurgaon guide cluster and the two IB rewrites (2026_09_29_120000). */
class BlogGurgaonClusterTest extends TestCase
{
    use LegacySchema, RefreshDatabase;

    private const NEW = [
        'home-tuition-fees-gurgaon', 'choose-home-tutor-gurgaon-safety-checklist',
        'jee-preparation-gurgaon-coaching-or-home-tutor', 'neet-preparation-gurgaon-coaching-or-home-tutor',
        'ib-igcse-tutoring-gurgaon-parents-guide', 'icse-isc-maths-gurgaon-guide', 'cbse-class-10-board-year-plan-gurgaon',
        'gurgaon-golf-course-road-dlf-tuition-guide', 'gurgaon-golf-course-extension-spr-tuition-guide',
        'gurgaon-sohna-road-south-city-tuition-guide', 'new-gurgaon-dwarka-expressway-tuition-guide',
        'old-gurgaon-palam-vihar-tuition-guide',
    ];

    private const ROUND2 = [
        'moving-to-gurgaon-school-and-tutoring-guide', 'switching-cbse-to-ib-or-igcse-gurgaon', 'cambridge-vs-edexcel-igcse-gurgaon',
        'class-11-stream-choice-gurgaon', 'study-abroad-from-gurgaon-sat-ap-ib-timeline', 'olympiad-preparation-gurgaon-imo-nso-rmo',
        'study-routine-long-commute-gurgaon',
    ];

    private const NOIDA = [
        'home-tuition-fees-noida', 'old-and-central-noida-tuition-guide', 'noida-sector-62-and-70s-tuition-guide',
        'noida-expressway-and-extension-tuition-guide', 'moving-to-noida-school-and-tutoring-guide',
    ];

    private const GREATER_NOIDA = [
        'home-tuition-fees-greater-noida', 'greater-noida-west-tuition-guide', 'greater-noida-sectors-tuition-guide',
    ];

    private const GHAZIABAD = [
        'home-tuition-fees-ghaziabad', 'indirapuram-tuition-guide', 'vaishali-vasundhara-sahibabad-tuition-guide',
        'raj-nagar-and-old-ghaziabad-tuition-guide',
    ];

    private const FARIDABAD = [
        'home-tuition-fees-faridabad', 'nit-and-central-faridabad-tuition-guide', 'greater-faridabad-neharpar-tuition-guide',
        'ballabhgarh-and-surajkund-tuition-guide',
    ];

    private const DELHI = [
        'home-tuition-fees-delhi', 'south-delhi-tuition-guide', 'dwarka-and-west-delhi-tuition-guide',
        'rohini-and-north-delhi-tuition-guide', 'east-delhi-tuition-guide',
    ];

    private const MUMBAI = [
        'home-tuition-fees-mumbai',
        'south-and-central-mumbai-tuition-guide',
        'mumbai-western-suburbs-tuition-guide',
        'mumbai-central-suburbs-tuition-guide',
        'thane-and-navi-mumbai-tuition-guide',
    ];

    private const BENGALURU = [
        'home-tuition-fees-bengaluru',
        'south-bengaluru-tuition-guide',
        'east-bengaluru-tuition-guide',
        'north-bengaluru-tuition-guide',
        'west-and-central-bengaluru-tuition-guide',
    ];

    private const HYDERABAD = [
        'home-tuition-fees-hyderabad',
        'west-hyderabad-tuition-guide',
        'central-hyderabad-tuition-guide',
        'secunderabad-tuition-guide',
        'east-and-south-hyderabad-tuition-guide',
    ];

    private const PUNE = [
        'home-tuition-fees-pune',
        'west-pune-tuition-guide',
        'east-pune-tuition-guide',
        'south-pune-tuition-guide',
    ];

    private const INDORE = [
        'home-tuition-fees-indore',
        'vijay-nagar-and-east-indore-tuition-guide',
        'central-and-south-indore-tuition-guide',
    ];

    private const CHANDIGARH = [
        'home-tuition-fees-chandigarh',
        'chandigarh-sectors-tuition-guide',
        'mohali-and-panchkula-tuition-guide',
    ];

    private const JAIPUR = [
        'home-tuition-fees-jaipur',
        'central-and-north-jaipur-tuition-guide',
        'south-and-west-jaipur-tuition-guide',
    ];

    private const LUCKNOW = [
        'home-tuition-fees-lucknow',
        'gomti-nagar-and-trans-gomti-tuition-guide',
        'central-and-south-lucknow-tuition-guide',
    ];

    private const CHENNAI = [
        'home-tuition-fees-chennai',
        'south-chennai-tuition-guide',
        'omr-and-ecr-tuition-guide',
        'west-and-north-chennai-tuition-guide',
    ];

    private const AHMEDABAD = [
        'home-tuition-fees-ahmedabad',
        'west-ahmedabad-tuition-guide',
        'east-ahmedabad-tuition-guide',
    ];

    private const KOLKATA = [
        'home-tuition-fees-kolkata',
        'south-kolkata-tuition-guide',
        'salt-lake-and-new-town-tuition-guide',
        'north-kolkata-and-howrah-tuition-guide',
    ];

    private const BHOPAL = [
        'home-tuition-fees-bhopal',
        'south-and-central-bhopal-tuition-guide',
        'bhel-and-old-bhopal-tuition-guide',
    ];

    private const PATNA = [
        'home-tuition-fees-patna',
        'north-and-west-patna-tuition-guide',
        'south-and-old-patna-tuition-guide',
    ];

    private const THIRUVANANTHAPURAM = [
        'home-tuition-fees-thiruvananthapuram',
        'thiruvananthapuram-tuition-guide',
    ];

    private const NAGPUR = [
        'home-tuition-fees-nagpur',
        'nagpur-tuition-guide',
    ];

    private const RANCHI = [
        'home-tuition-fees-ranchi',
        'ranchi-tuition-guide',
    ];

    private const TATA = [
        'home-tuition-fees-jamshedpur',
        'jamshedpur-tuition-guide',
    ];

    private const KOCHI = [
        'home-tuition-fees-kochi',
        'kochi-tuition-guide',
    ];

    private const SURAT = [
        'home-tuition-fees-surat',
        'surat-tuition-guide',
    ];

    private const COIMBATORE = [
        'home-tuition-fees-coimbatore',
        'coimbatore-tuition-guide',
    ];

    private const GUWAHATI = [
        'home-tuition-fees-guwahati',
        'guwahati-tuition-guide',
    ];

    private function migration(): object
    {
        return require database_path('migrations/seo/2026_09_29_120000_publish_gurgaon_guide_cluster.php');
    }

    public function test_every_post_has_its_files_and_follows_the_content_rules(): void
    {
        foreach (array_merge(self::NEW, self::ROUND2, self::NOIDA, self::GREATER_NOIDA, self::GHAZIABAD, self::FARIDABAD, self::DELHI, self::MUMBAI, self::BENGALURU, self::HYDERABAD, self::PUNE, self::INDORE, self::CHANDIGARH, self::JAIPUR, self::LUCKNOW, self::CHENNAI, self::AHMEDABAD, self::KOLKATA, self::BHOPAL, self::PATNA, self::THIRUVANANTHAPURAM, self::NAGPUR, self::RANCHI, self::TATA, self::KOCHI, self::SURAT, self::COIMBATORE, self::GUWAHATI, ['-ib-math-aaai-slhl', '-ib-physics-slhl-iaee']) as $slug) {
            $html = (string) @file_get_contents(database_path("seo-content/blog/$slug.html"));
            $meta = json_decode((string) @file_get_contents(database_path("seo-content/blog/$slug.json")), true) ?: [];

            $this->assertNotSame('', trim($html), "$slug body");
            $this->assertNotEmpty($meta['title'] ?? null, "$slug title");
            $this->assertLessThanOrEqual(60, mb_strlen($meta['meta_title'] ?? ''), "$slug meta_title");
            $this->assertStringContainsString('Frequently asked questions', $html, $slug);
            // Indexed guides, never the noindexed "local post" kind.
            $this->assertNotSame('city', BlogTopics::of($slug), $slug);

            $text = strip_tags($html);
            foreach (["india's first", 'guaranteed', 'no. 1', '100%'] as $banned) {
                $this->assertStringNotContainsStringIgnoringCase($banned, $text, "$slug: $banned");
            }
            $this->assertDoesNotMatchRegularExpression('/\b\d[\d,]*\+?\s+verified tutors\b/i', $text, $slug);
            $this->assertDoesNotMatchRegularExpression('/<(h1|script|img|style)\b/i', $html, $slug);
        }
        foreach (array_merge(self::NEW, self::ROUND2, self::NOIDA, self::GREATER_NOIDA, self::GHAZIABAD, self::FARIDABAD, self::DELHI, self::MUMBAI, self::BENGALURU, self::HYDERABAD, self::PUNE, self::INDORE, self::CHANDIGARH, self::JAIPUR, self::LUCKNOW, self::CHENNAI, self::AHMEDABAD, self::KOLKATA, self::BHOPAL, self::PATNA, self::THIRUVANANTHAPURAM, self::NAGPUR, self::RANCHI, self::TATA, self::KOCHI, self::SURAT, self::COIMBATORE, self::GUWAHATI) as $slug) {
            $this->assertFileExists(public_path("storage/blog/$slug.jpg"));
        }
    }

    public function test_publishes_new_posts_rewrites_ib_posts_and_rolls_back(): void
    {
        $this->createLegacySchema();
        DB::table('blog_managment')->insert(['title' => 'IB Math AA/AI SL/HL', 'slug' => '-ib-math-aaai-slhl', 'status' => 't', 'bdesc' => '<p>old</p>', 'avatar' => 'old.jpg', 'author' => 'Admin']);

        $m = $this->migration();
        $m->up();
        $m->up();

        $this->assertSame(count(self::NEW) + 1, DB::table('blog_managment')->count());
        $ib = DB::table('blog_managment')->where('slug', '-ib-math-aaai-slhl')->first();
        $this->assertSame('Ajay Vatsyayan', $ib->author);
        $this->assertSame('old.jpg', $ib->avatar, 'a rewrite keeps its image');
        $this->assertStringNotContainsString('<p>old</p>', $ib->bdesc);

        $m->down();
        $this->assertSame(1, DB::table('blog_managment')->count());
        $this->assertStringContainsString('IB Maths', (string) DB::table('blog_managment')->value('bdesc'));
    }

    public function test_the_gurugram_page_leads_its_guides_with_the_cluster(): void
    {
        $this->createLegacySchema();
        $this->migration()->up();

        $guides = \App\Support\CityHub::guides([], 6, ['gurugram', 'gurgaon']);
        $this->assertContains($guides->first()->slug, self::NEW);
    }

    public function test_round_two_publishes_once_and_rolls_back(): void
    {
        $this->createLegacySchema();
        $m = require database_path('migrations/seo/2026_09_30_120000_publish_gurgaon_guides_round2.php');
        $m->up();
        $m->up();
        $this->assertSame(count(self::ROUND2), DB::table('blog_managment')->count());
        $m->down();
        $this->assertSame(0, DB::table('blog_managment')->count());
    }
}
