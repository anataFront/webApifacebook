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
          <div class="nav-wrapper"><a class="brand-logo" href="#inicio"><img src="img/logo-blanco.svg" alt="" class="main-nav__image"></a><a class="button-collapse" href="#" data-activates="mobile-demo"><i class="material-icons icon-menu"></i></a>
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
        <li><img src="<?php echo $portas->images[0]->source; ?>"/>
          <div class="caption center-align">
            <h2 class="main-header__title">ATANDO Y DESATANDO EMOCIONES</h2>
          </div>
        </li>
        <?php endforeach ?>
      </ul>
    </header>
    <main class="main scrollspy"  id="nosotros">
      <div class="container">
        <div class="row main-container">
          <div class="col s12 l6">
            <div class="video-container">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/-gr40bUCkEc" frameborder="0" allowfullscreen></iframe></div>
            </div>
          <div class="col s12 l6">
            <h3 class="main-title main--title">ATANDO Y DESATANDO EMOCIONES</h3>
            <h5 class="light grey-text text-lighten-3 main-header__description"> Ata y Desata es una empresa especializada en organización de eventos, convenciones, producción fotográfica, activaciones y comunicación interna. Siempre caracterizados con el profesionalismo, calidad e inspiración que nuestros clientes prefieren.
                                                                               Ofrecemos el concepto, producción y organización global de su evento. Nuestra experiencia y creatividad, junto con la pasión y dedicación de nuestro equipo logran que cualquier evento sea posible.
                                                                                Somos especialistas en conseguir que el evento que quiere realizar sea original, divertido y efectivo. Nuestra larga experiencia nos da la confianza suficiente para garantizarle un éxito total.</h5>
            <p class="main-description"><?php echo $descripcion[0]; ?></p>
          </div>
        </div>
      </div>
      <div class="main-container__services">
        <div class="container">
          <div class="row">
            <div class="col s12 main-container__services--description">
              <p><?php echo $descripcion[1]; ?></p>
            </div>
          </div>
        </div>
        <div class="row main-container__services--content">

        </div>
      </div>
    </main>
    <section class="main-publisher scrollspy" id="publicaciones">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-publisher__title main--title">Publicaciones</h3>
          </div>
          <?php foreach ($blogs as $blog): ?>
          <div class="col s12 m4">
            <article class="main-publisher__article">
              <div class="main-publisher__article--box">
                <img class="main-publisher__article--image" src="<?php echo $blog->full_picture; ?>" alt=""/>
              </div>
              <a class="main-publisher__article--link" href="<?php echo $blog->link; ?>" target="_blank">
                <h4 class="main-publisher__article--title"><?php echo $blog->name; ?></h4>
              </a>
              <div class="main-publisher__article--date"><i class="material-icons icon-calendar"></i><?php echo dateformat($blog->created_time); ?></div>
              <p class="main-publisher__article--description"><?php echo substr( $blog->description, 0, 100); ?></p><a class="main-publisher__article--button" href="<?php echo $blog->link; ?>" target="_blank">Ver más</a>
            </article>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>
    <section class="main-programs scrollspy" id="programas">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-programs__title main--title">Programas</h3>
          </div>
          <div class="col s12 m6 l3">
            <article class="main-programs__article"><a class="main-programs__article--box" href=""><img class="main-programs__article--image" src="http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/team/1.jpg" alt=""/></a>
              <h5 class="main-programs__article--title">Title programs</h5><a class="main-programs__article--button" href=""><i class="material-icons icon-view"></i></a>
            </article>
          </div>
          <div class="col s12 m6 l3">
            <article class="main-programs__article"><a class="main-programs__article--box" href=""><img class="main-programs__article--image" src="http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/team/1.jpg" alt=""/></a>
              <h5 class="main-programs__article--title">Title programs</h5><a class="main-programs__article--button" href=""><i class="material-icons icon-view"></i></a>
            </article>
          </div>
          <div class="col s12 m6 l3">
            <article class="main-programs__article"><a class="main-programs__article--box" href=""><img class="main-programs__article--image" src="http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/team/1.jpg" alt=""/></a>
              <h5 class="main-programs__article--title">Title programs</h5><a class="main-programs__article--button" href=""><i class="material-icons icon-view"></i></a>
            </article>
          </div>
          <div class="col s12 m6 l3">
            <article class="main-programs__article"><a class="main-programs__article--box" href=""><img class="main-programs__article--image" src="http://preview.itgeeksin.com/corporeal-business-html-template/assets/img/team/1.jpg" alt=""/></a>
              <h5 class="main-programs__article--title">Title programs</h5><a class="main-programs__article--button" href=""><i class="material-icons icon-view"></i></a>
            </article>
          </div>
        </div>
      </div>
    </section>
    <section class="main-events scrollspy" id="eventos">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-events__title main--title">NUESTRO SERVICIOS</h3>
          </div>
        </div>
      </div>
      <div class="row main-events__gallery">
        <?php foreach ($eventos as $evento): ?>
        <div class="col s12 m6 l4"><img class="materialboxed main-events__image" src="<?php echo $evento->images[0]->source; ?>" alt="" data-caption=""/></div>
        <?php endforeach ?>
      </div>
    </section>
    <footer class="main-footer">
      <div class="container main-footer__container">
        <div class="row">
          <div class="col s12">
            <h3 class="main-footer__title">CONTACTO</h3>
          </div>
          <div class="col l4 s12">
            <div class="main-footer__content"><i class="material-icons main-footer__icon icon-location"></i>
              <p class="main-footer__description"><?php echo $about->location->street; ?> / <?php echo $about->location->city; ?> - <?php echo $about->location->country; ?></p>
            </div>
          </div>
          <div class="col l4 s12">
            <div class="main-footer__content"><i class="material-icons main-footer__icon icon-cell"></i>
              <p class="main-footer__description"><?php echo $about->phone ?></p>
            </div>
          </div>
          <div class="col l4 s12">
            <div class="main-footer__content"><i class="material-icons main-footer__icon icon-email"></i>
              <p class="main-footer__description"><?php echo $about->emails[0] ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">© 2017 Copyright <?php echo $about->name ?><a class="grey-text text-lighten-4 right" href="#!">crearperu.com</a></div>
      </div>
    </footer>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/bin/materialize.min.js"></script>
    <script type="text/javascript" src="js/bin/script.js"></script>
  </body>
</html>
