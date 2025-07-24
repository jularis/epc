
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
                    <div class="banner-thumb bg-cover shadow dark" style="background: url({{ asset('storage/app/public/'.str_replace('\\','/',$slide->image)) }});"></div>
                    <div class="container">
                        <div class="banner-style-seven-info">
                            <div class="row align-center">
                                <div class="col-lg-7">
                                    <div class="content">
                                        <p style="color: hsl(43, 74%, 42%);"> {{$slide->hautTitre}} </p>
                                        <h2>{{$slide->titre}}</h2>
                                        <div class="info">
                                            <p>
                                                {{$slide->description}}
                                            </p>
                                            @if($slide->url)
                                                <div class="button">
                                                <a class="btn btn-md btn-gradient animation" href="{{$slide->url}}">{{$slide->boutonName}}</a>
                                            </div>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 offset-lg-1">

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
            <a href="about-us.html" class="round-text">
                <img src="{{ asset('public/assets/img/illustration/12.png') }}" alt="">
                <i class="fas fa-long-arrow-right"></i>
            </a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 offset-lg-5">
                    <div class="about-style-six-info pl-50 pl-md-0 pl-xs-0">
                        <div class="top-info wow fadeInUp mb-30">
                            <h2>Dépuis <strong>1994</strong></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="300ms">
                            <h4 class="sub-title">Qui sommes-nous?</h4>
                            <h2 class="title split-text">Une Vision, Une Excellence</h2>
                            <p>
                               EL Paradis Cosmetic (EPC) est une entreprise industrielle ivoirienne spécialisée dans la fabrication et la distribution de produits cosmétiques, née d'une vision claire : valoriser la beauté en générale et africaine en particulier avec des soins sûrs, efficaces et accessibles.
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
                            <figcaption><i>El Paradis du Cosmétique I - Port-Bouët, 1994</i></figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6 pl-60 pl-md-15 pl-xs-15">
                        <div class="about-style-three-info">
                            <h2 class="title split-text">Les Débuts (1994)</h2>

                            <p>
                                Tout commence en 1994, dans le quartier de Port-Bouët derrière warf, où Monsieur Agbéré El Memen décide d'ouvrir sa propre boutique baptisée « El Paradis du Cosmétique I ». Ce magasin devient rapidement une référence dans le secteur grâce à son sens du service, sa connaissance des besoins des clients et la qualité des produits proposés.
                            </p>
                            <div class="fact-style-two">
                                <div class="d-grid mt-30 wow fadeInUp" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUp;">
                            <div class="faq-style-two-items">
                                <div class="accordion" id="faqAccordion">
                                    <div class="accordion-item faq-style-two">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Reconnaissance
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                <p>
                                                    Il fut reconnu comme le meilleur vendeur de produits cosmétiques d'Abidjan Sud.
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
  <p class="subtitle">De humble boutique à leader industriel : l’aventure extraordinaire d’El Paradis Cosmetic</p>

  <div class="timeline">
    <div class="container left">
      <div class="content">
        <p class="year">1994</p>
        <p class="title">Les Débuts</p>
        <p>Ouverture de la première boutique « El Paradis du Cosmétique I » à Port-Bouët</p>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <p class="year">2007</p>
        <p class="title">Création Officielle</p>
        <p>Fondation d’El Paradis Cosmétique en tant qu’entreprise</p>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <p class="year">2010</p>
        <p class="title">Transformation SARL</p>
        <p>Évolution vers le statut de Société à Responsabilité Limitée</p>
      </div>
    </div>

    <div class="container right">
      <div class="content">
        <p class="year">2018</p>
        <p class="title">Expansion Majeure</p>
        <p>Capital porté à 620 millions FCFA</p>
      </div>
    </div>

    <div class="container left">
      <div class="content">
        <p class="year">2025</p>
        <p class="title">Leader Régional</p>
        <p>Capital de 6,665 milliards FCFA - Position de leader en Afrique de l’Ouest</p>
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
                        <h2 class="title split-text">Direction & Vision</h2>
                        <p class="wow fadeInUp" data-wow-delay="200ms">
                            Sous la direction visionnaire de M. Agbéré El Memen, El Paradis Cosmetic porte l'excellence ivoirienne à l'international.
                        </p>
                                                <div class="profile-card-president">
  <div class="header">
    <img src="{{ asset('public/assets/img/icon/21.png') }}" alt="M. AGBÉRÉ EL MEMEN">
    <div>
      <div class="name">M. AGBÉRÉ EL MEMEN</div>
      <div class="title">Président Directeur Général</div>
    </div>
  </div>

  <div class="quote">
    "Porter l'excellence ivoirienne à l'international dans les cosmétiques, tout en valorisant la beauté africaine dans toute sa diversité."
  </div>
</div>
                        <div class="d-grid mt-40">



                            <div class="feature-style-one-item wow fadeInUp" data-wow-delay="200ms">

<div class="competence-leadership-card">
    <div class="icon"><i class="fas fa-users"></i></div>
    <div class="title">Leadership</div>
    <div class="subtitle">Vision stratégique</div>
</div>


                            </div>
                            <div class="feature-style-one-item wow fadeInUp" data-wow-delay="400ms">
                                <div class="competence-leadership-card">
    <div class="icon"><i class="fas fa-globe"></i></div>
    <div class="title">International</div>
    <div class="subtitle">Expansion mondiale</div>
</div>

                            </div>
                        </div>

                        <div class="lab-card" style="padding: 20px;margin-top: 40px;">
  <h3>Notre Laboratoire</h3>
  <ul>
    <li>Formulation locale</li>
    <li>Équipe de chimistes expérimentés</li>
    <li>Respect des normes CODINORM</li>
    <li>Innovation permanente</li>
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
                        <h4 class="sub-title">Récompenses & Distinctions</h4>
                        <h2 class="title split-text">Une reconnaissance nationale et internationale de notre excellence</h2>
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
            <div class="award-title">Prix d'Excellence</div>
            <div class="award-subtitle">Industrie Ivoirienne 2019</div>
        </article>

        <article class="award">
            <div class="award-icon">🎖️</div>
            <div class="award-title">Label Consommateurs</div>
            <div class="award-subtitle">Nevaderm - Antiseptique</div>
        </article>

        <article class="award">
            <div class="award-icon">⭐</div>
            <div class="award-title">Label Consommateurs</div>
            <div class="award-subtitle">Doudou - Parfum Enfant</div>
        </article>

        <article class="award">
            <div class="award-icon">👑</div>
            <div class="award-title">Bonne Gouvernance</div>
            <div class="award-subtitle">Meilleure Entreprise 2022</div>
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
                        <h4 class="sub-title">Nos Produits</h4>
                        <h2 class="title split-text">Une gamme complète de soins cosmétiques formulés à base d'actifs naturels</h2>
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
                                            <div class="author">
                                            </div>
                                            <div class="level">
                                                <i class="fas fa-check-circle"></i> {{$prod->category->name}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info">
                                        <h4><a href="{{url('/produits/'.$prod->slug.'/'.app()->getLocale())}}">{{$prod->title}}</a></h4>
                                        <div class="course-meta">

                                        </div>
                                        <div class="bottom-meta">

                                        </div>
                                    </div>
                                    <a href="{{url('/produits/'.$prod->slug.'/'.app()->getLocale())}}" class="btn">Voir ce produit</a>
                                </div>
                            </div>
                            <!-- Single Item -->

@endforeach
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="text-center">
                        <a href="{{ url('/produits/'.app()->getLocale()) }}" class="btn-regular mt-30">Voir tous nos produits ({{$produits->count()}}) <i class="fas fa-spinner"></i></a>
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
                        <h4 class="sub-title">Nos Actifs Naturels</h4>
                        <p class="subtitle" style="padding: 0;">Des ingrédients authentiques pour une beauté respectueuse de votre peau</p>
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
        <h3 class="nom-actif">Huile d'Argan</h3>
        <p class="description-actif">Hydratation intense et nutrition profonde</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/curcuma.jpg') }}" alt="Curcuma">
        <h3 class="nom-actif">Curcuma</h3>
        <p class="description-actif">Éclat naturel et propriétés purifiantes</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/karite.jpg') }}" alt="Beurre de Karité">
        <h3 class="nom-actif">Beurre de Karité</h3>
        <p class="description-actif">Protection et réparation naturelle</p>
      </div>
      <div class="carte-actif">
        <img src="{{ asset('public/assets/img/nila.jpg') }}" alt="Poudre de Nila">
        <h3 class="nom-actif">Poudre de Nila</h3>
        <p class="description-actif">Tradition africaine authentique</p>
      </div>
    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h4 class="sub-title">Nos Engagements</h4>
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
                <h4 class="nom-engagement">Sans Hydroquinone</h4>
                <p class="description-engagement">Formules respectueuses</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-peau.png') }}" alt="Peau Noire">
                <h4 class="nom-engagement">Peau Noire</h4>
                <p class="description-engagement">Respect et valorisation</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-securite.png') }}" alt="Sécurité">
                <h4 class="nom-engagement">Sécurité</h4>
                <p class="description-engagement">Tests dermatologiques</p>
            </div>
            <div class="carte-engagement">
                <img src="{{ asset('public/assets/img/icon-responsabilite.png') }}" alt="Responsabilité">
                <h4 class="nom-engagement">Responsabilité</h4>
                <p class="description-engagement">Beauté durable</p>
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
        <h1 class="text-center">Où Nous Trouver</h1>
        <p class="subtitle">Découvrez nos produits dans plus de 500 points de vente à travers la Côte d'Ivoire</p>

        <div class="cards">
            @foreach ($partenaires as $part)

            <div class="card">
                <img src="{{ asset('storage/app/public/'.str_replace('\\','/',$part->image)) }}" alt="{{$part->nom}}">
                <div class="card-title"><a href="{{ $part->siteweb }}" target="_blank">{{$part->nom}}</a> </div>
                <div class="card-desc">{{$part->type_surface}}</div>
            </div>
            @endforeach
        </div>

        <div class="partner-section">
            <div class="partner-text">
                <h2>Devenir Partenaire</h2>
                <p>Rejoignez notre réseau de distributeurs et développez votre activité avec des produits de qualité reconnue.</p>
                <ul>
                    <li>Point de vente physique requis</li>
                    <li>Stockage minimum garanti</li>
                    <li>Respect de notre politique de marque</li>
                    <li>Relation commerciale durable</li>
                </ul>
                <a href="#" class="partner-button">Candidater Maintenant</a>

                <div class="contact-info">
                    <span>📧 info@elparadiscosmetic.net</span>
                    <span>📞 +225 0769563620</span>
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
        if(setting('site.showMsgHome')=='Oui')
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


 <audio controls autoplay>
  <source src="<?php echo asset('public/assets/img/audio-signature-french-ogg.ogg'); ?>" type="audio/ogg">
  <source src="<?php echo asset('public/assets/img/audio-signature-french.mp3'); ?>" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
@endsection


