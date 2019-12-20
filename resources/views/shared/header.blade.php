<header class="container" id="main-header">
        <a id="logo-header" href="#">
            <span class="site-name">JUNTAPP</span>
        </a>
        <nav>
            <ul>
                @auth ('admin')
                    <li><a href="/admin/">Inicio</a></li>
                @endauth

                @auth ('user')
                    <li><a href="/vecino/">Inicio</a></li>
                @endguest

                @auth ('admin')
                    <li><a href="/admin/vecinos">Vecinos</a></li>
                    <li><a href="/admin/actividades">Actividades</a>
                @endauth

                @guest
                    <li><a href="/noticias">Noticias</a></li>
                    <li><a href="/acerca-de">Acerca de</a></li>
                @endguest

                @auth
                    <li><a href="{{ route('logout') }}">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                    </a></li>
                @endauth

                @guest
                    <li><a href="{{ route('login') }}">
                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                    </a></li>
                @endguest
            </ul>
        </nav><!-- / nav -->
</header>
