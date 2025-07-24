
@extends('layouts.app2')
@section('title',$pageTitle)
@section('description',$metaDescription) 

@section('content')

<section class="breadcrumb-area bg-default" data-background="{{ asset('public/img/breadcrumb/presentation.jpg') }}"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title"></h2>
                    <div class="breadcrumb-list"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="course-area">
    <div class="container-fluid container-custom-1 p-0">
        <div class="course-wrap pt-20 pb-60">
            <div class="container"> 
                <div class="row">
                    <div class="col-xl-12">
                        <div class="course-tab">
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">
                                    <?php echo $dg->getTranslatedAttribute('title', app()->getLocale()); ?>
                                  </button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="false"><?php echo ($about->getTranslatedAttribute('titre', app()->getLocale())); ?></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="false"><?php echo ($org->getTranslatedAttribute('titre', app()->getLocale())); ?></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-four-tab" data-bs-toggle="pill" data-bs-target="#pills-four" type="button" role="tab" aria-controls="pills-four" aria-selected="false"><?php echo ($appro->getTranslatedAttribute('titre', app()->getLocale())); ?></button>
                                </li> 
                            </ul>                                      
                        </div>
                    </div>
                </div>
                <div class="course-inner">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="event_details-wrap mb-55">
                                        <div class="event_details-content"> 
                                        <div class="course_details-top mb-20">
                                            <p class="mb-25"><?php echo $dg->getTranslatedAttribute('textbienv', app()->getLocale()); ?></p>
                                        </div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="event_details-sidebar mb-60">
                                        
                                        <div class="event_details-sidebar-map">
                                            <img src="{{ asset('storage/app/public/'.$dg->photo) }}" alt="">
                                        </div>
                                        <div class="mb-40">
                                            <?php echo $dg->lienvideo; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="event_details-wrap mb-55"> 
                                        <div class="event_details-content"> 
                                        <div class="course_details-top mb-20">
                                            <p class="mb-25"><?php echo stripcslashes($about->getTranslatedAttribute('contenu', app()->getLocale())); ?></p>
                                        </div> 
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="event_details-sidebar mb-60"> 
                                        <div class="event_details-sidebar-map">
                                            <img src="{{ asset('storage/app/public/'.$about->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="mb-40">
                                        <h4 class="event_details-sidebar-content-title">Suivez-nous</h4>
                                        <iframe src="//www.facebook.com/plugins/likebox.php?href={{setting('site.SocialFacebook')}}&amp;width=350&amp;height=320&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="No" frameborder="0" style="border:none; overflow:hidden; width:370px; height:132px;" allowtransparency="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="event_details-wrap mb-55">
                                        <div class="event_details-content"> 
                                        <div class="course_details-top mb-20">
                                            <p class="mb-25"><?php echo stripcslashes($org->getTranslatedAttribute('contenu', app()->getLocale())); ?></p>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="event_details-sidebar mb-60"> 
                                        <div class="event_details-sidebar-map">
                                            <img src="{{ asset('storage/app/public/'.$org->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="mb-40">
                                        <h4 class="event_details-sidebar-content-title">@lang('common.follow')</h4>
                                        <iframe src="//www.facebook.com/plugins/likebox.php?href={{setting('site.SocialFacebook')}}&amp;width=350&amp;height=320&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="No" frameborder="0" style="border:none; overflow:hidden; width:370px; height:132px;" allowtransparency="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab" tabindex="0">
                            <div class="row">
                                <div class="col-xl-8 col-lg-8">
                                    <div class="event_details-wrap mb-55">
                                        <div class="event_details-content"> 
                                        <div class="course_details-top mb-20">
                                            <p class="mb-25"><?php echo stripcslashes($appro->getTranslatedAttribute('contenu', app()->getLocale())); ?></p>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4">
                                    <div class="event_details-sidebar mb-60"> 
                                        <div class="event_details-sidebar-map">
                                            <img src="{{ asset('storage/app/public/'.$appro->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="mb-40">
                                        <h4 class="event_details-sidebar-content-title">@lang('common.follow')</h4>
                                        <iframe src="//www.facebook.com/plugins/likebox.php?href={{setting('site.SocialFacebook')}}&amp;width=350&amp;height=320&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="No" frameborder="0" style="border:none; overflow:hidden; width:370px; height:132px;" allowtransparency="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
