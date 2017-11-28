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
    <link rel="icon" type="image/x-icon" href="img/favicon.jpg"/>
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
              <li><a href="#nosotros">QUIÉNES SOMOS</a></li>
              <li><a href="#servicios">SERVICIOS</a></li>
              <li><a href="#videos">VIDEOS</a></li>
              <li><a href="#contactanos">CONTÁCTANOS</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#inicio">INICIO</a></li>
              <li><a href="#nosotros">QUIÉNES SOMOS</a></li>
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
        <li>
          <img src="<?php echo $port[2]->images[0]->source; ?>"/>
        </li>
        <li>
          <img src="<?php echo $port[1]->images[0]->source; ?>"/>
        </li>
        <li>
          <img src="<?php echo $port[0]->images[0]->source; ?>"/>
        </li>
      </ul>
    </header>
    <main class="main scrollspy"  id="nosotros">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-events__title main--title ">Atando y desatando emociones</h3>
          </div>
        </div>
        <div class="row main-container valign-wrapper">
          <div class="col s12 l6">
              <div class="video-container">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/-gr40bUCkEc" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          <div class="col s12 l6">
            <p class="main-header__description"> <?php echo str_replace("\n\n", "<br><br>", $descripcion); ?> </p>
            <br>
            <a class="waves-effect waves-light btn-large red darken-2">Descargar brochure</a>
        </div>
      </div>
    </main>
    <section class="main-publisher scrollspy" id="publicaciones">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <div class="multiple-items">
              <?php foreach ($articulos as $images): ?>
                <div>
                  <div class="multiple-images__slider">
                    <img src="<?php echo $images->images[0]->source; ?>" alt="" class="responsive-img">
                  </div>
                </div>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="main-events scrollspy" id="servicios">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-events__title main--title white-text">NUESTROS SERVICIOS</h3>
          </div>
          <div class="col s12">
            <div class="main-tabs">
              <ul class="tabs">
                <li class="tab col s12 m6 l3"><a href="#test1" class="white-text active">Eventos</a></li>
                <li class="tab col s12 m6 l3"><a class="white-text" href="#test2">Activaciones</a></li>
                <li class="tab col s12 m6 l3"><a href="#test3" class="white-text">Convenciones</a></li>
                <li class="tab col s12 m6 l3"><a href="#test4" class="white-text">IMAGEN Y MARKETING DIGITAL</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row main-events__gallery" id="test1">
        <?php $count = 1; ?>
        <?php foreach ($eventos as $evento): ?>
          <?php if ($count !=1): ?>
            <div class="col s12 m6 l20"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
          <?php endif ?>
          <?php $count++; ?>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test2">
        <?php $count = 1; ?>
        <?php foreach ($activations as $evento): ?>
        <?php if ($count !=1): ?>
          <div class="col s12 m6 l20"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endif ?>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test3">
        <?php $count = 1; ?>
        <?php foreach ($conventions as $evento): ?>
        <?php if ($count !=1): ?>
          <div class="col s12 m6 l20"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endif ?>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
      <div class="row main-events__gallery" id="test4">
        <?php $count = 1; ?>
        <?php foreach ($mkt as $evento): ?>
        <?php if ($count !=1): ?>
          <div class="col s12 m6 l20"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endif ?>
        <?php $count++; ?>
        <?php endforeach ?>
      </div>
    </section>
    <section class="main scrollspy u-padding__top--small"  id="videos">
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

            </div>
        </div>
      </div>
    </section>
    <footer class="main-footer" id="contactanos">
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
              var myLatLng = {lat: <?php echo $lat ?>, lng: <?php echo $long ?>};

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
          <p>Dirección : <?php echo $location ?></p>
          <p>Teléfono : <?php echo $phone ?></p>
          <p>Correo : <?php echo $email ?></p>
          <div class="main-footer__icons">
            <a href="<?php echo $link ?>" target="_blank">
              <img src="img/facebook-logo.png" alt="">
            </a>
            <a href="#!" target="_blank">
              <img src="img/youtube-logo.png" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">Copyright © 2017 - Ata&Desata<a class="grey-text text-lighten-4 right" href="#!" target="_blank">crearperu.com</a></div>
      </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="js/bin/slick.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEy42HRFwBy9BVWvhLu2x0-VPko5ssLnA&callback=initMap"></script>
    <script type="text/javascript" src="js/bin/script.js"></script>
  </body>
</html>
