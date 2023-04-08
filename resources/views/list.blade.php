<!DOCTYPE html>
<html lang="en" class="a0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>POSTINGAN</title>
    {{-- <link rel="shortcut icon" href="{{ asset('home/images/favicon.png')}}" type="image/x-icon" /> --}}
    <link rel="stylesheet" href="{{ asset('home/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('home/css/tailwind.css')}}" />
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <style>
        .colum {
            float: left;
            width: 33.33%;
            padding: 5px;
        }
    </style>

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
                                        <a href="https://www.instagram.com/osissmkn1mjene/"
                                            class="menu-scroll aH text- :aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP lg:aQ xl:aR">
                                            Ikuti kami
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

        <section class="a1I[120px] a1J[120px]">
            <div class="aa">
                <div class="a8 a1K ab[-16px] a1x">

                    @foreach ($blogs->skip(0) as $blog)
                    <div class="a7 md:aU/3 lg:a1_/2 xl:a1_/3 ae">
                        <div class="ad aw :av a33 a13 a2p a1V wow fadeInUp" data-wow-delay=".1s">
                            <a href="blog-details.html" class="a7 ah ad">
                                @if ($blog->image)
                                <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->category->name }}"
                                    class="a7" />
                                @else
                                <img src="http://source.unsplash.com/500x400?{{ $blog->category->name }}" class="a7"
                                    alt="{{ $blog->category->name }}">
                                @endif
                            </a>
                            <div class="a36 sm:a2Y md:ai md:az lg:a2Y xl:ai xl:a37 2xl:a2Y">
                                <h3>
                                    <a href="/blogs/{{ $blog->slug }}"
                                        class="a1g a1A :aI a27 sm:a2u ah a1Q hover:a1W :hover:a1W">
                                        {{ $blog->title }}
                                    </a>
                                </h3>
                                <p class="aH a1S a1R a38 a2E a2B a2z a2M :a2o :a2M">
                                    {{ $blog->excerpt }}
                                </p>

                                <div class="a8 a9">
                                    <div class="a8 a9 a39 a2O xl:a3a 2xl:a39 xl:a2A 2xl:a2O a3b a2z a2M :a2o :a2M">
                                        <div class="aB[40px] a7 at[40px] a1w a2p a2G">
                                            <img src="{{ asset('assets/image/osis.svg') }}" alt="author" class="a7" />
                                        </div>
                                        <div class="a7">
                                            <h4 class="a1b a1R a1h :aI a2K">
                                                By
                                                <a href="/authors/{{ $blog->author->username }}"
                                                    class="a1h :aI hover:a1W :hover:a1W">
                                                    {{ $blog->author->name }}
                                                </a>
                                            </h4>
                                            <p class="a3c a1S">Admin</p>
                                        </div>
                                    </div>
                                    <div class="a22">
                                        <h4 class="a1b a1R a1h :aI a2K">Date</h4>
                                        <p class="a3c a1S">{{ $blog->created_at->diffForHumans() }}</p>
                                        <p class="a3c a1S">di {{ $blog->category->slug }}</p>
                                    </div>
                                </div>

                                <br>

                               <a href="/blogs/{{ $blog->slug }}" class=" a7 a8 a9 a1x aH a1R aI a1k a3q a1mhover:a1n hover:a2i a1p a1a a2j a13 ">Lihat Detail</a>

                            </div>
                        </div>
                    </div>
                    @endforeach

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