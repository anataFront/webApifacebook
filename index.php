<?php include "app/functions.php"; ?>
<?php include "app/api.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <title><?php echo $about->name ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link href="https://file.myfontastic.com/XEYMpRfP5Gdp65e8cdDeW6/icons.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
  </head>
  <body>
    <div id="preloader">
      <div class="loader">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="navbar-fixed">
      <nav class="main-nav">
        <div class="container">
          <div class="nav-wrapper"><a class="brand-logo" href="#inicio"><img src="img/logo.png" alt="" class="main-nav__image"></a><a class="button-collapse" href="#" data-activates="mobile-demo"><i class="material-icons icon-menu"></i></a>
            <ul class="right hide-on-med-and-down main-nav__content">
              <li><a href="#inicio">INICIO</a></li>
              <li><a href="#quienesomos">QUIÉNES SOMOS</a></li>
              <li><a href="#servicios">SERVICIOS</a></li>
              <li><a href="#videos">VIDEOS</a></li>
              <li><a href="#contactanos">CONTÁCTANOS</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#inicio">INICIO</a></li>
              <li><a href="#quienesomos">QUIÉNES SOMOS</a></li>
              <li><a href="#servicios">SERVICIOS</a></li>
              <li><a href="#videos">VIDEOS</a></li>
              <li><a href="contactanos">CONTACTANOS</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <header class="slider scrollspy" id="inicio">
      <ul class="slides">
        <?php foreach ($port as $portas): ?>
         <li><img src="img/ataydesatafrente.jpg"/>
          <div class="caption center-align">
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </header>
    <main class="main scrollspy"  id="nosotros">
      <div class="container">
        <div class="row main-container">
          <div class="col s12">
            <h3 class="main-events__title main--title ">Atando y desatando emociones</h3>
          </div>
          <div class="col s12 l6">
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-gr40bUCkEc" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          <div class="col s12 l6">
            <p class="main-header__description"> Ata y Desata es una empresa especializada en organización de eventos, convenciones,
            producción fotográfica, activaciones y comunicación interna. Siempre caracterizados
            con el profesionalismo, calidad e inspiración que nuestros clientes prefieren.
            Ofrecemos el concepto, producción y organización global de su evento. Nuestra
            experiencia y creatividad, junto con la pasión y dedicación de nuestro equipo
            logran que cualquier evento sea posible.
            Somos especialistas en conseguir que el evento que quiere realizar sea original,
            divertido y efectivo. Nuestra larga experiencia nos da la confianza suficiente
            para garantizarle un éxito total. </p>
        </div>
      </div>
    </main>
    <section class="main-publisher scrollspy" id="publicaciones">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="multiple-items">
              <?php 
                $key = array(1, 2, 3, 4, 5 ,6);
               ?>
              <?php foreach ($key as $var): ?>
                <div>
                  <div class="multiple-images__slider">
                    <img src="https://scontent.flim5-3.fna.fbcdn.net/v/t1.0-9/12036479_911296478905778_1022418800251815453_n.jpg?oh=15b05269a07b84f4d41910d030c408f1&oe=5ACFA691" alt="" class="responsive-img">
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-events scrollspy" id="nuestrosservicios">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-events__title main--title white-text">NUESTROS SERVICIOS</h3>
          </div>
          <div class="col s12">
            <div class="main-tabs">
              <ul class="tabs">
                <li class="tab col s3"><a href="#test1" class="white-text">Test 1</a></li>
                <li class="tab col s3"><a class="active white-text" href="#test2">Test 2</a></li>
                <li class="tab col s3"><a href="#test3" class="white-text">Test 3</a></li>
                <li class="tab col s3"><a href="#test4" class="white-text">Test 4</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row main-events__gallery" id="test1">
        <?php foreach ($eventos as $evento): ?>
        <div class="col s12 m6 l3"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test2">
        <?php foreach ($eventos as $evento): ?>
        <div class="col s12 m6 l3"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test3">
        <?php foreach ($eventos as $evento): ?>
        <div class="col s12 m6 l3"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test4">
        <?php foreach ($eventos as $evento): ?>
        <div class="col s12 m6 l3"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endforeach ?>
      </div>
    </section>
    <section class="main scrollspy u-padding__top--small"  id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col s12 l8">
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-gr40bUCkEc" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          <div class="col s12 l4">
            <div class="row">
              <div class="col s12">
                <a href="#!" class="row">
                  <div class="col s12 m6">
                    <img src="img/ataydesatafrente.jpg" alt="" class="responsive-img">
                  </div>
                  <div class="col s12 m6">
                    <p class="video-title">Nuevo video de youtube</p>
                  </div>
                </a>
              </div>
              <div class="col s12">
                <a href="#!" class="row">
                  <div class="col s12 m6">
                    <img src="img/ataydesatafrente.jpg" alt="" class="responsive-img">
                  </div>
                  <div class="col s12 m6">
                    <p class="video-title">Nuevo video de youtube</p>
                  </div>
                </a>
              </div>
              <div class="col s12">
                <a href="#!" class="row">
                  <div class="col s12 m6">
                    <img src="img/ataydesatafrente.jpg" alt="" class="responsive-img">
                  </div>
                  <div class="col s12 m6">
                    <p class="video-title">Nuevo video de youtube</p>
                  </div>
                </a>
              </div>
              <div class="col s12">
                <a href="#!" class="row">
                  <div class="col s12 m6">
                    <img src="img/ataydesatafrente.jpg" alt="" class="responsive-img">
                  </div>
                  <div class="col s12 m6">
                    <p class="video-title">Nuevo video de youtube</p>
                  </div>
                </a>
              </div>
            </div>
        </div>
      </div>
    </section>
    <footer class="main-footer">
      <div class="row">
        <div class="col s12 m6 u-padding__none">
          <div id="map">
            
          </div>
          <script>
            function initMap() {
              var styleArray = [
                {
                  featureType: 'all',
                  stylers: [
                    { hue: "#e53935" },
                    { saturation: -10 }
                  ]
                },{
                  featureType: 'road.arterial',
                  elementType: 'geometry',
                  stylers: [
                    { hue: '#e53935' },
                    { saturation: 10 }
                  ]
                },{
                  featureType: 'poi.business',
                  elementType: 'labels',
                  stylers: [
                    { visibility: 'off' }
                  ]
                }
              ];
              var myLatLng = {lat: -12.0729396, lng: -77.0500979};

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                  scrollwheel: false,
                  styles: styleArray,
                center: myLatLng
              });
              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map
              });
                    
            }
          </script>
        </div>
        <div class="col s12 m6 block">
          <h3 class="main-title__footer main--title white-text">contáctanos</h3>
          <p>Dirección : Calle manuel Miotal 137  Oficina 201 Miraflores - Lima</p>
          <p>Teléfono : 264 2991</p>
          <div class="main-footer__icons">
            <a href="#!">
              <img src="img/facebook-logo.png" alt="">
            </a>
            <a href="#!">
              <img src="img/youtube-logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">Derechos reservados @ 2017<a class="grey-text text-lighten-4 right" href="#!">crearperu.com</a></div>
      </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="js/bin/slick.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEy42HRFwBy9BVWvhLu2x0-VPko5ssLnA&callback=initMap"></script>
    <script type="text/javascript" src="js/bin/script.js"></script>
  </body>
</html>
