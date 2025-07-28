
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
                            <li><a href="#"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
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
        <div class="cards">
                    @foreach ($partenaires as $part)

                    <div class="col-lg-3 col-md-12 mt-30 card2">
                        <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$part->image)) }}" alt="{{$part->nom}}" style="height: 325px;">
                        <div class="card-title"><a href="{{ $part->siteweb }}" target="_blank">{{$part->nom}}</a> </div>
                        <div class="card-desc">{{$part->type_surface}}</div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <!-- End About -->

<br>
@endsection
