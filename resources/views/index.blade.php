<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>33doce.com</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="vendor/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="vendor/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/css/styles.min.css" rel="stylesheet">
    <link href="dist/css/main.css" rel="stylesheet">
    <link href="dist/css/footer.css" rel="stylesheet">

    <style media="screen">
      .help-block{float: right; color: red; font-weight: 400; font-size: 90%; margin: 0 .9em;}
    </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body id="page-top" data-spy="scroll" data-target=".navbar-default">

<header>
    <!-- Fixed navbar -->
    <nav class=" navbar-fixed-top main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">[ 33 doce ]</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li class="active"><a href="#contacto">Contacto <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</header>



<div class="container">
        <section id="notifications">
          <div class="col-md-12">
              @if(Session::has('error'))
                <div class="alert alert-danger">
                    <a class="close" data-dismiss="alert">×</a>
                     {!!Session::get('error')!!}
                </div>
              @endif
              @if(Session::has('warning'))
                <div class="alert alert-warning">
                    <a class="close" data-dismiss="alert">×</a>
                     {!!Session::get('warning')!!}
                </div>
              @endif
              @if(Session::has('success'))
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">×</a>
                     {!!Session::get('success')!!}
                </div>
              @endif

          </div>
        </section>
      </div>



<div id="main-body">
    <div id="nosotros"></div>

      <div class="center-container">
        <div class="center-row">
          <!-- left column -->
          <div class="container">
            <div class="col-md-12">
              <div class="text-center">
                <div class="text-hero-intro">
                  <h3>Bienvenido!</h3>
                  <p>Somos una empresa dedicada a brindar soluciones para tu negocio.</p>
                  <p>En la actualidad, el 90%  de las pymes tiene problemas de comunicacion y de landing. Nuestra agencia digital te ayuda a posicionarte en motores de busqueda, realizar campañas web, hacer analisis de competencia: desarrollar sitios web, aplicaciones y landings enfocandonos en tus necesidades y objetivos.</p>
                  <p><br><a href="#contacto" class="btn btn-primary">Contanos sobre tu proyecto</a></p>
                </div>
              </div>
            </div>
          </div>
          <!-- right column -->
          <div class="hero-image hero-bg-image section-hero-media section-hero-media-right col-offset-1 col-6 col-xs-hidden bg-image text-center"><!-- empty div with image background --></div>
        </div>
      </div>

        <div class="row-fluid divider one">
        	<div class="row">
        		<div class="col-md-12">
        			<p>El 50% de la población mundial está conectada a travez de internet. Estando conectado te permite llegar facilmente a todos ellos.</p>
        		</div>
        	</div>
        </div>

        <div class="row">
            <div class="container">
              <section id="servicios">
                    <div class="container">
                          <div class="row">
                                <div class="col-lg-12 text-center">
                                  <h2 class="section-heading">Hacemos</h2>
                                  <h3 class="section-subheading text-muted">Que necesitas?</h3>
                              </div>
                          </div>
                          <div class="bloque_servicios">
                                <!-- row -->
                                <div class="row-servicios">
                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Campañas</h1>
                                            <p>Internet ha ampliado de manera exponencial la forma en la que hacemos negocios y nos conectamos con otros. Es clave saber potenciar este medio para comunicar nuestro producto/servicio de manera efectiva. En 33doce creamos tu campaña en base a tus objetivos comerciales.</p>

                                      </div>
                                      </div>

                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Desarrollos</h1>
                                            <p>Analizamos cual es la mejor opcion para tu negocio y  te brindamos alternativas funcionales y dinamicas  para posicionarte en la red.</p>

                                      </div>
                                      </div>

                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Contenidos</h1>
                                            <p>Gestionamos la estrategia y los contenidos adecuandolos a tu empresa. Videos, articulos infografias, comunicados y mas!</p>

                                      </div>
                                      </div>
                                </div><!-- end row -->

                                <!-- row -->
                                <div class="row-servicios">
                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Redes sociales</h1>
                                            <p>Realizamos estrategias en redes sociales para que puedas llegar a tu publico objetivo de la manera mas eficaz y al menor costo</p>

                                      </div>
                                      </div>

                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Diseño</h1>
                                            <p>Creamos diseños armoniosos y atractivos tanto para paginas, piezas y diversos formatos.</p>

                                      </div>
                                      </div>

                                      <div class="col-lg-4  col-md-4 col-sm-4">
                                      <div class="box_servicio">

                                            <!--<img src="images/canon.png" alt=""/>-->
                                            <h1 class="heading">Estrategias y analisis</h1>
                                            <p>En una era donde los datos abundan, es fundamental analizar la estrategia para no perder el foco de nuestros esfuerzos publicitarios y de negocio </p>

                                      </div>
                                      </div>
                                </div><!-- end row -->


                          </div>
                    </div>
              </section>

            </div>
        </div>

        <div class="row-fluid divider two">
        	<div class="row">
        		<div class="col-md-12">
        			<p>Latinoamerica es la segunda zona a nivel mundial con mayor cantidad de usuarios conectados a internet. Te ayudamos a usar es información en tu beneficio</p>
        		</div>
        	</div>
        </div>

        <div class="row-fluid">
            <div class="container">

              <div class="row" id="bg-contact">
                <section id="contacto">
                  <div class="container">
                    <div class="row">
                    <br>
                    <br>
                    <br>
                        <div class="col-md-2"><!-- empty --></div>
                        <div class="col-md-8">

                          <div class="empty">

                            <h2 class="section-heading text-center">Contactanos</h2>
                            <div id="message" class="text-center"></div>
                            <form class="form-horizontal" method="post" action="{{ url('process_contact')}}" id="contactform">
                            <fieldset>
                              <legend class="text-center"></legend>
                              {{ csrf_field() }}
                              <!-- Name input-->
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="name">Name</label>
                                <div class="col-md-9">
                                  <input id="name" name="name" type="text" placeholder="Your name" class="form-control" value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                              </div>

                              <!-- Email input-->
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="email">Your E-mail</label>
                                <div class="col-md-9">
                                  <input id="email" name="email" type="text" placeholder="Your email" class="form-control" value="{{ old('email') }}">
                                  @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                                  @endif
                                </div>
                              </div>

                              <!-- Message body -->
                              <div class="form-group">
                                <label class="col-md-3 control-label" for="message">Your message</label>
                                <div class="col-md-9">
                                  <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Mensaje..." rows="5">{{ old('mensaje') }}</textarea>
                                </div>
                                @if ($errors->has('mensaje'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('mensaje') }}</strong>
                                </span>
                                @endif
                              </div>

                              <!-- Form actions -->
                              <div class="form-group">
                                <div class="col-md-12 text-right">
                                  <button type="submit" id="submit" class="btn btn-primary btn-lg">Submit</button>
                                </div>
                              </div>
                            </fieldset>

                            </form>

                          </div>
                        </div>
                        <div class="col-md-2"><!-- empty --></div>
                    </div>
                  </div>
                </section>
              </div>

            </div>
        </div>
</div><!-- main-body -->

<footer>
    <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div id="logo-footer">
                    <h1>33 doce</h1>
                </div>
                <p>Somos una agencia dedicada a ayudar a obtener beneficios y resultados online.</p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 right">
                <h3>Trabajemos juntos.</h3>
                <p>Comunicate con nosotros hoy para hablar sobre tu proyecto y su futuro.</p>
                <p><br><a href="#contacto" class="button-contact">Envianos un mensaje.</a></p>
            </div>
        </div>
    </div>
</footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="vendor/js/jquery.min.js"><\/script>')</script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="vendor/js/ie10-viewport-bug-workaround.js"></script>
     <!-- Scroll slow -->
    <script src="vendor/js/smooth-scroll.js"></script>
    <script src="vendor/js/jquery.easing.js"></script>

    <script type="text/javascript">
      smoothScroll.init({
        selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
        selectorHeader: '[data-scroll-header]', // Selector for fixed headers (must be a valid CSS selector)
        speed: 900, // Integer. How fast to complete the scroll in milliseconds
        easing: 'easeInOutCubic', // Easing pattern to use
        offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
        updateURL: true, // Boolean. If true, update the URL hash on scroll
        callback: function ( anchor, toggle ) {} // Function to run after scrolling
    });
    </script>
    <script src="src/js/main.js"></script>
    <!-- <script src="form_ajax/js/form_envio.js"></script> -->
  </body>
</html>
