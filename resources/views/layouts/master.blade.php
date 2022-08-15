<!doctype html>
<html dir="rtl" lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />

    <!-- This site is optimized with the Yoast SEO plugin v19.4 - https://yoast.com/wordpress/plugins/seo/ -->
    <title>@yield('title')</title>

    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='wp-block-library-rtl-css' href='{{ asset('assets/css/style-rtl.min.css') }}'
        media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }
    </style>
    <link rel='stylesheet' id='mechalab-bootstrap-css' href='{{ asset('assets/css/bootstrap.rtl.min.css') }}'
        media='all' />
    <link rel='stylesheet' id='mechalab-swiper-css' href='https://unpkg.com/swiper@8/swiper-bundle.min.css?ver=1.0.0'
        media='all' />
    <link rel='stylesheet' id='mechalab-fancybox-css'
        href='https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css?ver=1.0.0' media='all' />
    <link rel='stylesheet' id='mechalab-fontawesome-css' href='{{ asset('assets/css/all.min.css') }}' media='all' />
    <link rel='stylesheet' id='mechalab-style-css' href='{{ asset('assets/css/style.css').'?v='.time() }}' media='all' />
    {{-- <script src='wp-content/plugins/google-analytics-for-wordpress/assets/js/frontend-gtag.min.js?ver=8.7.0'
        id='monsterinsights-frontend-script-js'></script> --}}
    <!-- Analytics by WP Statistics v13.2.5 - https://wp-statistics.com/ -->
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" sizes="32x32" />
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}" sizes="192x192" />
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logo.png') }}" />
    <meta name="msapplication-TileImage" content="{{ asset('assets/images/logo.png') }}" />
</head>

<body data-rsssl=1
    class="rtl home page-template page-template-template-home page-template-template-home-php page page-id-2 wp-custom-logo">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false"
        role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <div id="page" class="site">

        <header id="header">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="logo d-flex align-items-center">
                        <a href="" class="custom-logo-link" rel="home" aria-current="page"><img
                                width="389" height="435" src="{{ asset('assets/images/logo.png') }}"
                                class="custom-logo" alt="محمد عبده العسيري للإستقدام (تدابير)"
                                srcset="{{ asset('assets/images/logo.png') }}"
                                sizes="(max-width: 389px) 100vw, 389px" /></a>
                        <h1 class="site-title"><a href=""rel="home"> شركة تدابير للإستقدام</a></h1>
                    </div>
                    <ul id="primary-menu" class="menu">
                        <li id="menu-item-16"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home @if (request()->routeIs('home')) current-menu-item @endif page_item page-item-2 menu-item-16">
                            <a href="{{ route('home') }}" aria-current="page">الرئيسية</a>
                        </li>
                        <li id="menu-item-43"
                            class="menu-item menu-item-type-post_type_archive menu-item-object-service @if (request()->routeIs('service')) current-menu-item @endif menu-item-43">
                            <a href="{{ route('service.all') }}">خدماتنا</a>
                        </li>
                        <li id="menu-item-52"
                            class="menu-item menu-item-type-post_type_archive menu-item-object-feature @if (request()->routeIs('feature')) current-menu-item @endif menu-item-52">
                            <a href="{{ route('feature') }}">مميزاتنا</a></li>
                        <li id="menu-item-45"
                            class="menu-item menu-item-type-post_type_archive menu-item-object-countrie @if (request()->routeIs('countrie')) current-menu-item @endif menu-item-45">
                            <a href="{{ route('countrie') }}">دول الإستقدام</a>
                        </li>
                        <li id="menu-item-58"
                            class="menu-item menu-item-type-post_type_archive menu-item-object-worker @if (request()->routeIs('worker')) current-menu-item @endif menu-item-58">
                            <a href="{{ route('service.worker') }}">اختيار العمالة</a></li>
                        <li id="menu-item-70"
                            class="menu-item menu-item-type-post_type_archive menu-item-object-allsponsorcvs @if (request()->routeIs('allsponsorcvs')) current-menu-item @endif menu-item-70">
                            <a href="{{ route('allsponsorcvs') }}">طلبات نقل خدمات</a>
                        </li>
                        <li id="menu-item-55"
                            class="menu-item menu-item-type-post_type menu-item-object-page @if (request()->routeIs('track')) current-menu-item @endif menu-item-55">
                            <a href="{{ route('track') }}">تتبع طلبك</a></li>
                        <li id="menu-item-54"
                            class="menu-item menu-item-type-post_type menu-item-object-page @if (request()->routeIs('faq')) current-menu-item @endif menu-item-54">
                            <a href="{{ route('faq') }}">الأسئلة الشائعة</a></li>
                        <li id="menu-item-53"
                            class="menu-item menu-item-type-post_type menu-item-object-page @if (request()->routeIs('contact')) current-menu-item @endif menu-item-53">
                            <a href="{{ route('contact') }}">تواصل معنا</a></li>
                    </ul>
                    <div id="toggle"></div>
                </div>
            </div>
        </header>

        @yield('content')


        <aside id="secondary" class="widget-area">
        </aside><!-- #secondary -->

        <div class="fixed-h">
            <!-- Item -->
            <div class="item whatsIcon">
                <a href="https://api.whatsapp.com/send?phone={{ env('PHONE_NUMBER') }}" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    <h3> تواصل واتساب</h3>
                </a>
            </div>
            <!-- /Item -->
            <!-- Item -->
            <div class="item callNow">
                <a href="tel:{{ env('PHONE_NUMBER') }}">
                    <i class="fa-solid fa-phone-flip"></i>
                    <h3>تواصل هاتف</h3>
                </a>
            </div>
            <!-- /Item -->
        </div>

        <footer id="colophon" class="site-footer mt-5">

            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <section id="media_image-2" class="widget widget_media_image"><img width="268"
                                    height="300" src="{{ asset('assets/images/logo.png') }}"
                                    class="image wp-image-111  attachment-medium size-medium" alt=""
                                    loading="lazy" style="max-width: 100%; height: auto;" /></section>
                        </div>
                        <div class="col-md-6">
                            <section id="nav_menu-2" class="widget widget_nav_menu">
                                <div class="menu-primary-menu-container">
                                    <ul id="menu-primary-menu" class="menu">
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-16">
                                            <a href="{{ route('home') }}">الرئيسية</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type_archive menu-item-object-service menu-item-43">
                                            <a href="{{ route('service.all') }}">خدماتنا</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type_archive menu-item-object-feature menu-item-52">
                                            <a href="{{ route('feature') }}">مميزاتنا</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type_archive menu-item-object-countrie menu-item-45">
                                            <a href="{{ route('countrie') }}">دول الإستقدام</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type_archive menu-item-object-worker menu-item-58">
                                            <a href="{{ route('service.worker') }}">اختيار العمالة</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type_archive menu-item-object-allsponsorcvs menu-item-70">
                                            <a href="{{ route('allsponsorcvs') }}">طلبات نقل خدمات</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-55">
                                            <a href="{{ route('track') }}">تتبع طلبك</a></li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54">
                                            <a href="{{ route('faq') }}">الأسئلة الشائعة</a>
                                        </li>
                                        <li
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-53">
                                            <a href="{{ route('contact') }}">تواصل معنا</a>
                                        </li>
                                    </ul>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="container">
                    <div class="d-md-flex justify-content-md-between align-items-md-center">
                        <p class="mb-3 mb-md-0">جميع الحقوق محفوظة محمد عبده العسيري للإستقدام (تدابير) &copy 2022</p>
                        <ul class="mb-0 social">
                            <li><a href="https://www.instagram.com/p/Cfkp5OFI5dU/?igshid=YmMyMTA2M2Y="
                                    target="_blank"><i class="fab fa-tiktok"></i></a></li>
                            <li><a href="https://iwtsp.com/{{ env('PHONE_NUMBER') }}" target="_blank"><i
                                        class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.snapchat.com/add/alasiri-rec?share_id=TcDEiAnrtcI&locale=ar-SA"
                                    target="_blank"><i class="fab fa-snapchat-ghost"></i></a></li>
                            <li><a href="https://twitter.com/alasirirec?t=HMloYUrCPj-KuejM2i1m3Q&s=09"
                                    target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/p/Cfkp5OFI5dU/?igshid=YmMyMTA2M2Y="
                                    target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </footer>
    </div>

    <script src='https://unpkg.com/swiper@8/swiper-bundle.min.js?ver=1.0.0' id='mechalab-swiper-js'></script>
    <script src='https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js?ver=1.0.0' id='mechalab-fancybox-js'>
    </script>
    <script src='{{ asset('assets/js/bootstrap.bundle.min.js') }}' id='mechalab-bootstrap-js'></script>
    <script src='{{ asset('assets/js/script.js') }}' id='mechalab-script-js'></script>

</body>

<script>
    'undefined' === typeof _trfq || (window._trfq = []);
    'undefined' === typeof _trfd && (window._trfd = []), _trfd.push({
        'tccl.baseHost': 'secureserver.net'
    }), _trfd.push({
        'ap': 'cpsh-oh'
    }, {
        'server': 'p3plzcpnl485505'
    }, {
        'id': '8730913'
    }) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.
</script>
<script src='https://img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>

</html>
