<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>About Us - Dura Coat | Powder Coating & Bending Experts</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="keywords" content="about Dura Coat, gi powder coating experts, ms powder coating experts, ss powder coating experts, ms bending service, asp bending service, powder coating experts, surface finishing, metal coating specialists, powder coating services, custom coating solutions, industrial coating, protective finishes, durable coatings, RAL powder coating" />
  <meta name="description" content="Learn more about Dura Coat, industry leaders in powder coating, bending and surface finishing. Our expertise ensures high-quality, durable coatings for industrial, commercial, and custom applications." />

  <!-- Favicon -->
  <link href="img/logoIcon5.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
    rel="stylesheet" />

  <!-- Icon Font Stylesheet -->
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
    rel="stylesheet" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet" />
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Spinner Start -->
  <div
    id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div
      class="spinner-border text-primary"
      role="status"
      style="width: 3rem; height: 3rem"></div>
  </div>
  <!-- Spinner End -->









  <!-- Topbar Start -->
  <div class="container-fluid bg-dark text-light px-0 py-2">
    <div class="row gx-0 d-none d-lg-flex">
      <div class="col-lg-7 px-5 text-start">

        @foreach($contacts as $contact)
        <div class="h-100 d-inline-flex align-items-center me-4">
          <span class="fa fa-phone-alt me-2"></span>
          <span><a href="tel:{{$contact->c_number}}" style="color: white">+91 {{$contact->c_number}}</a></span>
        </div>
        <div class="h-100 d-inline-flex align-items-center">
          <span class="far fa-envelope me-2"></span>
          <span><a href="mailto:{{$contact->c_email}}" style="color: white">{{$contact->c_email}}</a></span>
        </div>
        @endforeach

      </div>
      <div class="col-lg-5 px-5 text-end">
        <div class="h-100 d-inline-flex align-items-center mx-n2">
          <span>Follow Us:</span>
          <a class="btn btn-link text-light"><i class="fab fa-facebook-f"></i></a>
          <a class="btn btn-link text-light" href="https://x.com/duracoat_9tank" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="btn btn-link text-light" href="https://www.linkedin.com/in/dura-coat-a8915b333/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          <a class="btn btn-link text-light" href="https://www.instagram.com/duracoat_9tankprocess/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Topbar End -->








  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a
      href="/"
      class="navbar-brand d-flex align-items-center px-4 px-lg-5">
      <img src="img/logoD.png" width="220" alt="" />
    </a>
    <button
      type="button"
      class="navbar-toggler me-4"
      data-bs-toggle="collapse"
      data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a href="/" class="nav-item nav-link">Home</a>
        <a href="/about" class="nav-item nav-link active">About</a>
        <a href="/clients" class="nav-item nav-link">Clients</a>
        <a href="/test-cirtificate" class="nav-item nav-link">Testing</a>
        <a href="/ral" class="nav-item nav-link">RAL</a>
        <!-- <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="feature.html" class="dropdown-item">Powder Coating</a>
                        <a href="quote.html" class="dropdown-item">Bending</a>
                        <a href="team.html" class="dropdown-item">Machinery</a>
                    </div>
                </div> -->
        <a href="/contact" class="nav-item nav-link">Contact</a>
      </div>
      <a
        href="/blogs"
        class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Popular Blogs<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->








  <!-- Page Header Start -->
  @foreach($otherbanners as $otherbanner)
  <div
    class="container-fluid page-header py-5 mb-5 wow fadeIn"
    data-wow-delay="0.1s"
    style="background: linear-gradient(rgba(15, 66, 41, 0.315), rgba(15, 66, 41, 0.336)), 
     url('{{ asset('storage/' . $otherbanner->other_banner) }}') center center no-repeat;
     background-size: cover;">
    <div class="container text-center py-5">
      <h1 class="display-3 text-white mb-4 animated slideInDown">About Us</h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
      </nav>
    </div>
  </div>
  @endforeach
  <!-- Page Header End -->








  <!-- About Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-end">
        @foreach($aboutDatas as $aboutData)
        <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
          <img
            class="img-fluid rounded"
            data-wow-delay="0.1s"
            src="{{ asset('storage/' . $aboutData->about_image) }}" />
        </div>

        <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
          <h1 class="display-1 text-primary mb-0">{{$aboutData->about_ex}}</h1>
          <p class="text-primary mb-4">Year of Experience</p>
          <h1 class="display-5 mb-4">
            {{$aboutData->about_title}}
          </h1>
          <p class="mb-4">
            {{$aboutData->about_desc}}
          </p>
          <!-- <a class="btn btn-primary py-3 px-4" href="">Explore More</a> -->
        </div>

        <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
          <div class="row g-5">
            <div class="col-12 col-sm-6 col-lg-12">
              <div class="border-start ps-4">
                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                <h4 class="mb-3">Award Winning</h4>
                <span>DURA COAT proudly offers award-winning powder coating and
                  ASP bending services, delivering unmatched quality and
                  innovation to elevate your projects.</span>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-12">
              <div class="border-start ps-4">
                <i class="fa fa-users fa-3x text-primary mb-3"></i>
                <h4 class="mb-3">Dedicated Labours</h4>
                <span>Our skilled team at DURA COAT is dedicated to delivering
                  top-quality powder coating and ASP bending services,
                  ensuring precision and durability in every project</span>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- About End -->








  <!-- Facts Start -->
  <div
    class="container-fluid facts my-5 py-5"
    data-parallax="scroll"
    data-image-src="img/banner2.jpg">
    <div class="container py-5">
      <div class="row g-5">

        @foreach($aboutNums as $aboutNum)
        <div
          class="col-sm-6 col-lg-3 text-center wow fadeIn"
          data-wow-delay="0.1s">
          <h1 class="display-4 text-white" data-toggle="counter-up">{{$aboutNum->clients}}</h1>
          <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
        </div>
        <div
          class="col-sm-6 col-lg-3 text-center wow fadeIn"
          data-wow-delay="0.3s">
          <h1 class="display-4 text-white" data-toggle="counter-up">{{$aboutNum->projects}}</h1>
          <span class="fs-5 fw-semi-bold text-light">Project Complated</span>
        </div>
        <div
          class="col-sm-6 col-lg-3 text-center wow fadeIn"
          data-wow-delay="0.5s">
          <h1 class="display-4 text-white" data-toggle="counter-up">{{$aboutNum->staff}}</h1>
          <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
        </div>
        <div
          class="col-sm-6 col-lg-3 text-center wow fadeIn"
          data-wow-delay="0.7s">
          <h1 class="display-4 text-white" data-toggle="counter-up">{{$aboutNum->awards}}</h1>
          <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- Facts End -->








  <!-- Team Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div
        class="text-center mx-auto wow fadeInUp"
        data-wow-delay="0.1s"
        style="max-width: 500px">
        <p class="fs-5 fw-bold text-primary">Our Team</p>
        <h1 class="display-5 mb-5">Dedicated & Experienced Team Members</h1>
      </div>
      <div class="row g-4">

        @foreach($teams as $team)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="team-item rounded">
            <img class="img-fluid" src="{{ asset('storage/' . $team->t_img) }}" alt="" />
            <div class="team-text">
              <h4 class="mb-0">{{$team->t_name}}</h4>
              <p class="text-primary">{{$team->t_prof}}</p>
              <div class="team-social d-flex">
                <a class="btn btn-square rounded-circle me-2" href="{{$team->t_fb}}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square rounded-circle me-2" href="{{$team->t_twit}}" target="_blank"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square rounded-circle me-2" href="{{$team->t_insta}}" target="_blank"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- Team End -->








  <!-- Footer Start -->
  <div
    class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn"
    data-wow-delay="0.1s">
    <div class="container py-5">
      <div class="row g-5">
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">DURA COAT</h4>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt me-3"></i><a href="https://maps.app.goo.gl/WwfSBKNWsoQ5ULXWA" target="_blank" style="color: white;">Sankrail Industrial Park, Dhulagarh, Howrah, WB-711302</a>
          </p>

          @foreach($contacts as $contact)
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i><a href="tel:{{$contact->c_number}}" style="color: white;">+91 {{$contact->c_number}}</a>
          </p>
          <p class="mb-2">
            <i class="fa fa-phone-alt me-3"></i><a href="tel:9088511511" style="color: white;">+91 9088511511</a>
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope me-3"></i><a href="mailto:{{$contact->c_email}}" style="color: white;">{{$contact->c_email}}</a>
          </p>
          @endforeach

          <div class="d-flex pt-2">
            <a
              class="btn btn-square btn-outline-light rounded-circle me-2"
              href="https://x.com/duracoat_9tank" target="_blank"><i class="fab fa-twitter"></i></a>
            <a
              class="btn btn-square btn-outline-light rounded-circle me-2"
              ><i class="fab fa-facebook-f"></i></a>
            <a
              class="btn btn-square btn-outline-light rounded-circle me-2"
              href="https://www.instagram.com/duracoat_9tankprocess/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a
              class="btn btn-square btn-outline-light rounded-circle me-2"
              href="https://www.linkedin.com/in/dura-coat-a8915b333/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Coating Services</h4>
          <a class="btn btn-link">MS Powder Coating</a>
          <a class="btn btn-link">Aluminium Powder Coating</a>
          <a class="btn btn-link">GI Coating</a>
          <a class="btn btn-link">SS Powder Coating</a>
          <a class="btn btn-link">Panel Coating</a>
          <a class="btn btn-link">Automobile Parts Coating</a>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Bending Service</h4>
          <a class="btn btn-link">Sheet Bending</a>
          <a class="btn btn-link">MS Pipe Bending</a>
          <a class="btn btn-link">Rectangular Tube</a>
          <a class="btn btn-link">Square Tube</a>
          <a class="btn btn-link">Round Pipe</a>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Our Testing</h4>
          <a class="btn btn-link" href="/test-cirtificate">9 Tanks Process</a>
          <a class="btn btn-link" href="/test-cirtificate">Micron Test</a>
          <a class="btn btn-link" href="/test-cirtificate">Scrach Test</a>
          <a class="btn btn-link" href="/test-cirtificate">Durability Test</a>
          <a class="btn btn-link" href="/contact">Support</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer End -->








  <!-- Copyright Start -->
  <div class="container-fluid copyright py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
          &copy; <a class="border-bottom" href="#">Dura Coat</a>, All Right
          Reserved.
        </div>
        <!-- <div class="col-md-6 text-center text-md-end"> -->
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        <!-- Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a> -->
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- Copyright End -->








  <!-- Back to Top -->
  <a
    href="#"
    class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>








  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/parallax/parallax.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>