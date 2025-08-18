
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

  <!-- Start About
    ============================================= -->
    <div class="about-style-three-area overflow-hidden pt-20 pt-md-120 pt-xs-70">
        <div class="container">
            <div class="course-listing-contentes style-two">

                <div class="row item-flex center">

                    <div class="col-lg-6">
                        <div class="content">
                            <!-- Tab Nav -->

                            <!-- End Tab Nav -->
                        </div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <div class="right">
                            <form class="course-search-form" action="#">
                                <div class="input-group">
                                    <select name="pays" id="pays" class="form-control">
                                        <option value="">Selectionnez un pays</option>
                                @foreach($pays as $nom)
                                    <option value="{{ $nom->iso3 }}" {{ request()->pays == $nom->iso3 ? 'selected' : '' }}>{{ $nom->nicename }}</option>
                                @endforeach
                            </select>
                                    <button type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </form>
                            <a href="#">Filter <i class="fas fa-filter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="cards">
                    @foreach ($partenaires as $part)

                    <div class="col-lg-3 col-md-12 mt-30 card2">
                        <a href="{{ $part->siteweb }}" target="_blank"><img src="{{ asset('storage/app/public/'.str_replace('\\','/',$part->image)) }}" alt="{{$part->nom}}" style="height: 325px;"></a>
                        <div class="card-title"><a href="{{ $part->siteweb }}" target="_blank">{{$part->nom}}</a> </div>
                        <div class="card-desc">{{$part->pays->nicename}} | {{$part->type_surface}}</div>
                    </div>
                    @endforeach
                </div>
        </div>
    </div>
    <!-- End About -->

<br>
@endsection

@push('script')
    <script>
 $('form select').on('change', function() {
            $(this).closest('form').submit();
        });
    </script>
@endpush
