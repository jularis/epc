   <!-- Start Header Top
    ============================================= -->
    <div class="top-bar-area top-bar-style-one bg-dark text-light">
        <div class="container">
            <div class="row align-center">
                <div class="col-lg-7">
                    <ul class="item-flex">
                        <li>
                             <a href="tel:{{setting('site.ContactMobile')}}">
                                <img src="{{ asset('public/assets/img/icon/2.png') }}" alt="Icon"> Phone: {{setting('site.ContactMobile')}}
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{setting('site.ContactEmail')}}">
                                <img src="{{ asset('public/assets/img/icon/3.png') }}" alt="Icon"> Email: {{setting('site.ContactEmail')}}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5 text-end">
                    <div class="item-flex">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php if(app()->getLocale() == "fr"){echo asset('public/flags/fr.jpg');}elseif (app()->getLocale() == "en") {
                                        echo asset('public/flags/en.jpg') ; }elseif (app()->getLocale() == "pt") { echo asset('public/flags/pt.jpg') ; } ?>">
                                <?php if(app()->getLocale() == "fr"){echo "French";}elseif (app()->getLocale() == "en") {
                                        echo "English" ; }elseif (app()->getLocale() == "pt") { echo "Portugal" ; } ?> <i class="fas fa-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                @foreach (config('voyager.multilingual.locales') as $locale)
                                            <li>
                                                <?php
                                                $current = url()->current();
                                                if(app()->getLocale() != $locale){ $baselang = $locale; $newlink = str_replace("/".app()->getLocale()."/","/".$baselang."/",$current);}
                                                else { $newlink = $current;}
                                                if(url(app()->getLocale())==$current) $newlink = url($locale);

                                                ?>
                                           <a class="dropdown-item" href="<?php echo $newlink; ?>"><?php if($locale == "fr"){echo "French";}elseif ($locale == "en") {
                                        echo "English" ; }elseif ($locale == "pt") { echo "Portugal" ; } ?></a>
                                            </li>
                                        @endforeach
                            </ul>
                        </div>
                        <div class="social">
                            <ul class="">
                            <li>
                                    <a href="{{setting('site.SocialFacebook')}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialTwitter')}}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialYoutube')}}">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialLinkedin')}}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialTikTop')}}">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialInstagram')}}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->
        <!-- Header
    ============================================= -->
    <header>
        <!-- Start Navigation -->
        <nav class="navbar mobile-sidenav navbar-sticky navbar-default validnavs dark navbar-fixed no-background inc-topbar">


            <div class="container d-flex justify-content-between align-items-center">

                <!-- Start Header Navigation -->
                <div class="item-flex">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand href="{{ url('/'.app()->getLocale())}}"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" style="max-width: 75px" alt="" class="logo"></a>

                    </div>
                </div>
                <!-- End Header Navigation -->

                <div class="nav-item-box d-flex justify-content-between align-items-center">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">

                        <img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" alt="Logo">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-times"></i>
                        </button>
                        {{ menu('front-menu','menu') }}

                    </div><!-- /.navbar-collapse -->

                    <div class="attr-right">
                        <!-- Start Atribute Navigation -->
                        <div class="attr-nav">
                            <ul>
                                <li class="side-menu">
                                    <a href="#">
                                        <div class="menu-icon">
                                            <span class="bar-1"></span>
                                            <span class="bar-2"></span>
                                            <span class="bar-3"></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>

                        </div>
                        <!-- End Atribute Navigation -->
                    </div>
                </div>

                <!-- Start Side Menu -->
                <div class="side">
                    <a href="#" class="close-side"><i class="fas fa-times"></i></a>
                    <div class="widget">
                        <div class="logo">
                            <img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" alt="Logo">
                        </div>
                        <p>
                            {{setting('site.description')}}
                        </p>
                    </div>
                    <div class="widget address">
                        <div>
                            <ul>
                                <li>
                                    <div class="content">
                                        <p>Adresse</p>
                                        <strong>{{setting('site.ContactAdresse')}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Email</p>
                                        <strong>{{setting('site.ContactEmail')}}</strong>
                                    </div>
                                </li>
                                <li>
                                    <div class="content">
                                        <p>Contact</p>
                                        <strong>{{ setting('site.ContactMobile')}}</strong>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget social">
                        <ul class="link">
                            <li>
                                    <a href="{{setting('site.SocialFacebook')}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialTwitter')}}">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialYoutube')}}">
                                        <i class="fab fa-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialLinkedin')}}">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialTikTop')}}">
                                        <i class="fab fa-tiktok"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialInstagram')}}">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                        </ul>
                    </div>

                </div>
                <!-- End Side Menu -->

            </div>
            <!-- Overlay screen for menu -->
            <div class="overlay-screen"></div>
            <!-- End Overlay screen for menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Header -->
