<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Get In Touch - Dura Coat | Contact Us for Powder Coating Services</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="keywords" content="contact Dura Coat, get in touch, powder coating inquiries, gi powder coating experts, ms powder coating experts, ss powder coating experts, ms bending service, asp bending service, powder coating services contact, metal coating consultation, coating service support, customer service, custom powder coating solutions, industrial coating contact, RAL powder coating" />
  <meta name="description" content="Get in touch with Dura Coat for expert powder coating services. Contact us for inquiries, quotes, or consultations on custom and industrial coating solutions." />


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
        <a href="/about" class="nav-item nav-link">About</a>
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
        <a href="/contact" class="nav-item nav-link active">Contact</a>
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
      <h1 class="display-3 text-white mb-4 animated slideInDown">
        Contact Us
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
        <ol class="breadcrumb justify-content-center mb-0">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">
            Contact
          </li>
        </ol>
      </nav>
    </div>
  </div>
  @endforeach
  <!-- Page Header End -->







  <!-- Contact Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">
        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
          <p class="fs-5 fw-bold text-primary">Contact Us</p>
          <h1 class="display-5 mb-5">
            If You Have Any Query, Please Fill Free to Ask
          </h1>
          <p class="mb-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut quo
            voluptas dicta rerum, exercitationem ducimus?
          </p>
          <form action="{{ route('addContact') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Your Name" />
                  <label for="name">Your Name</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-floating">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Your Email" />
                  <label for="email">Your Email</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Subject" />
                  <label for="subject">Subject</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control"
                    placeholder="message"
                    id="message"
                    name="message"
                    style="height: 100px"></textarea>
                  <label for="message">Message</label>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary py-3 px-4" type="submit">
                  Send Message
                </button>
              </div>
            </div>
          </form>
        </div>
        <div
          class="col-lg-6 wow fadeIn"
          data-wow-delay="0.5s"
          style="min-height: 450px">
          <div class="position-relative rounded overflow-hidden h-100">
            <iframe
              class="position-relative w-100 h-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4571.709486501011!2d88.18164397602747!3d22.570432933048398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027f3a442659a9%3A0x8f1365d6f36a8ca5!2sDURA%20COAT!5e1!3m2!1sen!2sin!4v1728049282255!5m2!1sen!2sin"
              frameborder="0"
              style="min-height: 450px; border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Contact End -->





  <!-- Success Modal For Contact Data Start -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="text-primary">Your message has been sent successfully!</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Success Modal For Contact Data End -->







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
              class="btn btn-square btn-outline-light rounded-circle me-2"><i class="fab fa-facebook-f"></i></a>
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



















  <!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.1/js/bootstrap.min.js"></script>

  <!-- Vanilla JavaScript to trigger the modal -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      if ("{{ session('success') }}") {
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
      }
    });
  </script>
</body>

</html>