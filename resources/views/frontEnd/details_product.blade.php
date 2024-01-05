@extends('frontEnd.layouts.app')

@section('content')
<main class="main__content_wrapper"> <section class="product__details--section section--padding"> <div
    class="container">
    <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1">
    <div class="col">
        <div class="product__details--media d-flex">
            <div class="product__media--nav swiper">
            <div class="swiper-wrapper">
                @foreach($image_produit as $img)
                    <div class="swiper-slide swiper-slide-visible swiper-slide-next" style="height:75px;">
                        <div class="product__media--nav__items">
                            <img class="product__media--nav__items--img" src="/{{$img->img}}"  style="width:100px; height:80px">
                        </div>
                    </div>
                @endforeach
            </div>


            </div>
            <div class="product__media--right">
                <div class="product__media--preview swiper">
                    <div class="swiper-wrapper">
                        @foreach($image_produit as $img)
                            <div class="swiper-slide">
                                <div class="product__media--preview__items">
                                    <a href="/{{$img->img}}" class="glightbox" data-gallery="product-media-preview"
                                        data-title="Image {{$loop->iteration}}">
                                        <img class="product__media--nav__items--img" src="/{{$img->img}}" alt="product-img">
                                    </a>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>

                       <div class="col">
                        <div class="product__details--info">
                            <form action="#">
                                <!-- <h3 class="product__details--info__title mb-15">{{$produit->lib}}</h3>

                                <div class="product__details--info__price mb-10">
                                    @if($produit->prix_promo)
                                        <span style="text-decoration: line-through; color: red; font-size: 1.5rem; font-weight: 500;">
                                            {{ $produit->prix }}&nbsp;TND
                                        </span>
                                        <span class="current__price">
                                            {{ $produit->prix_promo }}&nbsp;TND
                                        </span>
                                    @else
                                        <span class="current__price">
                                            {{ $produit->prix }}&nbsp;TND
                                        </span>
                                    @endif
                                </div> 
                                <p class="product__details--info__desc mb-15" style="overflow-wrap: anywhere;">
                                    {{$produit->desc}}
                                </p> -->


                                <div class="d-flex align-items-center">
                                    <div style="flex: 1;">
                                        <h3 class="product__details--info__title mb-15"> {{$produit->lib}} </h3>
                                    </div>
                                    <div style="width: 90px;">
                                        <div class="product__details--info__price mb-10">
                                            @if($produit->prix_promo)
                                                <span style="text-decoration: line-through; color: red; font-size: 1.5rem; font-weight: 500;">
                                                    {{ $produit->prix }}&nbsp;TND
                                                </span>
                                                <span class="current__price">
                                                    {{ $produit->prix_promo }}&nbsp;TND
                                                </span>
                                            @else
                                                <span class="current__price">
                                                    {{ $produit->prix }}&nbsp;TND
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                 
                                </h3>

                                

                                <p class="product__details--info__desc mb-15" style="overflow-wrap: anywhere;">
                                    {{$produit->desc}}
                                </p>

                                @if(count($produit->couleurProduits) > 0)
                                    <div class="product__details--info__colors mb-20">
                                        <h4 class="product__details--info__colors--title">Couleurs Disponibles</h4>
                                        <ul class="product__details--info__colors--list">
                                            @foreach ($produit->couleurProduits as $couleurProduit)
                                                <li class="product__details--info__colors--item">
                                                    <div class="color-square" style="background-color: #{{ $couleurProduit->couleur->code }};"></div>
                                                   
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @if(count($produit->tailleProduits) > 0)
                                    <div class="product__details--info__colors mb-20">
                                        <h4 class="product__details--info__colors--title">Tailles Disponibles</h4>
                                        <ul class="product__details--info__colors--list">
                                            @foreach ($produit->tailleProduits as $tailleProduit)
                                                <li class="product__details--info__colors--item">
                                                    {{ $tailleProduit->taille->taille }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                
                                <div class="product__variant">
                                    <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                        <br>
                                    </div>
                                    <a class="product__card--btn primary__btn" onclick="ajouterArticle({{$produit}})">Ajouter au panier</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End product details section -->

                <!-- Start product details tab section -->
                <section class="product__details--tab__section section--padding">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <ul class="product__tab--one product__details--tab d-flex mb-30">
                    <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">
                        Description
                    </li>
                </ul>
                <div class="product__details--tab__inner border-radius-10">
                    <div class="tab_content">
                        <div id="description" class="tab_pane active show">
                            <div class="product__tab--content">
                                <div class="product__tab--content__step mb-30">
                                    <h2 class="product__tab--content__title h4 mb-10">
                                        {{$produit->lib}}
                                    </h2>
                                    <p class="product__tab--content__desc">
                                        {{$produit->desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

                <!-- End product details tab section -->

                <!-- Start product section -->
                <section class="product__section section--padding">
                    <div class="container">
                        <div class="section__heading text-center mb-50">
                            <h2 class="section__heading--maintitle text__secondary mb-10">Recommandé</h2>
                        </div>
                        <div class="product__inner">
                            <div class="row row-cols-lg-3 row-cols-md-3 row-cols-2 mb--n30">
                                @foreach($Listeproduit as $recomended)
                                <div class="col custom-col-2 mb-30">
                                    <article class="product__card">
                                        <div class="product__card--thumbnail">
                                            <a class="product__card--thumbnail__link display-block-detail"
                                                href="{{url('details-produit/'.$recomended->id)}}">
                                                @foreach ($recomended->img as $img )
                                                <img style="width: 370px;height: 319px;"
                                                    class="product__card--thumbnail__img product__primary--img display-block-detail"
                                                    src="/{{$img->img}}" alt="product-img">
                                                <img style="width: 370px;height: 319px;"
                                                    class="product__card--thumbnail__img product__secondary--img display-block-detail"
                                                    src="/{{$img->img}}" alt="product-img">
                                                @endforeach
                                            </a>
                                            <ul
                                                class="product__card--action d-flex align-items-center justify-content-center">
                                                <li class="product__card--action__list">
                                                    <a class="product__card--action__btn" title="Quick View"
                                                        href="{{url('details-produit/'.$recomended->id)}}">
                                                        <svg class="product__card--action__btn--svg"
                                                            xmlns="http://www.w3.org/2000/svg" width="24.51"
                                                            height="22.443" viewBox="0 0 512 512">
                                                            <path
                                                                d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z"
                                                                fill="none" stroke="currentColor" stroke-miterlimit="10"
                                                                stroke-width="32"></path>
                                                            <path fill="none" stroke="currentColor"
                                                                stroke-linecap="round" stroke-miterlimit="10"
                                                                stroke-width="32" d="M338.29 338.29L448 448"></path>
                                                        </svg>
                                                        <span class="visually-hidden">Quick View</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product__card--content text-center">

                                            <h3 class="product__card--title"><a
                                                    href="{{url('details-produit/'.$recomended->id)}}">{{$recomended->lib}}
                                                </a></h3>
                                            <div class="product__card--price">
                                                @if($recomended->prix_promo)
                                                    <span style="text-decoration: line-through; color: red;">{{ $recomended->prix }}&nbsp;TND</span>
                                                    <span style="color: green;">{{ $recomended->prix_promo }}&nbsp;TND</span>
                                                @else
                                                    <span style="color: red;">{{ $recomended->prix }}&nbsp;TND</span>
                                                @endif

                                            </div>




                                            <a class="product__card--btn primary__btn"
                                                onclick="ajouterArticle({{$recomended}})">Ajouter au panier</a>
                                        </div>
                                    </article>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End product section -->
</main>
@endsection