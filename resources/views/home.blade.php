@extends('layouts.master')
@section('content')
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
        <div class="col-lg-6 order-lg-2 text-white showcase-img text-center" style="background: #065693;">
          <img class="img-fluid rounded mx-auto d-block" src="{{ asset('images/featured/cleona.png') }}" alt="Card image cap" style=" margin-top: 0px; width: 400px;">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Who We Are?</h2>
          <p class="lead mb-0">
            BSMANNA is business of siblings with different expertise that aim to aid and makes your life easier. Our products include various High quality cleaning chemicals and consumer goods. Moreover, our facility showcases state-of-the-art equipment to meet optimum production level.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background: #eda035;">
          <img class="img-fluid rounded mx-auto d-block" src="{{ asset('images/featured/violet.png') }}" alt="Card image cap" style=" margin-top: 0px; width: 400px;">
        </div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Our Mission</h2>
          <p class="lead mb-0">
            We shall provide our customer with the highest standards, cost-effective products and services. Binds with the commitment to give our clients the highest customer satisfaction and endless product development and innovation are our main priorities.
          </p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background: #065693;">
          <img class="img-fluid rounded mx-auto d-block" src="{{ asset('images/featured/pink.png') }}" alt="Card image cap" style=" margin-top: 0px; width: 400px;">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Our Vission</h2>
          <p class="lead mb-0">
            To be the leading provider of all your needs in a very convenient way.
          </p>
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
            <p class="font-weight-light mb-0">"Malaking tulong po ito sa ating mga kapulisan! Thanks You so much !" - <strong> - extending hands to our frontliners during covid-19 crisis.</strong></p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <a href="https://www.facebook.com/photo.php?fbid=2957982834329103&set=a.240358212758259&type=3&theater">
                <img class="img-fluid rounded-circle mb-3" src="{{ asset('images/testimonial/Mae R. Mirador.png') }}" alt="">
            </a>
            <h5> Mae R. Mirador</h5>
            <p class="font-weight-light mb-0">"We availed their P999 promo. Their offer was very affordable and recommendable with same day delivery which had me surprised and COD! The masks were legit 3ply! Thank you BS Manna Marketing. May God bless you. - " </p>
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
            <h4 class="font-weight-light"><i class="fas fa-envelope"></i> inquire.bsmanna@gmail.com</h4>
            <h4 class="font-weight-light"><i class="fas fa-phone"></i> <span class="">(045) 280 6429</span></h4>
            <h4 class="font-weight-light"><i class="fas fa-mobile"></i> (+63)-917-1921-084</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection