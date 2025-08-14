<!Doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo setting('site.MetaDescription') ?? ''; ?>" />
        <title>EL PARADIS COSMETIC | @yield('title')</title>
<meta name="Robots" CONTENT="All">
<meta name="keywords" content="<?php echo setting('site.MetaKeywords') ?? ''; ?>" />
<meta name="google-site-verification" content="<?php echo setting('site.google-site-verification')?? ''; ?>" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/app/public/'.setting('admin.icon_image')) }}">

    <!-- ========== Start Stylesheet ========== -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/validnavs.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/unit-test.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/css/pli.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/flexslider.min.css">

    <!-- ========== End Stylesheet ========== -->
@livewireStyles

        <style type="text/css">

        /* .mobileplay {
            display: none;
        }

        @media only screen and (max-width: 768px) {
            .mobileplay {
                display: block;
            }

            .lgscreem{
                display: none;
            }
        } */

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
      </style>
        <style type="text/css">

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

      .flex-direction-nav a {
    width: 60px !important;
    height: 60px !important;
}

      </style>
         <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo setting('site.google_analytics_tracking_id'); ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', '<?php echo setting('site.google_analytics_tracking_id'); ?>');
</script>
    </head>

    <body>
   <!-- Start Preloader
    ============================================= -->
    {{-- <div id="preloader">

        <div id="edufix-preloader" class="edufix-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <span data-text-preloader="P" class="letters-loading">
                        P
                    </span>
                    <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Preloader -->

       @include('layouts.head')

           @yield('content')

        @include('layouts.foot')


            <!-- jQuery Frameworks
    ============================================= -->

    <script src="{{ asset('public/assets/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/progress-bar.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/count-to.js') }}"></script>
    <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/YTPlayer.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/loopcounter.js') }}"></script>
    <script src="{{ asset('public/assets/js/validnavs.js') }}"></script>
    <script src="{{ asset('public/assets/js/gsap.js') }}"></script>
    <script src="{{ asset('public/assets/js/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/SplitText.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/main3.js') }}"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.7.2/jquery.flexslider-min.js"></script>
<script>
  $(window).on('load', function () {
    $('.flexslider').flexslider({
      animation: "fade",
      directionNav : true,
      controlNav : false,
      slideshow : false,
    });
  });
</script>
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break;
 }
 @endif
</script>

<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_VVwtAhchqsINCTqin22MG1AzMn7d6gk&callback=Function.prototype"></script>

<script>
// ['<b>Centre Cocody 2 :<br>Sis au Grand Carrefour de l\'Indenié (Corniche) <br>Immeuble PENIEL - Au-dessus de la Pharmacie de la Corniche / 1er Etage</b>', '5.3412476', '-4.0157282'],
    var locations = ['<b>Autoroute du Nord, KM29 Abidjan, Côte d\'Ivoire</b>', '5.4517631', '-4.1773843'];

    var map = new google.maps.Map(document.getElementById('googleMap'), {
        zoom: 15,
        center: new google.maps.LatLng('5.4517631', '-4.1773843'),
        mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;


        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[1], locations[2]),
            map: map,
        });

        google.maps.event.addListener(marker, 'click', (function(marker) {
            return function() {
            infowindow.setContent(locations[0]);
            infowindow.open(map, marker);
            };
        })(marker));

</script>
        <script>
            (function (){
                let script = document.createElement('script')
                script.type = "text/javascript";
                script.src = "https://cdn.jsdelivr.net/gh/BEN00262/whatsapp-embed-icon/lib/index.js";

                script.addEventListener('load', function () {
                    DisplaySocialMediaIcon({
                        contact:  "{{ setting('site.SocialWhatsapp') }}",
                        call_to_action: "Laissez nous un message ",
                        position: "right"
                    })
                })

                document.currentScript.parentNode.insertBefore(script, document.currentScript)
            })();


        </script>

<?php
use Illuminate\Support\Facades\Cookie;
if(setting('site.showMsgHome')=='Non' && Cookie::get('msgHome') ==null)
{
?>
<script type="text/javascript">
// Initialisation de la temporisation
temp = 0;
jQuery(function(){
// Boucle de décrémentation
// 10 représente le temps en secondes
for (i=30 ;i > -1;i--){
setTimeout("jQuery('#affichage').text('"+i+"');",temp);
temp+=1000;
}
});
$(document).ready(function(){
$('#subscribe-me').modal('show');
setTimeout(function(){$('#subscribe-me').modal('hide')},5000);
//setTimeout("affichage();",temp - 1000);
     });
     $('#peel').on('click', function(){
    $('#subscribe-me').modal('hide');
});
     </script>
     <?php
 }
 ?>

<?php
if(setting('site.showMsgHome')=='Oui')
{
?>
<script type="text/javascript">
// Initialisation de la temporisation
temp = 0;
jQuery(function(){
// Boucle de décrémentation
// 10 représente le temps en secondes
for (i=30 ;i > -1;i--){
setTimeout("jQuery('#affichage').text('"+i+"');",temp);
temp+=1000;
}
});
$(document).ready(function(){
$('#subscribe-me').modal('show');
setTimeout(function(){$('#subscribe-me').modal('hide')},30000);
//setTimeout("affichage();",temp - 1000);
     });
     $('#peel').on('click', function(){
    $('#subscribe-me').modal('hide');
});
     </script>
     <?php
 }
 ?>
 @livewireScripts
    </body>

</html>
