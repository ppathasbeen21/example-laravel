<header class="bg-dark">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <ul class="nav gap-2 py-2">
                <li class="nav-item">
                    <a class="-nav-link btn {{ request()->is('/') ? 'btn-warning' : 'btn-secondary' }}" aria-current="page" href="/">
                        home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="-nav-link btn {{ request()->is('jobs') ? 'btn-warning' : 'btn-secondary' }}" href="/jobs">
                        jobs
                    </a>
                </li>
                <li class="nav-item">
                    <a class="-nav-link btn {{ request()->is('about') ? 'btn-warning' : 'btn-secondary' }}" href="/about">
                        about
                    </a>
                </li>
                <li class="nav-item">
                    <a class="-nav-link btn {{ request()->is('contact') ? 'btn-warning' : 'btn-secondary' }}" href="/contact">
                        contact
                    </a>
                </li>
            </ul>
            @guest()
                <div class="hstack gap-2">
                    <a class="btn {{ request()->is('login') ? 'btn-info' : 'btn-primary' }}" href="/login">
                        login
                    </a>
                    <a class="btn {{ request()->is('register') ? 'btn-info' : 'btn-primary' }}" href="/register">
                        Register
                    </a>
                </div>
            @endguest
        </div>
    </div>
</header>
