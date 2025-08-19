
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
                            <li><a href="{{url(app()->getLocale())}}"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
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
                    @foreach ($actualites as $actu)

                    <!-- Single Item -->
                    <div class="col-xl-4 col-md-6 col-lg-6 mb-50">
                        <div class="home-blog-style-two-item wow fadeInUp">
                            <div class="thumb">
                                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$actu->image)) }}" alt="Image not Found">
                                <ul class="blog-meta">
                                    <li><i class="fas fa-calendar-alt"></i> {{ date('d-m-Y', strtotime($actu->created_at))}}</li>
                                    <li><i class="fas fa-eye"></i> {{ $actu->visite }}</li>
                                </ul>
                            </div>
                            <div class="info">
                                <h3 class="blog-title">
                                    <a href="{{url(app()->getLocale().'/actualites/'.$actu->slug)}}">{{ $actu->getTranslatedAttribute('title', app()->getLocale())}}</a>
                                </h3>
                                <p>
                                    <?php echo $actu->getTranslatedAttribute('excerpt', app()->getLocale()); ?>
                                </p>
                                <a href="{{url(app()->getLocale().'/actualites/'.$actu->slug)}}" class="btn-read-more">@lang('common.readmore') <i class="fas fa-long-arrow-right"></i></a>
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
                            {{ $actualites->links('pagination.custom') }}
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- End Pagination -->
        </div>
    </div>
    <!-- End Blog -->


@endsection
