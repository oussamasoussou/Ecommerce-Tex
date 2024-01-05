@extends('frontEnd.layouts.app')

@section('content')

<main class="main__content_wrapper">
  
<!-- <section class="hero__slider--section slider__section--bg ">
        <div class="hero__slider--inner position__relative">
            <div style="padding:50px">
                <div class="row">
                    <div class="col-12">
                        <div class="hero__slider--activation swiper">
                            <div class="hero__slider--wrapper swiper-wrapper">
                            @foreach ($carousel as $car )
                                    <div class="swiper-slide ">
                                        <div class="hero__slider--items">
                                            <div class="hero__slider--thumbnail">
                                                <img class=" display-block" src="{{$car->img}}"  alt="slider img" style="height:380px; width: 100%; ">
                                            </div>
                                            <div class="slider__content text-center">
                                                <h2 class="slider__content--maintitle h1">{{ $car->lib }} </h2>
                                                <p class="slider__content--desc d-sm-2-none">{{ $car->desc }}</p>  
                                                
                                            </div> 
                                            
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->


    
    <section id="template-mo-zay-hero-carousel" class="carousel slide carouselheight" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            @foreach ($carousel as $key => $car)
                <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="{{ $key }}" @if($key == 0) class="active" @endif></li>
            @endforeach
        </ol>
        <div class="carousel-inner" style="position: relative; width: 100%; height: 100%;">
            @foreach ($carousel as $key => $car)
                <div class="carousel-item @if($key == 0) active @endif" style="position: relative; width: 100%; height: 100%;">
                    <img class="img-fluid" src="{{ $car->img }}" alt="" style="width: auto; height: auto; object-fit: cover;">
                    <div class="container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: #fff;">
                        <h1 class="h1 text-success">{{ $car->lib }}</h1>
                        <h3 class="h2">{{ $car->desc }}</h3>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </section>





    <!-- End blog section -->
    <section class="image__with--text__section section--padding">
        <div class="container">
        @foreach($Apropos as $prop)
            <div class="row row-cols-md-2 row-cols-1  align-items-center">
                <div class="col">
                    <div class="image__with--text__thumbnail">
                        <img class="display-block-index" src="{{$prop->img}}" alt="drone-image">
                    </div>
                </div>
                <div class="col">
                    <div class="image__with--text__content">
                        <h2 class="image__with--text__title mb-18"> <span style="color:#045b62 ; text-shadow: 2px 1px 2px #cbd5d6; font-size:25px">A PROPOS DE NOUS</span> </h2>
                        <p class="image__with--text__desc mb-25">{!!html_entity_decode($prop->desc)!!}</p> 
                        <div class="image__with--text__content--footer d-flex">  
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="blog__section blog__section--bg section--padding">
        <div class="container">
            <div class="section__heading text-center mb-50">
                <h5 class="section__heading--maintitle text__secondary mb-10"> NOS MEILLEURS OFFRES</h5> 
            </div>
            <div class="blog__section--inner blog__swiper--activation swiper">
                <div class="swiper-wrapper">
                @foreach ($produit as $prod )
                    <!-- <div class="swiper-slide">
                        <article class="blog__card">
                            <div class="blog__card--thumbnail">
                                @foreach ($prod->img as $img )
                                <a class="blog__card--thumbnail__link display-block" href="{{url('details-produit/'.$prod->id)}}" ><img class="blog__card--thumbnail__img display-block" src="{{$img->img}}"  alt="blog-img"></a>
                                @endforeach
                            </div>
                            <div class="blog__card--content">
                                <ul class="blog__card--meta d-flex justify-content-center">
                                    <li class="blog__card--meta__text text__secondary">
                                        {{$prod->lib}}
                                    </li>
                                    <li class="blog__card--meta__text"> {{ $prod->prix }}TND </li>
                                </ul>
                                <a class="product__card--btn primary__btn" onclick="ajouterArticle({{$prod}})">Ajouter au panier</a>
                                <div id="message" style="color:#13737e;text-shadow: 2px 1px 2px #cbd5d6;"></div>
                            </div>
                        </article>
                    </div> -->

                    <div class="swiper-slide">
                        <article class="blog__card" style="width: 100%; text-align: center;">
                            <div class="blog__card--thumbnail" style="display: flex; align-items: center; justify-content: center; overflow: hidden;">
                                <a class="blog__card--thumbnail__link display-block" href="{{url('details-produit/'.$prod->id)}}">
                                    <img class="blog__card--thumbnail__img display-block img-fluidd" src="{{$prod->img->first()->img}}" alt="blog-img" >
                                </a>
                            </div>
                            <div class="blog__card--content" style="padding: 15px;">
                                <ul class="blog__card--meta d-flex justify-content-center" style="margin: 0; padding: 0; list-style: none;">
                                    <li class="blog__card--meta__text text__secondary" style="font-size: 16px; font-weight: bold; color: black; text-shadow: 2px 1px 2px #cbd5d6;">
                                    <span style="padding-top:10px">{{$prod->lib}}</span>                                        <br> 
                                        <div style="padding-bottom:20px;"></div>
                                        @if($prod->prix_promo)
                                            <span style="text-decoration: line-through; color: red;">{{ $prod->prix }}&nbsp;TND</span>
                                            <span style="color: green;">{{ $prod->prix_promo }}&nbsp;TND</span>
                                        @else
                                            <span style="color: red;">{{ $prod->prix }}&nbsp;TND</span>
                                        @endif
                                    </li>
                                </ul>
                                <a class="product__card--btn primary__btn" onclick="ajouterArticle({{$prod}})">Ajouter au panier</a>
                                <div id="message" style="color:#13737e;text-shadow: 2px 1px 2px #cbd5d6;"></div>
                            </div>
                        </article>
                    </div>

                @endforeach
                </div>
                <div class="swiper__nav--btn swiper-button-next"></div>
                <div class="swiper__nav--btn swiper-button-prev"></div>
            </div>
        </div>
    </section>

        

    </main>
    @endsection