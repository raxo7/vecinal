<header class="container" id="main-header">
        <a id="logo-header" href="#">
            <span class="site-name">JUNTAPP</span>
        </a> <!-- / #logo-header -->
        <a class="right-area src-btn" href="#" >
            <i class="active src-icn ion-search"></i>
            <i class="close-icn ion-close"></i>
        </a>
        <div class="src-form">
            <form>
                <input type="text" placeholder="Search here">
                <button type="submit"><i class="ion-search"></i></button>
            </form>
        </div><!-- src-form -->
        <nav>
            <ul>
                <li><a href="/">Inicio</a></li>
                @auth
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
            </ul>
        </nav><!-- / nav -->
</header>
