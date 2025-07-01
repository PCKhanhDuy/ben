<header>
    <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <div class="container ps-0">
            <a class="navbar-brand p-0" href="/">
                <img src="{{ asset('images/main-logo.jpg') }}" class="header-logo" alt="Logo" style="max-width: 100px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="/">{{ __('ben.menu_header.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="/test.html">{{ __('ben.menu_header.our_services') }}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            {{ __('ben.menu_header.our_projects') }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">{{ __('ben.menu_header.photography') }}</a></li>
                            <li><a class="dropdown-item" href="#">{{ __('ben.menu_header.design') }}</a></li>
                            <li><a class="dropdown-item" href="#">{{ __('ben.menu_header.video_editing') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">{{ __('ben.menu_header.gallery') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">{{ __('ben.menu_header.contact_us') }}</a></li>
                </ul>
                
                <!-- Language switch and social icons for mobile -->
                <div class="d-flex align-items-center">
                    <div class="language-switch me-3">
                        <a href="{{ url('lang/en') }}">EN</a> |
                        <a href="{{ url('lang/vi') }}">VI</a>
                    </div>
                    <div class="social-icons d-lg-none">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Social icons for desktop only -->
            <div class="d-none d-lg-flex social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
</header>