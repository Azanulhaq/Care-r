<?php 
    include("connection.php");
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icon" href="admin/img/favicon.png">
    <title>Lab Automation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <?php include('navbar.php');?>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep YourSelf Healthy</h5> -->
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Products</h1>
                            <!-- <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a> -->
                            <a href="contact.php" class="btn btn-outline-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <!-- <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep YourSelf Healthy</h5> -->
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Products</h1>
                            <!-- <a href="appointment.php" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Appointment</a> -->
                            <a href="contact.php" class="btn btn-outline-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Lab Automation is the process in which tools and equipment can be controlled with minimum interaction</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Laboratory automation is the integration of automated technologies into the laboratory to enable new and improved processes. </h4>
                    <p class="mb-4">Lab automation aims to provide lower overall costs, higher throughput, more efficient testing, a safer environment, reduced experimental error, and improved accuracy and reliability of the data </p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Verified Products</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Taster</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <!-- <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5> -->
                        </div>
                    </div>
                    <!-- <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a> -->
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Appointment Start -->
    <!-- Appointment End -->
    
    <!-- Offer Start -->
    <!-- <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Save Your Time For Visiting Doctor</h1>
                        <p class="text-white mb-4">Health is the biggest wealth. It helps us to enjoy all the little things in life. If one is not healthy, they fail to feel happy. Being unhappy can impact the health of people around us too.</p>
                        <a href="appointment.php" class="btn btn-primary py-3 px-5 me-3">Appointment</a>
                        <a href="contact.php" class="btn btn-light py-3 px-5">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Offer End -->
    
    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <p class="fs-5">Very Good Website For People Who Don't Want To Waste Time </p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Hifza</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <p class="fs-5">Great Efforts</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Azan-Ul-Haq</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <p class="fs-5">Have Been Searching A Website Like This Which Is Providing Both Website And Portal Services With The Most Easy Interface. It's Good To Be Part Of This.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Uzair</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctors</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctors</h1>
                        <a href="appointment.php" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>

                <?php 
                    $fetch_doctors = mysqli_query($connection,"SELECT * from tbl_doctor");
                    foreach($fetch_doctors as $doctor)
                    {
                        echo "<div class='col-lg-4 wow slideInUp' data-wow-delay='0.3s'>
                        <div class='team-item'>
                            <div class='position-relative rounded-top' style='z-index: 1;'>
                                <img class='img-fluid rounded-top w-100' src='../doctors/$doctor[d_image]'>
                                <div class='position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex'>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-twitter fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-facebook-f fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-linkedin-in fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-instagram fw-normal'></i></a>
                                </div>
                            </div>
                            <div class='team-text position-relative bg-light text-center rounded-bottom p-4 pt-5'>
                                <h4 class=mb-2'>$doctor[d_name]</h4>
                                <p class='text-primary mb-0'>$doctor[specialization_name]</p>
                            </div>
                        </div>
                    </div>";
                    }
                ?>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <h1 class="display-6 mb-4">Our Products</h1>
                <?php 
                    $fetch_inventions = mysqli_query($connection,"SELECT * from tbl_invention");
                    foreach($fetch_inventions as $invention)
                    {
                        echo "<div class='col-lg-4 wow slideInUp' data-wow-delay='0.3s'>
                        <div class='team-item'>
                            <div class='position-relative rounded-top' style='z-index: 1;'>
                                <img class='img-fluid rounded-top w-100' src='../admin/$invention[image]' style='height:300px; object-fit:cover'>
                                <div class='position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex'>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-twitter fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-facebook-f fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-linkedin-in fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-instagram fw-normal'></i></a>
                                </div>
                            </div>
                            <div class='team-text position-relative bg-light text-center rounded-bottom p-4 pt-5'>
                                <h4 class=mb-2'>$invention[name]</h4>
                                <p class='text-primary mb-0'>$invention[date]</p>
                            </div>
                        </div>
                    </div>";
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <h1 class="display-6 mb-4">Latest News</h1>
                <?php 
                    $fetch_news = mysqli_query($connection,"SELECT * from tbl_news");
                    foreach($fetch_news as $news)
                    {
                        echo "<div class='col-lg-4 wow slideInUp' data-wow-delay='0.3s'>
                        <div class='team-item'>
                            <div class='position-relative rounded-top' style='z-index: 1;'>
                                <img class='img-fluid rounded-top w-100' src='../admin/$news[image]' style='height:300px; object-fit:cover'>
                                <div class='position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex'>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-twitter fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-facebook-f fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-linkedin-in fw-normal'></i></a>
                                    <a class='btn btn-primary btn-square m-1' href='#'><i class='fab fa-instagram fw-normal'></i></a>
                                </div>
                            </div>
                            <div class='team-text position-relative bg-light text-center rounded-bottom p-4 pt-5'>
                                <h4 class=mb-2'>$news[name]</h4>
                                <p class='text-primary mb-0'>$news[date]</p>
                            </div>
                        </div>
                    </div>";
                    }
                ?>
            </div>
        </div>
    </div> -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
    

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light py-5 wow fadeInUp" data-wow-delay="0.3s" style="margin-top: -75px;">
        <div class="container pt-5">
            <div class="row g-5 pt-4">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="aboutus.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="doctor.php"><i class="bi bi-arrow-right text-primary me-2"></i>Our Doctors</a>
                        <!-- <a class="text-light mb-2" href=""><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a> -->
                        <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Popular Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
                        <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                    </div>
                </div> -->
                <div class="col-lg-3 col-md-6" style="margin-left:80px;">
                    <h3 class="text-white mb-4">Get In Touch</h3>
                    <p class="mb-2"><i class="bi bi-geo-alt text-primary me-2"></i>Karachi, Pakistan</p>
                    <p class="mb-2"><i class="bi bi-envelope-open text-primary me-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="bi bi-telephone text-primary me-2"></i>+012 345 67890</p>
                </div>
                <div class="col-lg-3 col-md-6"  style="margin-left:80px;">
                    <h3 class="text-white mb-4">Follow Us</h3>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-light py-4" style="background: #051225;">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0"> Care &copy .All Rights Reserved.</p>
                    <!-- <a class="text-white border-bottom" href="index.html"> </a> -->
                </div>
                <!-- <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a><br>
                        Distributed by <a class="text-white border-bottom" href="https://themewagon.com">ThemeWagon</a>              
                    </p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>