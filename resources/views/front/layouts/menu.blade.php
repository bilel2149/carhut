<!-- Main Menu -->
<nav class="main-menu">
    <div class="navbar-header">
        <!-- Toggle Button -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <div class="navbar-collapse collapse clearfix">
        <ul class="navigation clearfix">
            <li class="{{ Request::is('/') ? 'current' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="{{ route('home') }}/page/about-us">Qui somme nous</a></li>
            <li class="dropdown {{ Request::is('services.front') ? 'current' : '' }}"><a href="#">Services</a>
                <ul>
                    <?php $services = Helper::get_services(); ?>
                    <?php foreach ($services as $service): ?>
                        <li><a href="{{ route('home') }}/service/{{ $service->service_slug }}">{{ $service->service_title }}</a>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="{{ Request::is('shop') ? 'current' : '' }}"><a href="{{ route('shop') }}">Boutique</a></li>
            <li class="{{ Request::is('articles') ? 'current' : '' }}"><a href="{{ route('articles.index') }}">Actualités</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            @if (Auth::guest())
            <li><a href="{{ route('login') }}">Connexion</a></li>
            <li><a href="{{ route('register') }}">Inscription</a></li>
            @else
            <li class="dropdown">
                <a href="#">
                    {{ Auth::user()->name }} {{ Auth::user()->surname }} <span class="caret"></span>
                </a>

                <ul>
                    <li>
                      <a href="{{ route('profile') }}">Profile</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">

                                    Déconnexion
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        </ul>
    </div>
</nav>
<!-- Main Menu End-->
