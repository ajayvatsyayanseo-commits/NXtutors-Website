<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')
</head>
<body>

    <div class="nx-course-list-page">

    <style>
        :root{
            --nx-bg:#f6f9fc;
            --nx-white:#ffffff;
            --nx-text:#0f172a;
            --nx-muted:#64748b;
            --nx-line:#e2e8f0;
            --nx-primary:#2563eb;
            --nx-primary-2:#4f46e5;
            --nx-accent:#0ea5e9;
            --nx-warning:#f59e0b;
            --nx-shadow:0 18px 45px rgba(15,23,42,.08);
            --nx-shadow-hover:0 24px 60px rgba(15,23,42,.14);
            --nx-radius-xl:30px;
            --nx-radius-lg:24px;
            --nx-radius-md:18px;
        }

        .nx-course-list-page{
            background:
                radial-gradient(circle at top left, rgba(37,99,235,.06), transparent 22%),
                radial-gradient(circle at top right, rgba(79,70,229,.06), transparent 26%),
                linear-gradient(180deg,#f8fbff 0%,#f1f5f9 100%);
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
            padding:88px 0 110px;
            background:linear-gradient(135deg,#0f4fd6 0%,#4338ca 55%,#0ea5e9 100%);
        }

        .nx-hero::before{
            content:"";
            position:absolute;
            inset:0;
            background:
                radial-gradient(circle at 12% 18%, rgba(255,255,255,.16) 0, transparent 22%),
                radial-gradient(circle at 88% 10%, rgba(255,255,255,.12) 0, transparent 22%),
                radial-gradient(circle at 68% 85%, rgba(255,255,255,.08) 0, transparent 18%);
            pointer-events:none;
        }

        .nx-hero-inner{
            position:relative;
            z-index:2;
            display:flex;
            justify-content:space-between;
            align-items:flex-end;
            gap:30px;
        }

        .nx-hero-left{
            max-width:760px;
        }

        .nx-hero-tag{
            display:inline-flex;
            align-items:center;
            gap:8px;
            padding:10px 16px;
            border-radius:999px;
            background:rgba(255,255,255,.14);
            border:1px solid rgba(255,255,255,.20);
            color:#fff;
            font-size:13px;
            font-weight:700;
            letter-spacing:.05em;
            margin-bottom:18px;
            backdrop-filter:blur(10px);
            -webkit-backdrop-filter:blur(10px);
        }

        .nx-hero-title{
            margin:0 0 16px;
            color:#fff;
            font-size:clamp(36px,5vw,60px);
            line-height:1.05;
            letter-spacing:-.03em;
            font-weight:800;
        }

        .nx-hero-text{
            margin:0;
            color:rgba(255,255,255,.86);
            font-size:18px;
            line-height:1.85;
            max-width:650px;
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
            -webkit-backdrop-filter:blur(10px);
        }

        .nx-breadcrumb a{
            color:#fff;
            text-decoration:none;
        }

        .nx-breadcrumb a:hover{
            text-decoration:underline;
        }

        .nx-main{
            position:relative;
            z-index:3;
            margin-top:-56px;
            padding-bottom:90px;
        }

        .nx-panel{
            background:rgba(255,255,255,.82);
            border:1px solid rgba(255,255,255,.70);
            border-radius:var(--nx-radius-xl);
            box-shadow:var(--nx-shadow);
            padding:30px;
            backdrop-filter:blur(16px);
            -webkit-backdrop-filter:blur(16px);
        }

        .nx-head{
            display:flex;
            justify-content:space-between;
            align-items:flex-end;
            gap:20px;
            margin-bottom:28px;
        }

        .nx-head h2{
            margin:0 0 8px;
            color:var(--nx-text);
            font-size:34px;
            line-height:1.15;
            font-weight:800;
            letter-spacing:-.02em;
        }

        .nx-head p{
            margin:0;
            color:var(--nx-muted);
            font-size:15px;
            line-height:1.8;
        }

        .nx-count{
            flex-shrink:0;
            display:inline-flex;
            align-items:center;
            justify-content:center;
            min-height:46px;
            padding:0 18px;
            border-radius:999px;
            background:linear-gradient(135deg,#eff6ff 0%,#eef2ff 100%);
            border:1px solid #dbeafe;
            color:var(--nx-primary);
            font-size:14px;
            font-weight:800;
        }

        .nx-grid{
            display:grid;
            grid-template-columns:repeat(3,minmax(0,1fr));
            gap:24px;
        }

        .nx-card{
            display:flex;
            flex-direction:column;
            min-height:100%;
            background:linear-gradient(180deg,#ffffff 0%,#fbfdff 100%);
            border:1px solid #e8eef7;
            border-radius:var(--nx-radius-lg);
            overflow:hidden;
            box-shadow:0 10px 26px rgba(15,23,42,.05);
            transition:transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .nx-card:hover{
            transform:translateY(-8px);
            box-shadow:var(--nx-shadow-hover);
            border-color:rgba(37,99,235,.18);
        }

        .nx-card-media{
            position:relative;
            overflow:hidden;
            background:#dbeafe;
            aspect-ratio: 16 / 10;
        }

        .nx-card-media img{
            width:100%;
            height:100%;
            object-fit:cover;
            display:block;
            transition:transform .55s ease;
        }

        .nx-card:hover .nx-card-media img{
            transform:scale(1.06);
        }

        .nx-card-overlay{
            content:"";
            position:absolute;
            inset:auto 0 0 0;
            height:100px;
            background:linear-gradient(to top, rgba(2,6,23,.38), transparent);
            pointer-events:none;
        }

        .nx-card-body{
            display:flex;
            flex-direction:column;
            flex:1;
            padding:22px 22px 24px;
        }

        .nx-card-top{
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:12px;
            margin-bottom:16px;
        }

        .nx-badge{
            display:inline-flex;
            align-items:center;
            max-width:100%;
            padding:9px 14px;
            border-radius:999px;
            background:linear-gradient(135deg,#eff6ff 0%,#eef2ff 100%);
            color:var(--nx-primary);
            font-size:12px;
            font-weight:800;
            line-height:1;
            overflow:hidden;
            white-space:nowrap;
            text-overflow:ellipsis;
        }

        .nx-rating{
            display:inline-flex;
            align-items:center;
            gap:4px;
            color:var(--nx-warning);
            font-size:14px;
            flex-shrink:0;
        }

        .nx-title{
            margin:0 0 12px;
            font-size:24px;
            line-height:1.35;
            font-weight:800;
            letter-spacing:-.02em;
        }

        .nx-title a{
            color:var(--nx-text);
            text-decoration:none;
            transition:color .25s ease;
        }

        .nx-title a:hover{
            color:var(--nx-primary);
        }

        .nx-desc{
            margin:0 0 22px;
            color:var(--nx-muted);
            font-size:15px;
            line-height:1.85;
            display:-webkit-box;
            -webkit-line-clamp:3;
            -webkit-box-orient:vertical;
            overflow:hidden;
            min-height:84px;
        }

        .nx-card-bottom{
            margin-top:auto;
            display:flex;
            justify-content:space-between;
            align-items:center;
            gap:14px;
        }

        .nx-btn{
            display:inline-flex;
            align-items:center;
            justify-content:center;
            gap:10px;
            min-height:48px;
            padding:0 20px;
            border-radius:999px;
            text-decoration:none;
            color:#fff;
            font-size:14px;
            font-weight:800;
            background:linear-gradient(135deg,var(--nx-primary) 0%,var(--nx-primary-2) 100%);
            box-shadow:0 14px 28px rgba(37,99,235,.22);
            transition:transform .25s ease, box-shadow .25s ease;
        }

        .nx-btn:hover{
            color:#fff;
            transform:translateY(-2px);
            box-shadow:0 18px 32px rgba(37,99,235,.28);
        }

        .nx-mode{
            color:var(--nx-muted);
            font-size:13px;
            font-weight:700;
            white-space:nowrap;
        }

        .nx-empty{
            text-align:center;
            padding:60px 24px;
            border-radius:24px;
            background:linear-gradient(180deg,#ffffff 0%,#f8fbff 100%);
            border:1px dashed #cfe0fb;
        }

        .nx-empty h3{
            margin:0 0 10px;
            color:var(--nx-text);
            font-size:28px;
            font-weight:800;
        }

        .nx-empty p{
            margin:0;
            color:var(--nx-muted);
            font-size:15px;
            line-height:1.8;
        }

        @media (max-width: 1199px){
            .nx-grid{
                grid-template-columns:repeat(2,minmax(0,1fr));
            }
        }

        @media (max-width: 991px){
            .nx-hero-inner{
                flex-direction:column;
                align-items:flex-start;
            }

            .nx-head{
                flex-direction:column;
                align-items:flex-start;
            }
        }

        @media (max-width: 767px){
            .nx-shell{
                padding:0 16px;
            }

            .nx-hero{
                padding:68px 0 92px;
            }

            .nx-panel{
                padding:18px;
                border-radius:22px;
            }

            .nx-grid{
                grid-template-columns:1fr;
                gap:18px;
            }

            .nx-title{
                font-size:22px;
            }

            .nx-desc{
                min-height:auto;
            }

            .nx-card-bottom{
                flex-direction:column;
                align-items:flex-start;
            }

            .nx-btn{
                width:100%;
            }
        }
    </style>

    <div class="nx-hero">
        <div class="nx-shell">
            <div class="nx-hero-inner">
                <div class="nx-hero-left">
                    <div class="nx-hero-tag">Premium Learning Paths</div>
                    <h1 class="nx-hero-title">All Courses</h1>
                    <p class="nx-hero-text">
                        Explore high-quality courses designed to build strong skills, improve performance, and help learners grow with confidence.
                    </p>
                </div>

                <div class="nx-breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>/</span>
                    <span>Course</span>
                </div>
            </div>
        </div>
    </div>

    @section('content')
    <section class="nx-main">
        <div class="nx-shell">
            <div class="nx-panel">

                <div class="nx-head">
                    <div>
                        <h2>Available Courses</h2>
                        <p>Choose from our curated collection of professional and student-focused learning programs.</p>
                    </div>
                    <div class="nx-count">
                        {{ count($course) }} Courses
                    </div>
                </div>

                @if(!empty($course) && count($course) > 0)
                    <div class="nx-grid">
                        @foreach($course as $rowp)
                            <article class="nx-card">
                                <div class="nx-card-media">
                                    <a href="{{ url('/') }}/course/{{ $rowp->slug }}">
                                        <img
                                            src="{{ asset('public/storage/product_image/' . $rowp->avatar) }}"
                                            alt="{{ $rowp->title }}"
                                        >
                                    </a>
                                    <div class="nx-card-overlay"></div>
                                </div>

                                <div class="nx-card-body">
                                    <div class="nx-card-top">
                                        <span class="nx-badge">
                                            {{ $rowp->mainCategory->cat_title ?? 'Course' }}
                                        </span>

                                        <span class="nx-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </span>
                                    </div>

                                    <h3 class="nx-title">
                                        <a href="{{ url('/') }}/course/{{ $rowp->slug }}">
                                            {{ $rowp->title }}
                                        </a>
                                    </h3>

                                    <p class="nx-desc">
                                        {{ $rowp->short_desc }}
                                    </p>

                                    <div class="nx-card-bottom">
                                        <a href="{{ url('/') }}/course/{{ $rowp->slug }}" class="nx-btn">
                                            View Course
                                            <i class="fa-regular fa-arrow-right"></i>
                                        </a>

                                        <span class="nx-mode">Teaching Online</span>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="nx-empty">
                        <h3>No Courses Found</h3>
                        <p>Courses will appear here once they are added.</p>
                    </div>
                @endif

            </div>
        </div>
    </section>
    @endsection

</div>


@include('include.footer')
</body>
</html>