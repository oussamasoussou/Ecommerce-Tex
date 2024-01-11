<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TEX & TEX TUNISIA</title>
        <meta name="description" content="Morden Bootstrap HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
        <link rel="stylesheet" href='{{ asset("frontEnd/css/plugins/swiper-bundle.min.css" )}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/css/plugins/glightbox.min.css" )}}'>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href='{{ asset("frontEnd/css/vendor/bootstrap.min.css" )}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/css/style.css" )}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/css/product.scss" )}}'>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

        <style>
            .message {
                  position: fixed;
                  bottom: 10px;
                  left: 89%;
                  transform: translateX(-50%);
                  background-color: #ffffff;
                  color: #000000;
                  padding: 10px 60px;
                  border-radius: 5px;
                  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                  z-index: 9999;
                  width:350px;
                  height:50px;
                  font-size:25px;
                  color: #045b62;
                  text-shadow: 2px 1px 2px #cbd5d6;
            }

            @media (max-width: 1400px) {
                    .message {
                    left: 70%;
                }
            }

            .carouselheight{
                height: 500px;
            }
            @media (max-width: 732px) {
                .carouselheight{
                    height: 240px;
                }
            }



      </style>
        <link rel="apple-touch-icon" href='{{ asset("frontEnd/assets/img/apple-icon.png" ) }}'>
        <link rel="shortcut icon" type="image/x-icon" href='{{ asset("frontEnd/assets/img/favicon.ico" )}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/assets/css/bootstrap.min.css")}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/assets/css/templatemo.css")}}'>
        <link rel="stylesheet" href='{{ asset("frontEnd/assets/css/custom.css")}}'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
        <link rel="stylesheet" href='{{ asset("frontEnd/assets/css/fontawesome.min.css")}}'>

      </head>
<body>
    
      @include('frontEnd.layouts.header')
      @yield('content')
      @include('frontEnd.layouts.footer')

      <script src='{{ asset("frontEnd/js/vendor/popper.js") }}' defer="defer"></script>
      <script src='{{ asset("frontEnd/js/vendor/bootstrap.min.js") }}' defer="defer"></script>
      <script src='{{ asset("frontEnd/js/plugins/swiper-bundle.min.js") }}' defer="defer"></script>
      <script src='{{ asset("frontEnd/js/plugins/glightbox.min.js") }}' defer="defer"></script>
      <script src='{{ asset("frontEnd/js/script.js") }}' defer="defer"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>

      <script>
          let map;

          function initMap() {
              map = new google.maps.Map(document.getElementById('map'), {
                  center: {lat: -34.397, lng: 150.644},
                  zoom: 8
              });
          }
      </script>
    <script src='{{ asset("frontEnd/assets/assets/js/jquery-1.11.0.min.js") }}'></script>
    <script src='{{ asset("frontEnd/assets/assets/js/jquery-migrate-1.2.1.min.js") }}'></script>
    <script src='{{ asset("frontEnd/assets/assets/js/bootstrap.bundle.min.js") }}'></script>
    <script src='{{ asset("frontEnd/assets/assets/js/templatemo.js") }}'></script>
    <script src='{{ asset("frontEnd/assets/assets/js/custom.js") }}'></script>
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function mettreAJourNombreProduits() {
            console.log('Envoi de la requête AJAX...');
            $.ajax({
                type: 'GET',
                url: '/panier/count',
                success: function(data) {
                    console.log('Réponse de la requête AJAX :', data);
                    $('#items__count').text(data);
                },
                error: function(error) {
                    console.error('Erreur lors de la récupération du nombre de produits dans le panier :', error);
                }
            });
        }

        mettreAJourNombreProduits();
    });
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var btnsSupprimer = document.querySelectorAll('.btn-supprimer');

        btnsSupprimer.forEach(function(btn) {
            btn.addEventListener('click', function() {
                var produitId = btn.getAttribute('data-produit-id');

                // Envoyer la requête DELETE
                fetch('/panier/supprimer/' + produitId, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        // Actualiser la page ou mettre à jour l'affichage du panier
                        location.reload();
                    } else {
                        console.error('Erreur lors de la suppression du produit du panier.');
                    }
                })
                .catch(error => console.error('Erreur lors de la requête DELETE:', error));
            });
        });
    });
</script>


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

    // Appelez cette fonction au chargement de la page pour charger le panier depuis le stockage local
    window.addEventListener('load', function () {
        chargerPanierDepuisBackend();
    });

</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const addToCartButtons = document.querySelectorAll('.addToCartBtn');

                addToCartButtons.forEach(function (button) {
                    button.addEventListener('click', function () {
                        const productId = this.getAttribute('data-product-id');
                        const couleur = document.getElementById('couleur_' + productId).value;
                        const taille = document.getElementById('taille_' + productId).value;
                        const quantite = document.getElementById('qte_' + productId).value;

                        axios.post('/storePanier', {
                            produit_id: productId,
                            couleur: couleur,
                            taille: taille,
                            qte: quantite // Corrected the parameter name to match the controller
                        })
                        .then(function (response) {
                            console.log(response.data);
                            ajouterAuPanier(response.data.produit);
                        })
                        .catch(function (error) {
                            console.error(error);
                        });
                    });
                });

                function ajouterAuPanier(product) {
                    console.log('Produit ajouté au panier côté client:', product);
                }
            });
        </script>
<script>
        // Fonction pour ajouter le produit au panier côté client
        function ajouterAuPanier(product) {
            // Le reste du code pour ajouter le produit au panier côté client
            // ...

            // Exemple générique pour afficher le produit dans la console
            console.log('Produit ajouté au panier côté client:', product);
        }
    });
</script>



</body>
</html>