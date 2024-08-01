@php use Illuminate\Support\Facades\Auth; @endphp
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
                        Login
                    </a>
                    <a class="btn {{ request()->is('register') ? 'btn-info' : 'btn-secondary' }}" href="/register">
                        Register
                    </a>
                </div>
            @endguest
            @auth()
                <div class="hstack gap-2 gap-md-4">
                    @php
                        $user = Auth::user();
                        $firstName = $user->first_name;
                    @endphp
                    <b class="text-light">Bem vindo {{ $firstName }}</b>
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="text-danger btn">
                            <b>Sair</b>
                        </button>
                    </form>
                </div>
            @endauth
        </div>
    </div>
</header>
