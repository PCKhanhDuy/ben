<header>
    <nav class="navbar navbar-expand-lg navbar-dark py-md-3 py-1">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/main-logo.jpg') }}" class="header-logo" alt="Logo" style="max-width: 100px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                {{-- <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Our Services</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Our
                            Projects</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Photography</a></li>
                            <li><a class="dropdown-item" href="#">Design</a></li>
                            <li><a class="dropdown-item" href="#">Video Editing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a></li>
                </ul> --}}
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="/">{{ __('ben.menu_header.home') }}</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">{{ __('ben.menu_header.our_services') }}</a></li>
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

            </div>
            <div class="language-switch">
                <a href="{{ url('lang/en') }}">EN</a> |
                <a href="{{ url('lang/vi') }}">VI</a>
            </div>
            <div class="d-none d-lg-flex social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </nav>
</header>
