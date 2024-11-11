<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>NEW ATMS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('assets/img/logos/favicon.ico') }}" rel="icon">
        <link href="{{ asset('assets/img/logos/favicon.ico') }}" rel="apple-touch-icon">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div class="container-fluid bg-dark py-2 d-none d-md-flex">
            <div class="container">
                <div class="d-flex justify-content-between topbar">
                    <div class="top-info">
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-map-marker-alt me-2 text-secondary"></i></a>Wastaafu St, DSM Mikocheni, Plot# 144</small>
                        <small class="me-3 text-white-50"><a href="#"><i class="fas fa-envelope me-2 text-secondary"></i></a>itdepartment@aestz.co.tz</small>
                    </div>
                    <div id="note" class="text-secondary d-none d-xl-flex"><small>All your assets at your finger tips</small></div>
                    <div class="top-link">
                        <a href="https://wa.me/255752832590/" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-whatsapp text-primary"></i></a>
                        <a href="" target="_blank" class="bg-light nav-fill btn btn-sm-square rounded-circle"><i class="fab fa-instagram text-primary"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <x-navigation-links />
        <!-- Navbar End -->




        {{ $slot }}

        <!-- Footer Start -->
        <div class="container-fluid footer bg-dark wow fadeIn" data-wow-delay=".3s">
            <div class="container pt-5 pb-4">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <a href="index.html">
                            <img src="{{ asset('assets/img/logos/ATMS-logo.png') }}" height="100px" alt="">
                            <h1 class="text-white fw-bold d-block"><span class="text-secondary">ATMS</span> </h1>
                        </a>
                        <div class="d-flex hightech-link">
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-whatsapp text-primary"></i></a>
                            <a href="" class="btn-light nav-fill btn btn-square rounded-circle me-2"><i class="fab fa-instagram text-primary"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Useful Links</a>
                        <div class="mt-4 d-flex flex-column short-link">
                            <a href="{{ route('website.about_atms') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>About ATMS</a>
                            <a href="{{ route('website.about_team') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Our Team</a>
                            <a href="{{ route('website.fleet_services') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Fleet management solutions</a>
                            <a href="{{ route('website.ict_services') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>ICT & Security solutions</a>
                            <a href="{{ route('website.under_construction') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Blog</a>
                            <a href="{{ route('website.gallery') }}" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Gallery</a>
                            <a href="{{ asset('assets/docs/ATMS COMPANY PROFILE.pdf') }}" target="_blank" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Company profile</a>


                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="#" class="h3 text-secondary">Help Links</a>
                        <div class="mt-4 d-flex flex-column help-link">
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Terms Of use</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Privacy Policy</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>Helps</a>
                            <a href="#" class="mb-2 text-white"><i class="fas fa-angle-right text-secondary me-2"></i>FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <aclass="h3 text-secondary">Contact Us</aclass=>
                        <div class="text-white mt-4 d-flex flex-column contact-link">
                            <a  class="pb-3 text-light border-bottom border-primary"><i class="fas fa-map-marker-alt text-secondary me-2"></i> Wastaafu St, DSM Mikocheni, Plot# 144</a>
                            <a  class="py-3 text-light border-bottom border-primary"><i class="fas fa-phone-alt text-secondary me-2"></i>+255 778 505 011</a>
                            <a  class="py-3 text-light border-bottom border-primary"><i class="fas fa-envelope text-secondary me-2"></i>itdepartment@aestz.co.tz</a>
                        </div>
                    </div>
                </div>
                <hr class="text-light mt-5 mb-4">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <span class="text-light"><a href="#" class="text-secondary">2024 <i class="fas fa-copyright text-secondary me-2"></i>Advanced Tracking & Monitoring System</a>, All right reserved.</span>
                    </div>

                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        <span class="text-light">Designed By <a href="https://daviesamedeus.github.io/portfolio/" class="text-secondary"> Davies Amedeus</a> <a href="https://daviesamedeus/github.io/portifolio/">(koda.koda)</a></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js')}} "></script>
    </body>

</html>
