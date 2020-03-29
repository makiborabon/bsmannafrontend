<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>BS Manna Marketing</title>

  <!-- Bootstrap core CSS -->
<link href="{{ asset('template/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template --> 
  <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/vendor/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{ asset('template/css/landing-page.css') }}" rel="stylesheet">
  <link href="{{ asset('template/css/menu-hover.css') }}" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-light bg-light static-top stroke" id="top">
      <div class="container">
          <div class="row">
              <div class="col-sm-12">
                  <nav class="stroke">
                      <ul>
                        <li>
                            <img src="{{ asset('images/logo-sm.png')}}" width="80">
                         </li>
                        <li><a href="#top"  class="navbar-brand">Home</a></li>
                        <li><a href="#about" class="navbar-brand">About Us</a></li>
                        <li><a href="#offer" class="navbar-brand">What We Offer</a></li>
                        <li><a href="#whatsay" class="navbar-brand">What They Say</a></li>
                        <li><a href="#contact" class="navbar-brand">Contact Us!</a></li>
                      </ul>
                    </nav>
              </div>
            </div>
      </div>
    </nav>

  <!-- Masthead -->
  <header class="masthead text-black ">
    {{-- <div class="overlay"></div> --}}
    <div class="container">
      <div class="row">
        <div class="col-sm-5 clear">
          <h2>You Think,</h2>
          <h2>We Provide!</h2>
          <p class="font-weight-light mb-0">Our products includes various high quality cleaning chemicals and consumer goods supplies in leading supermarket and institution.</p>
          {{-- <a href="$#" class="btn btn-block btn-lg btn-primary">See more</a> --}}
        </div>
      </div>
    </div>
  </header>


  <!-- Icons Grid -->
  <section class="features-icons bg-light text-center" id="offer">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-home m-auto text-primary"></i>
            </div>
            <h3>For Home</h3>
            <p class="lead mb-0">We offer All Purpose Detergent, Fabric Softener, Liquid Soap, Diswashing Liquid etc..</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-credit-card m-auto text-primary"></i>
            </div>
            <h3>For Laundry</h3>
            <p class="lead mb-0">We offer All Purpose Detergent, Fabric Softener, Liquid Soap, Diswashing Liquid etc..</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="fas fa-building m-auto text-primary"></i>
            </div>
            <h3>For Hotel, Restaurant & Enterprises</h3>
            <p class="lead mb-0">We offer All Purpose Detergent, Fabric Softener, Liquid Soap, Diswashing Liquid etc..</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Image Showcases -->
  <section class="showcase" id="about">
    <div class="container-fluid p-0">
      <div class="row no-gutters">
          {{-- background-image: url('template/img/bg-showcase-1.jpg'); --}}
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background: #065693;"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Who We Are?</h2>
          <p class="lead mb-0">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background: #eda035;"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Our Mission</h2>
          <p class="lead mb-0">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background: #065693;"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Our Vission</h2>
          <p class="lead mb-0">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section class="testimonials text-center bg-light" id="whatsay">
    <div class="container">
      <h2 class="mb-5">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('images/testimonial/pulis.jpg') }}" alt="">
            <h5>Compact 5, Police - Dau Mabalacat.</h5>
            <p class="font-weight-light mb-0">"Malaking tulong po ito sa ating mga kapulisan! Thanks You so much !" - <strong>We donated alcohol for our frontliners during covid-19 crisis.</strong></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('images/testimonial/avatar.png') }}" alt="">
            <h5> - - - - -</h5>
            <p class="font-weight-light mb-0">"- - - - - - - - - - - - - - - - - - - - -"</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="{{ asset('images/testimonial/avatar.png') }}" alt="">
            <h5> - - - - -</h5>
            <p class="font-weight-light mb-0">"- - - - - - - - - - - - - - - - - - - - -"</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="call-to-action text-white text-center" id="contact">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 offset-sm-3">
          <div class="col-xl-9 mx-auto">
              <h2 class="mb-4">For inquiry? Send us now!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7  mx-auto">
                <h4 class="font-weight-light"><i class="fas fa-envelope"></i> info.bsmanna@gmail.com</h4>
                <h4 class="font-weight-light"><i class="fas fa-phone"></i> <span class="">(045) 436-0308</span></h4>
                <h4 class="font-weight-light"><i class="fas fa-mobile"></i> (+63)-9217-1921-084</h4>
            </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#about">About</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contact</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
          </ul>
          <p class="text-muted small mb-4 mb-lg-0">&copy; BSMANNA Marketing 2019. All Rights Reserved.</p>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3">
              <a href="https://www.facebook.com/BSMannaMarketing/" target="_blank">
                <i class="fab fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3">
              <a href="#">
                <i class="fab fa-twitter-square fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-instagram fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
