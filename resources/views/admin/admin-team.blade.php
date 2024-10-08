<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Our Team</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="Admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="Admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="Admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="Admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="Admin/css/vertical-layout-light/style.css">
    <!-- endinject -->

    <!-- icon -->
    <link rel="icon" href="img/logoicon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <style>
        .floating-btn-div {
            position: fixed;
            bottom: 70px;
            right: 20px;
            z-index: 1000;
        }

        .floating-btn {
            color: white !important;
            background-color: rgb(73, 73, 172);
            color: rgb(0, 0, 0);
            border: none;
            border-radius: 50%;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            font-size: 2rem;
            transition: background-color 0.3s ease;
            animation: 1000ms linear 100ms infinite alternate scrollUpDown1;
        }
    </style>
</head>

<body>
    <div class="container-scroller">



        <!-- partial:partials/_navbar.html -->



        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">


            <!-- logo -->
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="/dashboard">
                    <h3 class="font-bold">Dura Coat</h3>
                </a>
                <a class="navbar-brand brand-logo-mini" href="index.html">
                    <h5 class="font-bold">D C</h5>
                </a>
            </div>




            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>

                <ul class="navbar-nav navbar-nav-right">




                    <!-- logout -->
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="{{asset('img/logoicon.png')}}" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </form>
                        </div>
                    </li>




                </ul>



                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>




            </div>
        </nav>



































        <!-- Sidebar -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->


            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">


                    <!-- dashboard -->
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>


                    <!-- Banners -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Banners</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/home-banner">Home Banner</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/other-banner">Others Page Banner</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- About Section -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic11" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">About</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic11">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-about">About Data</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-numbers">About Numbers</a></li>
                            </ul>
                        </div>
                    </li>




                    <!-- Services -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic1111" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">Service</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic1111">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-services">Services</a></li>
                            </ul>
                        </div>
                    </li>






                    <!-- Gallery -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic10" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-layout menu-icon"></i>
                            <span class="menu-title">Gallery</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic10">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-gallery-coating">Powder Coating</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-gallery-bending">Bending</a></li>
                                <!-- <li class="nav-item"> <a class="nav-link" href="/admin-gallery-mechinary">Mechinary & Automobiles</a></li> -->
                            </ul>
                        </div>
                    </li>





                    <!-- Quote Collection -->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="/admin-quote">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Quote</span>
                        </a>
                    </li> -->


                    <!-- Best Powder Company -->
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic103" aria-expanded="false" aria-controls="ui-basic">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Companies</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic103">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="/admin-collab">Collab Companies</a></li>
                                <li class="nav-item"> <a class="nav-link" href="/admin-clients">Our Clients</a></li>
                            </ul>
                        </div>
                    </li>



                    <!-- Expert Team -->
                    <li class="nav-item">
                        <a class="nav-link" href="/admin-team">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Team Members</span>
                        </a>
                    </li>



                    <!-- Testimonial -->
                    <li class="nav-item">
                        <a class="nav-link" href="/admin-testimonial">
                            <i class="icon-contract menu-icon"></i>
                            <span class="menu-title">Testimonial</span>
                        </a>
                    </li>



                    <!-- Customer Support -->
                    <li class="nav-item">
                        <a class="nav-link" href="/customer-support">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Customer Support</span>
                        </a>
                    </li>







                </ul>
            </nav>









            <!-- MAIN CONTENT PART START==================================================================================================================================== -->
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin">
                            <div class="row">
                                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                    <h3 class="font-weight-bold">Our Dedicated Team</h3>
                                </div>





                                <div class="col-lg-12 grid-margin stretch-card mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Ratio: 550x650</h4>
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Images</th>
                                                            <th>Name</th>
                                                            <th>Profession</th>
                                                            <th>Insta Link</th>
                                                            <th>Facebook Link</th>
                                                            <th>Twitter Link</th>
                                                            <th>Edit</th>
                                                            <th>Delete</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>
                                                            <td><img src="img/t1.jpg" alt="" style="width: 80px; height: 80px; border-radius: 6px;"></td>
                                                            <td>name</td>
                                                            <td>profession</td>
                                                            <td><a href=""><i class="fa-brands fa-square-instagram fa-2x" style="color: red;"></i></a></td>
                                                            <td><a href=""><i class="fa-brands fa-square-facebook fa-2x" style="color: blue;"></a></td>
                                                            <td><a href=""><i class="fa-brands fa-square-twitter fa-2x" style="color: skyblue;"></a></td>
                                                            <td><a href="" class="text-success" style="font-size: 1.4rem;" data-toggle="modal" data-target="#myEditModal"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                                            <td><a href="" class="text-danger" style="font-size: 1.4rem;" data-toggle="modal" data-target="#myDeleteModal"><i class="fa-solid fa-trash-can"></i></a></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                    </div>










                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2024. <a href="" target="_blank">Dura Coat</a> All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Easy-To-Access & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Developed by <a href="https://github.com/artic0909" target="_blank">Saklinmustak</a></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
            <!-- MAIN CONTENT PART END====================================================================================================================================== -->





        </div>
















        <!-- floating add btn -->
        <div class="floating-btn-div" data-toggle="modal" data-target="#myAddModal">
            <button class="floating-btn">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>







        <!-- add modal -->
        <div class="modal" id="myAddModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Add Bending Image</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="t_image">Image</label>
                                <input type="file" class="form-control" id="t_image" name="t_image">
                                <small id="emailHelp" class="form-text text-muted">Upload banner less than 1.5 MB</small>
                            </div>

                            <div class="form-group">
                                <label for="t_name">Name</label>
                                <input type="text" id="t_name" name="t_name" class="form-control">
                            </div>     
                            
                            <div class="form-group">
                                <label for="t_prof">Profession</label>
                                <input type="text" id="t_prof" name="t_prof" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_insta">Insta LINK</label>
                                <input type="text" id="t_insta" name="t_insta" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_fb">Facebook Link</label>
                                <input type="text" id="t_fb" name="t_fb" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_twit">Twitter Link</label>
                                <input type="text" id="t_twit" name="t_twit" class="form-control">
                            </div>

                            


                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>






        <!-- edit modal -->
        <div class="modal" id="myEditModal">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h4 class="modal-title">Edit Bending Image</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>


                    <div class="modal-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group" style="display: flex; justify-content: center;">
                                <img src="img/t1.jpg" style="width: 160px; border-radius: 10px;" alt="">
                            </div>

                            <div class="form-group">
                                <label for="t_image">Image</label>
                                <input type="file" class="form-control" id="t_image" name="t_image">
                                <small id="emailHelp" class="form-text text-muted">Upload banner less than 1.5 MB</small>
                            </div>

                            <div class="form-group">
                                <label for="t_name">Name</label>
                                <input type="text" id="t_name" name="t_name" class="form-control">
                            </div>     
                            
                            <div class="form-group">
                                <label for="t_prof">Profession</label>
                                <input type="text" id="t_prof" name="t_prof" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_insta">Insta LINK</label>
                                <input type="text" id="t_insta" name="t_insta" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_fb">Facebook Link</label>
                                <input type="text" id="t_fb" name="t_fb" class="form-control">
                            </div>
                                                        
                            <div class="form-group">
                                <label for="t_twit">Twitter Link</label>
                                <input type="text" id="t_twit" name="t_twit" class="form-control">
                            </div>



                            <button type="submit" class="btn btn-success">Submit</button>
                        </form>
                    </div>



                </div>
            </div>
        </div>






        <!-- delete modal -->
        <div class="modal fade" id="myDeleteModal" tabindex="-1" aria-labelledby="myDeleteModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myDeleteModal">Confirm Delete</h5>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this information?
                    </div>
                    <div class="modal-footer">
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- page-body-wrapper ends -->
        </div>

















        <!-- container-scroller -->

        <!-- plugins:js -->
        <script src="Admin/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="Admin/vendors/chart.js/Chart.min.js"></script>
        <script src="Admin/vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="Admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="Admin/js/dataTables.select.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="Admin/js/off-canvas.js"></script>
        <script src="Admin/js/hoverable-collapse.js"></script>
        <script src="Admin/js/template.js"></script>
        <script src="Admin/js/settings.js"></script>
        <script src="Admin/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="Admin/js/dashboard.js"></script>
        <script src="Admin/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->
</body>

</html>