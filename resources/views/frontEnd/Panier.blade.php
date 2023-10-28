@extends('frontEnd.layouts.app')

@section('content')
<main class="main__content_wrapper">

    <!-- Start breadcrumb section -->

    <!-- End breadcrumb section -->
    <div class="checkout__page--area section--padding">
        <div class="container">
            <form method="POST" action="{{ url('confirmer_commande')}}" class="row">
                @csrf
                <div class="col-lg-7 col-md-6">
                    <div class="main checkout__mian">


                        <div class="checkout__content--step section__shipping--address">
                            <div class="section__header mb-25">
                                <h2 class="section__header--title h3">Données personnelles</h2>
                            </div>
                            <div class="section__shipping--address__content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                        <div class="checkout__input--list ">
                                            <label class="checkout__input--label mb-5" for="input1">Nom <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" required
                                                placeholder="Votre nom" id="nom" name="nom" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input2">Prénom <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" required
                                                placeholder="Votre prenom" id="prenom" name="prenom" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input3">Email <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" required
                                                placeholder="Votre email" id="email" name="email" type="email">
                                        </div>
                                    </div>
                                    <div class="col-12 mb-20">
                                        <div class="checkout__input--list">
                                            <label class="checkout__input--label mb-5" for="input4">Téléphone <span
                                                    class="checkout__input--label__star">*</span></label>
                                            <input class="checkout__input--field border-radius-5" required
                                                placeholder="Votre numéro téléphone" id="phone" name="phone"
                                                type="number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <aside class="checkout__sidebar sidebar border-radius-10">
                        <h2 class="checkout__order--summary__title text-center mb-15">Votre commande</h2>
                        <div class="cart__table checkout__product--table">
                            <table class="cart__table--inner">
                                <tbody class="cart__table--body">
                                    @foreach ($produit as $prod )
                                    <input type="hidden" value="{{$prod->id}}" name="liste_product[]" id="liste_product[]">
                                    <input type="hidden" value="{{$prod->quantite}}" name="quantite_product[]"
                                        id="quantite_product[]">
                                    <tr class="cart__table--body__items">
                                        <td class="cart__table--body__list">
                                            <div class="product__image two d-flex align-items-center">
                                                <div class="product__thumbnail border-radius-5">
                                                    <a class="display-block" href="#"><img
                                                            class="display-block border-radius-5" src="{{$prod->img}}"
                                                            alt="cart-product"
                                                            style="width:68px;height:50px"></a>
                                                    <span class="product__thumbnail--quantity">{{$prod->quantite}}</span>
                                                </div>
                                                <div class="product__description">
                                                    <h4 class="product__description--name"><a
                                                            href="#">{{ $prod->lib }}</a></h4>
                                                    <span class="product__description--variant">Disponible</span>
                                                </div>
                                            </div>
                                            <!-- @if ($prod->couleurProduits->isNotEmpty())
                                                <div class="checkout__input--list">
                                                    <label>Choisissez une couleur:</label>
                                                    <div class="color-options">
                                                        @foreach ($prod->couleurProduits as $couleurProduit)
                                                            <span style="color: #{{ $couleurProduit->couleur->html_code }};">{{ $couleurProduit->couleur->nom }}</span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif -->
                                            <div style=padding:5px></div>

                                        </td>
                                        <td class="cart__table--body__list">
                                            <span class="cart__price">{{ $prod->prix }} &nbsp;TND</span>
                                        </td>

                                        
                                    </tr>
                                       
                                    </input>
                                    <tr>
                                        <td>
                                            @if ($prod->couleurProduits->isNotEmpty())
                                                <div class="checkout__input--list">
                                                    <select name="couleur[]" id="couleur" class="checkout__input--field border-radius-5" required>
                                                        <option value="">Choisissez une couleur</option>
                                                        @foreach ($prod->couleurProduits as $couleurProduit)
                                                            <option value="{{ $couleurProduit->couleur->id }}" style="color: #{{ $couleurProduit->couleur->html_code }};">
                                                                {{ $couleurProduit->couleur->nom }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            @endif
                                        </td>
                                    </tr>


                                    <tr>
                                    <td>
                                        @if ($prod->tailleProduits->isNotEmpty())
                                            <div class="checkout__input--list">
                                                <select class="checkout__input--field border-radius-5" required
                                                    name="taille[]" id="taille">
                                                    <option value="Choisissez votre taille">Choisissez votre taille
                                                    </option>
                                                    @foreach ($prod->tailleProduits as $tailleProduit)
                                                    <option value="{{$tailleProduit->taille->id}}">
                                                        {{ $tailleProduit->taille->taille }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        @endif
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="minicart__amount">

                            <div class="minicart__amount_list d-flex justify-content-between">
                                <span>Total:</span>
                                <span><b>{{$total}}&nbsp; TND</b></span>
                            </div>
                        </div>
                        <button class="checkout__now--btn primary__btn" type="submit">Confirmer votre
                            commande</button>
                    </aside>
                </div>
            </form>
        </div>
    </div>

    <button aria-label="scroll top btn" id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon"
            viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round"
            stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292" /></svg></button>


    @endsection
