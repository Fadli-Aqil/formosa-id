<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta name="title" content="PT. Formosa Ingredient Factory Tbk">
    <meta name="description" content="Producer of high quality international standard Boba, Jelly, Sauce, Syrup, and Drinking Powders">
    <meta name="keyword" content="formosa, bobaking, pt formosa, foromosa factory, formosa.id">

    <meta property="og:type" content="website">
    <meta property="og:url" content="https://formosa.id/">
    <meta property="og:title" content="PT. Formosa Ingredient Factory Tbk">
    <meta property="og:description" content="Producer of high quality international standard Boba, Jelly, Sauce, Syrup, and Drinking Powders">
    <meta property="og:image" content="{{ asset('assets/img/hero-bg.webp') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://formosa.id/">
    <meta property="twitter:title" content="PT. Formosa Ingredient Factory Tbk">
    <meta property="twitter:description"
        content="Producer of high quality international standard Boba, Jelly, Sauce, Syrup, and Drinking Powders">
    <meta property="twitter:image" content="{{ asset('assets/img/hero-bg.webp') }}">
 
    <link href="{{ asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Company Name: PT. Formosa Ingredient Factory Tbk
  * Company URL: https://formosa.id/
  * Author: Dlyyy's
    ======================================================== -->
</head>

<body>
    <header id="header" class="header fixed-top">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <a href="@if(Route::current()->getName() == "index") /#hero @else / @endif" class="logo d-flex align-items-center scrollto">
                <img src="assets/img/logo.png" alt="PT. Formosa Ingredient Factory Tbk.">
            </a>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto @if(Route::current()->getName() == 'index') active @endif" href="@if(Route::current()->getName() == "index") /#hero @else / @endif">Home</a></li>
                    <li class="dropdown"><a href="#"><span>Our Company</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a class="nav-link scrollto" href="/#about">About Us</a></li>
                            <li><a class="nav-link scrollto" href="/#team">Company Management</a></li>
                        </ul>
                    </li>
                    <li><a href="/catalogue" @if(Route::current()->getName() == 'catalogue') class="active" @endif>Catalogue</a></li>
                    <li class="dropdown"><a href="#" @if(Route::current()->getName() == 'tips-recipes.*') class="active" @endif><span>Tips & Recipes</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="/tips-recipes/gallery" @if(Route::current()->getName() == 'tips-recipes.gallery') class="active" @endif>Gallery</a></li>
                            <li><a href="/tips-recipes/recipes-video" @if(Route::current()->getName() == 'tips-recipes.recipes-video') class="active" @endif>Recipes Video</a></li>
                            <li><a href="/tips-recipes/tips" @if(Route::current()->getName() == 'tips-recipes.tips') class="active" @endif>Tips</a></li>
                        </ul>
                    </li>
                    <li><a href="/investor-relationship" @if(Route::current()->getName() == 'investor') class="active" @endif>Investor Relationship</a></li>
                    <li><a href="/news" @if(Route::current()->getName() == 'news') class="active" @endif>News</a></li>
                    <li><a class="nav-link scrollto" href="/#faq">FAQ</a></li>
                    <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
                    <li class="dropdown"><a style="cursor: pointer;"><span><img src="{{ asset('assets/img/flags/'. $localize .'.svg') }}" width="20" height="15"/></span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            @foreach ($lang as $l)
                                <li><a href="?lang={{ $l['code'] }}"><span>{{ $l['name'] }}</span><img style="box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.048)" src="{{ asset('assets/img/flags/' . $l['code'] . '.svg') }}" width="20" height="15"/></a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <div id="top"></div>
    @yield('content')
    <footer id="footer" class="footer">
        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Join Our Newsletter</h4>
                        <p>Subscribe our newsletter to receive the latest news and exclusive offers week.</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="" method="post">
                            <input type="email" style="outline:none;" placeholder="Your Email Address" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="index.html" class="logo d-flex align-items-center">
                            <img src="assets/img/logo.png" alt="PT. Formosa Ingredient Factory">
                        </a>
                        <p><b>PT. Formosa Ingredient Factory Tbk</b></p>
                        <p>Producer of high quality international standard Boba, Jelly, Sauce, Syrup, and Drinking Powders</p>
                        <div class="social-links mt-3">
                            <a href="https://instagram.com/bobakingofficial" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="https://tiktok.com/@bobakingofficial" target="_blank" class="tiktok"><i class="bi bi-tiktok"></i></a>
                            <a href="https://www.youtube.com/@bobaking2463" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
                            <a href="https://www.linkedin.com/company/pt-formosa-ingredient-factory-tbk" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="@if(Route::current()->getName() == "index") /#hero @else / @endif">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/news">News</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="/affiliates">Affiliates</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://loker.id/profile/pt-formosa-ingredient-factory" target="_blank">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-6 footer-links">
                        <h4>e-commerce</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://bobaking.co.id/" target="_blank">Boba King Official</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://tokopedia.com/bobaking" target="_blank">Tokopedia</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="https://shopee.co.id/boba_king" target="_blank">Shopee</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="javascript:void()">Blibli (Coming Soon)</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Berlian 88 Biz Estate<br>
                            Jl. Diklat Pemda, Bojong Nangka<br>
                            Kab.Tangerang, Banten 15810<br><br>
                            <strong>Phone:</strong> +62 811 8133 788 - +62 821 2366 8884<br>
                            <strong>Email:</strong> info@formosa.id<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>PT. Formosa Ingredient Factory Tbk</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <a href="#top" class="back-to-top d-flex align-items-center justify-content-center scrollto"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
