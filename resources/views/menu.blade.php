
@if(!isset($innerLoop))
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
@else
<ul class="">
@endif

@php

    if (Voyager::translatable($items)) {
        $items = $items->load('translations');
    }

@endphp

@foreach ($items as $item)

    @php
        $originalItem = $item;
        if (Voyager::translatable($item)) {
            $item = $item->translate($options->locale);
        }

        $listItemClass = null;
        $linkAttributes =  null;
        $styles = null;
        $icon = null;
        $submenu = null;
        $submenuToogle=null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
            $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
            $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$originalItem->children->isEmpty()) {
            $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
           // $caret = '<i class="fa fa-angle-down"></i>';
            $submenu='dropdown';
           $submenuToogle='dropdown-toggle';
        }
        if(url($item->link()) == url()->current()){
                $listItemClass = 'active';
            }else{
                $listItemClass = '';
            }
            $url= $item->link();
            $https='~https://~';
	$http='~http://~';
	if((!(preg_match($http,$url))) && (!(preg_match($https,$url))))
    {
        $url=url(App()->getLocale().'/'.$item->link());
    }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
            $icon = '<i class="' . $item->icon_class . '"></i>';
        }

    @endphp

    <li <?php if(!$originalItem->children->isEmpty()){ ?>class="{{ $submenu }}"<?php } ?>>
        <a href="{{ $url }}" {!! $linkAttributes ?? '' !!}>
            {!! $icon !!}
           {{ $item->title }} {!! $caret !!}
        </a>

        @if(!$originalItem->children->isEmpty())
        <ul class="dropdown-menu">
                @foreach($originalItem->children as $items)
                @php

                if (Voyager::translatable($items)) {
                    $items = $items->translate($options->locale);
                }
                $urls= $items->link();
            $https='~https://~';
                $http='~http://~';
                if((!(preg_match($http,$urls))) && (!(preg_match($https,$urls))))
                {
                    $urls=url(App()->getLocale().'/'.$items->link());
                }
                @endphp
                    <li><a href="{{ $urls }}" target="{{ $items->target }}">{{$items->title}} </a> <li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach

</ul>
