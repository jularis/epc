
@extends('layouts.app')
@section('title',$pageTitle)
@section('description',$metaDescription)

@section('content')
    <!-- Start Breadcrumb
    ============================================= -->
    <div class="breadcrumb-area text-center bg-gray-gradient-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h1>@lang('common.contact') </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
                            <li class="active">@lang('common.contact')</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->


        <!-- Start Contact Information
    ============================================= -->
    <div class="contact-info-area overflow-hidden default-padding-bottom pt-20 mt--20">
        <div class="container">
            <div class="row">
                <div class="contact-stye-one col-lg-10 offset-lg-1">
                    <div class="contact-style-one-info">
                        <div class="heading text-center">
                            <h4 class="sub-title">Avez-vous des Questions?</h4>
                            <h2 class="title">Information de Contacts</h2>
                        </div>
                        <div class="contact-info-items">
                            <div class="item-single wow fadeInUp">
                                <div class="icon">
                                    <img src="{{ asset('public/assets/img/icon/68.png') }}" alt="Image Not Found">
                                </div>
                                <div class="content">
                                    <h4>Numéro de téléphone</h4>
                                    <ul>
                                        <li>
                                            <a href="tel:{{setting('site.ContactMobile')}}">{{setting('site.ContactMobile')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item-single wow fadeInUp" data-wow-delay="300ms">
                                <div class="icon">
                                    <img src="{{ asset('public/assets/img/icon/70.png') }}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Notre Location</h4>
                                    <p>
                                       {{setting('site.ContactAdresse')}}
                                    </p>
                                </div>
                            </div>
                            <div class="item-single wow fadeInUp" data-wow-delay="500ms">
                                <div class="icon">
                                    <img src="{{ asset('public/assets/img/icon/69.png') }}" alt="Image Not Found">
                                </div>
                                <div class="info">
                                    <h4>Email Officiel</h4>
                                    <ul>
                                        <li>
                                            <a href="mailto:{{setting('site.ContactEmail')}}">{{setting('site.ContactEmail')}}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Information -->

    <!-- Start Map
    ============================================= -->
    <div class="maps-area overflow-hidden default-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="google-maps" id="googleMap" style="width:100%; height:480px; border-radius: 4px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Map -->


<br>
@endsection
