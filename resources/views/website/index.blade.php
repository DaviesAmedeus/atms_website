<x-layout>

    <!-- Carousel Start -->
    <x-carousel />>

    <!-- Carousel End -->

    <!-- Fact Start -->
   <x-facts />
    <!-- Fact End -->


    <!-- About Start -->
    <div class="container-fluid py-5 my-5">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                    <div class="h-100 position-relative">
                        <img src="{{ asset('assets/img/slides/fleet6.jpg') }}" class="img-fluid w-75 rounded" alt="" style="margin-bottom: 25%;">
                        <div class="position-absolute w-75" style="top: 25%; left: 25%;">
                            <img src="{{ asset('assets/img/slides/fleet7.jpg') }}" class="img-fluid w-100 rounded" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                    <h5 class="text-primary">About</h5>
                    <h1 class="mb-4">ATMS a leading fleet management platiform</h1>
                    <p><b>Advanced Tracking and Monitoring System (ATMS)</b> is one of the fastest-growing fleet
                        management, ICT, and Security company based in Tanzania with its Head Quarters in Dar Es
                        Salaam.Fuel Monitoring Calculate fuel consumption with maximum accuracy
                        Started in the early months of 2018 to provide easy solutions to
                        complex telematics problems, ATMS enables efficient managerial
                        operations in fleet management,information and communications
                        technology and security.</p>

                    <p class="mb-4">ATMS has branches across several  regions, including <b>Dar es Salaam(HQ), Mbeya, Kahama, Mwanza,  Dodoma, and Arusha.</b>
                        Our services extend nationwide, offering the same privileges to neighboring countries like <b>Rwanda, Burundi, DRC, and Kenya.</b></p>
                    <a href="{{ route('website.about_atms') }}" class="btn btn-secondary rounded-pill px-5 py-3 text-white">More...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid services py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Services</h5>
                <h1>Fleet Management Services</h1>
            </div>
            <div class="row g-5 services-inner pb-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-map-marker-alt fa-7x mb-4 text-primary"></i>

                                <!-- <i class="fa fa-code fa-7x mb-4 text-primary"></i> -->
                                <h4 class="mb-3">Online Tracking</h4>
                                <p class="mb-4">Get real-time location, location and monitoring  of your vehicles and machines</p>
                                <a href="onlinetracking.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <!-- <i class="fa fa-file-code fa-7x mb-4 text-primary"></i> -->
                                <i class="fa fa-route fa-7x mb-4 text-primary"></i>

                                <h4 class="mb-3">Route Optimization</h4>
                                <p class="mb-4">Set areas where your fleet should cross.</p>
                                <!-- <a href="onlinetracking.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-gas-pump fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Fuel Monitoring</h4>
                                <p class="mb-4">Calculate fuel consumption with maximum accuracy</p>
                                <a href="fuelmonitoring.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <!-- <i class="fa fa-user-check fa-7x mb-4 text-primary"></i> -->
                                <i class="fa fa-user-tie fa-7x mb-4 text-primary"></i>

                                <h4 class="mb-3">Driver Behavior</h4>
                                <p class="mb-4">Control speed, heavy load to prevent road accidents.</p>
                                <a href="driverbehavior.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-video fa-7x mb-4 text-primary"></i>


                                <h4 class="mb-3">Video Telematics</h4>
                                <p class="mb-4">Real-time surveillance for you to monitor staff & reduce accident rates.</p>
                                <a href="videotelematics.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-cogs fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Engine Hours Control</h4>
                                <p class="mb-4">Optimize working hours instead of expanding the team.</p>
                                <!-- <a href="#" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h1>ICT & Security services</h1>
            </div>
            <div class="row g-5 services-inner">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-lock fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Access control</h4>
                                <p class="mb-4">Ensure secure access to your facilities with advanced systems for controlled entry and monitoring.</p>
                                <!-- <a href="accesscontrol.html" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-network-wired fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Supply of ICT infrastructure</h4>
                                <p class="mb-4">Equip your organization with reliable, high-quality ICT hardware and network solutions for seamless operations.</p>
                                <!-- <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-globe fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Website development & Hosting</h4>
                                <p class="mb-4">Get a fully optimized, professional website and secure hosting solutions to enhance your online presence and reliability..</p>
                                <!-- <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-shield-alt fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Firewall and Network Security Products</h4>
                                <p class="mb-4">Protect your network with robust firewalls and cybersecurity measures, safeguarding against unauthorized access and threats.</p>
                                <!-- <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="services-item bg-light">
                        <div class="p-4 text-center services-content">
                            <div class="services-content-icon">
                                <i class="fa fa-wifi fa-7x mb-4 text-primary"></i>
                                <h4 class="mb-3">Internet Facilities</h4>
                                <p class="mb-4">Enjoy high-speed, dependable internet connectivity tailored to your organization's needs for uninterrupted productivity.</p>
                                <!-- <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a> -->
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Our Trusted</h5>
                <h1>Clients</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeIn" data-wow-delay=".5s">
                <div class="testimonial-item border p-4">
                    <div class="d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('assets/img/clients/client1.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">NCBA</h4>
                        </div>
                    </div>

                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('assets/img/clients/client2.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">ABSA BANK</h4>
                        </div>
                    </div>

                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('assets/img/clients/client3.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">MWANGA HAKIKA</h4>
                        </div>
                    </div>

                </div>
                <div class="testimonial-item border p-4">
                    <div class=" d-flex align-items-center">
                        <div class="">
                            <img src="{{ asset('assets/img/clients/client4.jpg') }}" alt="">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-secondary">EMIRATES</h4>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <!-- Contact Start -->
    <div class="container-fluid py-5 mb-5">
        <div class="container">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                <h5 class="text-primary">Get In Touch</h5>
                <h1 class="mb-3">Contact for support or help</h1>
            </div>
            <div class="contact-detail position-relative p-5">
                <div class="row g-5 mb-5 justify-content-center">
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fas fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Address</h4>
                                <a href="https://goo.gl/maps/Zd4BCynmTb98ivUJ6" target="_blank" class="h5">Wastaafu St, DSM Mikocheni, Plot# 144</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-phone text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Call Us</h4>
                                <a class="h5" href="tel:+0123456789" target="_blank">+255 778 505 011</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 wow fadeIn" data-wow-delay=".7s">
                        <div class="d-flex bg-light p-3 rounded">
                            <div class="flex-shrink-0 btn-square bg-secondary rounded-circle" style="width: 64px; height: 64px;">
                                <i class="fa fa-envelope text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h4 class="text-primary">Email Us</h4>
                                <a class="h5" href="mailto:info@example.com" target="_blank">itdepartment@aestz.co.tz</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".3s">
                        <div class="p-5 h-100 rounded contact-map">
                            <iframe class="rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3025.4710403339755!2d-73.82241512404069!3d40.685622471397615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c26749046ee14f%3A0xea672968476d962c!2s123rd%20St%2C%20Queens%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1686493221834!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay=".5s">
                        <div class="p-5 rounded contact-form">
                            <h4>Subscribe to our news letter</h4>
                            <div class="mb-4">
                                <input type="text" class="form-control border-0 py-3" placeholder="Your Name">
                            </div>

                            <div class="text-start">
                                <button class="btn bg-primary text-white py-3 px-5" type="button">Subscribe</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

</x-layout>
