@extends('frontEnd.layouts.app')

@section('content')
    
    
        <main class="main__content_wrapper">
       
        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10"> </h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Accueil</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__secondary">Confirmation commande</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h2 class="section__heading--maintitle text__secondary mb-10">Votre commande est en cours de préparation </h2>
                    <p class="section__heading--desc">l'un de nos agents vous contactera dans le plus brefs délais </p>
                </div>
               
            </div>
        </section>
        <!-- End breadcrumb section -->
      
             <!-- Start shop section -->
     
        <!-- End shop section -->
      

        </main>
        @endsection