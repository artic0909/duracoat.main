<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Dura Coat - Premium Powder Coating Services | Durable & Custom Finishes</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="keywords" content="powder coating, dura coat, gi powder coating experts, ms powder coating experts, ss powder coating experts, ms bending service, asp bending service, Dura coat, Dura Coat, powder coating, custom powder coating, industrial coating, durable finishes, RAL powder coating, sheet metal coating, corrosion resistance, protective coating, color coating, metal finishing, powder coating services, powder coating for metal, powder coating experts" />
  <meta name="description" content="Dura Coat offers professional powder coating services with durable and high-quality finishes. Explore a wide range of RAL colors and custom solutions for superior metal protection and aesthetic appeal. Perfect for industrial and commercial applications." />

  <!-- Favicon -->
  <link href="img/logoIcon5.png" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

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
          <span class="fa fa-phone me-2"></span>
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
        <a href="/" class="nav-item nav-link active">Home</a>
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
        <a href="/contact" class="nav-item nav-link">Contact</a>
      </div>
      <a
        href="/blogs"
        class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">Popular Blogs<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->






  <!-- Carousel Start -->
  <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        @foreach($bigbanners as $bigbanner)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
          <img class="w-100" src="{{ asset('storage/' . $bigbanner->home_banner) }}" alt="Image" />
          <div class="carousel-caption">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-8">
                  <h1
                    class="display-1 text-white mb-5 animated slideInDown"
                    style="text-transform: capitalize">
                    {{$bigbanner->home_banner_title}}
                  </h1>
                  <a href="" class="btn btn-primary py-sm-3 px-sm-4">Explore More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#header-carousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Carousel End -->






  <!-- Top Feature Start -->
  <div class="container-fluid top-feature py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
      <div class="row gx-0">



        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
          <div
            class="bg-white shadow d-flex align-items-center h-100 px-5"
            style="min-height: 160px">
            <div class="d-flex">
              <div
                class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                <i class="fa fa-times text-primary"></i>
              </div>
              <div class="ps-3">
                <h4>No Hidden Cost</h4>
                <span>Experience transparent pricing with our "No Hidden Cost"
                  policy—what you see is what you get, ensuring full
                  satisfaction!</span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
          <div
            class="bg-white shadow d-flex align-items-center h-100 px-5"
            style="min-height: 160px">
            <div class="d-flex">
              <div
                class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                <i class="fa fa-route text-primary"></i>
              </div>
              <div class="ps-3">
                <h4>Find Us</h4>
                <span style="display: flex; flex-direction: column; gap: 4px;">
                  <a href="mailto:duracoat40@gmail.com" style="text-decoration: none; color: black; opacity: 0.8;"><i class="fa fa-envelope text-primary" aria-hidden="true"></i>&nbsp;duracoat40@gmail.com</a>
                  <a href="tel:9088511511" style="text-decoration: none; color: black; opacity: 0.8;"><i class="fa fa-phone text-primary" aria-hidden="true"></i>&nbsp;+91 9088511511</a>
                  <a href="" style="text-decoration: none; color: black; opacity: 0.8;"><i class="fa fa-location text-primary" aria-hidden="true"></i>&nbsp;Sankrail Industrial Park, Dhulagarh, Howrah, WB-711302</a>
                </span>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
          <div
            class="bg-white shadow d-flex align-items-center h-100 px-5"
            style="min-height: 160px">
            <div class="d-flex">
              <div
                class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                <i class="fa fa-phone text-primary"></i>
              </div>
              <div class="ps-3">
                <h4>24/7 Available</h4>
                <span>Get top-notch powder coating services anytime with our 24/7
                  availability. Quality and convenience, whenever you need
                  it!</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
  </div>
  <!-- Top Feature End -->






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






  <!-- Features Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5 align-items-center">
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
          <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
          <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
          <p class="mb-4">
            Choose DURA COAT for unmatched expertise in powder coating and
            bending services. Our commitment to quality, advanced techniques,
            and dedicated team ensure your projects are completed to the
            highest standards. Experience durability and aesthetics that stand
            the test of time!
          </p>
          <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
        </div>
        <div class="col-lg-6">
          <div class="row g-4 align-items-center">
            <div class="col-md-4">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i class="fa fa-check fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">100% Satisfaction</h4>
                  </div>
                </div>

                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i
                        class="fa-solid fa-flask-vial fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">In House Testing</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i
                        class="fa-solid fa-arrow-up-from-ground-water fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">9 Tank Process</h4>
                  </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i
                        class="fa-solid fa-arrow-down-up-across-line fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">Both Interior & Exterior</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="row g-4">
                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i
                        class="fa-solid fa-certificate fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">Branded Powder</h4>
                  </div>
                </div>
                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                  <div
                    class="text-center rounded py-5 px-4"
                    style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)">
                    <div
                      class="btn-square bg-light rounded-circle mx-auto mb-4"
                      style="width: 90px; height: 90px">
                      <i class="fa-solid fa-award fa-3x text-primary"></i>
                    </div>
                    <h4 class="mb-0">Guarantee 10 & 15 Years</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->






  <!-- Service Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div
        class="text-center mx-auto wow fadeInUp"
        data-wow-delay="0.1s"
        style="max-width: 500px">
        <p class="fs-5 fw-bold text-primary">Our Services</p>
        <h1 class="display-5 mb-5">Services That We Offer For You</h1>
      </div>
      <div class="row g-4">

        @foreach($services as $service)
        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
          <div class="service-item rounded d-flex h-100">
            <div class="service-img rounded">
              <img class="img-fluid" src="{{ asset('storage/' . $service->s_image) }}" alt="" />
            </div>
            <div class="service-text rounded p-5">
              <div class="btn-square rounded-circle mx-auto mb-3">
                <img
                  class="img-fluid"
                  src="{{ asset('storage/' . $service->s_icon) }}"
                  alt="Icon" />
              </div>
              <h4 class="mb-3">{{$service->s_title}}</h4>
              <p class="mb-4">
                {{$service->s_s_desc}}
              </p>
              <a class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#myService{{$service->id}}"><i class="fa fa-arrow-right-long text-primary me-2"></i>Read More</a>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
  <!-- Service End -->


  <!-- Single Service modal Start -->
  @foreach($services as $service)
  <div class="modal fade" id="myService{{$service->id}}" tabindex="-1" aria-labelledby="myServiceLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <div class="modal-body">
          <div class="card mb-3">
            <img src="{{ asset('storage/' . $service->s_image) }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h3 class="card-title" style="display: flex; align-items: center; gap: 6px;">
                <img src="{{ asset('storage/' . $service->s_icon) }}" width="50" alt="">
                {{$service->s_title}}
              </h3>
              <p class="card-text">{{$service->s_l_desc}}</p>
              <p class="card-text"><small class="text-muted">Last updated {{$service->updated_at}} ago</small></p>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary w-100" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Single Service modal End -->










  <!-- Blogs Start -->
  <div
    class="container-fluid quote my-5 py-5"
    data-parallax="scroll"
    data-image-src="img/banner2.jpg">
    <div class="container py-5">
      <div class="row justify-content-center">


        <form action="{{route('addBlog')}}" method="POST" enctype="multipart/form-data" class="col-lg-7">
          @csrf
          <div
            class="bg-white rounded p-4 p-sm-5 wow fadeIn"
            data-wow-delay="0.5s">
            <h1 class="display-5 text-center mb-5">Leave A Free Blog</h1>
            <div class="row g-3">


              <div class="col-sm-12">
                <div class="form-floating">
                  <input
                    type="file"
                    class="form-control bg-light border-0"
                    id="b_img" name="b_img" />
                </div>
                <small style="font-weight: 500; opacity: 0.7;">Must be less than 1.5MB (550x550)</small>
              </div>


              <div class="col-sm-12">
                <div class="form-floating">
                  <input
                    type="text"
                    class="form-control bg-light border-0"
                    id="b_title" name="b_title"
                    placeholder="Blog title" />
                  <label for="b_title">Blog Title</label>
                </div>
              </div>


              <div class="col-12">
                <div class="form-floating">
                  <textarea
                    class="form-control bg-light border-0"
                    placeholder="Leave a blog description"
                    id="b_message" name="b_message"
                    style="height: 100px"></textarea>
                  <label for="b_message">Blog Description</label>
                </div>
              </div>


              <div class="col-12 text-center">
                <button class="btn btn-primary py-3 px-4" type="submit">
                  Submit Now
                </button>
              </div>
            </div>
          </div>
        </form>


      </div>
    </div>
  </div>
  <!-- Blogs End -->



  <!-- success modal for blogs start -->
  <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="successModalLabel">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2 class="text-primary">Your blog has been added successfully!</h2>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- success modal for blogs end -->











  <!-- Gallery Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div
        class="text-center mx-auto wow fadeInUp"
        data-wow-delay="0.1s"
        style="max-width: 500px">
        <p class="fs-5 fw-bold text-primary">Gallery</p>
        <h1 class="display-5 mb-5">Some Of Our Energetic Moments</h1>
      </div>
      <div class="row wow fadeInUp" data-wow-delay="0.3s">
        <div class="col-12 text-center">
          <ul class="list-inline rounded mb-5" id="portfolio-flters">
            <li class="mx-2 active" data-filter="*">All</li>
            <li class="mx-2" data-filter=".first">Powder Coating</li>
            <li class="mx-2" data-filter=".second">Bending</li>
          </ul>
        </div>
      </div>

      <div class="row g-4 portfolio-container">



        @foreach($gcs as $gc)
        <div
          class="col-lg-3 col-md-4 portfolio-item first wow fadeInUp"
          data-wow-delay="0.1s">
          <div class="portfolio-inner rounded">
            <img class="img-fluid" src="{{ asset('storage/' . $gc->g_powder) }}" alt="" />
            <div class="portfolio-text">
              <h4 class="text-white mb-4">{{$gc->g_c_title}}</h4>
            </div>
          </div>
        </div>
        @endforeach




        @foreach($gbs as $gb)
        <div
          class="col-lg-3 col-md-4 portfolio-item second wow fadeInUp"
          data-wow-delay="0.3s">
          <div class="portfolio-inner rounded">
            <img class="img-fluid" src="{{ asset('storage/' . $gb->g_bending) }}" alt="" />
            <div class="portfolio-text">
              <h4 class="text-white mb-4">{{$gb->g_b_title}}</h4>
            </div>
          </div>
        </div>
        @endforeach





      </div>
    </div>
  </div>
  <!-- Gallery End -->











  <!-- Best Powder Brands Start -->
  <div
    class="container-fluid facts my-5 py-5"
    
    style="background-color: #F5F5F5;">
    <div class="container py-5">
      <div class="row g-5">



        @foreach($brands as $brand)
        <div
          class="col-sm-6 col-lg-3 text-center wow fadeIn"
          data-wow-delay="0.1s">
          <img style="filter: drop-shadow(1px 1px 1px black);" src="{{ asset('storage/' . $brand->collab_company) }}" width="240px" alt="" />
        </div>
        @endforeach



      </div>
    </div>
  </div>
  <!-- Best Powder Brands End -->










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






  <!-- Testimonial Start -->
  <div class="container-xxl py-5">
    <div class="container">
      <div class="row g-5">


        <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
          <p class="fs-5 fw-bold text-primary">Testimonial</p>
          <h1 class="display-5 mb-5">What Our Clients Say About Us!</h1>
          <p class="mb-4">
            Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
            diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet
            lorem sit clita duo justo.
          </p>
          <!-- <a class="btn btn-primary py-3 px-4" href="">See More</a> -->
        </div>



        <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
          <div class="owl-carousel testimonial-carousel">

            @foreach($tsts as $tst)


            <div class="testimonial-item">
              <img
                class="img-fluid rounded mb-3"
                src="{{ asset('storage/' . $tst->tst_img) }}"
                alt="" />
              <p class="fs-5">
                {{$tst->tst_msg}}
              </p>
              <h4>{{$tst->tst_name}}</h4>
              <span>{{$tst->tst_prof}}</span>
            </div>


            @endforeach

          </div>
        </div>



      </div>
    </div>
  </div>
  <!-- Testimonial End -->






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
            <i class="fa fa-phone me-3"></i><a href="tel:{{$contact->c_number}}" style="color: white;">+91 {{$contact->c_number}}</a>
          </p>
          <p class="mb-2">
            <i class="fa fa-phone me-3"></i><a href="tel:9088511511" style="color: white;">+91 9088511511</a>
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
          <a class="btn btn-link" >MS Powder Coating</a>
          <a class="btn btn-link" >Aluminium Powder Coating</a>
          <a class="btn btn-link" >GI Coating</a>
          <a class="btn btn-link" >SS Powder Coating</a>
          <a class="btn btn-link" >Panel Coating</a>
          <a class="btn btn-link" >Automobile Parts Coating</a>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4 class="text-white mb-4">Bending Service</h4>
          <a class="btn btn-link" >Sheet Bending</a>
          <a class="btn btn-link" >MS Pipe Bending</a>
          <a class="btn btn-link" >Rectangular Tube</a>
          <a class="btn btn-link" >Square Tube</a>
          <a class="btn btn-link" >Round Pipe</a>
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

















  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.1/js/bootstrap.min.js"></script>


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