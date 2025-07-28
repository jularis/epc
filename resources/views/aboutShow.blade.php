
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
                    <h1>{{ $about->getTranslatedAttribute('title', app()->getLocale())}} </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
                            <li class="active">{{ $pageTitle }}</li>
                            <li class="active">{{ $about->getTranslatedAttribute('title', app()->getLocale())}} </li>
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
                    @if($about->image)
                        <div class="col-lg-6">
                        <div class="about-style-three-thumb">
                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="{{ $about->getTranslatedAttribute('title', app()->getLocale())}}">
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">{{ $about->getTranslatedAttribute('title', app()->getLocale())}}</h2>

                            <p>
                               <?php echo $about->getTranslatedAttribute('body', app()->getLocale()); ?>
                            </p>

                        </div>
                    </div>
                    @else

                    <div class="col-lg-12 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">{{ $about->getTranslatedAttribute('title', app()->getLocale())}}</h2>

                            <p>
                               <?php echo $about->getTranslatedAttribute('body', app()->getLocale()); ?>
                            </p>

                        </div>
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- End About -->


@endsection
