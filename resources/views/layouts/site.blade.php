<!DOCTYPE html>
<html dir="ltr" lang="zh-tw">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="author" content="SemiColonWeb" />

        <!-- Stylesheets
	============================================= -->
        
        <link
            href="{{asset('https://fonts.googleapis.com/css?family=Poppins:300,400,400i,600,700|Open+Sans:300,400,600,700,800,900&display=swap')}}"
            rel="stylesheet"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{asset('css/bootstrap.css')}}"
            type="text/css"
        />
        <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
        <link
            rel="stylesheet"
            href="{{asset('css/dark.css')}}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{asset('css/swiper.css')}}"
            type="text/css"
        />

        <!-- Business Demo Specific Stylesheet -->
        <link
            rel="stylesheet"
            href="{{asset('demos/business/business.css')}}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{asset('demos/business/css/fonts.css')}}"
            type="text/css"
        />
        <!-- / -->

        <link
            rel="stylesheet"
            href="{{asset('css/font-icons.css')}}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{asset('css/animate.css')}}"
            type="text/css"
        />
        <link
            rel="stylesheet"
            href="{{asset('css/magnific-popup.css')}}"
            type="text/css"
        />

        <link
            rel="stylesheet"
            href="{{asset('one-page/css/et-line.css')}}"
            type="text/css"
        />

        <link
            rel="stylesheet"
            href="{{asset('css/custom.css')}}"
            type="text/css"
        />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Theme Color
	============================================= -->
        <link
            rel="stylesheet"
            href="{{asset('css/colors.php?color=59b6ac')}}"
            type="text/css"
        />

        <!-- Document Title
	============================================= -->
        <title>Business | Canvas</title>
    </head>

    <body class="stretched">
        <!-- Document Wrapper
	============================================= -->
        <div id="wrapper" class="clearfix">
            <!-- Header
		============================================= -->
            <header
                id="header"
                class="full-header transparent-header dark header-size-md"
                data-sticky-class="not-dark"
                data-responsive-class="not-dark"
                data-sticky-offset="full"
                data-sticky-offset-negative="80"
            >
                <div id="header-wrap">
                    <div class="container">
                        <div class="header-row">
                            <!-- Logo
						============================================= -->
                        
                            <div id="logo">
                                <a
                                href="{{asset('/')}}"
                                    class="standard-logo"
                                    data-dark-logo="{{asset('demos/business/images/1.svg')}}"
                                    ><img
                                        src="{{asset('demos/business/images/1.svg')}}"
                                        alt="Canvas Logo"
                                /></a>
                                <a
                                    href="{{asset('/')}}"
                                    class="retina-logo"
                                    data-dark-logo="demos/business/images/2.svg"
                                    ><img
                                        src="demos/business/images/1.svg"
                                        alt="Canvas Logo"
                                /></a>
                            </div>
                            <!-- #logo end -->

                            <div class="header-misc">
                                <!-- Top Search
							============================================= -->
                                <div id="top-search" class="header-misc-icon">
                                    <a href="#" id="top-search-trigger"
                                        ><i class="icon-line-search"></i
                                        ><i class="icon-line-cross"></i
                                    ></a>
                                </div>
                                <!-- #top-search end -->
                            </div>

                            <div id="primary-menu-trigger">
                                <svg class="svg-trigger" viewBox="0 0 100 100">
                                    <path
                                        d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"
                                    ></path>
                                    <path d="m 30,50 h 40"></path>
                                    <path
                                        d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"
                                    ></path>
                                </svg>
                            </div>

                            <!-- Primary Navigation
						============================================= -->
                            <nav class="primary-menu not-dark">
                                <ul class="menu-container">
                                    <li class="menu-item active">
                                        <a class="menu-link" href="{{asset('/')}}"
                                            ><div>首頁</div></a
                                        >
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{asset('/about')}}"
                                            ><div>Demo範例</div></a
                                        >
                                        <ul class="sub-menu-container">
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{asset('/about')}}"
                                                    ><div>
                                                        形象網站
                                                    </div></a
                                                >
                                            </li>
                                            <li class="menu-item">
                                                <a class="menu-link" href="{{asset('/about')}}"
                                                    ><div>
                                                        購物網站
                                                    </div></a
                                                >
                                            </li>
                                           
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{asset('/about')}}"
                                            ><div>價格方案</div></a
                                        >
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{asset('/about')}}"
                                            ><div>關於我們</div></a
                                        >
                                    </li>
                                    <li class="menu-item">
                                        <a class="menu-link" href="{{asset('/about')}}"
                                            ><div>聯絡我們</div></a
                                        >
                                    </li>
                                </ul>
                            </nav>
                            <!-- #primary-menu end -->

                            <form
                                class="top-search-form"
                                action="search.html"
                                method="get"
                            >
                                <input
                                    type="text"
                                    name="q"
                                    class="form-control"
                                    value=""
                                    placeholder="Type &amp; Hit Enter.."
                                    autocomplete="off"
                                />
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-wrap-clone"></div>
            </header>
            <!-- #header end -->

            <!-- Slider
		============================================= -->
            <section
                id="slider"
                class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header"
                data-loop="true"
            >
                <div class="slider-inner">
                    <div class="swiper-container swiper-parent">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide dark">
                                <div class="container">
                                    <div
                                        class="slider-caption slider-caption-center"
                                    >
                                        <div>
                                            <h2 class="font-primary nott">
                                                你的網站夠快嗎？
                                            </h2>
                                            <p
                                                class="fw-light font-primary d-none d-sm-block"
                                            >
                                                打造Google分數90分以上的網站
                                                
                                            </p>
                                            <a
                                                href="#"
                                                class="button button-rounded button-large nott ls0 font-primary"
                                                >了解更多</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide-bg"
                                    style="
                                        background-image: url('demos/business/images/slider/3.png');
                                    "
                                ></div>
                            </div>
                            <div class="swiper-slide dark">
                                <div class="container">
                                    <div
                                        class="slider-caption slider-caption-center"
                                    >
                                        <div>
                                            <h2 class="font-primary">
                                                幫您設計快速、有質感的網頁
                                            </h2>
                                            <p
                                                class="fw-light font-primary d-none d-sm-block"
                                            >
                                                
                                            </p>
                                            <a
                                                href="#"
                                                class="button button-rounded button-large nott ls0 font-primary"
                                                >了解更多</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide-bg"
                                    style="
                                        background-image: url('demos/business/images/slider/4.png');
                                    "
                                ></div>
                            </div>
                            <div class="swiper-slide dark">
                                <div class="container">
                                    <div
                                        class="slider-caption slider-caption-center"
                                    >
                                        <div>
                                            <h2 class="font-primary">
                                                網站架設交給順網科技，一條龍服務一次到位
                                            </h2>
                                            <p
                                                class="fw-light font-primary d-none d-sm-block"
                                            >
                                                
                                            </p>
                                            <a
                                                href="#"
                                                class="button button-rounded button-large nott ls0 font-primary"
                                                >聯絡我們</a
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="swiper-slide-bg"
                                    style="
                                        background-image: url('demos/business/images/slider/5.png');
                                    "
                                ></div>
                            </div>
                        </div>
                        <!-- Slider Arrows
					============================================= -->
                        <div class="slider-arrow-left" class="bg-transparent">
                            <i class="icon-line-arrow-left"></i>
                        </div>
                        <div class="slider-arrow-right" class="bg-transparent">
                            <i class="icon-line-arrow-right"></i>
                        </div>
                    </div>

                    <!-- Slider Mouse Icon
				============================================= -->
                    <a
                        href="#"
                        data-scrollto="#content"
                        data-offset="0"
                        class="dark one-page-arrow"
                        ><img
                            class="infinite animated fadeInDown"
                            src="demos/business/images/mouse.svg"
                            alt="Image"
                    /></a>
                </div>
            </section>

            <!-- Content
		============================================= -->
            
                         @yield('content')       
                   
            <!-- #content end -->

            <!-- Footer
		============================================= -->
            <footer
                id="footer"
                class="border-0"
                style="padding: 30px 0; background-color: #fff"
            >
                <div class="container clearfix">
                    <!-- Footer Widgets
				============================================= -->
                    <div class="footer-widgets-wrap">
                        <div class="row col-mb-50">
                            <div class="col-md-3">
                                <img
                                    src="demos/business/images/1.svg"
                                    alt="Image"
                                    height="100"
                                    style="margin-top: -30px"
                                />
                            </div>

                            <div class="col-md-9">
                                <div class="row col-mb-30">
                                    <div class="col-sm-6 col-lg-3">
                                        <div
                                            class="widget widget_links widget-li-noicon clearfix"
                                        >
                                            <h4>Hire</h4>
                                            <ul>
                                                <li>
                                                    <a href="#"
                                                        >Documentation</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Feedback</a>
                                                </li>
                                                <li><a href="#">Plugins</a></li>
                                                <li>
                                                    <a href="#"
                                                        >Support Forums</a
                                                    >
                                                </li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div
                                            class="widget widget_links widget-li-noicon clearfix"
                                        >
                                            <h4>Community</h4>
                                            <ul>
                                                <li>
                                                    <a href="#"
                                                        >Documentation</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Feedback</a>
                                                </li>
                                                <li><a href="#">Plugins</a></li>
                                                <li>
                                                    <a href="#"
                                                        >Support Forums</a
                                                    >
                                                </li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div
                                            class="widget widget_links widget-li-noicon clearfix"
                                        >
                                            <h4>Learn</h4>
                                            <ul>
                                                <li>
                                                    <a href="#"
                                                        >Documentation</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Feedback</a>
                                                </li>
                                                <li><a href="#">Plugins</a></li>
                                                <li>
                                                    <a href="#"
                                                        >Support Forums</a
                                                    >
                                                </li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-3">
                                        <div
                                            class="widget widget_links widget-li-noicon clearfix"
                                        >
                                            <h4>About</h4>
                                            <ul>
                                                <li>
                                                    <a href="#"
                                                        >Documentation</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="#">Feedback</a>
                                                </li>
                                                <li><a href="#">Plugins</a></li>
                                                <li>
                                                    <a href="#"
                                                        >Support Forums</a
                                                    >
                                                </li>
                                                <li><a href="#">Themes</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="line line-sm"></div>

                                <div
                                    class="row justify-content-between col-mb-30"
                                >
                                    <div
                                        class="col-12 col-md-auto text-center text-md-start"
                                    >
                                        <small
                                            class="fw-light"
                                            style="color: #aaa"
                                            >Copyrights &copy; 2022 All Rights
                                            Reserved by 順網科技</small
                                        >
                                    </div>

                                    <div
                                        class="col-12 col-md-auto text-center text-md-end"
                                    >
                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-facebook"
                                        >
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>

                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-twitter"
                                        >
                                            <i class="icon-twitter"></i>
                                            <i class="icon-twitter"></i>
                                        </a>

                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-gplus"
                                        >
                                            <i class="icon-gplus"></i>
                                            <i class="icon-gplus"></i>
                                        </a>

                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-pinterest"
                                        >
                                            <i class="icon-pinterest"></i>
                                            <i class="icon-pinterest"></i>
                                        </a>

                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-vimeo"
                                        >
                                            <i class="icon-vimeo"></i>
                                            <i class="icon-vimeo"></i>
                                        </a>

                                        <a
                                            href="#"
                                            class="social-icon inline-block si-mini si-rounded si-colored si-instagram"
                                        >
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- #footer end -->
        </div>
        <!-- #wrapper end -->

        <!-- Go To Top
	============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- JavaScripts
	============================================= -->
        <script src="js/jquery.js"></script>
        <script src="js/plugins.min.js"></script>

        <!-- Footer Scripts
	============================================= -->
        <script src="js/functions.js"></script>

        <script>
            jQuery(window).on("pluginCarouselReady", function () {
                $("#oc-features").owlCarousel({
                    items: 1,
                    margin: 60,
                    nav: true,
                    navText: [
                        '<i class="icon-line-arrow-left"></i>',
                        '<i class="icon-line-arrow-right"></i>',
                    ],
                    dots: false,
                    stagePadding: 30,
                    responsive: {
                        768: { items: 2 },
                        1200: { stagePadding: 200 },
                    },
                });
            });
        </script>
    </body>
</html>