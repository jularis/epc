
@extends('layouts.app2')
@section('title',$pageTitle)
@section('description',$metaDescription ?? "") 

@section('content') 
<section class="breadcrumb-area bg-default" data-background="{{ asset('public/img/breadcrumb/service.jpg') }}"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title" style="color: #FFFFFF !important;">&nbsp;</h2>
                    <div class="breadcrumb-list">
                        <a href="{{ url(app()->getLocale()) }}" style="color: #FFFFFF !important;">&nbsp;
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="course_details-area pt-20 pb-10">
    <div class="container">
        <div class="course_details-img">
            <img src="{{ asset('storage/app/public/'.$service->image) }}" alt="">
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="course_details-wrap mb-55">
                    <div class="course_details-top mb-20">
                        <h3 class="course_details-title"><?php echo stripcslashes($service->getTranslatedAttribute('title', app()->getLocale())); ?></h3>
                    <div class="course_details-content">
                        <p class="mb-25"><?php echo stripcslashes($service->getTranslatedAttribute('body', app()->getLocale())); ?></p> 
                    </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="mb-40 pt-40">
                    <h4 class="event_details-sidebar-content-title">@lang('common.follow')</h4>
                    <iframe src="//www.facebook.com/plugins/likebox.php?href={{setting('site.SocialFacebook')}}&amp;width=350&amp;height=320&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="No" frameborder="0" style="border:none; overflow:hidden; width:370px; height:132px;" allowtransparency="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
 
@endsection
