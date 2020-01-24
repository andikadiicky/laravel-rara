<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
    <link rel="stylesheet" href="{{URL::asset('/css/responsive-img.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css/Lightbox-Gallery.css')}}">

    <title>@yield('title')</title>

  </head>
  <body>

<!-- header Start -->
<div class="card text-center color-block" style="background: linear-gradient(to right, rgb(255, 251, 213), rgb(178, 10, 44))">
  <div class="card-body">
    <h1 class="card-title" style="font-family: 'Gochi Hand', cursive;">Sistem Informasi Ekstrakurikuler</h1>
    <h2 class="card-text" style="font-family: 'Rubik Mono One', sans-serif; font-size:18px">SMA NEGERI 6 Jakarta</h2>
  </div>
</div>
<!-- header END -->

<!-- Navbar Start -->
  <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: white;">
    <a href="#" class="navbar-brand">
      <img src="{{URL::asset('/images/logo.jpg')}}" height="55" alt="CoolBrand">
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav" style="margin-left: 80px; font-family: 'Varela Round', sans-serif; font-size: 20px;">
        <a href="{{url('/')}}" class="nav-item nav-link" style="margin-left: 20px">Beranda</a>
        <a href="{{url('/profil')}}" class="nav-item nav-link" style="margin-left: 20px">Profil Ekstrakurikuler</a>
        <a href="#" class="nav-item nav-link" style="margin-left: 20px">Berita</a>
        <a href="#" class="nav-item nav-link" style="margin-left: 20px">Prestasi</a>
        <a href="{{url('/students')}}" class="nav-item nav-link" style="margin-left: 20px">Students</a>
      </div>
      <div class="navbar-nav ml-auto">
        <a class="btn" href="#" role="button" style="margin-right: 25px">Login</a>
        <a class="btn btn-info" href="#" role="button" style="margin-right: 50px">Pendaftaran</a>
      </div>
    </div>
  </nav>
<!-- Navbar END -->

<!-- Slideshow image Start -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="3000">
      <img src="{{URL::asset('/images/first.png')}}" class="d-block w-100" alt="..." style="height:770px">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="{{URL::asset('/images/second.png')}}" class="d-block w-100" alt="..." style="height:770px">
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="{{URL::asset('/images/third.png')}}" class="d-block w-100" alt="..." style="height:770px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Slideshow image END -->

@yield('container')
<div class="photo-gallery">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Galeri Ekstrakurikuler</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row photos">
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="desk.jpg"><img class="img-fluid" src="{{URL::asset('/images/desk.jpg')}}" /></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="building.jpg"><img class="img-fluid" src="{{URL::asset('/images/building.jpg')}}" /></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="loft.jpg"><img class="img-fluid" src="{{URL::asset('/images/loft.jpg')}}" /></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="building.jpg"><img class="img-fluid" src="{{URL::asset('/images/building.jpg')}}" /></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="loft.jpg"><img class="img-fluid" src="{{URL::asset('/images/loft.jpg')}}" /></a></div>
            <div class="col-sm-6 col-md-4 col-lg-3 item"><a data-lightbox="photos" href="desk.jpg"><img class="img-fluid" src="{{URL::asset('/images/desk.jpg')}}" /></a></div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4">
  <!-- Footer Links -->
  <div class="container text-center text-md-left">
    <!-- Grid row -->
    <div class="row">
      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Sistem Informasi Ekstrakurikuler SMAN 6 Bekasi</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          essequasi, veritatis totam voluptas nostrum.</p>
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">
        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4">Web Links</h5>
        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>
      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-4 col-lg-4 mx-auto my-md-4 my-0 mt-4 mb-1">
        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>
        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i>Jl. Asri Lestari Raya Perum Pondok Mitra Kec. Jatiasih Kota Bekasi Prov. Jawa Barat 17423</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i>sma6.bekasi@yahoo.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i>021 821-6704</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i>021 824-29946</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->
      <hr class="clearfix w-100 d-md-none">
      <!-- Grid column -->
      <div class="col-md-2 col-lg-3 text-center mx-auto my-4">
        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Map SMAN 6 Bekasi</h5>
        <div class="sosial-links">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.8685918864026!2d106.97149631452055!3d-6.281000845453939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d90fbe47983%3A0x7d423f67a8bd398f!2sSMAN%206%20Kota%20Bekasi%2C%20Jaka%20Setia%2C%20Kec.%20Bekasi%20Sel.%2C%20Kota%20Bks%2C%20Jawa%20Barat%2017147%2C%20Indonesia!5e0!3m2!1sen!2sde!4v1578903714446!5m2!1sen!2sde" width="325" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
  <!-- Footer Links -->
  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© Made with 
    <span> <img src="{{URL::asset('/images/heart.png')}}" alt="heart" class="tw-px-1 tw-relative heart-pulse tw-inline" style="top: 2px;"> by <a class="tw-font-bold inherits-color link hover:tw-text-white"></span>:
    <a href="#"> Imara Acacia Khalda</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer END-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>