
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
    <!-- Start Gallery
    ============================================= -->
    <div class="gallery-area gallery-grid default-padding mt--30">
        <div class="container">
            <div class="row">
                @foreach ($recompenses as $recomp)

                <!-- Single Item -->
                <div class="col-lg-4 col-md-12 mt-30">
                    <div class="gallery-style-one-item">
                        <img src="{{ asset('storage/app/public/'.$recomp->image) }}" alt="Image Not Found">
                        <a class="item popup-gallery" href="{{ asset('storage/app/public/'.$recomp->image) }}"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Gallery -->



@endsection
