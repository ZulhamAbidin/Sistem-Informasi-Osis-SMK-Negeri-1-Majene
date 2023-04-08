<!DOCTYPE html>
<html lang="en" class="a0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startup Tailwind CSS Template</title>
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://saas-tailwind.preview.uideck.com/" />
    <meta property="twitter:title" content="Startup Tailwind | SaaS Web Template for Tailwind CSS" />
    <meta property="twitter:description"
        content="Startup Tailwind is a complete Tailwind CSS template crafted specially for SaaS, Software Mobile App and Web App Sites. Comes with all essential components and pages you need to kickstart your SaaS websites." />
    <meta property="twitter:image" content="" />
    <link rel="shortcut icon" href="{{ asset('home/images/favicon.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('home/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/tailwind.css')}}" />
    <script src="js/wow.min.js"></script>

    <style>
        .colum {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
    </style>

    <script>
        new WOW().init();
    </script>

   

</head>

    <body class=":a1">

        <header class="header a2 a3 a4 a5 a6 a7 a8 a9">
            <div class="aa">
                <div class="a8 ab[-16px] a9 ac ad">
                    <div class="ae af ag">
                        <div class="ae af ag">
                            <div class="colum"><img src="{{ asset('assets/image/osis.svg') }}" class=""
                                    style="width : 40px; background-color: white" alt=""></div>
                            <div class="colum"><img src="{{ asset('assets/image/smk.jpeg') }}" class=""
                                    style="width : 50px; background-color: white" alt=""></div>
                        </div>
                    </div>
                    <div class="a8 ae ac a9 a7">
                        <div>
                            <button id="navbarToggler" aria-label="Mobile Menu"
                                class="ah a3 ak al/2 am[-50%] lg:aj focus:an ao ap aq[6px] ar">
                                <span class="ad as[30px] at[2px] au[6px] ah av :aw"></span>
                                <span class="ad as[30px] at[2px] au[6px] ah av :aw"></span>
                                <span class="ad as[30px] at[2px] au[6px] ah av :aw"></span>
                            </button>
                            <nav id="navbarCollapse"
                                class="a3 ax lg:ay lg:ae xl:az aw :av lg::a2 lg:a2 aA ar aB[250px] a7 lg:ag lg:a7 ak aC aj lg:ah lg:aD lg:aE">
                                <ul class="aF lg:a8">

                                    <li class="ad aG">
                                        <a href="/"
                                            class="menu-scroll aH text- :aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP">
                                            Home
                                        </a>
                                    </li>
                                    <li class="ad aG">
                                        <a href="/blogs"
                                            class="menu-scroll aH text- :aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP lg:aQ xl:aR">
                                            Postingan
                                        </a>
                                    </li>
                                    <li class="ad aG">
                                        <a href="/about"
                                            class="menu-scroll aH text- :aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP lg:aQ xl:aR">
                                            About Me
                                        </a>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <div class="a8 a1d a9 a1e lg:a1f">

                            @auth
                            <a href="/dashboard" class="aj md:ah aH a1g a1h :aI hover:aJ a1i a1j">
                                Dashboard
                            </a>
                            <form action="/logout" method="post" class=""> @csrf
                                <button type="submit"
                                    class="aj md:ah aH a1g aI a1k a1i a1l md:a1m lg:az xl:a1m hover:a1n hover:a1o a13 a1p a1q a1a">Log
                                    Out</button>
                            </form>

                            @else <a href="/login"
                                class="aj md:ah aH a1g aI a1k a1i a1l md:a1m lg:az xl:a1m hover:a1n hover:a1o a13 a1p a1q a1a{{ $judul === 'Login' ? 'active' : '' }}">
                                Login</a>
                            @endauth</li>

                           
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="a1I[180px] a1J[120px]">
            <div class="aa">
                <div class="a8 a1K ab[-16px]">
                    <div class="a7 lg:a2q/12 ae">
                        <div>
                            <h2 class="a1g a1A :aI a1O sm:a1P a2D sm:a2D a23  :text-slate-50">{{ $blogs->title }}</h2>
                            <div class="a8 a1K a9 ac a2L a1V a2B a2z a2M :a2o :a2M ">
                                <div class="a8 a1K a9">
                                    <div class="a8 a9 a2N a2v">
                                        <div class="aB[40px] a7 at[40px] a1w a2p a2G ">
                                            <img src="{{ asset('assets/image/avatar2.jpg') }}" alt="author" class="a7" /></div>
                                        <div class="a7">
                                            <h4 class="aH a1R a1S a2K ">
                                                By <a href="javascript:void(0)" class="a1S hover:a1W"> {{ $blogs->author->name}}</a></h4>
                                        </div>
                                    </div>
                                    <div class="a8 a9 a2v">
                                        <p class="a8 a9 aH a1S a1R a2O ">
                                            <span class="a2A"><svg width="15" height="15" viewBox="0 0 15 15" class="a26">
                                                    <path d="M3.89531 8.67529H3.10666C2.96327 8.67529 2.86768 8.77089 2.86768 8.91428V9.67904C2.86768 9.82243 2.96327 9.91802 3.10666 9.91802H3.89531C4.03871 9.91802 4.1343 9.82243 4.1343 9.67904V8.91428C4.1343 8.77089 4.03871 8.67529 3.89531 8.67529Z" />
                                                    <path d="M6.429 8.67529H5.64035C5.49696 8.67529 5.40137 8.77089 5.40137 8.91428V9.67904C5.40137 9.82243 5.49696 9.91802 5.64035 9.91802H6.429C6.57239 9.91802 6.66799 9.82243 6.66799 9.67904V8.91428C6.66799 8.77089 6.5485 8.67529 6.429 8.67529Z" />
                                                    <path d="M8.93828 8.67529H8.14963C8.00624 8.67529 7.91064 8.77089 7.91064 8.91428V9.67904C7.91064 9.82243 8.00624 9.91802 8.14963 9.91802H8.93828C9.08167 9.91802 9.17727 9.82243 9.17727 9.67904V8.91428C9.17727 8.77089 9.08167 8.67529 8.93828 8.67529Z" />
                                                    <path d="M11.4715 8.67529H10.6828C10.5394 8.67529 10.4438 8.77089 10.4438 8.91428V9.67904C10.4438 9.82243 10.5394 9.91802 10.6828 9.91802H11.4715C11.6149 9.91802 11.7105 9.82243 11.7105 9.67904V8.91428C11.7105 8.77089 11.591 8.67529 11.4715 8.67529Z" />
                                                    <path d="M3.89531 11.1606H3.10666C2.96327 11.1606 2.86768 11.2562 2.86768 11.3996V12.1644C2.86768 12.3078 2.96327 12.4034 3.10666 12.4034H3.89531C4.03871 12.4034 4.1343 12.3078 4.1343 12.1644V11.3996C4.1343 11.2562 4.03871 11.1606 3.89531 11.1606Z" />
                                                    <path d="M6.429 11.1606H5.64035C5.49696 11.1606 5.40137 11.2562 5.40137 11.3996V12.1644C5.40137 12.3078 5.49696 12.4034 5.64035 12.4034H6.429C6.57239 12.4034 6.66799 12.3078 6.66799 12.1644V11.3996C6.66799 11.2562 6.5485 11.1606 6.429 11.1606Z" />
                                                    <path d="M8.93828 11.1606H8.14963C8.00624 11.1606 7.91064 11.2562 7.91064 11.3996V12.1644C7.91064 12.3078 8.00624 12.4034 8.14963 12.4034H8.93828C9.08167 12.4034 9.17727 12.3078 9.17727 12.1644V11.3996C9.17727 11.2562 9.08167 11.1606 8.93828 11.1606Z" />
                                                    <path d="M11.4715 11.1606H10.6828C10.5394 11.1606 10.4438 11.2562 10.4438 11.3996V12.1644C10.4438 12.3078 10.5394 12.4034 10.6828 12.4034H11.4715C11.6149 12.4034 11.7105 12.3078 11.7105 12.1644V11.3996C11.7105 11.2562 11.591 11.1606 11.4715 11.1606Z" />
                                                    <path d="M13.2637 3.3697H7.64754V2.58105C8.19721 2.43765 8.62738 1.91189 8.62738 1.31442C8.62738 0.597464 8.02992 0 7.28906 0C6.54821 0 5.95074 0.597464 5.95074 1.31442C5.95074 1.91189 6.35702 2.41376 6.93058 2.58105V3.3697H1.31442C0.597464 3.3697 0 3.96716 0 4.68412V13.2637C0 13.9807 0.597464 14.5781 1.31442 14.5781H13.2637C13.9807 14.5781 14.5781 13.9807 14.5781 13.2637V4.68412C14.5781 3.96716 13.9807 3.3697 13.2637 3.3697ZM6.6677 1.31442C6.6677 0.979841 6.93058 0.716957 7.28906 0.716957C7.62364 0.716957 7.91042 0.979841 7.91042 1.31442C7.91042 1.649 7.64754 1.91189 7.28906 1.91189C6.95448 1.91189 6.6677 1.6251 6.6677 1.31442ZM1.31442 4.08665H13.2637C13.5983 4.08665 13.8612 4.34954 13.8612 4.68412V6.45261H0.716957V4.68412C0.716957 4.34954 0.979841 4.08665 1.31442 4.08665ZM13.2637 13.8612H1.31442C0.979841 13.8612 0.716957 13.5983 0.716957 13.2637V7.16957H13.8612V13.2637C13.8612 13.5983 13.5983 13.8612 13.2637 13.8612Z" />
                                                    </svg></span>{{ $blogs->created_at->diffForHumans() }} </p>
                                    </div>
                                </div>
                                <div class="a2v"><span class="a1k a1w aM a9 a1x aK ae a2P a1b aI ">  {{ $blogs->category->slug }} </span></div>
                            </div>
                            <div>
                                
                                <div class="a7 a1c a2p a1V">
                                     @if ($blogs->image)
                                        <img src="{{ asset('storage/' . $blogs->image) }}" alt="{{ $blogs->category->name }}"
                                            class="a7 a2Q a2R a2S">
                                        @else
                                        <img src="http://source.unsplash.com/1200x400?{{ $blogs->category->name }}"
                                            alt="{{ $blogs->category->name }}" class="a7 a2Q a2R a2S">
                                     @endif

                                     <div class="a1R a1S aH sm:a1T lg:aH xl:a1T sm:a1U lg:a1U xl:a1U a1U a23 isi">{!! $blogs->body !!}</div>
                                    </div>

                                

                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

     <footer class="ad a1H a1k a1Z a1I[] wow fadeInUp" data-wow-delay=".1s">
    
        <div class="ai a1k a29">
            <div class="aa">
                <p class="a1S :aI aH a1M">© Copyright 2023. All Rights Reserved by KKN PPL UNM & Osis SMK Negeri 1 Majene
                </p>
            </div>
        </div>
    
    
    </footer>

        <a href="javascript:void(0)"
            class="aj a9 a1x a1k aI a2c a2d a13 a2e a2f a2g a2h a1Y[999] hover:a1n hover:a2i a1p a1a a2j back-to-top a2k">
            <span class="a28 a2l a2m a2n a2o aZ a11[6px]"></span>
        </a>


        <script src="{{ asset('home/js/glightbox.min.js')}}"></script>
        <script src="{{ asset('home/js/main.js')}}"></script>
        <script>
            // ==== pricing plan toggler
                let togglePlan = document.querySelector("#togglePlan");
        
                document.querySelector(".monthly").addEventListener("click", () => {
                    togglePlan.checked = false;
                });
                document.querySelector(".yearly").addEventListener("click", () => {
                    togglePlan.checked = true;
                });
        
                // ==== for menu scroll
                const pageLink = document.querySelectorAll(".menu-scroll");
        
                pageLink.forEach((elem) => {
                    elem.addEventListener("click", (e) => {
                        e.preventDefault();
                        document.querySelector(elem.getAttribute("href")).scrollIntoView({
                            behavior: "smooth",
                            offsetTop: 1 - 60,
                        });
                    });
                });
        
                // section menu active
                function onScroll(event) {
                    const sections = document.querySelectorAll(".menu-scroll");
                    const scrollPos =
                        window.pageYOffset ||
                        document.documentElement.scrollTop ||
                        document.body.scrollTop;
        
                    for (let i = 0; i < sections.length; i++) {
                        const currLink = sections[i];
                        const val = currLink.getAttribute("href");
                        const refElement = document.querySelector(val);
                        const scrollTopMinus = scrollPos + 73;
                        if (
                            refElement.offsetTop <= scrollTopMinus &&
                            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                        ) {
                            document.querySelector(".menu-scroll").classList.remove("active");
                            currLink.classList.add("active");
                        } else {
                            currLink.classList.remove("active");
                        }
                    }
                }
        
                window.document.addEventListener("scroll", onScroll);
                GLightbox({
                    href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
                    type: "video",
                    source: "youtube",
                    width: 900,
                    autoplayVideos: true,
                });
        </script>

    </body>

</html>