<!Doctype html>
<html class="no-js" lang="zxx">
     
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title','CIAL INTERNATIONAL SCHOOL')</title>
        <meta name="description" content="@yield('description','description')">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/img/favicon.png') }}"> 

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('public/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/meanmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('public/css/main.css') }}">
        <style type="text/css"> 

            .mobileplay {
                display: none;  
            }

            @media only screen and (max-width: 768px) {
                .mobileplay {
                    display: block;  
                }

                .lgscreem{
                    display: none;
                }
            } 

            #subscribe-me .close
        {
          opacity:1;
          float: none;
        }
        #subscribe-me .modal {
          margin: 0;
          z-index: 2000;
        }
        .reset-pulse-sizing,
      .reset-pulse-sizing *,
      .reset-pulse-sizing *:before,
      .reset-pulse-sizing *:after {
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
        vertical-align: top; } 
           
       .fb_iframe_widget_fluid_desktop iframe {
          min-width: 100%;
          width: 100%;
          position: relative;
      }
       iframe {
          min-width: 100%;
          width: 100%;
          position: relative;
      }
        </style>

        @yield('extra-css')
    </head>
     
    <body>
        <div class="sidebar-info side-info">
            <div class="sidebar-logo-wrapper mb-25">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-8">
                        <div class="sidebar-logo">
                            <a href="{{ url('/'.app()->getLocale())}}"><img src="{{ asset('storage/app/public/'.setting('site.logo')) }}" alt="logo-img"></a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-4">
                        <div class="sidebar-close-wrapper text-end">
                            <button class="sidebar-close side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu-wrapper fix">
                <div class="mobile-menu"></div>
            </div>
        </div>
        <div class="offcanvas-overlay"></div>
        
       @include('layouts.header')

        <main>
           @yield('content')
        </main>



        @include('layouts.foot')


        <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> 
            <div class="modal-dialog"> 
                <div class="modal-content"> 
                    <div class="modal-body"> 
                        <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div> 
                        <div class="tabs mt-3"> 
                            <ul class="nav nav-tabs" id="myTab" role="tablist"> 
                                <li class="nav-item" role="presentation" style="text-align: center;"> <a class="nav-link active" id="visa-tab" data-toggle="tab" href="#visa" role="tab" aria-controls="visa" aria-selected="true"> <img src="{{ asset('public/img/user.png') }}" style="height: 34px; width: 37px;" width="80"> </a> </li> 
                                <li class="nav-item" role="presentation" style="text-align: center;"> <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false"> <img src="{{ asset('public/img/paiement.png') }}" width="80"> </a> </li> 
                            </ul> 
                            <div class="tab-content" id="myTabContent"> 
                                <div class="tab-pane fade show active" id="visa" role="tabpanel" aria-labelledby="visa-tab"> 
                                    <div class="mt-4 mx-4"> 
                                        <div class="form mt-3"> 
                                            <div class="row g-15">
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="h6_admission-form-input">
                                                        <input type="number" placeholder="combien voulez-vous donner ?">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="h6_admission-form-input">
                                                        <input type="text" placeholder="Prénoms">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="h6_admission-form-input">
                                                        <input type="text" placeholder="Nom">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="h6_admission-form-input">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>  
                                            </div>  
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="tab-pane fade" id="paypal" role="tabpanel" aria-labelledby="paypal-tab"> 
                                    <div class="px-5 mt-5"> 
                                        <div class="row g-15">
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="h6_admission-form-input">
                                                        <input type="number" placeholder="Nom du titulaire">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-sm-12">
                                                    <div class="h6_admission-form-input">
                                                        <input type="text" placeholder="Numéro de carte">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="h6_admission-form-input">
                                                        <input type="text" placeholder="Date d'expiration">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-sm-6">
                                                    <div class="h6_admission-form-input">
                                                        <input type="text" placeholder="CVV">
                                                    </div>
                                                </div> 
                                            </div> 
                                        <div class="pay px-5"> <button class="btn btn-primary btn-block">Payer</button> </div> 
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div>
        </div>
         
        <script src="{{ asset('public/js/jquery.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="{{ asset('public/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('public/js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.meanmenu.min.js') }}"></script>
        <script src="{{ asset('public/js/wow.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.scrollUp.min.js') }}"></script>
        <script src="{{ asset('public/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('public/js/odometer.min.js') }}"></script>
        <script src="{{ asset('public/js/appear.min.js') }}"></script>
        <script src="{{ asset('public/js/main.js') }}"></script>
    </body>

</html>