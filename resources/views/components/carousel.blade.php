<div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-inner" role="listbox">

            <div class="carousel-item active">
                <img src="{{ asset('assets/img/slides/slide4.jpg') }}" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">Advanced Tracking and <span class="text-secondary">Monitoring Systems</span> </h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown h3">We help you manage all your assets in your finger tips. We are all about Tracking, ICT & Security.</p>
                        <a href="{{ route('website.about_atms') }}" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">Learn More</button></a>
                        <a href="{{ route('website.contact') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Contact Us</button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/slides/slide2.jpg') }}" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">BEST IN FLEET MANAGEMENT SOLUTIONS</h6>
                        <h3 class="text-white display-1 mb-4 animated fadeInLeft h3">Remote tracking of your assets</h3>
                        <a href="{{ route('website.fleet_services') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/img/slides/slide5.jpg') }}" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">BEST IN ICT & SECURITY SOLUTIONS</h6>
                        <h3 class="text-white display-1 mb-4 animated fadeInLeft h3">Cutting edge ICT services</h3>
                       <a href="{{ route('website.ict_services') }}" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">Learn more</button></a>
                    </div>
                </div>
            </div>


        </div>


    </div>
</div>
