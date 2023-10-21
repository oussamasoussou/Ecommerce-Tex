<footer class="footer__section footer__bg">
    <div class="container">
        <div class="main__footer section--padding">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer__widget">
                        <h2 class="footer__widget--title d-none d-md-block">Réseau social <button class="footer__widget--button" aria-label="footer widget button"></button>
                             
                        </h2>
                        <div class="footer__widget--inner">
                        @foreach ($information as $info )
                            <div class="footer__social">
                                <ul class="social__shear d-flex">
                                    <li class="social__shear--list">
                                        <a class="social__shear--list__icon" target="_blank" href="{{ $info->facebook }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="8.239" height="15.984" viewBox="0 0 11.239 20.984">
                                                <path  data-name="Icon awesome-facebook-f" d="M11.575,11.8l.583-3.8H8.514V5.542A1.9,1.9,0,0,1,10.655,3.49h1.657V.257A20.2,20.2,0,0,0,9.371,0c-3,0-4.962,1.819-4.962,5.112V8.006H1.073v3.8H4.409v9.181H8.514V11.8Z" transform="translate(-1.073)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Facebook</span>
                                        </a>
                                    </li>
                                    
                                    <li class="social__shear--list">
                                        <a class="social__shear--list__icon" target="_blank" href="{{ $info->instagram }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14.497" height="14.492" viewBox="0 0 19.497 19.492">
                                                <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                            </svg>
                                            <span class="visually-hidden">Instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</footer>
