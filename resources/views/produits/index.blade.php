
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

    <!-- Start Product
    ============================================= -->
    <div class="course-style-one-area default-padding bottom-less">
        <div class="container">
            <div class="row">
                @foreach ($produits as $prod)
                <!-- Single Item -->
                <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                    <div class="course-style-one-item hover-less wow fadeInUp">
                        <div class="thumb" style="max-height: 370px">
                            <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$prod->image)) }}" alt="Image Not Found">
                        </div>
                        <div class="top-meta">

                        </div>
                        <div class="info">
                            <h4><a href="{{url(app()->getLocale().'/nos-produits/'.$prod->category->slug.'/'.$prod->slug)}}">{{ $prod->getTranslatedAttribute('title', app()->getLocale())}}</a></h4>
                            <div class="course-meta">
                                <ul>
                                    <li>
                                        <i class="fas fa-file-alt"></i> <?php echo $prod->category->name; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="bottom-meta">
                                <a href="{{url(app()->getLocale().'/nos-produits/'.$prod->category->slug.'/'.$prod->slug)}}">Tout voir <i class="fas fa-long-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach

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
        </div>
    </div>
    <!-- End Product -->


@endsection
