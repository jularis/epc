
@extends('layouts.app')
@section('title',$pageTitle)
@section('description',$metaDescription)

@section('content')

     <!-- Start Banner Area
    ============================================= -->
    <div class="banner-area banner-style-seven-area navigation-circle zoom-effect overflow-hidden text-light">

        <!-- Slider main container -->
        <div class="banner-fade">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                @foreach ($bannieres as $slide)

                <!-- Single Item -->
                <div class="swiper-slide banner-style-seven">
                    <div class="banner-thumb bg-cover " style="background: url({{ asset('storage/app/public/'.str_replace('\\','/',$slide->image)) }});"></div>
                    <div class="container">
                        <div class="banner-style-seven-info">
                            <div class="row align-center">
                                <div class="col-lg-6">
                                    <div class="content right-info">
                                        <p style="color: hsl(43, 74%, 42%);"> <?php echo $slide->getTranslatedAttribute('hautTitre', app()->getLocale()); ?></p>
                                        <h2>{{$slide->titre}}</h2>
                                        <div class="info">
                                            <p>
                                                <?php echo $slide->getTranslatedAttribute('description', app()->getLocale()); ?>

                                            </p>
                                            @if($slide->url)
                                                <div class="button">
                                                <a class="btn btn-md btn-gradient animation" href="<?php echo $slide->getTranslatedAttribute('url', app()->getLocale()); ?>"><?php echo $slide->getTranslatedAttribute('boutonName', app()->getLocale()); ?></a>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach


            </div>

            <!-- Navigation -->
            <div class="swiper-nav-left">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

        </div>
    </div>
    <!-- End Main -->


    <!-- Start About
    ============================================= -->
    <div class="about-style-six-area default-padding bg-gray-gradient-secondary">
        <div class="about-style-six-thumb">
            <img class="wow fadeInUp" src="{{ asset('public/assets/img/batimen_epc.jpg') }}" alt="">
            <a href="{{url(app()->getLocale().'/qui-sommes-nous/presentation-de-la-marque')}}" class="round-text">
                <img src="{{ asset('public/assets/img/illustration/12.png') }}" alt="">
                <i class="fas fa-long-arrow-right"></i>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="about-style-six-info pl-50 pl-md-0 pl-xs-0">
                        <div class="top-info wow fadeInUp mb-30">
                            <h2>@lang('common.depuis') <strong>1994</strong></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="300ms">
                            <h4 class="sub-title">@lang('common.about')</h4>
                            <h2 class="title split-text">@lang('common.excellence')</h2>
                            <p>
                               @lang('common.text_about')
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->

    <!-- Start About
    ============================================= -->
    <div class="about-style-three-area overflow-hidden default-padding">
        <div class="container">
            <div class="about-style-three-items wow fadeInUp" data-wow-delay="200ms">
                <div class="row align-center">
                    <div class="col-lg-6">
                        <div class="about-style-three-thumb">

                            <figure>
                            <img src="{{ asset('public/assets/img/magasinepc.jpg') }}" alt="Image Not Found">
                            <figcaption><i>@lang('common.epc_debut')</i><br>
                            <br></figcaption>
                            </figure>

                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">@lang('common.epc_annee')</h2>

                            <p>
                                @lang('common.epc_texte')
                            </p>
                            <div class="fact-style-two">
                                <div class="d-grid mt-30 wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="faq-style-two-items">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-item faq-style-two">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                @lang('common.epc_reconnaissance')
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                    @lang('common.epc_reconnais_texte')
                                                </p>
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
        </div>
    </div>
    <!-- End About -->

  <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog-style-two bg-gray-gradient-secondary">
         <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-12 col-md-12 col-lg-12 mb-30">
<div class="elparadis-timeline">
  <h1>Notre Histoire</h1>
  <p class="subtitle">@lang('common.humble')</p>

  <div class="timeline">
    <div class="container left">
      <div class="content">
        <p class="year">1994</p>
        <p class="title">@lang('common.debut')</p>
        <p>@lang('common.ouverture')</p>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <p class="year">2007</p>
        <p class="title">@lang('common.creation')</p>
        <p>@lang('common.fondation')</p>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <p class="year">2010</p>
        <p class="title">@lang('common.transfo')</p>
        <p>@lang('common.evolution')</p>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <p class="year">2018</p>
        <p class="title">@lang('common.majeure')</p>
        <p>@lang('common.capital')</p>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <p class="year">2025</p>
        <p class="title">@lang('common.leader')</p>
        <p>@lang('common.position')</p>
      </div>
    </div>
  </div>
</div>


                </div>
            </div>
         </div>

    </div>
    <!-- End Blog -->

    <!-- Start Choose Us
    ============================================= -->
    <div class="choose-us-style-three-area default-padding bg-theme text-light" style="background-image: url({{ asset('public/assets/img/shape/41.png') }});">
        <div class="shape">
            <img src="{{ asset('public/assets/img/shape/56.png') }}" alt="Image Not Found">
        </div>
        <div class="thumb">
            <img src="{{ asset('public/assets/img/IMG_9474.jpg') }}" alt="Image Not Found">
            <a href="https://www.youtube.com/watch?v=bpXdgzU1wnQ" class="popup-youtube video-play-button"><i class="fas fa-play"></i></a>

        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-us-style-three-info">
                        <h2 class="title split-text">@lang('common.direction')</h2>
                        <p class="wow fadeInUp" data-wow-delay="200ms">
                            @lang('common.direction_texte')
                        </p>
                                                <div class="profile-card-president">
  <div class="header">
    <img src="{{ asset('public/assets/img/icon/21.png') }}" alt="M. AGBÉRÉ EL MEMEN">
    <div>
      <div class="name">@lang('common.memel')</div>
      <div class="title">@lang('common.directeur')</div>
    </div>
  </div>

  <div class="quote">
    "@lang('common.porter')"
  </div>
</div>
                        <div class="d-grid mt-40">



                            <div class="feature-style-one-item wow fadeInUp" data-wow-delay="200ms">

<div class="competence-leadership-card">
    <div class="icon"><i class="fas fa-users"></i></div>
    <div class="title">@lang('common.leadership')</div>
    <div class="subtitle">@lang('common.strateg')</div>
</div>


                            </div>
                            <div class="feature-style-one-item wow fadeInUp" data-wow-delay="400ms">
                                <div class="competence-leadership-card">
    <div class="icon"><i class="fas fa-globe"></i></div>
    <div class="title">@lang('common.inter')</div>
    <div class="subtitle">@lang('common.expansion')</div>
</div>

                            </div>
                        </div>

                        <div class="lab-card" style="padding: 20px;margin-top: 40px;">
  <h3>@lang('common.laboratoire')</h3>
  <ul>
    @lang('common.labo_texte')
  </ul>
</div>

                    </div>
                </div>

                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>
    <!-- End Choose Us -->
      <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog-style-two default-padding bottom-less">
<div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">@lang('common.distinction')</h4>
                        <h2 class="title split-text">@lang('common.distinction_nationale')</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-12 col-md-12 col-lg-12 mb-30">
                    <div class="awards-container">
        <article class="award">
            <div class="award-icon">🏆</div>
            <div class="award-title">@lang('common.prix')</div>
            <div class="award-subtitle">@lang('common.industrie')</div>
        </article>

        <article class="award">
            <div class="award-icon">🎖️</div>
            <div class="award-title">@lang('common.label')</div>
            <div class="award-subtitle">Nevaderm - Antiseptique</div>
        </article>

        <article class="award">
            <div class="award-icon">⭐</div>
            <div class="award-title">@lang('common.label')</div>
            <div class="award-subtitle">Doudou - Parfum Enfant</div>
        </article>

        <article class="award">
            <div class="award-icon">👑</div>
            <div class="award-title">@lang('common.bonne')</div>
            <div class="award-subtitle">@lang('common.meilleure')</div>
        </article>
    </div>
                </div>
            </div>
        </div>
        </div>
    <!-- End Blog -->


<!-- Start Course
    ============================================= -->
<div class="course-style-two-carousel-area default-padding bg-gray-gradient-secondary">
        <div class="container">
            <div class="heading-left">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="sub-title">@lang('common.produit')</h4>
                        <h2 class="title split-text">@lang('common.gamme')</h2>
                    </div>
                    <div class="col-lg-6 text-end">
                        <!-- Navigation -->
                        <div class="course-two-swiper-nav">

                            <!-- Pagination -->
                            <div class="course-two-pagination"></div>

                            <div class="course-two-button-prev"></div>
                            <div class="course-two-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="course-style-two-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
@foreach ($produits as $prod)
                            <!-- Single Item -->
                            <div class="swiper-slide">
                                <div class="course-style-one-item">
                                    <div class="thumb" style="max-height: 370px">
                                        <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$prod->image)) }}" alt="">
                                        <div class="top-meta">

                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4><a href="{{url(app()->getLocale().'/nos-produits/'.$prod->category->slug.'/'.$prod->slug)}}">{{$prod->getTranslatedAttribute('title', app()->getLocale())}}</a></h4>
                                        <div class="course-meta">
                                                    <ul>
                                            <li>
                                                <i class="fas fa-file-alt"></i> <?php echo $prod->category->name; ?>
                                            </li>
                                        </ul>
                                        </div>
                                        <div class="bottom-meta">

                                        </div>
                                    </div>
                                    <a href="{{url(app()->getLocale().'/nos-produits/'.$prod->category->slug.'/'.$prod->slug)}}" class="btn">@lang('common.voir_produit')</a>
                                </div>
                            </div>
                            <!-- Single Item -->

@endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{ url(app()->getLocale().'/nos-produits') }}" class="btn-regular mt-30">@lang('common.voir_nos_produits') ({{$produits->count()}}) <i class="fas fa-spinner"></i></a>
                    </div>
                </div>
            </div>
        </div>


        </div>

    <!-- End Course -->
         <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog-style-two default-padding bottom-less">
<div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">@lang('common.actifs')</h4>
                        <p class="subtitle" style="padding: 0;">@lang('common.ingredients')</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-12 col-md-12 col-lg-12 mb-30">
                    <div class="liste-actifs">
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/huiledArgan.jpg') }}" alt="Huile d'Argan">
        <h3 class="nom-actif">@lang('common.huile')</h3>
        <p class="description-actif">@lang('common.hydratation')</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/curcuma.jpg') }}" alt="Curcuma">
        <h3 class="nom-actif">@lang('common.curcuma')</h3>
        <p class="description-actif">@lang('common.naturel')</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/karite.jpg') }}" alt="Beurre de Karité">
        <h3 class="nom-actif">@lang('common.beurre')</h3>
        <p class="description-actif">@lang('common.protection')</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/nila.jpg') }}" alt="Poudre de Nila">
        <h3 class="nom-actif">@lang('common.poudre')</h3>
        <p class="description-actif">@lang('common.tradition')</p>
      </div>
    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">@lang('common.engagement')</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-xl-12 col-md-12 col-lg-12 mb-30">
        <div class="liste-engagements">
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-hydro.png') }}" alt="Sans Hydroquinone">
                <h4 class="nom-engagement">@lang('common.hydroquinone')</h4>
                <p class="description-engagement">@lang('common.formules')</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-peau.png') }}" alt="Peau Noire">
                <h4 class="nom-engagement">@lang('common.peau')</h4>
                <p class="description-engagement">@lang('common.respect')</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-securite.png') }}" alt="Sécurité">
                <h4 class="nom-engagement">@lang('common.securite')</h4>
                <p class="description-engagement">@lang('common.test')</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-responsabilite.png') }}" alt="Responsabilité">
                <h4 class="nom-engagement">@lang('common.responsa')</h4>
                <p class="description-engagement">@lang('common.beaute')</p>
            </div>
            </div>

                </div>
            </div>
        </div>
        </div>
    <!-- End Blog -->
  <!-- Start Blog
    ============================================= -->
    <div class="blog-area home-blog-style-two default-padding bottom-less" style="background-color: #f9f9f3;">
        <div class="container">
        <h1 class="text-center">@lang('common.trouver')</h1>
        <p class="subtitle">@lang('common.decouvrez')</p>

        <div class="cards">
            @foreach ($partenaires as $part)

            <div class="card" style="height: 160px;">
                <div class="card-img" style="
    width: 100%;
    height: 50%;
    overflow: hidden;
">
<img src="{{ asset('storage/app/public/'.str_replace('\\','/',$part->image)) }}" alt="{{$part->nom}}" style="width: auto !important;height: 100% !important;">
                </div>

                <div class="card-title"><a href="{{ $part->siteweb }}" target="_blank">{{$part->nom}}</a> </div>
                <div class="card-desc">{{$part->type_surface}}</div>
            </div>
            @endforeach
        </div>

        <div class="partner-section">
            <div class="partner-text">
                <h2>@lang('common.devenir')</h2>
                <p>@lang('common.rejoignez')</p>
                <ul>
                    @lang('common.points')
                </ul>
                {{-- <a href="#" class="partner-button">Candidater Maintenant</a> --}}

                <div class="contact-info">
                    <span>📧 {{setting('site.ContactEmail')}}</span>
                    <span>📞 {{ setting('site.ContactMobile')}}</span>
                </div>
            </div>
            <div class="partner-image">
                <img src="{{ asset('public/assets/img/partenaire.png') }}" alt="Bâtiments">
            </div>
        </div>
    </div>
         </div>
    <!-- End Blog -->
<?php
use Illuminate\Support\Facades\Cookie;
// setting('site.showMsgHome')=='Oui' &&
        if(setting('site.showMsgHome')=='Oui' && Cookie::get('msgHome') ==null)
        {
        ?>
  <div id="subscribe-me" class="modal fade subscribe-me sb sb-animation-fade" style="display: block;overflow: hidden;padding: 0; width:102%;">
<div class="modal-dialog" style="max-width: 100%;margin: 0;padding: 0;height: 100%;">
<div class="modal-content" style="padding: 0;border-radius: 0;margin: 0;width: 100%;height: 100%;">

<div class="modal-body" style="padding: 0;">
     <div class="container-fluid">
<div class="row">

<div class="col-md-12 text-center">
    <a href="javascript:void();" class="close"  data-dismiss="modal" aria-hidden="true"> <video width="100%" height="100%" autoplay muted playsinline loop>
  <source type="video/mp4" src="<?php echo asset('public/assets/img/Signature.mp4'); ?>"/>
</video></a>

 </div>

 </div>
 </div>
    </div>
    </div>
    </div>
  </div>
 <?php
      }
      ?>

      @php
    $audio = __('common.audio');
@endphp

@endsection

<audio autoplay>
  <source src="<?php echo asset('public/assets/img/'.$audio.'-ogg.ogg'); ?>" type="audio/ogg">
  <source src="<?php echo asset('public/assets/img/'.$audio.'.mp3'); ?>" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
