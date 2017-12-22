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
            <li class="dropdown"><a href="about-us.html">About Us</a>
                <ul>
                    <li><a href="about-us.html">About Us</a>
                    </li>
                    <li><a href="our-history.html">Our History</a>
                    </li>
                    <li><a href="our-team.html">Our Team</a>
                    </li>
                    <li><a href="pricing.html">pricing</a>
                    </li>
                    <li><a href="error-page.html">404 Page</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Services</a>
                <ul>
                    <li><a href="services.html">Our Services</a>
                    </li>
                    <li><a href="service-single-1.html">Break Checkup</a>
                    </li>
                    <li><a href="service-single-2.html">Inspections service</a>
                    </li>
                    <li><a href="service-single-3.html">Engine Repair</a>
                    </li>
                    <li><a href="service-single-4.html">Car Cleaning</a>
                    </li>
                    <li><a href="service-single-5.html">Battery restore</a>
                    </li>
                    <li><a href="service-single-6.html">Engine Upgrades</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Portfolio</a>
                <ul>
                    <li><a href="portfolio.html">Our Portfolio</a>
                    </li>
                    <li><a href="portfolio-2.html">Portfolio style two</a>
                    </li>
                    <li><a href="portfolio-3.html">Portfolio style Three</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown"><a href="#">Shop</a>
                <ul>
                    <li><a href="shop.html">Our Shop</a>
                    </li>
                    <li><a href="shop-single.html">Item Details</a>
                    </li>
                    <li><a href="shopping-cart.html">Shopping Cart</a>
                    </li>
                    <li><a href="checkout.html">Checkout</a>
                    </li>
                </ul>
            </li>
            <li class="{{ Request::is('articles') ? 'current' : '' }}"><a href="{{ route('articles.index') }}">Actualités</a></li>
            <li><a href="contact.html">Contact Us</a>
            </li>
        </ul>
    </div>
</nav>
<!-- Main Menu End-->
