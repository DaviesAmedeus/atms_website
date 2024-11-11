<div class="container-fluid bg-primary">
    <div class="container">
        <nav class="navbar navbar-dark navbar-expand-lg py-0">
            <a href="/" class="navbar-brand">
                <div class="display-flex" style="display: flex">
                    <img src="{{ asset('assets/img/logos/ATMS-logo2b.png') }}" height="80px">
                </div>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-xl-auto p-0">
                    <a href="{{ route('website.index') }}" class="nav-item nav-link active text-secondary">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ route('website.about_atms') }}" class="dropdown-item">ATMS</a>
                            <a href="{{ route('website.about_team') }}" class="dropdown-item">Our Team</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="service.html" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ route('website.fleet_services') }}" class="dropdown-item">Fleet management solutions</a>
                            <a href="{{ route('website.ict_services') }}" class="dropdown-item">ICT & Security solutions</a>
                        </div>
                    </div>
                    <a href="{{ route('website.under_construction') }}" class="nav-item nav-link">Blog</a>

                    <a href="{{ route('website.gallery') }}" class="nav-item nav-link">Gallery</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Downloads</a>
                        <div class="dropdown-menu rounded">
                            <a href="{{ asset('assets/docs/ATMS COMPANY PROFILE.pdf') }}" target="_blank" class="dropdown-item">Company profile 2024</a>

                        </div>
                    </div>
                    <a href="{{ route('website.contact') }}" class="nav-item nav-link">Contact</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-phone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column">
                    <span class="text-white-50">Have any questions?</span>
                    <span class="text-secondary">Call: + 255 778 505 011</span>
                </div>

            </div>
        </nav>
    </div>
</div>
