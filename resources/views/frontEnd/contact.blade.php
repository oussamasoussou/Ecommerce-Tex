@extends('frontEnd.layouts.app')

@section('content')
        <main class="main__content_wrapper">
        <section class="contact__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h4 class="text__secondary mb-10"> <span style="font-size: 30px">  CONTACTER NOUS </span> </h4>
                </div>
                <div class="main__contact--area">
                    <div class="row align-items-center row-md-reverse">
                        @foreach ($information as $info)
                        <div class="col-lg-5">
                            <div class="contact__info border-radius-10">
                                <div class="contact__info--items">
                                    <h3 class="contact__info--content__title text-white mb-15">Téléphone </h3>
                                    <div class="contact__info--items__inner d-flex">
                                        <div class="contact__info--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31.568" height="31.128" viewBox="0 0 31.568 31.128">
                                                <path id="ic_phone_forwarded_24px" d="M26.676,16.564l7.892-7.782L26.676,1V5.669H20.362v6.226h6.314Zm3.157,7a18.162,18.162,0,0,1-5.635-.887,1.627,1.627,0,0,0-1.61.374l-3.472,3.424a23.585,23.585,0,0,1-10.4-10.257l3.472-3.44a1.48,1.48,0,0,0,.395-1.556,17.457,17.457,0,0,1-.9-5.556A1.572,1.572,0,0,0,10.1,4.113H4.578A1.572,1.572,0,0,0,3,5.669,26.645,26.645,0,0,0,29.832,32.128a1.572,1.572,0,0,0,1.578-1.556V25.124A1.572,1.572,0,0,0,29.832,23.568Z" transform="translate(-3 -1)" fill="currentColor"/>
                                            </svg>
                                        </div>
                                        <div class="contact__info--content">
                                        <p class="contact__info--content__desc text-white">
                                            <br>
                                            <a>{{$info->tel1}}</a>
                                            @if($info->tel2)
                                                Où <a>{{$info->tel2}}</a>
                                            @endif
                                        </p>                                        
                                    </div>
                                    </div>
                                </div>
                                <div class="contact__info--items">
                                    <h3 class="contact__info--content__title text-white mb-15">Email </h3>
                                    <div class="contact__info--items__inner d-flex">
                                        <div class="contact__info--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                                <path id="ic_email_24px" d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z" transform="translate(-2 -4)" fill="currentColor"/>
                                            </svg>  
                                        </div>
                                        <div class="contact__info--content">
                                            <p class="contact__info--content__desc text-white"> <a href="mailto:info@example.com">{{ $info->email }}</a></p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__info--items">
                                    <h3 class="contact__info--content__title text-white mb-15">Adresse</h3>
                                    <div class="contact__info--items__inner d-flex">
                                        <div class="contact__info--icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31.57" height="31.13" viewBox="0 0 31.57 31.13">
                                                <path id="ic_account_balance_24px" d="M5.323,14.341V24.718h4.985V14.341Zm9.969,0V24.718h4.985V14.341ZM2,32.13H33.57V27.683H2ZM25.262,14.341V24.718h4.985V14.341ZM17.785,1,2,8.412v2.965H33.57V8.412Z" transform="translate(-2 -1)" fill="currentColor"/>
                                            </svg> 
                                        </div>
                                        <div class="contact__info--content">
                                            <p class="contact__info--content__desc text-white">  {{$info->rue}} ,
                                                {{$info->localisation}}
                                                </p> 
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__info--items">
                                    <h3 class="contact__info--content__title text-white mb-15">Réseaux Sociaux</h3>
                                    <ul class="contact__info--social d-flex">
                                        <li class="contact__info--social__list">
                                            <a class="contact__info--social__icon" target="_blank" href="{{$info->facebook}}">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
                                            </a>
                                        </li>
                                        <li class="contact__info--social__list">
                                            <a class="contact__info--social__icon" target="_blank" href="{{$info->instagram}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"> <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/> </svg>


                                                <span class="visually-hidden">Instagram</span>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-7">
                            <div class="contact__form">
                                <form class="contact__form--inner" action="{{ url('contact')}}" method="POST" enctype="multipart/form-data">
                                    @csrf 
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input1">Nom <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="nom" id="input1" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input2">Prénom  <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="prenom" id="input2" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input3"> Téléphone <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="tel" id="input3" type="number" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <div class="contact__form--list mb-20">
                                                <label class="contact__form--label" for="input4">Email <span class="contact__form--label__star">*</span></label>
                                                <input class="contact__form--input" name="email" id="input4"  type="email" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact__form--list mb-10">
                                                <label class="contact__form--label" for="input5">Votre message <span class="contact__form--label__star">*</span></label>
                                                <textarea class="contact__form--textarea" name="desc" id="input5" required ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="contact__form--btn primary__btn" type="submit">Envoyer</button>  
                                    <p class="form-messege"></p>
                                </form>
                            </div>
                            @include('frontEnd.partials._panier')

                        </div>
                    </div>
                </div>
            </div>
        </section>

        </main>
        @endsection