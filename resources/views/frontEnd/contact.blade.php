@extends('frontEnd.layouts.app')

@section('content')
        <main class="main__content_wrapper">
        <section class="contact__section section--padding">
            <div class="container">
                <div class="section__heading text-center mb-40">
                    <h4 class="text__secondary mb-10"> <span style="font-size: 40px">  CONTACTER NOUS </span> </h4>
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
                                            <p class="contact__info--content__desc text-white">  <br> <a  >{{$info->tel1}}</a>  Où <a  >{{$info->tel2}}</a>   </p>
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
                                            <a class="contact__info--social__icon" target="_blank" href="https://www.facebook.com">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="7.667" height="16.524" viewBox="0 0 7.667 16.524">
                                                    <path data-name="Path 237" d="M967.495,353.678h-2.3v8.253h-3.437v-8.253H960.13V350.77h1.624v-1.888a4.087,4.087,0,0,1,.264-1.492,2.9,2.9,0,0,1,1.039-1.379,3.626,3.626,0,0,1,2.153-.6l2.549.019v2.833h-1.851a.732.732,0,0,0-.472.151.8.8,0,0,0-.246.642v1.719H967.8Z" transform="translate(-960.13 -345.407)" fill="currentColor"></path>
                                                </svg>
                                                <span class="visually-hidden">Facebook</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </main>
        @endsection