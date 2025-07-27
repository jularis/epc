
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
                    <h1>{{ $pageTitle }} </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="active">{{ $pageTitle }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Contact Us
    ============================================= -->
    <div class="contact-style-one-area overflow-hidden default-padding-bottom">
        <div class="container">
            <div class="row">

                <div class="contact-stye-one col-lg-10 offset-lg-1">
                    <div class="contact-form-style-one">
                        <h2 class="heading">Envoyer un message</h2>
                        <form action="assets/mail/contact.php" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="name" name="name" placeholder="Nom" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email*" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="phone" name="phone" placeholder="Téléphone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="comments" name="comments" placeholder="Votre message *"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Envoyer votre message
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                        <img src="{{ asset('public/assets/img/shape/88.png') }}" alt="Image Not Found">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
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
