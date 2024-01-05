@extends('frontEnd.layouts.app')

@section('content')

        <main class="main__content_wrapper">
        <!-- Start breadcrumb section -->
        <section class="contact__section " style="padding:9rem 0rem 0rem 0rem">
            <div class="container">
                    <div class="section__heading text-center mb-40">
                        <h4 class="text__secondary mb-10"> <span style="font-size: 30px">  À PROPOS DE NOUS</span> </h4>
                    </div>
            </div>
        </section>
        @foreach ($propos as $prop)
            <section class="about__section border-bottom" style="padding:0rem 0rem 20rem 0rem">
                <div class="container">
                    <div class="row row-cols-lg-2 row-cols-md-2 row-cols-1 align-items-center">
                        <div class="col">
                            <div class="about__content">
                                <h2 class="about__content--title mb-18">{{ $prop->titre }}</h2>
                                <div class="about__content--step mb-25">
                                    <p class="about__content--desc mb-20">{!!html_entity_decode($prop->desc)!!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="about__thumbnail">
                                <img class="display-block" src="{{ $prop->img }}" alt="about-thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endforeach
    </main>
    <!-- Scroll top bar -->
    <button aria-label="scroll top btn" id="scroll__top"><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M112 244l144-144 144 144M256 120v292"/></svg></button>
    @endsection