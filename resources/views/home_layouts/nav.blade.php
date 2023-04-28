
    <nav class="absolute w-full z-20 top-0 left-0 border-b">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="{{ asset('assets/image/osis.svg') }}" class="h-8 mr-3" alt="Flowbite Logo">
                <img src="{{ asset('assets/image/smk.jpeg') }}" class="h-8 mr-3 bg-transparent" alt="Flowbite Logo">
                <span class="self-center text-2xl font-semibold whitespace-nowrap "></span>
            </a>


            <div class="flex md:order-2">

                @auth

                    <a href="/dashboard" type=""
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center 
                        mr-3 md:mr-0 ">Dashboard
                    </a>

                @else

                    <a href="/login" type="" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center 
                        mr-3 md:mr-0 ">Login
                    </a>

                @endauth
                
                <button data-collapse-toggle="navbar-sticky" type=""
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 {{ Request::is('/') ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0'  }} "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/blogs"
                            class="block py-2 pl-3 pr-4 {{ Request::is('blogs') ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0'  }} ">Postingan</a>
                    </li>
                    <li>
                        <a href="/welcome"
                            class="block py-2 pl-3 pr-4 {{ Request::is('welcome') ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0'  }}">Struktur</a>
                    </li>
                    {{-- <li>
                        <a href="/about"
                            class="block py-2 pl-3 pr-4 {{ Request::is('about') ? 'text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0' : 'text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0'  }}">Tentang
                            Kami</a>
                    </li> --}}
                    <li>
                        <a href="https://www.instagram.com/osissmkn1mjene"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Ikuti
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

