
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

     <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog-style-two blog-grid default-padding">
        <div class="container">
            <div class="blog-item-box">
                <div class="row">
                    @foreach ($produits as $prod)

                    <!-- Single Item -->
                    <div class="col-xl-4 col-md-6 col-lg-6 mb-50">
                        <div class="home-blog-style-two-item wow fadeInUp">
                            <div class="thumb">
                                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$prod->image)) }}" alt="Image not Found">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-calendar-alt"></i> {{ date('d-m-Y', strtotime($prod->created_at))}}</li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="blog-title">
                                    <a href="{{url(app()->getLocale().'/produits/'.$prod->slug)}}">{{ $prod->getTranslatedAttribute('title', app()->getLocale())}}</a>
                                </h3>
                                <p>
                                    <?php echo $prod->getTranslatedAttribute('excerpt', app()->getLocale()); ?>
                                </p>
                                <a href="{{url(app()->getLocale().'/produits/'.$prod->slug)}}" class="btn-read-more">Lire la suite <i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Item -->
                    @endforeach

                </div>
            </div>
            <!-- Pagination -->
            <div class="row">
                <div class="col-md-12 pagi-area text-center">
                    <nav aria-label="navigation">
                        <ul class="pagination">
                            {{ $produits->links('pagination.custom') }}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
    <!-- End Blog -->


@endsection
