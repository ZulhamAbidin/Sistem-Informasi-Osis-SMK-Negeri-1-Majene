<div class="dropdown inline-block" data-tw-placement="bottom">
    <button class="dropdown-toggle text-white mr-1 mb-2" aria-expanded="false" data-tw-toggle="dropdown">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="users"
            data-lucide="users" class="lucide lucide-users block mx-auto">
            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
            <path d="M16 3.13a4 4 0 010 7.75"></path>
        </svg>
    </button>

    <div class="dropdown-menu w-40">
        <ul class="dropdown-content">
            <li>
                @auth <a class="dropdown-item" href="/dashboard"> Dashboard</a>
            </li>

            <li>
                <form action="/logout" method="post" class=""> @csrf
                    <button type="submit" class="dropdown-item">Log Out</button>
                </form>
            </li>

            <li> @else <a href="/login" class="dropdown-item{{ $judul === 'Login' ? 'active' : '' }}"> Login</a>
                @endauth</li>

        </ul>
    </div>

</div>