<header class="bg-dark">
    <div class="container">
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
    </div>
</header>
