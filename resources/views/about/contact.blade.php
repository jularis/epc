
@extends('layouts.app2')
@section('title',$pageTitle)
@section('description',$metaDescription) 

@section('content')

<section class="breadcrumb-area bg-default" data-background="{{ asset('public/img/breadcrumb/contact.jpg') }}"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title" style="color: #FFFFFF !important;">@lang('common.contact-nous')</h2>
                    <div class="breadcrumb-list">
                        <a href="{{ url(app()->getLocale()) }}" style="color: #FFFFFF !important;">@lang('common.accueil')</a>
                        <span style="color: #FFFFFF !important;">@lang('common.contact')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-area pt-60 pb-180">
    <div class="container">
        <div class="contact-wrap">
            <div class="row">
                <div class="col-xl-8 col-md-8"> 
                    <div id="location" style="position: static!important;height: 100%; border-radius: 10px;"></div> 
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="contact-info ml-50 mb-20"> 
                        <div class="contact-info-item">
                            <span><i class="fa-thin fa-location-dot"></i>CIAL INTERNATIONAL SCHOOL</span>
                            <p>{{setting('site.ContactAddr')}}</p>
                        </div>
                        <div class="contact-info-item" style="margin-left: 60px;">
                        <span><i class="fa-thin fa-mobile-notch"></i>Direction Générale:</span> 
                        <?php echo setting('site.DirectionG'); ?>
                        <span><i class="fa-thin fa-mobile-notch"></i>Secrétariat Général:</span> 
                        <?php echo setting('site.SecrétariatG'); ?>
                        <span><i class="fa-thin fa-mobile-notch"></i>Whatsapp:</span> 
                        <?php echo setting('site.ContactWhatsapp'); ?>
                        
                        </div>

                        <!-- <div class="contact-info-item">
                            <span><i class="fa-thin fa-location-dot"></i>Centre Cocody 2</span>
                            <p>Immeuble PENIEL - Au-dessus de la Pharmacie de la Corniche / 1er Etage</p>
                        </div>  

                        <div class="contact-info-item" style="margin-left: 60px;">
                        <span><i class="fa-thin fa-mobile-notch"></i>Standard Bureau:</span>
                        <a href="tel:+2252520000285">+225 25 20 00 02 85</a>
                        <a href="tel:+2250101477140">+225 01 01 47 71 40</a>
                        <a href="tel:+2250505837609">+225 05 05 83 76 09</a>
                        <span><i class="fa-thin fa-mobile-notch"></i>Flottes:</span>
                        <a href="tel:+2250707434388">+225 07 07 43 43 88</a>
                        <a href="tel:+2250768757548">+225 07 68 75 75 48</a>
                        <a href="tel:+2250142422242">+225 01 42 42 22 42</a>
                        <span><i class="fa-thin fa-mobile-notch"></i>Whatsapp:</span>
                        <a href="tel:+2250788090900">+225 07 88 09 09 00</a>
                        <a href="tel:+2250142090900">+225 01 42 09 09 00</a>
                        <a href="tel:+2250504090900">+225 05 04 09 09 00</a>
 
                        </div> -->
 
                        <div class="contact-info-item">
                            <span><i class="fa-thin fa-envelope"></i>Email</span>
                            <?php echo setting('site.ListeEmail'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script type='text/javascript' src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_VVwtAhchqsINCTqin22MG1AzMn7d6gk&callback=Function.prototype"></script>

<script>
// ['<b>Centre Cocody 2 :<br>Sis au Grand Carrefour de l\'Indenié (Corniche) <br>Immeuble PENIEL - Au-dessus de la Pharmacie de la Corniche / 1er Etage</b>', '5.3412476', '-4.0157282'],
    var locations = ['<b>CIAL INTERNATIONAL SCHOOL :<br>Sis au Grand Carrefour de l\'Indenié (Corniche)<br>Immeuble BIA - En face de la CIE / 1er, 2eme et 3eme Etages</b>', '5.3421847', '-4.0160148'];

    var map = new google.maps.Map(document.getElementById('location'), {
        zoom: 17,
        center: new google.maps.LatLng('5.3421847', '-4.0160148'),
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

@endsection
