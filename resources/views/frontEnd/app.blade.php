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


</body>
</html>