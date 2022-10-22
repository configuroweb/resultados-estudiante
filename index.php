<?php
error_reporting(0);
include('includes/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Sistema de Calificaciones ConfiguroWeb</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link href="./assets/images/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
      <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
        <div class="d-inline-flex align-items-center text-white">
          <small><i class="fa fa-phone-alt mr-2"></i>317 243 00 81</small>
          <small class="px-3">|</small>
          <small><i class="fa fa-envelope mr-2"></i>hola@configuroweb.com</small>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <a class="text-white px-2" href="">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="text-white px-2" href="">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="text-white px-2" href="">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="text-white px-2" href="">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="text-white pl-2" href="">
            <i class="fab fa-youtube"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->


  <!-- Navbar Start -->
  <div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
      <a href="https://www.configuroweb.com/" class="navbar-brand ml-lg-3">
        <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>ConfiguroWeb</h1>
      </a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
        <div class="navbar-nav mx-auto py-0">
          <a href="index.html" class="nav-item nav-link active">Inicio</a>
          <a href="#" class="nav-item nav-link">Nosotros</a>
          <a href="#" class="nav-item nav-link">Cursos</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Páginas</a>
            <div class="dropdown-menu m-0">
              <a href="#" class="dropdown-item">Información de los Cursos</a>
              <a href="#" class="dropdown-item">Beneficios Adicionales</a>
              <a href="#" class="dropdown-item">Instructores</a>
              <a href="#" class="dropdown-item">Testimonios</a>
            </div>
          </div>
        </div>
        <a href="find-result.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Estudiantes</a>
        <a href="admin-login.php" class="btn btn-primary py-2 px-4 d-none d-lg-block">Admin</a>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->


  <!-- Header Start -->
  <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
    <div class="container text-center my-5 py-5">
      <h1 class="text-white mt-4 mb-4">Aprende desde Casa</h1>
      <h1 class="text-white display-1 mb-5">Cursos</h1>
      <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
        <div class="input-group">
          <div class="input-group-prepend">
            <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cursos</button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Curso 1</a>
              <a class="dropdown-item" href="#">Curso 2</a>
              <a class="dropdown-item" href="#">Curso 3</a>
            </div>
          </div>
          <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Palabra Clave">
          <div class="input-group-append">
            <button class="btn btn-secondary px-4 px-lg-5">Búsqueda</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->


  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row">
        <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="./assets/images/about.jpg" style="object-fit: cover;">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Nosotros</h6>
            <h1 class="display-4">Primera opción para la educación en línea en cualquier lugar</h1>
          </div>
          <p>Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna</p>
          <div class="row pt-3 mx-0">
            <div class="col-3 px-0">
              <div class="bg-success text-center p-4">
                <h1 class="text-white" data-toggle="counter-up">123</h1>
                <h6 class="text-uppercase text-white">Cursos<span class="d-block">Disponibles</span></h6>
              </div>
            </div>
            <div class="col-3 px-0">
              <div class="bg-primary text-center p-4">
                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                <h6 class="text-uppercase text-white">Cursos<span class="d-block">en Línea</span></h6>
              </div>
            </div>
            <div class="col-3 px-0">
              <div class="bg-secondary text-center p-4">
                <h1 class="text-white" data-toggle="counter-up">123</h1>
                <h6 class="text-uppercase text-white">Instructores<span class="d-block">Capacitados</span></h6>
              </div>
            </div>
            <div class="col-3 px-0">
              <div class="bg-warning text-center p-4">
                <h1 class="text-white" data-toggle="counter-up">1234</h1>
                <h6 class="text-uppercase text-white">Estudiantes<span class="d-block">Satisfechos</span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->


  <!-- Feature Start -->
  <div class="container-fluid bg-image" style="margin: 90px 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 my-5 pt-5 pb-lg-5">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Porqué escogernos?</h6>
            <h1 class="display-4">Por qué deberías comenzar a aprender con nosotros?</h1>
          </div>
          <p class="mb-4 pb-2">Aliquyam accusam clita nonumy ipsum sit sea clita ipsum clita, ipsum dolores amet voluptua duo dolores et sit ipsum rebum, sadipscing et erat eirmod diam kasd labore clita est. Diam sanctus gubergren sit rebum clita amet.</p>
          <div class="d-flex mb-3">
            <div class="btn-icon bg-primary mr-4">
              <i class="fa fa-2x fa-graduation-cap text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>Instructores Altamente Calificados</h4>
              <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="btn-icon bg-secondary mr-4">
              <i class="fa fa-2x fa-certificate text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>Certificados Avalados Internacionalmente</h4>
              <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
          <div class="d-flex">
            <div class="btn-icon bg-warning mr-4">
              <i class="fa fa-2x fa-book-reader text-white"></i>
            </div>
            <div class="mt-n1">
              <h4>Clases 100% online</h4>
              <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-5" style="min-height: 500px;">
          <div class="position-relative h-100">
            <img class="position-absolute w-100 h-100" src="./assets/images/feature.jpg" style="object-fit: cover;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Feature Start -->


  <!-- Courses Start -->

  <!-- Courses End -->


  <!-- Team Start -->

  <!-- Testimonial Start -->
  <div class="container-fluid bg-image py-5" style="margin: 90px 0;">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Testimonio</h6>
            <h1 class="display-4">Que dicen nuestros estudiantes</h1>
          </div>
          <p class="m-0">Dolor est dolores et nonumy sit labore dolores est sed rebum amet, justo duo ipsum sanctus dolore magna rebum sit et. Diam lorem ea sea at. Nonumy et at at sed justo est nonumy tempor. Vero sea ea eirmod, elitr ea amet diam ipsum at amet. Erat sed stet eos ipsum diam</p>
        </div>
        <div class="col-lg-7">
          <div class="owl-carousel testimonial-carousel">
            <div class="bg-white p-5">
              <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
              <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
              <div class="d-flex flex-shrink-0 align-items-center mt-4">
                <img class="img-fluid mr-4" src="./assets/images/testimonial-2.jpg" alt="">
                <div>
                  <h5>Nombre del Estudiante</h5>
                  <span>Diseño Web</span>
                </div>
              </div>
            </div>
            <div class="bg-white p-5">
              <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
              <p>Sed et elitr ipsum labore dolor diam, ipsum duo vero sed sit est est ipsum eos clita est ipsum. Est nonumy tempor at kasd. Sed at dolor duo ut dolor, et justo erat dolor magna sed stet amet elitr duo lorem</p>
              <div class="d-flex flex-shrink-0 align-items-center mt-4">
                <img class="img-fluid mr-4" src="./assets/images/testimonial-1.jpg" alt="">
                <div>
                  <h5>Nombre del Estudiante</h5>
                  <span>Desarrollo de Aplicaciones</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Testimonial Start -->


  <!-- Contact Start -->
  <div class="container-fluid py-5">
    <div class="container py-5">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-5 mb-lg-0">
          <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
            <div class="d-flex align-items-center mb-5">
              <div class="btn-icon bg-primary mr-4">
                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
              </div>
              <div class="mt-n1">
                <h4>Nuestra Ubicación</h4>
                <p class="m-0">Calle 123, Bogotá Colombia</p>
              </div>
            </div>
            <div class="d-flex align-items-center mb-5">
              <div class="btn-icon bg-secondary mr-4">
                <i class="fa fa-2x fa-phone-alt text-white"></i>
              </div>
              <div class="mt-n1">
                <h4>Llamanos</h4>
                <p class="m-0">+57 302 58 94</p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="btn-icon bg-warning mr-4">
                <i class="fa fa-2x fa-envelope text-white"></i>
              </div>
              <div class="mt-n1">
                <h4>Correo</h4>
                <p class="m-0">hola@configuroweb.com</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="section-title position-relative mb-4">
            <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Tienes alguna consulta?</h6>
            <h1 class="display-4">Dejanos un mensaje</h1>
          </div>
          <div class="contact-form">
            <form>
              <div class="row">
                <div class="col-6 form-group">
                  <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Tu nombre" required="required">
                </div>
                <div class="col-6 form-group">
                  <input type="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Tu correo" required="required">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Asunto" required="required">
              </div>
              <div class="form-group">
                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" rows="5" placeholder="Message" required="required"></textarea>
              </div>
              <div>
                <button class="btn btn-primary py-3 px-5" type="submit">Envía un mensaje</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->


  <!-- Footer Start -->
  <div class="container-fluid position-relative overlay-top bg-dark text-white-50 py-5" style="margin-top: 90px;">
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-md-6 mb-5">
          <a href="index.html" class="navbar-brand">
            <h1 class="mt-n2 text-uppercase text-white"><i class="fa fa-book-reader mr-3"></i>ConfiguroWeb</h1>
          </a>
          <p class="m-0">Accusam nonumy clita sed rebum kasd eirmod elitr. Ipsum ea lorem at et diam est, tempor rebum ipsum sit ea tempor stet et consetetur dolores. Justo stet diam ipsum lorem vero clita diam</p>
        </div>
        <div class="col-md-6 mb-5">
          <h3 class="text-white mb-4">Newsletter</h3>
          <div class="w-100">
            <div class="input-group">
              <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tu dirección de correo">
              <div class="input-group-append">
                <button class="btn btn-primary px-4">Regístrate</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-5">
          <h3 class="text-white mb-4">Contacto</h3>
          <p><i class="fa fa-map-marker-alt mr-2"></i>123 Bogotá, Colombia</p>
          <p><i class="fa fa-phone-alt mr-2"></i>+57 315 67890</p>
          <p><i class="fa fa-envelope mr-2"></i>hola@configuroweb.com</p>
          <div class="d-flex justify-content-start mt-4">
            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-twitter"></i></a>
            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-facebook-f"></i></a>
            <a class="text-white mr-4" href="#"><i class="fab fa-2x fa-linkedin-in"></i></a>
            <a class="text-white" href="#"><i class="fab fa-2x fa-instagram"></i></a>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <h3 class="text-white mb-4">Nuestros Cursos</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Diseño Web</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Diseño de Aplicaciones</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Investigación</a>
            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Educación Financiera</a>
          </div>
        </div>
        <div class="col-md-4 mb-5">
          <h3 class="text-white mb-4">Enlaces Rápidos</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Política de Privacidad</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Términos y Condiciones</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Preguntas Frecuentes</a>
            <a class="text-white-50 mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Ayuda y Soporte</a>
            <a class="text-white-50" href="#"><i class="fa fa-angle-right mr-2"></i>Contacto</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white-50 border-top py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-left mb-3 mb-md-0">
          <p class="m-0"><a class="text-white" href="https://www.configuroweb.com/46-aplicaciones-gratuitas-en-php-python-y-javascript/#Aplicaciones-gratuitas-en-PHP,-Python-y-Javascript">Para más desarrollos ConfiguroWeb</a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->


  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary rounded-0 btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Javascript -->
  <script src="./assets/js/main.js"></script>
</body>

</html>