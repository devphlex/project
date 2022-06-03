<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
     <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"rel="stylesheet"/>
      <!-- custom -->
    <link href="css/style.css" rel="stylesheet"/>
    <!---- Scroll-Reveal------>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    @yield('head')
</head>

<body>


<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Startec</a>
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">  <a class="nav-link active" aria-current="page" href="#">Home</a></li>
        <li class="nav-item"> <a class="nav-link" href="#service">How It Work</a> </li>
        <li class="nav-item"> <a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div> 
  </div>
</nav>

@yield('content')


<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

    <!-- Left -->
    <div class="me-5 d-none d-lg-block"><span>Get connected with us on social networks:</span></div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section id="contact">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>StarTec
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Gift Card</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Pos Merchant</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#!" class="text-reset">How It Works</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column conctact -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p><i class="fas fa-envelope me-3"></i>info@example.com</p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2022 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">StarTec.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

 <!-- MDB -->
 <script type="text/javascript"src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
<script>
  
      window.sr = ScrollReveal();
      sr.reveal('.navbar', {
        duration: 2000,
        origin: 'bottom'
      });
       sr.reveal('.showcase-right', {
        duration: 2000,
        origin: 'right',
        distance: '300px'
      });
        sr.reveal('.showcase-btn', {
        duration: 2000,
        delay: 2000,
        origin: 'bottom'      
      });
         sr.reveal('#comment div', {
        duration: 2000,
        delay: 1000,
        origin: 'bottom'      
      });
</script>
</body>

</html>