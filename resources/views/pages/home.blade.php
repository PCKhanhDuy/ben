<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('images/banner/banner-01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('images/banner/banner-02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner/banner-03.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- About Service  -->
    <div class="container my-md-5 my-3 pt-md-5 pt-0">
        <div class="row align-items-center">
            <!-- Slide ảnh -->
            <div class="col-md-6">
                <div id="photoCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/about-us/02.jpg') }}" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/about-us/02-.jpg') }}" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/about-us/03.jpg') }}" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/about-us/03-.jpg') }}" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/about-us/04.jpg') }}" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/about-us/04-.jpg') }}" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#photoCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#photoCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 about-text">
                <p class="text-muted small">{{ __('ben.about_company.about_company') }}</p>
                <h3>{{ __('ben.about_company.title') }}</h3>
                <p>{{ __('ben.about_company.description') }}</p>
            </div>
        </div>
    </div>
    <!-- END About Service  -->

    <div class="container py-md-5 py-0">
        <div class="text-center mb-5">
            {{-- <small class="text-muted"></small> --}}
            <h2 class="fw-bold">{{ __('ben.our_services.big_title') }}</h2>
            <div class="mt-2" style="height: 2px; width: 60px; background: #000; margin: auto;"></div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 equal-height">
            <div class="col d-flex">
                <div class="service-box w-100">
                    <div class="service-icon"><i class="fas fa-cube"></i></div>
                    <h5>{{ __('ben.our_services.title_1') }}</h5>
                    <p>{{ __('ben.our_services.description_1') }}</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="service-box w-100">
                    <div class="service-icon"><i class="fas fa-palette"></i></div>
                    <h5>{{ __('ben.our_services.title_2') }}</h5>
                    <p>{{ __('ben.our_services.description_2') }}</p>
                </div>
            </div>
            <div class="col d-flex">
                <div class="service-box w-100">
                    <div class="service-icon"><i class="fas fa-camera-retro"></i></div>
                    <h5>{{ __('ben.our_services.title_3') }}</h5>
                    <p>{{ __('ben.our_services.description_3') }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid px-1">
        <div class="row g-1">
            <div class="col-12 col-sm-6 col-lg-3 card-col">
                <div class="flip-card w-100 h-100">
                    <div class="flip-inner">
                        <div class="flip-front"
                            style="background-image: url('https://jonathancharles-int.com/catalogue/image/catalog/BannerCollections/HomePage/Homepage-Banner-JC-Casual-740x490.jpg');">
                            <div class="overlay">
                                <img src="https://cdn-icons-png.flaticon.com/512/747/747376.png" alt="icon">
                                PHOTOGRAPHY
                            </div>
                        </div>
                        <div class="flip-back">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 card-col">
                <div class="flip-card w-100 h-100"> 
                    <div class="flip-inner">
                        <div class="flip-front"
                            style="background-image: url('https://jonathancharles-int.com/catalogue/image/catalog/BannerCollections/HomePage/Homepage-Banner-Water-Collection-740x490.jpg');">
                            <div class="overlay">
                                <img src="https://cdn-icons-png.flaticon.com/512/727/727240.png" alt="icon">
                                VIDEO PRODUCTIONS
                            </div>
                        </div>
                        <div class="flip-back">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 card-col">
                <div class="flip-card w-100 h-100">
                    <div class="flip-inner">
                        <div class="flip-front" style="background-image: url('https://i.imgur.com/YOUR_IMAGE3.jpg');">
                            <div class="overlay">
                                <img src="https://cdn-icons-png.flaticon.com/512/2983/2983792.png" alt="icon">
                                CGI <br>(Computer-Generated Imagery)
                            </div>
                        </div>
                        <div class="flip-back">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3 card-col">
                <div class="flip-card w-100 h-100">
                    <div class="flip-inner">
                        <div class="flip-front" style="background-image: url('https://i.imgur.com/YOUR_IMAGE4.jpg');">
                            <div class="overlay">
                                <img src="https://cdn-icons-png.flaticon.com/512/992/992700.png" alt="icon">
                                SET DESIGN &<br>CONSTRUCTION
                            </div>
                        </div>
                        <div class="flip-back">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> --}}
    <!-- Portfolio -->
    <!-- Gallery -->
    <div class="container gallery-home py-md-5 py-4">
        <div class="portfolio-header mb-lg-4 mb-2">
            <h1>{{ __('ben.home_gallery.title') }}</h1>
            <p class="text-muted m-0">{{ __('ben.home_gallery.description') }}</p>
        </div>
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-lg-5 mb-3" id="portfolioTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1"
                    type="button">{{ __('ben.home_gallery.tab_1') }}</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2"
                    type="button">{{ __('ben.home_gallery.tab_2') }}</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3"
                    type="button">{{ __('ben.home_gallery.tab_3') }}</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab-1">
                <div class="row g-lg-4 g-3">
                    <div class="col-md-4 col-sm-6" data-aos="fade-up">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/01.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/02.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/03.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/04.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/05.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/06.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/07.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/08.jpg') }}" alt=""></div>
                    </div>
                    <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img data-fancybox="product"
                                src="{{ asset('images/product/09.jpg') }}" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab-2">
                <div class="grid row" data-masonry='{"percentPosition": true }'>
                    <!-- Grid items -->
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/01.jpg') }}" alt="1" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/02.jpg') }}" alt="2" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/03.jpg') }}" alt="3" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/04.jpg') }}" alt="4" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/05.jpg') }}" alt="5" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/06.jpg') }}" alt="6" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/07.jpg') }}" alt="7" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/08.jpg') }}" alt="8" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/09.jpg') }}" alt="8" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/10.jpg') }}" alt="8" data-fancybox="roomscene" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="{{ asset('images/ai/11.jpg') }}" alt="8" data-fancybox="roomscene" />
                    </div>
                </div>
            </div>

            <!-- Tab 3 -->
            <div class="tab-pane fade" id="tab-3">
                <div class="row g-4">
                    <!-- Column 1 -->
                    <div class="col-md-4">
                        <div class="beer-slider" data-beer-label="After">
                            <img src="{{ asset('images/after.jpg') }}" alt="Before Image 1">
                            <div class="beer-reveal" data-beer-label="Before">
                                <img src="{{ asset('images/before.jpg') }}" alt="After Image 1">
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4">
                        <div class="beer-slider" data-beer-label="After">
                            <img src="{{ asset('images/after.jpg') }}" alt="Before Image 1">
                            <div class="beer-reveal" data-beer-label="Before">
                                <img src="{{ asset('images/before.jpg') }}" alt="After Image 1">
                            </div>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-md-4">
                        <div class="beer-slider" data-beer-label="After">
                            <img src="{{ asset('images/after.jpg') }}" alt="Before Image 1">
                            <div class="beer-reveal" data-beer-label="Before">
                                <img src="{{ asset('images/before.jpg') }}" alt="After Image 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END Gallery -->
    <!-- END Portfolio -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tab2 = document.querySelector('#tab-2');
            var masonryGrid = tab2.querySelector('.grid');

            var msnry;

            // Nếu tab-2 được mở (sự kiện từ Bootstrap)
            document.querySelector('button[data-bs-target="#tab-2"]').addEventListener('shown.bs.tab', function() {
                // Khởi tạo lại Masonry sau khi tab hiển thị
                msnry = new Masonry(masonryGrid, {
                    itemSelector: '.grid-item',
                    percentPosition: true
                });
            });
        });
    </script>
    <script>
        // Thêm vào script hiện tại
        document.querySelector('button[data-bs-target="#tab-3"]').addEventListener('shown.bs.tab', function() {
            setTimeout(function() {
                document.querySelectorAll('#tab-3 .beer-slider').forEach(function(slider) {
                    new BeerSlider(slider);

                    // Fix cho mobile
                    if (window.innerWidth <= 768) {
                        // Ngăn scroll page khi drag slider
                        slider.addEventListener('touchstart', function(e) {
                            e.stopPropagation();
                        }, {
                            passive: false
                        });

                        slider.addEventListener('touchmove', function(e) {
                            e.stopPropagation();
                        }, {
                            passive: false
                        });
                    }
                });
            }, 100);
        });
    </script>


@endsection
