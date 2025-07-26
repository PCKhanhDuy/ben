<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    {{-- <div id="carouselExampleDark" class="hero-banner carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('images/banner/slide-01.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('images/banner/slide-02.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/banner/slide-03.jpg') }}" class="d-block w-100" alt="...">
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
    </div> --}}
    <!-- Hero Banner Section -->
    <section class="hero-banner">
        <!-- Slide 1 -->
        <div class="hero-slide active" style="background-image: url('https://ben-studio.onrender.com/images/banner/slide-01.jpg');">
        </div>
        <!-- Slide 2 -->
        <div class="hero-slide" style="background-image: url('https://ben-studio.onrender.com/images/banner/slide-02.jpg');">
        </div>
        <!-- Slide 3 -->
        <div class="hero-slide" style="background-image: url('https://ben-studio.onrender.com/images/banner/slide-03.jpg');">
        </div>
        <!-- Hero Content -->
        <div class="hero-content">
            <h1 class="hero-title">{{ __('ben.hero_banner.title') }}</h1>
            <p class="hero-subtitle">{{ __('ben.hero_banner.subtitle') }}</p>
            <button class="hero-btn btn">{{ __('ben.hero_banner.cta') }}</button>
        </div>
        <!-- Navigation Arrows -->
        <div class="hero-arrows">
            <div class="hero-arrow prev" onclick="prevSlide()">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="hero-arrow next" onclick="nextSlide()">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <!-- Navigation Dots -->
        <div class="hero-nav">
            <div class="hero-dots">
                <div class="hero-dot active" onclick="currentSlide(1)"></div>
                <div class="hero-dot" onclick="currentSlide(2)"></div>
                <div class="hero-dot" onclick="currentSlide(3)"></div>
            </div>
        </div>
    </section>

    <!-- About Service  -->
    <div class="container-lg my-md-5 my-3 pt-md-5 pt-0">
        <div class="row align-items-center">
            <!-- Slide ảnh -->
            <div class="col-md-5">
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
            <div class="col-md-7 about-text">
                <p class="text-muted small">{{ __('ben.about_company.about_company') }}</p>
                <h3>{{ __('ben.about_company.title') }}</h3>
                <p>{{ __('ben.about_company.description') }}</p>
            </div>
        </div>
    </div>
    <!-- END About Service  -->

    <div class="container-lg py-md-5 py-0">
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
    <!-- Gallery -->
    <div class="container-lg gallery-home py-md-5 py-4">
        <div class="portfolio-header mb-lg-4 mb-2">
            <h1>{{ __('ben.home_gallery.title') }}</h1>
            <p class="text-muted m-0">{{ __('ben.home_gallery.description') }}</p>
        </div>
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-lg-5 mb-3" id="portfolioTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button">{{ __('ben.home_gallery.tab_1') }}</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" type="button">{{ __('ben.home_gallery.tab_2') }}</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" type="button">{{ __('ben.home_gallery.tab_3') }}</button>
            </li>
        </ul>
        <!-- Tab Content -->
        <div class="tab-content">
          <!-- Tab 1 -->
          <div class="tab-pane fade show active" id="tab-1">
            <div class="row g-lg-4 g-3">
              <div class="col-md-4 col-sm-6" data-aos="fade-up">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/01.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/02.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/03.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/04.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/05.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/06.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/07.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/08.jpg') }}" alt=""></div>
              </div>
              <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                <div class="portfolio-item"><img data-fancybox="product" src="{{ asset('images/product/09.jpg') }}" alt=""></div>
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
                    <div class="col-12 col-md-4">
                        <div class="image-compare">
                        <img src="https://jonathancharles-int.com/catalogue/image/491314-TGO-32L_PV-1.jpg" alt="Before">
                        <img src="https://jonathancharles-int.com/catalogue/image/491314-TGO-32L_PV-2.jpg" alt="After">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="image-compare">
                        <img src="https://jonathancharles-int.com/catalogue/image/491322-MSW-36L_PV-1.jpg" alt="Before">
                        <img src="https://jonathancharles-int.com/catalogue/image/491322-MSW-36L_PV-2.jpg" alt="After">
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="image-compare">
                        <img src="https://jonathancharles-int.com/catalogue/image/500424-DPC-24L_PV-1.jpg" alt="Before">
                        <img src="https://jonathancharles-int.com/catalogue/image/500424-DPC-24L_PV-2.jpg" alt="After">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END Gallery -->
     <script>
        document.addEventListener("DOMContentLoaded", function() {
            var tab2 = document.querySelector('#tab-2');
            var masonryGrid = tab2.querySelector('.grid');
            var msnry;

            document.querySelector('button[data-bs-target="#tab-2"]').addEventListener('shown.bs.tab', function() {
                msnry = new Masonry(masonryGrid, {
                    itemSelector: '.grid-item',
                    percentPosition: true
                });
            });
        });
    </script>
        <script>
        let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        const totalSlides = slides.length;
        
        let autoSlideInterval;
        
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            slides[index].classList.add('active');
            dots[index].classList.add('active');
            currentSlideIndex = index;
        }
        function nextSlide() {
            const nextIndex = (currentSlideIndex + 1) % totalSlides;
            showSlide(nextIndex);
            resetAutoSlide();
        }
        function prevSlide() {
            const prevIndex = (currentSlideIndex - 1 + totalSlides) % totalSlides;
            showSlide(prevIndex);
            resetAutoSlide();
        }
        function currentSlide(index) {
            showSlide(index - 1);
            resetAutoSlide();
        }
        function startAutoSlide() {
            autoSlideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
        }
        function resetAutoSlide() {
            clearInterval(autoSlideInterval);
            startAutoSlide();
        }
        document.addEventListener('DOMContentLoaded', function() {
            startAutoSlide();
        });
        const banner = document.querySelector('.hero-banner');
        banner.addEventListener('mouseenter', () => {
            clearInterval(autoSlideInterval);
        });
        banner.addEventListener('mouseleave', () => {
            startAutoSlide();
        });
        
        document.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowLeft') {
                prevSlide();
            } else if (e.key === 'ArrowRight') {
                nextSlide();
            }
        });
        let touchStartX = 0;
        let touchEndX = 0;
        banner.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        });
        banner.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });
        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = touchStartX - touchEndX;
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    nextSlide(); 
                } else {
                    prevSlide(); 
                }
            }
        }
    </script>
@endsection