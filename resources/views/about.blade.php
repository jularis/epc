
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
                    <h1>{{ $pageTitle }}</h1>
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

  <!-- Start About
    ============================================= -->
    <div class="about-style-three-area overflow-hidden pt-20 pt-md-120 pt-xs-70">
        <div class="container">
            <div class="about-style-three-items wow fadeInUp" data-wow-delay="200ms">
                <div class="row align-center">
                    @if($debut->image)
                        <div class="col-lg-6">
                        <div class="about-style-three-thumb">
                            <img src="{{ asset('storage/app/public/'.$debut->image) }}" alt="{{ $debut->getTranslatedAttribute('title', app()->getLocale())}}">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">{{ $debut->getTranslatedAttribute('title', app()->getLocale())}}</h2>

                            <p>
                               <?php echo $debut->getTranslatedAttribute('body', app()->getLocale()); ?>
                            </p>

                        </div>
                    </div>
                    @else

                    <div class="col-lg-12 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">{{ $debut->getTranslatedAttribute('title', app()->getLocale())}}</h2>

                            <p>
                               <?php echo $debut->getTranslatedAttribute('body', app()->getLocale()); ?>
                            </p>

                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start Brand Area
    ============================================= -->
    <div class="brand-style-two-area dark-optional text-light relative overflow-hidden">
        <div class="brand-style-two">
            <div class="container-fill">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-items">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Brand Area -->

    <!-- Start Faq
    ============================================= -->
    <div class="faq-style-one-area default-padding bg-gray-gradient-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="faq-style-one-info wow fadeInUp">
                        <h4 class="sub-title"></h4>
                        <h2 class="title split-text">{{ $histoire->getTranslatedAttribute('title', app()->getLocale())}}</h2>
                        <div class="question-card">
                            <h4></h4>
                            <p>
                                <div class="about-style-three-thumb">
                            <img src="{{ asset('storage/app/public/'.$histoire->image) }}" alt="{{ $histoire->getTranslatedAttribute('title', app()->getLocale())}}">
                        </div>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="faq-style-one-items wow fadeInUp" data-wow-delay="300ms">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item faq-style-one">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        <p>
                                            <?php echo $histoire->getTranslatedAttribute('body', app()->getLocale()); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Faq  -->

    <!-- Start Testimonial
    ============================================= -->
    <div class="testimonial-style-one-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title"></h4>
                        <h2 class="title split-text">{{ $about->getTranslatedAttribute('title', app()->getLocale())}}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wow fadeInUp" data-wow-delay="200ms">
                        <div class="testimonial-style-one-items bg-gradient text-light">

                            <div class="testimonial-style-one-carousel swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonial-style-one">
                                            <div class="top-info">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/img/shape/quote.png')}}" alt="Image Not Found">
                                                </div>
                                            </div>
                                            <p>
                                                <?php echo $about->getTranslatedAttribute('body', app()->getLocale()); ?>
                                            </p>

                                        </div>
                                    </div>



                                </div>
                                <!-- Add Arrows -->

                            </div>

                            <div class="testimonial-bullet swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="swiper-bullet-item">
                                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="{{ $about->getTranslatedAttribute('title', app()->getLocale())}}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-bullet-item">
                                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="{{ $about->getTranslatedAttribute('title', app()->getLocale())}}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-bullet-item">
                                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="{{ $about->getTranslatedAttribute('title', app()->getLocale())}}">
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-bullet-item">
                                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="{{ $about->getTranslatedAttribute('title', app()->getLocale())}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

@endsection
