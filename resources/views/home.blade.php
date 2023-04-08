 <!DOCTYPE html>
<html lang="en" class="a0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HOME</title>
    <link rel="shortcut icon" href="{{ asset('home/images/favicon.png')}}" type="image/x-icon" />
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

<body class="">

    <header class="header a2 a3 a4 a5 a6 a7 a8 a9">
        <div class="aa">
            <div class="a8 ab[-16px] a9 ac ad">
                <div class="ae af ag">
                    <div class="colum"><img src="{{ asset('assets/image/osis.svg') }}" class="" style="width : 40px; background-color: white" alt=""></div>
                    <div class="colum"><img src="{{ asset('assets/image/smk.jpeg') }}" class="" style="width : 50px; background-color: white" alt=""></div>
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
                            <button type="submit" class="aj md:ah aH a1g aI a1k a1i a1l md:a1m lg:az xl:a1m hover:a1n hover:a1o a13 a1p a1q a1a">Log Out</button>
                        </form>

                        @else <a href="/login" class="aj md:ah aH a1g aI a1k a1i a1l md:a1m lg:az xl:a1m hover:a1n hover:a1o a13 a1p a1q a1a{{ $judul === 'Login' ? 'active' : '' }}"> Login</a>
                        @endauth</li>

                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="home"
        class="ad a1H a1I[120px] a1J[110px] md:a1I[150px] md:a1J[120px] xl:a1I[180px] xl:a1J[160px] 2xl:a1I[210px] 2xl:a1J[200px]">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 ae">
                    <div class="a1L aB[570px] a1M wow fadeInUp" data-wow-delay=".2s">
                        <h1 class="a1A :aI a1g a1O sm:a1P md:a3D a2D sm:a2D md:a2D a2v">
                            SELAMAT DATANG
                        </h1>
                        <p class="a1R a1T md:a27 a1U md:a1U a1S :aI :a3E a2s">
                           Portal Berita OSIS SMK Negeri 1 Majene
                        </p>
                        <div class="a8 a9 a1x">
                            <a href="/blogs" class="aH a2P aI a1k a3q a1l hover:a2i a3F a13 a1p a1a a2j">
                                Postingan
                            </a>
                            <a href="/about"
                                class="aH a2P a1A a1 a29 :aI :aw :a29 a3q a1l hover:a3G :hover:a3G a3F a13 a1p a1a a2j">
                                Profile Kami
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="a3 a4 a_ a1Y[-1]">
            <svg width="450" height="556" viewBox="0 0 450 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="277" cy="63" r="225" fill="url(#paint0_linear_25:217)" />
                <circle cx="17.9997" cy="182" r="18" fill="url(#paint1_radial_25:217)" />
                <circle cx="76.9997" cy="288" r="34" fill="url(#paint2_radial_25:217)" />
                <circle cx="325.486" cy="302.87" r="180" transform="rotate(-37.6852 325.486 302.87)"
                    fill="url(#paint3_linear_25:217)" />
                <circle opacity="0.8" cx="184.521" cy="315.521" r="132.862" transform="rotate(114.874 184.521 315.521)"
                    stroke="url(#paint4_linear_25:217)" />
                <circle opacity="0.8" cx="356" cy="290" r="179.5" transform="rotate(-30 356 290)"
                    stroke="url(#paint5_linear_25:217)" />
                <circle opacity="0.8" cx="191.659" cy="302.659" r="133.362" transform="rotate(133.319 191.659 302.659)"
                    fill="url(#paint6_linear_25:217)" />
                <defs>
                    <linearGradient id="paint0_linear_25:217" x1="-54.5003" y1="-178" x2="222" y2="288"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <radialGradient id="paint1_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(17.9997 182) rotate(90) scale(18)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
                    </radialGradient>
                    <radialGradient id="paint2_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(76.9997 288) rotate(90) scale(34)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
                    </radialGradient>
                    <linearGradient id="paint3_linear_25:217" x1="226.775" y1="-66.1548" x2="292.157" y2="351.421"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:217" x1="184.521" y1="182.159" x2="184.521" y2="448.882"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_25:217" x1="356" y1="110" x2="356" y2="470"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_25:217" x1="118.524" y1="29.2497" x2="166.965" y2="338.63"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="a3 a1X a5 a1Y[-1]">
            <svg width="364" height="201" viewBox="0 0 364 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.88928 72.3303C33.6599 66.4798 101.397 64.9086 150.178 105.427C211.155 156.076 229.59 162.093 264.333 166.607C299.076 171.12 337.718 183.657 362.889 212.24"
                    stroke="url(#paint0_linear_25:218)" />
                <path
                    d="M-22.1107 72.3303C5.65989 66.4798 73.3965 64.9086 122.178 105.427C183.155 156.076 201.59 162.093 236.333 166.607C271.076 171.12 309.718 183.657 334.889 212.24"
                    stroke="url(#paint1_linear_25:218)" />
                <path
                    d="M-53.1107 72.3303C-25.3401 66.4798 42.3965 64.9086 91.1783 105.427C152.155 156.076 170.59 162.093 205.333 166.607C240.076 171.12 278.718 183.657 303.889 212.24"
                    stroke="url(#paint2_linear_25:218)" />
                <path
                    d="M-98.1618 65.0889C-68.1416 60.0601 4.73364 60.4882 56.0734 102.431C120.248 154.86 139.905 161.419 177.137 166.956C214.37 172.493 255.575 186.165 281.856 215.481"
                    stroke="url(#paint3_linear_25:218)" />
                <circle opacity="0.8" cx="214.505" cy="60.5054" r="49.7205" transform="rotate(-13.421 214.505 60.5054)"
                    stroke="url(#paint4_linear_25:218)" />
                <circle cx="220" cy="63" r="43" fill="url(#paint5_radial_25:218)" />
                <defs>
                    <linearGradient id="paint0_linear_25:218" x1="184.389" y1="69.2405" x2="184.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_25:218" x1="156.389" y1="69.2405" x2="156.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_25:218" x1="125.389" y1="69.2405" x2="125.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_25:218" x1="93.8507" y1="67.2674" x2="89.9278" y2="210.214"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:218" x1="214.505" y1="10.2849" x2="212.684" y2="99.5816"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <radialGradient id="paint5_radial_25:218" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(220 63) rotate(90) scale(43)">
                        <stop offset="0.145833" stop-color="white" stop-opacity="0" />
                        <stop offset="1" stop-color="white" stop-opacity="0.08" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
    </section>

    <footer class="ad a1H a1k a1Z a1I[] wow fadeInUp" data-wow-delay=".1s">
        
        <div class="ai a1k a29">
            <div class="aa">
                <p class="a1S :aI aH a1M">© Copyright 2023. All Rights Reserved by KKN PPL UNM & Osis SMK Negeri 1 Majene</p>
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



