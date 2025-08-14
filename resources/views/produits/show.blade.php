
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
                    <h1><?php echo $detail->getTranslatedAttribute('title', app()->getLocale()); ?> </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="{{url(app()->getLocale())}}"><i class="fas fa-home"></i> @lang('common.accueil')</a></li>
                            <li class="">{{ $pageTitle }}</li>
                            <li><a href="{{url(app()->getLocale().'/nos-produits/'.$detail->category->slug)}}"><?php echo $detail->category->name; ?></a></li>
                            <li class="active"><?php echo $detail->getTranslatedAttribute('title', app()->getLocale()); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->

    <!-- Start Course Details
    ============================================= -->
    <div class="course-detils-area">
        <div class="container">
            <div class="course-details-items">
                <div class="row">
                    <div class="col-lg-8 pr-40 pr-md-15 pr-xs-15">
                        <div class="course-details-left-info">
                            <div class="coruse-details-thumb">
                                <br>
                                <br>
                            </div>
                            <div class="course-details-info">
                                <div class="tab-content course-details-tab-content" id="myTabContent">
                                    <!-- Tab Single -->
                                    <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tabs_1">
                                        <h2><?php echo $detail->getTranslatedAttribute('title', app()->getLocale()); ?></h2>
                                        <p>
                                            <?php echo $detail->getTranslatedAttribute('body', app()->getLocale()); ?>
                                        </p>

                                    </div>
                                    <!-- End Tab Single -->
<div class="blog-comments">
                            <div class="comments-area">


                            </div>
                        </div>

 <livewire:comments :model="$detail"/>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="course-details-category">
                            <!-- Single Item -->
                            <div class="course-cat-single">
                                <div class="course-preview-info">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/app/public/'.$detail->image) }}" alt="Thumb">
                                    </div>
                                    <div class="content">
                                        <div class="course-includes">
                                            <div class="info">

                                                <ul>
                                                    @if($detail->GelDouche)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Gel Douche <span>{{ str_replace("<br>","/",$detail->GelDouche) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Tube)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Tube <span>{{ str_replace("<br>","/",$detail->Tube) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Serum)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Serum <span>{{ str_replace("<br>","/",$detail->Serum) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Savon)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Savon <span>{{ str_replace("<br>","/",$detail->Savon) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Creme)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Creme <span>{{ str_replace("<br>","/",$detail->Creme) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Lait)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Lait <span>{{ str_replace("<br>","/",$detail->Lait) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Lotion)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Lotion <span>{{ str_replace("<br>","/",$detail->Lotion) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Huile)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Huile <span>{{ str_replace("<br>","/",$detail->Huile) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Gommage)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Gommage <span>{{ str_replace("<br>","/",$detail->Gommage) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Concentrer)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Concentrer <span>{{ str_replace("<br>","/",$detail->Concentrer) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->Vaseline)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Vaseline <span>{{ str_replace("<br>","/",$detail->Vaseline) }}</span>
                                                    </li>
                                                    @endif
                                                    @if($detail->CremeDeVisage)
                                                    <li>
                                                        <i class="fas fa-copy"></i> Crème De Visage <span>{{ str_replace("<br>","/",$detail->CremeDeVisage) }}</span>
                                                    </li>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Course Details -->


@endsection
