<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')

    @php
        $instructors = [];
        if (!empty($rows->teacherAssignments)) {
            foreach ($rows->teacherAssignments as $teacher_course) {
                $teacher = $teacher_course->teacher ?? null;
                if ($teacher) {
                    $instructors[] = [
                        "@type" => "Person",
                        "name" => $teacher->name ?? '',
                        "description" => strip_tags($teacher->profile_desc ?? ''),
                        "image" => !empty($teacher->avatar) ? asset('storage/user/' . $teacher->avatar) : ''
                    ];
                }
            }
        }

        $courseSections = [];
        if (!empty($rows->relatedcurriculum)) {
            foreach ($rows->relatedcurriculum as $curriculum) {
                $courseSections[] = [
                    "@type" => "CourseSection",
                    "name" => $curriculum->curriculum_title ?? '',
                    "description" => strip_tags($curriculum->curriculum_desc ?? '')
                ];
            }
        }

        $reviews = [];
        if (!empty($rows->relatedreview)) {
            foreach ($rows->relatedreview as $review) {
                $reviews[] = [
                    "@type" => "Review",
                    "author" => [
                        "@type" => "Person",
                        "name" => $review->username ?? $review->name ?? 'Student'
                    ],
                    "reviewBody" => strip_tags($review->message ?? ''),
                    "reviewRating" => [
                        "@type" => "Rating",
                        "ratingValue" => $review->rating ?? 5,
                        "bestRating" => "5"
                    ]
                ];
            }
        }

        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Course",
            "name" => $rows->title ?? '',
            "description" => strip_tags($rows->short_desc ?? $rows->pdesc ?? ''),
            "image" => !empty($rows->avatar) ? asset('storage/product_image/' . $rows->avatar) : '',
            "provider" => [
                "@type" => "Organization",
                "name" => "NXTutors",
                "sameAs" => "https://nxtutors.com"
            ],
            "offers" => [
                "@type" => "Offer",
                "price" => $rows->sale_price ?? $rows->price ?? '',
                "priceCurrency" => "INR",
                "availability" => "https://schema.org/InStock",
                "url" => url()->current()
            ],
            "hasCourseInstance" => [
                "@type" => "CourseInstance",
                "courseMode" => "Online & Home Tutoring",
                "location" => [
                    "@type" => "Place",
                    "name" => 'NXTutors - ' . ($rows->mainCategory->cat_title ?? 'All Subjects')
                ],
                "instructor" => $instructors
            ],
            "hasCourseSection" => $courseSections,
            "review" => $reviews
        ];

        if (!empty($rows->video)) {
            $schema["video"] = [
                "@type" => "VideoObject",
                "name" => ($rows->title ?? '') . ' Course Video',
                "thumbnailUrl" => !empty($rows->avatar) ? asset('storage/product_image/' . $rows->avatar) : '',
                "contentUrl" => asset('storage/course/' . $rows->video)
            ];
        }
    @endphp

    <script type="application/ld+json">
        {!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <style>
        :root{
            --nx-bg:#f5f7fb;
            --nx-white:#ffffff;
            --nx-text:#0f172a;
            --nx-muted:#64748b;
            --nx-line:#e2e8f0;
            --nx-primary:#2563eb;
            --nx-primary-2:#4f46e5;
            --nx-accent:#0ea5e9;
            --nx-success:#16a34a;
            --nx-warning:#f59e0b;
            --nx-dark:#0b1220;
            --nx-shadow:0 18px 45px rgba(15,23,42,.08);
            --nx-shadow-lg:0 24px 60px rgba(15,23,42,.14);
            --nx-radius-xl:30px;
            --nx-radius-lg:22px;
            --nx-radius-md:16px;
        }

        *{
            box-sizing:border-box;
        }

        .nx-course-single-page{
            background:
                radial-gradient(circle at top left, rgba(37,99,235,.06), transparent 24%),
                radial-gradient(circle at top right, rgba(79,70,229,.06), transparent 26%),
                linear-gradient(180deg,#f8fbff 0%,#f2f6fb 100%);
        }

        .nx-shell{
            width:100%;
            max-width:1280px;
            margin:0 auto;
            padding:0 24px;
        }

        .nx-hero{
            position:relative;
            overflow:hidden;
            padding:90px 0 120px;
            background:linear-gradient(135deg,#0f4fd6 0%,#4338ca 55%,#0ea5e9 100%);
        }

        .nx-hero::before{
            content:"";
            position:absolute;
            inset:0;
            background:
                radial-gradient(circle at 12% 18%, rgba(255,255,255,.16) 0, transparent 22%),
                radial-gradient(circle at 88% 12%, rgba(255,255,255,.12) 0, transparent 22%),
                radial-gradient(circle at 70% 85%, rgba(255,255,255,.08) 0, transparent 18%);
            pointer-events:none;
        }

        .nx-hero::after{
            content:"";
            position:absolute;
            right:-120px;
            top:-100px;
            width:360px;
            height:360px;
            border-radius:50%;
            background:rgba(255,255,255,.08);
            filter:blur(8px);
        }

        .nx-hero-inner{
            position:relative;
            z-index:2;
            display:flex;
            align-items:flex-end;
            justify-content:space-between;
            gap:30px;
        }

        .nx-hero-left{
            max-width:760px;
        }

        .nx-hero-tag{
            display:inline-flex;
            align-items:center;
            gap:10px;
            padding:10px 16px;
            border-radius:999px;
            color:#fff;
            font-size:13px;
            font-weight:700;
            letter-spacing:.04em;
            background:rgba(255,255,255,.14);
            border:1px solid rgba(255,255,255,.20);
            backdrop-filter:blur(12px);
            -webkit-backdrop-filter:blur(12px);
            margin-bottom:20px;
        }

        .nx-hero-title{
            margin:0 0 16px;
            color:#fff;
            font-size:clamp(34px,4.5vw,58px);
            line-height:1.05;
            letter-spacing:-.03em;
            font-weight:800;
        }

        .nx-hero-subtitle{
            margin:0;
            max-width:700px;
            color:rgba(255,255,255,.86);
            font-size:18px;
            line-height:1.85;
        }

        .nx-breadcrumb{
            display:inline-flex;
            align-items:center;
            gap:10px;
            flex-wrap:wrap;
            padding:14px 18px;
            border-radius:999px;
            color:#fff;
            font-size:14px;
            font-weight:600;
            background:rgba(255,255,255,.12);
            border:1px solid rgba(255,255,255,.20);
            backdrop-filter:blur(10px);
        }

        .nx-breadcrumb a{
            color:#fff;
            text-decoration:none;
        }

        .nx-breadcrumb a:hover{
            text-decoration:underline;
        }

        .nx-main-wrap{
            margin-top:-62px;
            padding-bottom:90px;
            position:relative;
            z-index:3;
        }

        .nx-grid{
            display:grid;
            grid-template-columns:minmax(0, 1.65fr) minmax(320px, .8fr);
            gap:28px;
            align-items:start;
        }

        .nx-panel{
            background:rgba(255,255,255,.82);
            border:1px solid rgba(255,255,255,.7);
            box-shadow:var(--nx-shadow);
            border-radius:var(--nx-radius-xl);
            backdrop-filter:blur(16px);
            -webkit-backdrop-filter:blur(16px);
        }

        .nx-left-panel{
            padding:28px;
        }

        .nx-course-cover{
            position:relative;
            overflow:hidden;
            border-radius:24px;
            margin-bottom:26px;
            background:#dbeafe;
        }

        .nx-course-cover img{
            width:100%;
            height:440px;
            object-fit:cover;
            display:block;
        }

        .nx-course-cover::after{
            content:"";
            position:absolute;
            inset:auto 0 0 0;
            height:130px;
            background:linear-gradient(to top, rgba(2,6,23,.45), transparent);
            pointer-events:none;
        }

        .nx-course-title{
            margin:0 0 18px;
            color:var(--nx-text);
            font-size:40px;
            line-height:1.15;
            font-weight:800;
            letter-spacing:-.03em;
        }

        .nx-top-points{
            display:grid;
            grid-template-columns:repeat(3,minmax(0,1fr));
            gap:14px;
            margin:0 0 24px;
        }

        .nx-top-point{
            padding:16px 18px;
            border-radius:18px;
            background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
            border:1px solid #e8eef7;
            box-shadow:0 10px 24px rgba(15,23,42,.05);
        }

        .nx-top-point-title{
            margin:0 0 6px;
            color:var(--nx-muted);
            font-size:12px;
            font-weight:700;
            text-transform:uppercase;
            letter-spacing:.06em;
        }

        .nx-top-point-value{
            margin:0;
            color:var(--nx-text);
            font-size:18px;
            font-weight:800;
            line-height:1.5;
        }

        .nx-meta-row{
            display:grid;
            grid-template-columns:repeat(4, minmax(0,1fr));
            gap:14px;
            margin-bottom:28px;
        }

        .nx-meta-card{
            padding:16px 18px;
            border-radius:18px;
            background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
            border:1px solid #e8eef7;
            box-shadow:0 10px 24px rgba(15,23,42,.05);
        }

        .nx-meta-label{
            display:flex;
            align-items:center;
            gap:8px;
            margin:0 0 8px;
            color:var(--nx-muted);
            font-size:13px;
            font-weight:700;
            text-transform:uppercase;
            letter-spacing:.04em;
        }

        .nx-meta-value{
            margin:0;
            color:var(--nx-text);
            font-size:18px;
            font-weight:800;
            line-height:1.4;
        }

        .nx-stars{
            display:inline-flex;
            align-items:center;
            gap:4px;
            color:var(--nx-warning);
            font-size:14px;
        }

        .nx-tabs{
            display:flex;
            gap:12px;
            flex-wrap:wrap;
            margin:8px 0 24px;
            padding:10px;
            border-radius:20px;
            background:linear-gradient(180deg,#f8fbff 0%,#eef4fb 100%);
            border:1px solid #e3ecf8;
            list-style:none;
        }

        .nx-tabs .nav-link{
            border:none !important;
            outline:none !important;
            box-shadow:none !important;
            background:transparent !important;
            border-radius:999px !important;
            color:var(--nx-muted) !important;
            font-size:14px;
            font-weight:700;
            text-transform:capitalize;
            padding:13px 22px;
            transition:all .25s ease;
        }

        .nx-tabs .nav-link.active{
            background:linear-gradient(135deg,var(--nx-primary) 0%,var(--nx-primary-2) 100%) !important;
            color:#fff !important;
            box-shadow:0 12px 24px rgba(37,99,235,.24);
        }

        .nx-tab-card{
            padding:28px;
            border-radius:24px;
            background:linear-gradient(180deg,#ffffff 0%,#fbfdff 100%);
            border:1px solid #e8eef7;
        }

        .nx-block-title{
            margin:0 0 14px;
            color:var(--nx-text);
            font-size:28px;
            line-height:1.2;
            font-weight:800;
            letter-spacing:-.02em;
        }

        .nx-content-text,
        .nx-content-text p,
        .nx-content-text li{
            color:#475569;
            font-size:16px;
            line-height:1.9;
        }

        .nx-content-text ul,
        .nx-content-text ol{
            padding-left:20px;
        }

        .nx-curriculum .accordion-item{
            border:none;
            background:transparent;
            margin-bottom:14px;
        }

        .nx-curriculum .accordion-button{
            border:none;
            box-shadow:none !important;
            background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
            border:1px solid #e5edf8;
            border-radius:18px !important;
            min-height:66px;
            color:var(--nx-text);
            font-weight:800;
            font-size:16px;
            padding:18px 22px;
            width:100%;
            text-align:left;
        }

        .nx-curriculum .accordion-button:not(.collapsed){
            color:var(--nx-primary);
            background:linear-gradient(180deg,#ffffff 0%,#f3f8ff 100%);
        }

        .nx-curriculum .accordion-body{
            margin-top:10px;
            border-radius:18px;
            background:#fff;
            border:1px solid #e8eef7;
            color:#475569;
            font-size:15px;
            line-height:1.8;
            padding:20px 22px;
        }

        .nx-teacher-grid{
            display:grid;
            grid-template-columns:repeat(2,minmax(0,1fr));
            gap:22px;
        }

        .nx-teacher-card{
            position:relative;
            text-align:center;
            padding:26px 20px 24px;
            border-radius:24px;
            background:linear-gradient(180deg,#ffffff 0%,#f9fbff 100%);
            border:1px solid #e5edf8;
            transition:transform .3s ease, box-shadow .3s ease;
        }

        .nx-teacher-card:hover{
            transform:translateY(-6px);
            box-shadow:0 18px 36px rgba(15,23,42,.08);
        }

        .nx-teacher-img{
            width:110px;
            height:110px;
            border-radius:50%;
            object-fit:cover;
            margin:0 auto 16px;
            display:block;
            border:5px solid #fff;
            box-shadow:0 14px 28px rgba(15,23,42,.10);
        }

        .nx-teacher-name{
            margin:0 0 8px;
            font-size:22px;
            font-weight:800;
            line-height:1.25;
        }

        .nx-teacher-name a{
            color:var(--nx-text);
            text-decoration:none;
        }

        .nx-teacher-name a:hover{
            color:var(--nx-primary);
        }

        .nx-teacher-role{
            margin:0 0 16px;
            color:var(--nx-muted);
            font-size:14px;
            line-height:1.6;
        }

        .nx-socials{
            display:flex;
            justify-content:center;
            gap:10px;
            padding:0;
            margin:0;
            list-style:none;
        }

        .nx-socials a{
            width:40px;
            height:40px;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            border-radius:50%;
            background:#eff6ff;
            color:var(--nx-primary);
            text-decoration:none;
            transition:all .25s ease;
        }

        .nx-socials a:hover{
            background:linear-gradient(135deg,var(--nx-primary) 0%,var(--nx-primary-2) 100%);
            color:#fff;
            transform:translateY(-2px);
        }

        .nx-review-list{
            display:grid;
            gap:18px;
        }

        .nx-review-card{
            padding:22px 24px;
            border-radius:22px;
            background:linear-gradient(180deg,#ffffff 0%,#fafcff 100%);
            border:1px solid #e8eef7;
        }

        .nx-review-top{
            display:flex;
            justify-content:space-between;
            gap:18px;
            align-items:flex-start;
            margin-bottom:12px;
        }

        .nx-review-name{
            margin:0 0 4px;
            color:var(--nx-text);
            font-size:18px;
            font-weight:800;
        }

        .nx-review-loc{
            margin:0;
            color:var(--nx-muted);
            font-size:14px;
        }

        .nx-review-text{
            margin:0;
            color:#475569;
            font-size:15px;
            line-height:1.85;
        }

        .nx-empty-state{
            padding:28px;
            border-radius:20px;
            background:#f8fbff;
            border:1px dashed #cfe0fb;
            color:var(--nx-muted);
            font-size:15px;
            line-height:1.8;
        }

        .nx-sidebar{
            position:sticky;
            top:30px;
            display:grid;
            gap:24px;
        }

        .nx-side-card{
            padding:26px;
        }

        .nx-enroll-card{
            background:linear-gradient(180deg,rgba(255,255,255,.92) 0%,rgba(245,249,255,.96) 100%);
        }

        .nx-side-title{
            margin:0 0 18px;
            color:var(--nx-text);
            font-size:26px;
            line-height:1.15;
            font-weight:800;
        }

        .nx-side-note{
            margin:0 0 18px;
            color:var(--nx-muted);
            font-size:14px;
            line-height:1.8;
        }

        .nx-info-list{
            list-style:none;
            padding:0;
            margin:0 0 22px;
        }

        .nx-info-list li{
            display:flex;
            justify-content:space-between;
            gap:16px;
            align-items:flex-start;
            padding:14px 0;
            border-bottom:1px solid var(--nx-line);
        }

        .nx-info-list li:last-child{
            border-bottom:none;
        }

        .nx-info-key{
            color:var(--nx-muted);
            font-size:14px;
            line-height:1.7;
            font-weight:700;
        }

        .nx-info-key i{
            color:var(--nx-primary);
            margin-right:8px;
        }

        .nx-info-value{
            color:var(--nx-text);
            font-size:15px;
            line-height:1.7;
            font-weight:800;
            text-align:right;
        }

        .nx-btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            min-height:54px;
            width:100%;
            border-radius:999px;
            text-decoration:none;
            color:#fff;
            font-size:15px;
            font-weight:800;
            background:linear-gradient(135deg,var(--nx-primary) 0%,var(--nx-primary-2) 100%);
            box-shadow:0 16px 30px rgba(37,99,235,.22);
            transition:all .25s ease;
        }

        .nx-btn:hover{
            color:#fff;
            transform:translateY(-2px);
            box-shadow:0 22px 34px rgba(37,99,235,.28);
        }

        .nx-btn-secondary{
            margin-top:12px;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            width:100%;
            min-height:50px;
            border-radius:999px;
            text-decoration:none;
            color:var(--nx-primary);
            background:#eff6ff;
            font-size:14px;
            font-weight:800;
        }

        .nx-popular-list{
            display:grid;
            gap:16px;
        }

        .nx-popular-item{
            display:grid;
            grid-template-columns:92px 1fr;
            gap:14px;
            padding:12px;
            border-radius:18px;
            background:linear-gradient(180deg,#ffffff 0%,#fafcff 100%);
            border:1px solid #e8eef7;
            transition:all .25s ease;
        }

        .nx-popular-item:hover{
            transform:translateY(-3px);
            box-shadow:0 14px 26px rgba(15,23,42,.06);
        }

        .nx-popular-item img{
            width:92px;
            height:82px;
            border-radius:14px;
            object-fit:cover;
            display:block;
        }

        .nx-popular-title{
            margin:2px 0 0;
            font-size:16px;
            font-weight:800;
            line-height:1.5;
        }

        .nx-popular-title a{
            color:var(--nx-text);
            text-decoration:none;
        }

        .nx-popular-title a:hover{
            color:var(--nx-primary);
        }

        @media (max-width: 1199px){
            .nx-meta-row,
            .nx-top-points{
                grid-template-columns:repeat(2,minmax(0,1fr));
            }
        }

        @media (max-width: 991px){
            .nx-grid{
                grid-template-columns:1fr;
            }

            .nx-sidebar{
                position:static;
            }

            .nx-hero-inner{
                flex-direction:column;
                align-items:flex-start;
            }

            .nx-course-cover img{
                height:340px;
            }
        }

        @media (max-width: 767px){
            .nx-shell{
                padding:0 16px;
            }

            .nx-hero{
                padding:62px 0 90px;
            }

            .nx-left-panel,
            .nx-side-card{
                padding:18px;
            }

            .nx-course-title{
                font-size:30px;
            }

            .nx-meta-row,
            .nx-top-points{
                grid-template-columns:1fr;
            }

            .nx-tabs{
                gap:8px;
                padding:8px;
            }

            .nx-tabs .nav-link{
                width:100%;
                text-align:center;
            }

            .nx-tab-card{
                padding:18px;
            }

            .nx-teacher-grid{
                grid-template-columns:1fr;
            }

            .nx-course-cover img{
                height:240px;
            }

            .nx-review-top{
                flex-direction:column;
                align-items:flex-start;
            }
        }
    </style>
</head>
<body>
<div class="nx-course-single-page">

    <div class="nx-hero">
        <div class="nx-shell">
            <div class="nx-hero-inner">
                <div class="nx-hero-left">
                    <div class="nx-hero-tag">Premium Learning Experience</div>
                    <h1 class="nx-hero-title">{{ $rows->title }}</h1>
                    <p class="nx-hero-subtitle">
                        Master concepts with expert-led sessions, structured curriculum, live classes, and a focused learning path designed for excellent outcomes.
                    </p>
                </div>

                <div class="nx-breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>/</span>
                    <span>{{ $rows->title }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="nx-main-wrap">
        <div class="nx-shell">
            <div class="nx-grid">

                <div class="nx-panel nx-left-panel">
                    <div class="nx-course-cover">
                        <img src="{{ asset('storage/product_image/' . $rows->avatar) }}" alt="{{ $rows->title }}">
                    </div>

                    <h2 class="nx-course-title">{{ $rows->title }}</h2>

                    <div class="nx-top-points">
                        <div class="nx-top-point">
                            <p class="nx-top-point-title">Course Mode</p>
                            <p class="nx-top-point-value">Online + Live Tutoring</p>
                        </div>
                        <div class="nx-top-point">
                            <p class="nx-top-point-title">Language</p>
                            <p class="nx-top-point-value">{{ $rows->language ?? 'English' }}</p>
                        </div>
                        <div class="nx-top-point">
                            <p class="nx-top-point-title">Duration</p>
                            <p class="nx-top-point-value">{{ $rows->duration ?? 'Flexible' }}</p>
                        </div>
                    </div>

                    <div class="nx-meta-row">
                        <div class="nx-meta-card">
                            <div class="nx-meta-label">
                                <i class="fa-regular fa-layer-group"></i>
                                Category
                            </div>
                            <p class="nx-meta-value">{{ $rows->mainCategory->cat_title ?? 'General' }}</p>
                        </div>

                        <div class="nx-meta-card">
                            <div class="nx-meta-label">
                                <i class="fa-regular fa-user-graduate"></i>
                                Students
                            </div>
                            <p class="nx-meta-value">245+</p>
                        </div>

                        <div class="nx-meta-card">
                            <div class="nx-meta-label">
                                <i class="fa-regular fa-signal-stream"></i>
                                Level
                            </div>
                            <p class="nx-meta-value">{{ $rows->level ?? 'All Levels' }}</p>
                        </div>

                        <div class="nx-meta-card">
                            <div class="nx-meta-label">
                                <i class="fa-solid fa-star"></i>
                                Ratings
                            </div>
                            <div class="nx-meta-value">
                                <span class="nx-stars">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </span>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nx-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link active"
                                id="overview-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#overview-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="overview-tab-pane"
                                aria-selected="true"
                            >
                                Overview
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="curriculum-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#curriculum-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="curriculum-tab-pane"
                                aria-selected="false"
                            >
                                Curriculum
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="instructor-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#instructor-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="instructor-tab-pane"
                                aria-selected="false"
                            >
                                Teacher
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button
                                class="nav-link"
                                id="reviews-tab"
                                data-bs-toggle="tab"
                                data-bs-target="#reviews-tab-pane"
                                type="button"
                                role="tab"
                                aria-controls="reviews-tab-pane"
                                aria-selected="false"
                            >
                                Reviews
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="tl-course-tab-content">

                        <div
                            class="tab-pane fade show active"
                            id="overview-tab-pane"
                            role="tabpanel"
                            aria-labelledby="overview-tab"
                            tabindex="0"
                        >
                            <div class="nx-tab-card">
                                <h3 class="nx-block-title">About The Course</h3>
                                <div class="nx-content-text">
                                    {!! $rows->pdesc !!}
                                </div>
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="curriculum-tab-pane"
                            role="tabpanel"
                            aria-labelledby="curriculum-tab"
                            tabindex="0"
                        >
                            <div class="nx-tab-card nx-curriculum">
                                <h3 class="nx-block-title">Course Curriculum</h3>

                                @if(!empty($rows->relatedcurriculum) && count($rows->relatedcurriculum) > 0)
                                    <div class="accordion" id="accordionExample">
                                        @php $j = 1; @endphp
                                        @foreach($rows->relatedcurriculum as $rowcc)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button
                                                        class="accordion-button collapsed"
                                                        type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo{{ $j }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapseTwo{{ $j }}"
                                                    >
                                                        {{ $rowcc->curriculum_title }}
                                                    </button>
                                                </h2>
                                                <div
                                                    id="collapseTwo{{ $j }}"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample"
                                                >
                                                    <div class="accordion-body">
                                                        {{ $rowcc->curriculum_desc }}
                                                    </div>
                                                </div>
                                            </div>
                                            @php $j++; @endphp
                                        @endforeach
                                    </div>
                                @else
                                    <div class="nx-empty-state">
                                        Curriculum details will be updated soon.
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="instructor-tab-pane"
                            role="tabpanel"
                            aria-labelledby="instructor-tab"
                            tabindex="0"
                        >
                            <div class="nx-tab-card">
                                <h3 class="nx-block-title">Meet Your Teachers</h3>

                                @if(!empty($rows->teacherAssignments) && count($rows->teacherAssignments) > 0)
                                    <div class="nx-teacher-grid">
                                        @foreach($rows->teacherAssignments as $teacher_course)
                                            @php
                                                $rowt = $teacher_course->teacher ?? null;
                                            @endphp

                                            @if($rowt)
                                                @php
                                                    $nameslug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $rowt->name), '-'));
                                                    $cityslug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $rowt->district), '-'));
                                                @endphp

                                                <div class="nx-teacher-card">
                                                    @if(empty($rowt->avatar))
                                                        <img src="{{ asset('frount/assets/images/tl-2/teacher-1.jpg') }}" alt="Teacher Image" class="nx-teacher-img">
                                                    @else
                                                        <img src="{{ asset('storage/user/' . $rowt->avatar) }}" alt="Teacher Image" class="nx-teacher-img">
                                                    @endif

                                                    <h5 class="nx-teacher-name">
                                                        <a href="{{ url('/') }}/{{ $cityslug }}/teacher/{{ $nameslug }}/{{ base64_encode($rowt->user_id) }}">
                                                            {{ ucfirst($rowt->name) }}
                                                        </a>
                                                    </h5>

                                                    <p class="nx-teacher-role">
                                                        Expert faculty dedicated to result-oriented learning and personal guidance.
                                                    </p>

                                                    <!-- <ul class="nx-socials">
                                                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                                    </ul> -->
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                @else
                                    <div class="nx-empty-state">
                                        Teacher information will be added shortly.
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div
                            class="tab-pane fade"
                            id="reviews-tab-pane"
                            role="tabpanel"
                            aria-labelledby="reviews-tab"
                            tabindex="0"
                        >
                            <div class="nx-tab-card">
                                <h3 class="nx-block-title">Student Reviews</h3>

                                @if(!empty($rows->relatedreview) && count($rows->relatedreview) > 0)
                                    <div class="nx-review-list">
                                        @foreach($rows->relatedreview as $rowcc)
                                            <div class="nx-review-card">
                                                <div class="nx-review-top">
                                                    <div>
                                                        <h6 class="nx-review-name">{{ $rowcc->username ?? 'Student' }}</h6>
                                                        <p class="nx-review-loc">{{ $rowcc->location ?? '' }}</p>
                                                    </div>

                                                    <div class="nx-stars">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if($i <= ($rowcc->rating ?? 5))
                                                                <i class="fa-solid fa-star"></i>
                                                            @else
                                                                <i class="fa-regular fa-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                </div>

                                                <p class="nx-review-text">{{ $rowcc->message }}</p>
                                            </div>
                                        @endforeach
                                    </div>
                                @else
                                    <div class="nx-empty-state">
                                        No reviews yet. Be the first to explore and enroll.
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <div class="nx-sidebar">

                    <div class="nx-panel nx-side-card nx-enroll-card">
                        <h3 class="nx-side-title">Course Details</h3>
                        <p class="nx-side-note">
                            Structured learning, expert mentoring, and focused outcomes for serious students.
                        </p>

                        <ul class="nx-info-list">
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-clock"></i>Duration</span>
                                <span class="nx-info-value">{{ $rows->duration ?? 'Flexible' }}</span>
                            </li>
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-video"></i>Video Lectures</span>
                                <span class="nx-info-value">{{ $rows->video_lectures ?? 0 }}+</span>
                            </li>
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-tv"></i>Live Class</span>
                                <span class="nx-info-value">{{ $rows->live_class ?? 0 }}+</span>
                            </li>
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-file-contract"></i>Quizzes</span>
                                <span class="nx-info-value">{{ $rows->quizzes ?? 0 }}+</span>
                            </li>
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-bars-progress"></i>Level</span>
                                <span class="nx-info-value">{{ $rows->level ?? 'All Levels' }}</span>
                            </li>
                            <li>
                                <span class="nx-info-key"><i class="fa-regular fa-globe"></i>Language</span>
                                <span class="nx-info-value">{{ $rows->language ?? 'English' }}</span>
                            </li>
                        </ul>

                        <a href="{{ url('/') }}/login" class="nx-btn">
                            Enroll Now
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="https://wa.me/919876543210" class="nx-btn-secondary">
                            Talk on WhatsApp
                        </a>
                    </div>

                    @if(!empty($productcount) && $productcount > 0)
                        <div class="nx-panel nx-side-card">
                            <h3 class="nx-side-title">Popular Courses</h3>

                            <div class="nx-popular-list">
                                @php $x = 1; @endphp
                                @foreach($product as $rowp)
                                    @if($x <= 5)
                                        <div class="nx-popular-item">
                                            <img
                                                src="{{ asset('storage/product_image/' . $rowp->avatar) }}"
                                                alt="{{ $rowp->title }}"
                                            >
                                            <div>
                                                <h4 class="nx-popular-title">
                                                    <a href="{{ url('/') }}/course/{{ $rowp->slug }}">
                                                        {{ $rowp->title }}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endif
                                    @php $x++; @endphp
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@include('include.footer')
</body>
</html>