
@extends('layouts.app2')
@section('title',$pageTitle)
@section('description',$metaDescription) 

@section('extracss')
<style>
    .launch{height: 50px}.close{font-size: 21px;cursor: pointer}.modal-body{height: 450px}.nav-tabs{border:none !important}.nav-tabs .nav-link.active{color: #495057;background-color: #fff;border-color: #ffffff #ffffff #fff;border-top: 3px solid blue !important}.nav-tabs .nav-link{margin-bottom: -1px;border: 1px solid transparent;border-top-left-radius: 0rem;border-top-right-radius: 0rem;border-top: 3px solid #eee;font-size: 20px}.nav-tabs .nav-link:hover{border-color: #e9ecef #ffffff #ffffff}.nav-tabs{display: table !important;width: 100%}.nav-item{display: table-cell}.form-control{border-bottom: 1px solid #eee !important;border:none;font-weight: 600}.form-control:focus{color: #495057;background-color: #fff;border-color: #8bbafe;outline: 0;box-shadow: none}.inputbox{position: relative;margin-bottom: 20px;width: 100%}.inputbox span{position: absolute;top:7px;left: 11px;transition: 0.5s}.inputbox i{position: absolute;top: 13px;right: 8px;transition: 0.5s;color: #3F51B5}input::-webkit-outer-spin-button, input::-webkit-inner-spin-button{-webkit-appearance: none;margin: 0}.inputbox input:focus~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.inputbox input:valid~span{transform: translateX(-0px) translateY(-15px);font-size: 12px}.pay button{height: 47px;border-radius: 37px}
</style>
@endsection
@section('content')

<section class="breadcrumb-area bg-default" data-background="{{ asset('public/img/breadcrumb/don_'.app()->getLocale().'.jpg') }}"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="breadcrumb-title" > </h2>
                    <div class="breadcrumb-list"> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h4_education-area pt-50 pb-60">
    <img src="{{ asset('public/img/don/shape-1.png') }}" alt="" class="h4_education-shape-1">
    <img src="{{ asset('public/img/don/shape-2.png') }}" alt="" class="h4_education-shape-2">
    <img src="{{ asset('public/img/don/bg.jpg') }}" alt="" class="h4_education-img">
    
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="h4_education-wrap mr-50">
                    <div class="section-area-4 mb-60 section-white-4"> 
                        <?php echo stripcslashes($don->getTranslatedAttribute('body', app()->getLocale())); ?> 
                    </div>
                    <div class="h4_education-content">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <br>
                                <br>
                                <!-- <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-rocket"></i> Pay Now
                                </button> -->
                                
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<img alt="" border="0" src="https://www.paypal.com/en_CI/i/scr/pixel.gif" width="1" height="1" />
@endsection
