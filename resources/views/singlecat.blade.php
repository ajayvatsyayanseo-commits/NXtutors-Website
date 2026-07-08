<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{{ $metatitle }}</title>
    <meta name="title" content="{{ $metatitle }}">
    <meta name="keywords" content="{{ $metakey }}">
    <meta name="description" content="{{ $metadesc }}">
    @include('include.header')

    <style>
        :root{
            --nx-bg: #f4f7fb;
            --nx-card: rgba(255,255,255,0.82);
            --nx-card-border: rgba(255,255,255,0.55);
            --nx-text: #14213d;
            --nx-muted: #6b7280;
            --nx-primary: #2563eb;
            --nx-primary-2: #4f46e5;
            --nx-accent: #0ea5e9;
            --nx-success: #16a34a;
            --nx-shadow: 0 18px 50px rgba(17, 24, 39, 0.10);
            --nx-shadow-hover: 0 28px 60px rgba(17, 24, 39, 0.16);
            --nx-radius-xl: 28px;
            --nx-radius-lg: 22px;
            --nx-radius-md: 16px;
            --nx-container: 1240px;
        }

        *{
            box-sizing: border-box;
        }

        body{
            margin: 0;
            padding: 0;
        }

        .nx-course-page{
            background:
                radial-gradient(circle at top left, rgba(37,99,235,0.08), transparent 28%),
                radial-gradient(circle at top right, rgba(79,70,229,0.08), transparent 28%),
                linear-gradient(180deg, #f7faff 0%, #f1f5f9 100%);
        }

        .nx-shell{
            width: 100%;
            max-width: var(--nx-container);
            margin: 0 auto;
            padding: 0 24px;
        }

        .nx-hero{
            position: relative;
            overflow: hidden;
            padding: 72px 0 56px;
            background:
                linear-gradient(135deg, rgba(37,99,235,0.96) 0%, rgba(79,70,229,0.96) 100%);
        }

        .nx-hero::before{
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 10% 20%, rgba(255,255,255,.18) 0, transparent 24%),
                radial-gradient(circle at 85% 10%, rgba(255,255,255,.14) 0, transparent 25%),
                radial-gradient(circle at 70% 85%, rgba(255,255,255,.10) 0, transparent 18%);
            pointer-events: none;
        }

        .nx-hero::after{
            content: "";
            position: absolute;
            right: -120px;
            top: -120px;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            filter: blur(10px);
        }

        .nx-hero-inner{
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 24px;
        }

        .nx-hero-left{
            max-width: 760px;
        }

        .nx-pill{
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.16);
            border: 1px solid rgba(255,255,255,0.26);
            color: #fff;
            padding: 10px 16px;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: .04em;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            margin-bottom: 18px;
        }

        .nx-hero-title{
            margin: 0 0 14px;
            color: #fff;
            font-size: clamp(34px, 5vw, 58px);
            line-height: 1.05;
            font-weight: 800;
            letter-spacing: -0.03em;
        }

        .nx-hero-text{
            margin: 0;
            color: rgba(255,255,255,0.82);
            font-size: 18px;
            line-height: 1.7;
            max-width: 620px;
        }

        .nx-breadcrumb{
            display: inline-flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 14px 18px;
            border-radius: 999px;
            background: rgba(255,255,255,0.14);
            border: 1px solid rgba(255,255,255,0.22);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .nx-breadcrumb a{
            color: #fff;
            text-decoration: none;
            opacity: .95;
        }

        .nx-breadcrumb a:hover{
            opacity: 1;
            text-decoration: underline;
        }

        .nx-section{
            position: relative;
            margin-top: -26px;
            padding: 0 0 80px;
        }

        .nx-panel{
            background: rgba(255,255,255,0.72);
            border: 1px solid rgba(255,255,255,0.65);
            border-radius: var(--nx-radius-xl);
            box-shadow: var(--nx-shadow);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            padding: 34px;
        }

        .nx-section-head{
            display: flex;
            justify-content: space-between;
            align-items: end;
            gap: 20px;
            margin-bottom: 28px;
        }

        .nx-section-title{
            margin: 0 0 8px;
            font-size: 34px;
            line-height: 1.15;
            color: var(--nx-text);
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .nx-section-subtitle{
            margin: 0;
            font-size: 15px;
            color: var(--nx-muted);
            line-height: 1.7;
        }

        .nx-count-badge{
            flex-shrink: 0;
            background: linear-gradient(135deg, #eff6ff 0%, #eef2ff 100%);
            color: var(--nx-primary);
            border: 1px solid #dbeafe;
            border-radius: 999px;
            padding: 12px 18px;
            font-size: 14px;
            font-weight: 700;
        }

        .nx-grid{
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 26px;
        }

        .nx-card{
            position: relative;
            display: flex;
            flex-direction: column;
            min-height: 100%;
            background: linear-gradient(180deg, rgba(255,255,255,0.94) 0%, rgba(255,255,255,0.88) 100%);
            border: 1px solid rgba(226,232,240,0.9);
            border-radius: var(--nx-radius-lg);
            overflow: hidden;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
            transition: transform .35s ease, box-shadow .35s ease, border-color .35s ease;
        }

        .nx-card:hover{
            transform: translateY(-8px);
            box-shadow: var(--nx-shadow-hover);
            border-color: rgba(37,99,235,0.20);
        }

        .nx-card-media{
            position: relative;
            overflow: hidden;
            aspect-ratio: 16 / 10;
            background: #e5e7eb;
        }

        .nx-card-media img{
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform .55s ease;
        }

        .nx-card:hover .nx-card-media img{
            transform: scale(1.06);
        }

        .nx-card-overlay{
            position: absolute;
            inset: auto 0 0 0;
            height: 90px;
            background: linear-gradient(to top, rgba(2,6,23,.35), transparent);
            pointer-events: none;
        }

        .nx-card-body{
            display: flex;
            flex-direction: column;
            flex: 1;
            padding: 22px 22px 24px;
        }

        .nx-card-top{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
            margin-bottom: 16px;
        }

        .nx-chip{
            display: inline-flex;
            align-items: center;
            max-width: calc(100% - 60px);
            padding: 9px 14px;
            border-radius: 999px;
            background: linear-gradient(135deg, #eff6ff 0%, #eef2ff 100%);
            color: var(--nx-primary);
            font-size: 12px;
            font-weight: 700;
            line-height: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .nx-price{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-width: 42px;
            height: 42px;
            border-radius: 999px;
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: #fff;
            font-size: 13px;
            font-weight: 800;
            box-shadow: 0 8px 18px rgba(22,163,74,.25);
        }

        .nx-card-title{
            margin: 0 0 12px;
            font-size: 28px;
            line-height: 1.3;
            font-weight: 800;
            letter-spacing: -0.02em;
        }

        .nx-card-title a{
            color: var(--nx-text);
            text-decoration: none;
            transition: color .25s ease;
        }

        .nx-card-title a:hover{
            color: var(--nx-primary);
        }

        .nx-card-desc{
            margin: 0 0 22px;
            color: var(--nx-muted);
            font-size: 15px;
            line-height: 1.8;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 108px;
        }

        .nx-card-bottom{
            margin-top: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 14px;
        }

        .nx-btn{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            min-height: 48px;
            padding: 0 22px;
            border-radius: 999px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(135deg, var(--nx-primary) 0%, var(--nx-primary-2) 100%);
            box-shadow: 0 12px 24px rgba(37,99,235,.22);
            transition: transform .25s ease, box-shadow .25s ease, opacity .25s ease;
        }

        .nx-btn:hover{
            transform: translateY(-2px);
            box-shadow: 0 18px 28px rgba(37,99,235,.28);
            opacity: .98;
        }

        .nx-rating{
            display: inline-flex;
            align-items: center;
            gap: 4px;
            color: #f59e0b;
            font-size: 14px;
            flex-shrink: 0;
        }

        .nx-empty{
            text-align: center;
            padding: 50px 24px;
            border-radius: 22px;
            background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid #e5e7eb;
        }

        .nx-empty h3{
            margin: 0 0 10px;
            color: var(--nx-text);
            font-size: 24px;
            font-weight: 800;
        }

        .nx-empty p{
            margin: 0;
            color: var(--nx-muted);
            font-size: 15px;
        }

        @media (max-width: 1100px){
            .nx-grid{
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .nx-section-title{
                font-size: 30px;
            }
        }

        @media (max-width: 768px){
            .nx-hero{
                padding: 56px 0 42px;
            }

            .nx-hero-inner{
                flex-direction: column;
                align-items: flex-start;
            }

            .nx-panel{
                padding: 22px;
                border-radius: 22px;
            }

            .nx-section-head{
                flex-direction: column;
                align-items: flex-start;
                margin-bottom: 22px;
            }

            .nx-grid{
                grid-template-columns: 1fr;
                gap: 20px;
            }

            .nx-card-title{
                font-size: 24px;
            }

            .nx-card-desc{
                min-height: auto;
                -webkit-line-clamp: 3;
            }

            .nx-card-bottom{
                flex-direction: column;
                align-items: flex-start;
            }

            .nx-btn{
                width: 100%;
            }
        }
    </style>
</head>
<body>

<main class="nx-course-page">

    <section class="nx-hero">
        <div class="nx-shell">
            <div class="nx-hero-inner">
                <div class="nx-hero-left">
                    <div class="nx-pill">Our Premium Courses</div>
                    <h1 class="nx-hero-title">{{ $category->cat_title }}</h1>
                    <p class="nx-hero-text">
                        Explore high quality courses and grow your skills with confidence.
                    </p>
                </div>

                <div class="nx-breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ url('/') }}">Home</a>
                    <span>/</span>
                    <span>{{ $category->cat_title }}</span>
                </div>
            </div>
        </div>
    </section>

    <section class="nx-section">
        <div class="nx-shell">
            <div class="nx-panel">
                <div class="nx-section-head">
                    <div>
                        <h2 class="nx-section-title">Available Courses</h2>
                        <p class="nx-section-subtitle">
                            Curated programs designed to help students learn better, perform stronger, and grow faster.
                        </p>
                    </div>

                    <div class="nx-count-badge">
                        {{ count($products) }} courses available
                    </div>
                </div>

                @if(count($products) > 0)
                    <div class="nx-grid">
                        @foreach($products as $rowp)
                            <article class="nx-card">
                                <div class="nx-card-media">
                                    <a href="{{ url('/course/' . $rowp->slug) }}">
                                        <img
                                            src="{{ asset('public/storage/product_image/' . $rowp->avatar) }}"
                                            alt="{{ $rowp->title }}"
                                        >
                                    </a>
                                    <div class="nx-card-overlay"></div>
                                </div>

                                <div class="nx-card-body">
                                    <div class="nx-card-top">
                                        <span class="nx-chip">
                                            {{ $rowp->mainCategory->cat_title ?? 'Course' }}
                                        </span>

                                       <!--  @if(!empty($rowp->sale_price))
                                            <span class="nx-price">Rs</span>
                                        @else
                                            <span class="nx-price">Rs</span>
                                        @endif -->
                                    </div>

                                    <h3 class="nx-card-title">
                                        <a href="{{ url('/course/' . $rowp->slug) }}">
                                            {{ $rowp->title }}
                                        </a>
                                    </h3>

                                    <p class="nx-card-desc">
                                        {{ $rowp->short_desc }}
                                    </p>

                                    <div class="nx-card-bottom">
                                        <a href="{{ url('/course/' . $rowp->slug) }}" class="nx-btn">
                                            View Course
                                            <i class="fa-solid fa-arrow-right"></i>
                                        </a>

                                        <div class="nx-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <div class="nx-empty">
                        <h3>No courses found</h3>
                        <p>Iss category me abhi koi course available nahi hai.</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

</main>

@include('include.footer')
</body>
</html>