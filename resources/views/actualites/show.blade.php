
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
                    <h1>{{ $detail->title }} </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                            <li class="">{{ $pageTitle }}</li>
                            <li class="active">{{ $detail->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Blog
    ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="blog-items">
                <div class="row">
                    <div class="blog-content wow fadeInUp col-lg-10 offset-lg-1 col-md-12">

                        <div class="blog-style-two item">

                            <div class="blog-item-box">

                                <div class="thumb">
                                    <a href="#"><img src="{{ asset('storage/app/public/'.$detail->image) }}" alt="Thumb"></a>
                                </div>
                                <div class="info">
                                    <div class="meta">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fas fa-calendar-alt"></i> {{ date('d-m-Y', strtotime($detail->created_at))}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <p>
                                        <?php echo $detail->getTranslatedAttribute('body', app()->getLocale()); ?>
                                    </p>

                                        <div class="gallery-area gallery-grid default-padding mt--30">
        <div class="container">
            <div class="row">
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
                        <img src="{{asset('storage/app/public/'.$datas)}}" alt="Image Not Found">
                        <a class="item popup-gallery" href="{{asset('storage/app/public/'.$datas)}}"><i class="fas fa-link"></i></a>
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



                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->

@endsection
