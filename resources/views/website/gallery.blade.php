<x-layout>

    <!-- Page Header Start -->
    <x-page-header title="Gallery" />
    <!-- Page Header End -->

    <!-- Fact Start -->
   <x-facts />
    <!-- Fact End -->


     <!-- Gallery Start -->
     <div class="container-fluid project py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                {{-- <h5 class="text-primary">Our Gallery</h5> --}}
                <h1>Highlights from different locations</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/elite_team2.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web design</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/aes1.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">Cyber Security</h4>
                                    <p class="m-0 text-white">Cyber Security Core</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/maneno.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/elite_team3.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">Mobile Info</h4>
                                    <p class="m-0 text-white">Upcomming Phone</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".3s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/aes2.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">Web Development</h4>
                                    <p class="m-0 text-white">Web Analysis</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/gopa.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".5s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/elite_team4.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">Digital Marketing</h4>
                                    <p class="m-0 text-white">Marketing Analysis</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay=".7s">
                    <div class="project-item">
                        <div class="project-img">
                            <img src="{{ asset('assets/img/gallery/exhibition2.jpeg') }}" class="img-fluid w-100 rounded" alt="">
                            <div class="project-content">
                                {{-- <a href="#" class="text-center">
                                    <h4 class="text-secondary">keyword Research</h4>
                                    <p class="m-0 text-white">keyword Analysis</p>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->



</x-layout>
