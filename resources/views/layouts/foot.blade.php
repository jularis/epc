
    <!-- Start Footer
    ============================================= -->
    <footer class="bg-dark footer-style-one text-light">
        <div class="footer-shape-style-one">
            <img src="{{ asset('public/assets/img/shape/2-light.png') }}" alt="Image Not Found">
        </div>
        <div class="container">
            <div class="f-items default-padding">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-item pr-30 pr-md-15 pr-xs-15">
                        <div class="f-item about">
                            <div class="footer-logo">
                                <img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" alt="Image Not Found">
                            </div>
                            <p>
                                @lang('common.presentation')
                            </p>
                            <ul class="footer-social">
                                <li>
                                    <a href="{{setting('site.SocialFacebook')}}">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{setting('site.SocialTwitter')}}">
                                        <img src="{{ asset('public/assets/img/icon/x.png')}}" alt="Icon">
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
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">@lang('common.nosgammes')</h4>
                            {{ menu('gammes-produits','menu-footer') }}
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 footer-item">
                        <div class="f-item link">
                            <h4 class="widget-title">@lang('common.rapides')</h4>
                            {{ menu('liens-rapides','menu-footer') }}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 footer-item">
                        <div class="f-item newsletter">
                            <h4 class="widget-title">@lang('common.contact')</h4>
                            <ul class="contact-list-two">
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker"></i>
                                    </div>
                                    <div class="info">
                                        <h5>{{setting('site.ContactAdresse')}}</h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info">
                                        <h5><a href="tel:{{setting('site.ContactMobile')}}">{{setting('site.ContactMobile')}}</a></h5>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <h5><a href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a></h5>
                                    </div>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Footer Bottom -->
        <div class="footer-bottom style-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <p><?php echo setting('site.Copyright'); ?></p>
                    </div>
                    <div class="col-lg-6 text-end">
                        <ul class="link-list">
                            {{-- <li>
                                <a href="#">Politique de Confidentialit</a>
                            </li>
                            <li>
                                <a href="#">Conditions d'Utilisation</a>
                            </li>
                            <li>
                                <a href="#">Mentions Légales</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
