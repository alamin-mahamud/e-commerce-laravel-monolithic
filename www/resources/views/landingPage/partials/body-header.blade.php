<header class="with-background">
    <div class="top-nav container">
        <div class="top-nav-left">
            <div class="logo">Ecommerce</div>
            {{ menu('main', 'partials.menus.main') }}
        </div>
        <div class="top-nav-right">
            @include('partials.menus.main-right')
        </div>
    </div>
    <!-- end top-nav -->

    <div class="hero container">
        <div class="hero-copy">
            <h1>Laravel Ecommerce Demo</h1>
            <p>Includes multiple products, categories, a shopping cart and a checkout system with Stripe integration.</p>
            <div class="hero-buttons">
                <a href="https://www.youtube.com/playlist?list=PLEhEHUEU3x5oPTli631ZX9cxl6cU_sDaR" class="button button-white">Screencasts</a>
                <a href="https://github.com/alamin-mahamud/e-commerce-laravel-monolithic" class="button button-white">GitHub</a>
            </div>
        </div>
        <!-- end hero-copy -->

        <div class="hero-image">
            <img src="img/macbook-pro-laravel.png" alt="hero image">
        </div>
        <!-- end hero-image -->
    </div>
    <!-- end hero -->
</header>
