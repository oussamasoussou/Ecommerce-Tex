<header class="header__section">
    <!-- Start Header topbar -->
    @foreach ($information as $info )

    <div class="header__topbar bg__secondary color-scheme-2">
        <div class="container">
            <div class="header__topbar--inner d-flex align-items-center justify-content-between">
                <ul class="header__contact--info style3 d-flex align-items-center">
                    <li class="header__contact--info__list text-white">
                        <svg class="header__contact--info__icon" xmlns="http://www.w3.org/2000/svg" width="20.57" height="13.13" viewBox="0 0 31.57 31.13">
                            <path  d="M30.413,4H5.157C3.421,4,2.016,5.751,2.016,7.891L2,31.239c0,2.14,1.421,3.891,3.157,3.891H30.413c1.736,0,3.157-1.751,3.157-3.891V7.891C33.57,5.751,32.149,4,30.413,4Zm0,7.783L17.785,21.511,5.157,11.783V7.891l12.628,9.728L30.413,7.891Z" transform="translate(-2 -4)" fill="currentColor"></path>
                        </svg>
                        <a class="text-white" href="mailto:{{ $info->email }}"> {{ $info->email}} </a>
                    </li>
                    <li class="header__contact--info__list text-white">
                        <svg class="header__contact--info__icon" xmlns="http://www.w3.org/2000/svg" width="12" height="14" viewBox="0 0 14 18">
                            <path d="M12,2C8.13,2,5,4.817,5,8.3,5,13.025,12,20,12,20s7-6.975,7-11.7C19,4.817,15.87,2,12,2Zm0,8.55A2.386,2.386,0,0,1,9.5,8.3,2.386,2.386,0,0,1,12,6.05,2.386,2.386,0,0,1,14.5,8.3,2.386,2.386,0,0,1,12,10.55Z" transform="translate(-5 -2)" fill="currentColor"></path>
                        </svg>
                        {{ $info->localisation }}
                    </li>
                </ul>
                <div class="header__top--sidebar d-flex align-items-center">
               
                    <ul class="header__social d-flex">
                        <li class="header__social--list">
                            <a class="header__social--list__icon" target="_blank" href="{{ $info->facebook }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10.239" height="17.984" viewBox="0 0 11.239 20.984">
                                    <path  data-name="Icon awesome-facebook-f" d="M11.575,11.8l.583-3.8H8.514V5.542A1.9,1.9,0,0,1,10.655,3.49h1.657V.257A20.2,20.2,0,0,0,9.371,0c-3,0-4.962,1.819-4.962,5.112V8.006H1.073v3.8H4.409v9.181H8.514V11.8Z" transform="translate(-1.073)" fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Facebook</span>
                            </a>
                        </li>
                        <li class="header__social--list">
                            <a class="header__social--list__icon" target="_blank" href="{{ $info->instagram }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17.497" height="17.492" viewBox="0 0 19.497 19.492">
                                    <path  data-name="Icon awesome-instagram" d="M9.747,6.24a5,5,0,1,0,5,5A4.99,4.99,0,0,0,9.747,6.24Zm0,8.247A3.249,3.249,0,1,1,13,11.238a3.255,3.255,0,0,1-3.249,3.249Zm6.368-8.451A1.166,1.166,0,1,1,14.949,4.87,1.163,1.163,0,0,1,16.115,6.036Zm3.31,1.183A5.769,5.769,0,0,0,17.85,3.135,5.807,5.807,0,0,0,13.766,1.56c-1.609-.091-6.433-.091-8.042,0A5.8,5.8,0,0,0,1.64,3.13,5.788,5.788,0,0,0,.065,7.215c-.091,1.609-.091,6.433,0,8.042A5.769,5.769,0,0,0,1.64,19.341a5.814,5.814,0,0,0,4.084,1.575c1.609.091,6.433.091,8.042,0a5.769,5.769,0,0,0,4.084-1.575,5.807,5.807,0,0,0,1.575-4.084c.091-1.609.091-6.429,0-8.038Zm-2.079,9.765a3.289,3.289,0,0,1-1.853,1.853c-1.283.509-4.328.391-5.746.391S5.28,19.341,4,18.837a3.289,3.289,0,0,1-1.853-1.853c-.509-1.283-.391-4.328-.391-5.746s-.113-4.467.391-5.746A3.289,3.289,0,0,1,4,3.639c1.283-.509,4.328-.391,5.746-.391s4.467-.113,5.746.391a3.289,3.289,0,0,1,1.853,1.853c.509,1.283.391,4.328.391,5.746S17.855,15.705,17.346,16.984Z" transform="translate(0.004 -1.492)" fill="currentColor"/>
                                </svg>
                                <span class="visually-hidden">Instagram</span>
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
    </div>
    @endforeach
    <div class="main__header position__relative header__sticky" style="box-shadow: 0 0 7px rgba(0, 0, 0, 0.15);">
        <div class="container">
            <div class="main__header--inner d-flex justify-content-between align-items-center">
                <div class="offcanvas__header--menu__open ">
                    <a class="offcanvas__header--menu__open--btn" href="javascript:void(0)" data-offcanvas>
                        <svg xmlns="http://www.w3.org/2000/svg" class="ionicon offcanvas__header--menu__open--svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M80 160h352M80 256h352M80 352h352"/></svg>
                        <span class="visually-hidden">Offcanvas Menu Open</span>
                    </a>
                </div>
                <div class="main__logo">
                    @foreach ($information as $info )
                        <h1 class="main__logo--title"><a class="main__logo--link" href="{{ url('/') }}"><img style="width: 155px;height:60px" src="{{ asset($info->logo) }}" alt="logo-img"></a></h1>
                    @endforeach
                </div>
                <div class="header__menu d-none d-lg-block">
                    <nav class="header__menu--navigation">
                        <ul class="d-flex">
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="{{ url('/') }}"><b>ACCUEIL</b>  </a>
                            </li> 
                            <li class="header__menu--items">
                                <a class="header__menu--link" onclick="toggleSubMenu()"><b> NOS PRODUITS </b><span class="menu__plus--icon">+</span></a>
                                <ul id="productSubMenu" class="header__sub--menu">
                                    @foreach ($listeCateg as $cat)
                                        <li class="header__sub--menu__items">
                                            <a href="{{ url('produit/'.$cat->id) }}" class="header__sub--menu__link"><span style="color:#255c6f ; font-size:15px"><b>{{ $cat->lib }}</b></span></a>
                                            @if($cat->sous_categorie->count() > 0)
                                                @foreach($cat->sous_categorie as $sous_categorie)
                                                    <li class="header__sub--menu__items">
                                                        <a href="{{ url('produit/'.$sous_categorie->id) }}" class="header__sub--menu__link">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:15px"><b>{{ $sous_categorie->lib }}</b></span></a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="header__menu--items mega__menu--items">
                                <a class="header__menu--link" href="{{url('propos')}}"><b>À PROPOS DE NOUS</b> </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="{{url('page-contact')}}"><b> CONTACT </b></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header__account">
                    <ul class="d-flex">
                        <li class="header__account--items  header__account--search__items d-md-none">
                            <a class="header__account--btn search__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="26.51" height="23.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  
                                <span class="visually-hidden">Search</span>
                            </a>
                        </li>
                        <li class="header__account--items">
                            <a class="header__account--btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.897" height="21.565" viewBox="0 0 18.897 21.565">
                                    <path  d="M16.84,8.082V6.091a4.725,4.725,0,1,0-9.449,0v4.725a.675.675,0,0,0,1.35,0V9.432h5.4V8.082h-5.4V6.091a3.375,3.375,0,0,1,6.75,0v4.691a.675.675,0,1,0,1.35,0V9.433h3.374V21.581H4.017V9.432H6.041V8.082H2.667V21.641a1.289,1.289,0,0,0,1.289,1.29h16.32a1.289,1.289,0,0,0,1.289-1.29V8.082Z" transform="translate(-2.667 -1.366)" fill="currentColor"/>
                                </svg>
                                <span class="items__count" id="items__count"> 0 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-header" tabindex="-1">
        <div class="offcanvas__inner">
            <div class="offcanvas__logo">
                <a class="offcanvas__logo_link"  >
                    <img src="{{ asset($info->logo) }}" alt="Rokon Logo">
                </a>
                <button class="offcanvas__close--btn" data-offcanvas>close</button>
            </div>
            <nav class="offcanvas__menu">
                <ul class="offcanvas__menu_ul" style="height: 100%">
                <li class="header__menu--items">
                            <a class="header__menu--link" href="{{ url('/') }}">ACCUEIL </a>
                            </li> 
                            <li class="header__menu--items">
                                <a class="header__menu--link"  >NOS PRODUITS <span class="menu__plus--icon">+</span></a>
                                <ul class="header__sub--menu">
                                @foreach ($listeCateg as $cat)
                                        <li class="header__sub--menu__items">
                                            <div href="{{ url('produit/'.$cat->id) }}" class="header__sub--menu__link"><span style="color:#255c6f ; font-size:20px"><b>{{ $cat->lib }}</b></span></div>
                                            @if($cat->sous_categorie->count() > 0)
                                                <!-- <ul class="header__sub--menu"> -->
                                                    @foreach($cat->sous_categorie as $sous_categorie)
                                                        <li class="header__sub--menu__items">
                                                         <a href="{{ url('produit/'.$sous_categorie->id) }}" class="header__sub--menu__link">&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:15px">{{ $sous_categorie->lib }}</span></a>
                                                        </li>
                                                    @endforeach
                                                <!-- </ul> -->
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="header__menu--items mega__menu--items">
                                <a class="header__menu--link" href="{{url('propos')}}"> À PROPOS DE NOUS  </a>
                            </li>
                            <li class="header__menu--items">
                                <a class="header__menu--link" href="{{url('page-contact')}}"> CONTACT   </a>
                            </li>
                </ul>
            </nav>
        </div>
    </div>
    
    <div class="offCanvas__minicart" tabindex="-1">
        <div class="minicart__header ">
            <div class="minicart__header--top d-flex justify-content-between align-items-center">
                <h3 class="minicart__title"> Votre panier</h3>
                <button class="minicart__close--btn" aria-label="minicart close btn" data-offcanvas>
                    <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
                </button>
            </div>
            <p class="minicart__header--desc"></p>
        </div>
        <form class="widget__search--form" method="POST" action="{{ url('panier')}}" enctype="multipart/form-data">
        @csrf 
            <div id="panier">
            </div>
        <div class="minicart__button d-flex justify-content-center" style="margin-top:20px;bottom: 6px;">
            <button class="primary__btn minicart__button--link"   type="submit" >Confirmer</button>
            <a class="primary__btn minicart__button--link" onclick="removeAllArticle()"  >Effacer tous</a>
        </div>
        </form>
    </div>
    <div class="predictive__search--box " tabindex="-1">
        <div class="predictive__search--box__inner">
            <h2 class="predictive__search--title">Search Products</h2>
            <form class="predictive__search--form" action="#">
                <label>
                    <input class="predictive__search--input" placeholder="Search Here" type="text">
                </label>
                <button class="predictive__search--button" aria-label="search button"><svg class="header__search--button__svg" xmlns="http://www.w3.org/2000/svg" width="30.51" height="25.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>  </button>
            </form>
        </div>
        <button class="predictive__search--close__btn" aria-label="search close btn" data-offcanvas>
            <svg class="predictive__search--close__icon" xmlns="http://www.w3.org/2000/svg" width="40.51" height="30.443"  viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"/></svg>
        </button>
    </div>
</header>

<script> 

function toggleSubMenu() {
            var productSubMenu = document.getElementById("productSubMenu");
            var additionalSubMenu = document.getElementById("additionalSubMenu");
            var contactSubMenu = document.getElementById("contactSubMenu");

            if (productSubMenu.style.display === "none") {
                productSubMenu.style.display = "block";
                additionalSubMenu.style.display = "none";
                contactSubMenu.style.display = "none";
            } else {
                productSubMenu.style.display = "none";
                additionalSubMenu.style.display = "block";
                contactSubMenu.style.display = "block";
            }
        }

        function ajouterArticle(product) {
    let element = document.getElementById('panier');
    let imgPr = null;

    if (Array.isArray(product.img) && product.img[0] !== undefined) {
        imgPr = product.img[0].img;
    } else if (product.img !== null) {
        imgPr = product.img;
    } else {
        imgPr = null;
    }

    // Afficher le prix en fonction de prix_promo s'il n'est pas null, sinon utiliser prix
    let prixAffiche = product.prix_promo !== null ? product.prix_promo : product.prix;

    // Mettez à jour le contenu du panier
    let newArticle = document.createElement('div');
    newArticle.id = product.id;
    newArticle.classList.add('cardachat', 'minicart__product--items', 'd-flex');
    newArticle.innerHTML = `
        <input type="hidden" value='${product.id}' name="id_product[]">
        <div class="minicart__thumbnail">
            <a href="#"><img src="/${imgPr}" alt="product-img"></a>
        </div>
        <div class="minicart__text">
            <h4 class="minicart__subtitle"><a href="#">${product.lib} </a></h4>
            <span class="color__variant"></span>
            <div class="minicart__price">
                <span class="current__price">${prixAffiche}&nbsp;TND</span>
            </div>
            <div class="minicart__text--footer d-flex align-items-center">
                <div class="quantity__box minicart__quantity">
                    <button type="button" class="quantity__value decrease" aria-label="quantity value" value="Decrease Value" onclick="subquantite(${product.id})">-</button>
                    <label>
                        <input type="number" id="quantite_${product.id}" name="quantite_${product.id}" class="quantity__number" value="1" data-counter />
                    </label>
                    <button type="button" class="quantity__value increase" aria-label="quantity value" value="Increase Value" onclick="addquantite(${product.id})">+</button>
                </div>
                <button class="minicart__product--remove" aria-label="minicart remove btn" onclick="removeArticle(${product.id})">Supprimer</button>
            </div>
        </div>
    `;

    element.appendChild(newArticle);

    countArticle();
    updatePanierContent();

    let messageElement = document.createElement('div');
    messageElement.className = 'message';
    messageElement.innerText = 'Produit ajouté au panier !';
    document.body.appendChild(messageElement);

    // Supprimez le message après 2 secondes
    setTimeout(function () {
        messageElement.remove();
    }, 2000);
}


function removeArticle(id) {
    let element = document.getElementById(id);
    if (element) {
        element.remove();
        countArticle();
        updatePanierContent();
    }
    updatePanierContent();
}
function countArticle() {
    var numItems = document.getElementsByClassName("cardachat").length;
    let element = document.getElementById('items__count');
    element.innerText = numItems;
}

function updatePanierContent() {
    let element = document.getElementById('panier');
    let panierContent = element.innerHTML;
    localStorage.setItem('panierContent', panierContent);
}



function removeAllArticle() {
    let element = document.getElementById('panier');
    element.innerHTML = '';
    let elementt = document.getElementById('items__count');
    elementt.innerText = 0;
}

function addquantite(id) {
    let element = document.getElementById('quantite_' + id);
    element.value = parseInt(element.value) + 1;
}

function subquantite(id) {
    let element = document.getElementById('quantite_' + id);
    let value = parseInt(element.value) - 1;
    if (value < 0) {
        element.value = 0;
    } else {
        element.value = value;
    }
}

function chargerPanierDepuisLocalStorage() {
    let element = document.getElementById('panier');
    let savedPanierContent = localStorage.getItem('panierContent');
    if (savedPanierContent) {
        element.innerHTML = savedPanierContent;
        countArticle(); // Mettez à jour le nombre d'articles au chargement
    }
}

function removeAllArticle() {
    let element = document.getElementById('panier');
    element.innerHTML = '';
    countArticle(); // Mettez à jour le nombre d'articles
    updatePanierContent(); // Mettez à jour le panier dans le stockage local
}

// Appelez cette fonction au chargement de la page pour charger le panier depuis le stockage local
window.addEventListener('load', function () {
    chargerPanierDepuisLocalStorage();
});


 
</script>