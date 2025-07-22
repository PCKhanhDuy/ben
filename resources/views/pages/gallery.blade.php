<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
<section class="contact-banner">
  <div class="banner-content">
    <h1 class="banner-title">{{ __('ben.gallery.banner-title') }}</h1>
    <div class="banner-divider"></div>
    <p class="banner-subtitle">{{ __('ben.gallery.banner-subtitle') }}</p>
    <div class="banner-cta">{{ __('ben.gallery.banner-cta') }}</div>
  </div>
</section>
<section class="gallery-section my-md-5 my-4 py-xl-3">
    <!-- Gallery -->
    <div class="container gallery-home py-md-5 py-4">
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
</section>
@endsection
