
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
                    <h1><?php echo $detail->getTranslatedAttribute('title', app()->getLocale()); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{url(app()->getLocale())}}"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
                            <li class="">{{ $pageTitle }}</li>
                            <li class="active"><?php echo $detail->getTranslatedAttribute('title', app()->getLocale()); ?></li>
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
                <p>
                    <?php echo $detail->getTranslatedAttribute('body', app()->getLocale()); ?>
                </p>
                <?php

                                    if($detail->galerie)
                                    {
              $i=0; $images = json_decode($detail->galerie);
              foreach($images as $datas)
			  {
                ?>

                <!-- Single Item -->
                <div class="col-lg-4 col-md-12 mt-30">
                    <div class="gallery-style-one-item">
                        <img src="{{ asset('storage/app/public/'.$datas) }}" alt="Image Not Found">
                        <a class="item popup-gallery" href="{{ asset('storage/app/public/'.$datas) }}"><i class="fas fa-link"></i></a>
                    </div>
                </div>
                <!-- End Single Item -->
               <?php
                $i++;
                }
            }
                    ?>
            </div>
        </div>
    </div>
    <!-- End Gallery -->



@endsection
