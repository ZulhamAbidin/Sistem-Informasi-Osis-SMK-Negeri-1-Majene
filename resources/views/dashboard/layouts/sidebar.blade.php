<nav class="side-nav">
    <a href="" class="intro-x flex items-center pl-5 pt-4 mt-3">
        <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
        <span class="hidden xl:block text-white text-lg ml-3"> Dashboard </span>
    </a>
    <div class="side-nav__devider my-3"></div>
    <ul>
        <li>
            <a href="/" class="side-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user"
                    class="lucide lucide-user block mx-auto">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <div class="side-menu__title">
                    @auth {{ auth()->user()->name }} @endauth
                </div>
            </a>
        </li>

        <div class="side-nav__devider my-3"></div>


        <li>
            <a href="/" class="side-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="home" data-lucide="home" class="lucide lucide-home block mx-auto">
                    <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <div class="side-menu__title">
                    Halaman Utama
                </div>
            </a>
        </li>
       
        <li>
            <a href="/dashboard" class="side-menu {{ Request::is('dashboard') ? 'side-menu--active' : ''  }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="inbox" data-lucide="inbox" class="lucide lucide-inbox block mx-auto">
                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                    <path
                        d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z">
                    </path>
                </svg>
                <div class="side-menu__title">
                    Dashboard
                </div>
            </a>
        </li>

        <div class="side-nav__devider my-3"></div>
        
        <li>
            <a href="/dashboard/blogs" class="side-menu {{ Request::is('dashboard/blogs') ? 'side-menu--active' : ''  }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="image" data-lucide="image" class="lucide lucide-image block mx-auto">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                    <polyline points="21 15 16 10 5 21"></polyline>
                </svg>
                <div class="side-menu__title">
                    Lihat Postingan

                </div>
            </a>
        </li>
        
        <li>
            <a href="/dashboard/blogs/create" class="side-menu {{ Request::is('dashboard/blogs/create') ? 'side-menu--active' : ''  }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="edit" data-lucide="edit" class="lucide lucide-edit block mx-auto">
                    <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                    <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                </svg>
                <div class="side-menu__title">
                    Buat Postingan
                </div>
            </a>
        </li>


        <div class="side-nav__devider my-3"></div>

            <li>
                <a href="/dashboard/categories/"
                    class="side-menu {{ Request::is('dashboard/categories') ? 'side-menu--active' : ''  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="map-pin"
                        data-lucide="map-pin" class="lucide lucide-map-pin block mx-auto">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <div class="side-menu__title">
                        Daftar Lokasi
                    </div>
                </a>
            </li>
        
            <li>
                <a href="/dashboard/categories/create"
                    class="side-menu {{ Request::is('dashboard/categories/create') ? 'side-menu--active' : ''  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                        data-lucide="edit" class="lucide lucide-edit block mx-auto">
                        <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                        <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                    </svg>
                    <div class="side-menu__title">
                        Tambah Lokasi
                    </div>
                </a>
            </li>

            @can('admin')

            <div class="side-nav__devider my-3"></div>

            <li>
                <a href="/dashboard/user/"
                    class="side-menu {{ Request::is('dashboard/user') ? 'side-menu--active' : ''  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="users"
                        data-lucide="users" class="lucide lucide-users block mx-auto">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 010 7.75"></path>
                    </svg>
                    <div class="side-menu__title">
                        Lihat User
                    </div>
                </a>
            </li>

            <li>
                <a href="/register"
                    class="side-menu {{ Request::is('register') ? 'side-menu--active' : ''  }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user-plus" data-lucide="user-plus"
                        class="lucide lucide-user-plus block mx-auto">
                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    <div class="side-menu__title">
                        Tambah User
                    </div>
                </a>
            </li>

        @endcan

        <div class="side-nav__devider my-3"></div>

        <li>
            <a href="/about" class="side-menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user"
                    data-lucide="user" class="lucide lucide-user block mx-auto">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <div class="side-menu__title">
                    Help
                </div>
            </a>
        </li>
        

        <li>
            <form action="/logout" method="post" class="side-menu flex">
                @csrf
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    icon-name="log-out" data-lucide="log-out" class="lucide lucide-log-out">
                    <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <button type="submit" class="ml-2 hover:bg-white/5">
                    Logout
                </button>
            </form>
        </li>

        

    </ul>
</nav>