<x-layout>

    <!-- Page Header Start -->
    <x-page-header title="Fleet Services" />
    <!-- Page Header End -->

    <!-- Fact Start -->
   <x-facts />
    <!-- Fact End -->

 <!-- Services Start -->
 <div class="container-fluid services py-5 mb-5">
    <div class="container">
        <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
            <h1>Fleet Management Services</h1>
        </div>
        <div class="row g-5 services-inner pb-5">
            <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                <div class="services-item bg-light">
                    <div class="p-4 text-center services-content">
                        <div class="services-content-icon">
                            <i class="fa fa-map-marker-alt fa-7x mb-4 text-primary"></i>

                            <h4 class="mb-3">Online Tracking</h4>
                            <p class="mb-4">Get real-time location, location and monitoring  of your vehicles and machines</p>
                            <a href="{{ route('website.services.online_tracking') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
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
                            <a href="{{ route('website.services.fuel_monitoring') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
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
                            <a href="{{ route('website.services.driver_behavior') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
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
                            <a href="{{ route('website.services.video_telematics') }}" class="btn btn-secondary text-white px-5 py-3 rounded-pill">Read More</a>
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


    </div>
    </div>
<!-- Services End -->

</x-layout>
