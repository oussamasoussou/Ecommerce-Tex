@extends('frontEnd.layouts.app')

@section('content')
<main class="main__content_wrapper">
        <section class="product__details--section section--padding">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1">
                    <div class="col">
                        <div class="product__details--media d-flex">
                            <div class="product__media--nav swiper">
                                <div class="swiper-wrapper">
                                @foreach($image_produit as $img)
                                    <div class="swiper-slide">
                                        <div class="product__media--nav__items">
                                            <img class="product__media--nav__items--img" src="/{{$img->img}}" >
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="product__media--right">
                                <div class="product__media--preview  swiper">
                                    <div class="swiper-wrapper">
                                    @foreach($image_produit as $img)
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                            <a href="/{{$img->img}}" class="glightbox" data-gallery="product-media-preview" data-title="Image {{$loop->iteration}}">
                                                <img class="product__media--nav__items--img" src="/{{$img->img}}" alt="product-img">
                                            </a>
                                                <!-- <div class="product__media--view__icon">
                                                    <a class="product__media--view__icon--link glightbox" href="assets/img/product/big-product1.webp" data-gallery="product-media-preview">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 18 18">
                                                            <image  width="18" height="18" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAABHNCSVQICAgIfAhkiAAAAVhJREFUOE/llLtKA0EUhjdY+BD6ABaW3tIYTWEhiKKCCGIgqGhCgqXvoQFRQdBGERQvUaJFgilVRHwF8RWCWqzfD7OyjrPZ7R342HP2nP1n58yZSfm+/+F53ivUoAseoALtxirBIXiHLPSlEHrBaMGyEYzR+BXuwduHTgltYNzBKSxAM6HSAHknMAf9EqpjjEIGzmAK7mPE0sSrRkQ/cSWhIkZQE4kdwzxoAteQiCbMgeqqsSIhO3nEJK7xPLKC0/h7oT/5CbuEFByDCShDeKZNfC3lwp49SihiVdGv/6GQdm4WSlaxt/AvQ9vedteCZlsn68Aqr/pLPfenaVVsHcBt80HQbIv4txF75GravIQafKClDMKNq9kcgspXd0+CjlM1OLTXZu1LPNVwScYwSYcwA2kJPWJ8QQGekyiEcnqxd6BDQp8YupPOoRueYDdGME9c18gbjMv+BiJYeHc6xpjnAAAAAElFTkSuQmCC"/>
                                                        </svg>                                                              
                                                        <span class="visually-hidden">Media Gallery</span>
                                                    </a>
                                                </div> -->
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
                                <h3 class="product__details--info__title mb-15">{{$produit->lib}}</h3>
                                <div class="product__details--info__rating d-flex align-items-center mb-15">
                                    <ul class="rating product__list--rating d-flex">
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list">
                                            <span class="rating__list--icon">
                                                <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="13.105" height="13.732" viewBox="0 0 10.105 9.732">
                                                <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                                </svg>
                                            </span>
                                        </li>
                                        <li class="rating__list"><span class="rating__list--text text__secondary">( 5.0)</span></li>
                                    </ul>
                                </div>
                                <div class="product__details--info__price mb-10">
                                        @if($produit->prix_promo)
                                            <span style="text-decoration: line-through; color: red; font-size: 1.5rem;  font-weight: 500;">{{ $produit->prix }}&nbsp;TND</span>
                                            <span class="current__price">{{ $produit->prix_promo }}&nbsp;TND</span>
                                        @else
                                            <span style="color: red;">{{ $produit->prix }}&nbsp;TND</span>
                                        @endif
                                </div> 
                                <p class="product__details--info__desc mb-15" style="overflow-wrap: anywhere;">{{$produit->small_desc}}</p>
                                <div class="product__variant">
                                    <div class="product__variant--list quantity d-flex align-items-center mb-20">
                                    <br>
                                    </div>
                                    <a class="product__card--btn primary__btn"  onclick="ajouterArticle({{$produit}})" >Ajouter au panier</a>
                                   
                                </div>
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
                            <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>
                        </ul>
                        <div class="product__details--tab__inner border-radius-10">
                            <div class="tab_content">
                                <div id="description" class="tab_pane active show">
                                    <div class="product__tab--content">
                                        <div class="product__tab--content__step mb-30">
                                            <h2 class="product__tab--content__title h4 mb-10">{{$produit->lib}}</h2>
                                            <p class="product__tab--content__desc" style="overflow-wrap: anywhere;">{{$produit->desc}}</p>
                                            
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
                                    <a class="product__card--thumbnail__link display-block" href="{{url('details-produit/'.$recomended->id)}}" >
                                        @foreach ($recomended->img as $img )
                                        <img style="width: 370px;height: 319px;" class="product__card--thumbnail__img product__primary--img display-block" src="/{{$img->img}}" alt="product-img">
                                        <img style="width: 370px;height: 319px;" class="product__card--thumbnail__img product__secondary--img display-block" src="/{{$img->img}}" alt="product-img">
                                        @endforeach
                                     </a>
                                    <ul class="product__card--action d-flex align-items-center justify-content-center"> 
                                        <li class="product__card--action__list">
                                            <a class="product__card--action__btn" title="Quick View"    href="{{url('details-produit/'.$recomended->id)}}">
                                                <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                <span class="visually-hidden">Quick View</span>  
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product__card--content text-center">
                                   
                                    <h3 class="product__card--title"><a href="{{url('details-produit/'.$recomended->id)}}">{{$recomended->lib}} </a></h3>
                                    <div class="product__card--price">
                                        <span class="current__price">{{$recomended->prix}} &nbsp; TND</span>
                                   
                                    </div>

                                    
                   
                                 
                                    <a class="product__card--btn primary__btn"  onclick="ajouterArticle({{$recomended}})" >Ajouter au panier</a>
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