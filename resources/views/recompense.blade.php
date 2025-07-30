
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
                            <li><a href="{{url(app()->getLocale())}}"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
                            <li class="active">{{ $pageTitle }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start recompuct
    ============================================= -->
    <div class="course-style-one-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                @foreach ($recompenses as $recomp)
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="course-style-one-item hover-less wow fadeInUp">
                        <div class="thumb" style="max-height: 370px">
                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$recomp->image)) }}" alt="Image Not Found">
                        </div>
                        <div class="top-meta">

                        </div>
                        <div class="info">
                            <h4><a href="{{url(app()->getLocale().'/qui-sommes-nous/recompenses-et-distinctions/'.$recomp->slug)}}">{{ $recomp->getTranslatedAttribute('title', app()->getLocale())}}</a></h4>
                            <div class="course-meta">

                            </div>
                            <div class="bottom-meta">
                                <a href="{{url(app()->getLocale().'/qui-sommes-nous/recompenses-et-distinctions/'.$recomp->slug)}}">@lang('common.voirtout') <i class="fas fa-long-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach

            </div>


        </div>
    </div>
    <!-- End recompuct -->

@endsection
