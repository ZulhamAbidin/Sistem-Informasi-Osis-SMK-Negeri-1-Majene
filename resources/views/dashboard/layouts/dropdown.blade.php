<div class="intro-x dropdown w-8 h-8 hidden sm:flex">
    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
        aria-expanded="false" data-tw-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="user" data-lucide="user"
            class="lucide lucide-user block mx-auto">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
        </svg>
    </div>
    <div class="dropdown-menu w-fit">
        <ul class="dropdown-content bg-primary text-white">
            <li class="p-2">
                <div class="font-medium">@auth
                    {{ auth()->user()->name }}
                    @endauth</div>
                <div class="text-xs text-white/70 mt-0.5">Admin</div>
            </li>
            <li>
                <hr class="dropdown-divider border-white/[0.08]">
            </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item hover:bg-white/5">
                        Logout
                       <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="log-out" data-lucide="log-out"
                        class="ml-4 lucide lucide-log-out block mx-auto">
                        <path d="M9 21H5a2 2 0 01-2-2V5a2 2 0 012-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg> 
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>