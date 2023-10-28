@extends('frontEnd.layouts.app')

@section('content')
        <main class="main__content_wrapper">
       
        <!-- Start shop section -->
        <section class="shop__section section--padding">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-xl-9 col-lg-12">
                        
                        <div class="shop__product--wrapper">
                            <div class="tab_content">
                                <div id="product_grid" class="tab_pane active show">
                                    <div class="product__section--inner product__grid--inner">
                                        <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 mb--n30">
                                        @foreach ($produit as $prod )
                                            <div class="col custom-col-3 mb-30">
                                                <article class="product__card">
                                                    <div class="product__card--thumbnail">
                                                        <a class="product__card--thumbnail__link display-block" href="{{url('details-produit/'.$prod->id)}}">
                                                            @foreach ($prod->img as $key=> $img )
                                                            @if($key==0)
                                                            <img class="product__card--thumbnail__img product__primary--img display-block" src="/{{$img->img}}" alt="product-img" style="    height: 255px;">
                                                            @endif
                                                            @if($key==0)
                                                            <img class="product__card--thumbnail__img product__secondary--img display-block" src="/{{$img->img}}" alt="product-img" style="    height: 255px;">

                                                            @endif
                                                            @endforeach
                                                        </a>
                                                        <ul class="product__card--action d-flex align-items-center justify-content-center">
                                                            <li class="product__card--action__list">
                                                                <a href="{{url('details-produit/'.$prod->id)}}" class=" " title="Quick View"    >
                                                                    <svg class="product__card--action__btn--svg" xmlns="http://www.w3.org/2000/svg" width="24.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                                                                    <span class="visually-hidden">Quick View</span>  
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        @if($prod->sale==true)
                                                        <div class="product__badge">
                                                            <span class="product__badge--items sale">SOLDES</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    <div class="product__card--content text-center">
                                                        <span class="product__card--meta__tag" style="    overflow-wrap: anywhere;">{{ $prod->lib }}</span>
                                                        <h3 class="product__card--title"><a style="    overflow-wrap: anywhere;">{{ $prod->small_desc }}  </a></h3>
                                                        <div class="product__card--price">
                                                        @if($prod->prix_promo)
                                                            <span style="text-decoration: line-through; color: red;">{{ $prod->prix }}&nbsp;TND</span>
                                                            <span style="color: green;">{{ $prod->prix_promo }}&nbsp;TND</span>
                                                        @else
                                                            <span style="color: red;">{{ $prod->prix }}&nbsp;TND</span>
                                                        @endif
                                                        </div>
                                                        <!-- Ajout de la sélection de couleur -->
           
                                                       <a class="product__card--btn primary__btn"  onclick="ajouterArticle({{$prod}})" >Ajouter au panier</a>
                                                    </div>
                                                </article>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                             
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop section -->
        

        </main>
    <button aria-label="scroll top btn" id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    

    @endsection