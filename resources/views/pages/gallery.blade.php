<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <style>
        .beer-slider {
            max-width: 100%;
            height: auto;
            /* aspect-ratio: 4/3; */
            margin-bottom: 1.5rem;
        }

        .beer-reveal img {
            display: block;
            width: 100%;
            height: auto;
        }

        .grid-item {
            margin-bottom: 16px;
        }

        .grid-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
    <!-- Gallery -->
    <div class="container py-md-5 py-4">
        <div class="portfolio-header mb-lg-4 mb-2">
            <h1>My Gallery</h1>
            <p class="text-muted m-0">A collection of my best works</p>
        </div>
        <!-- Tabs -->
        <ul class="nav nav-tabs mb-lg-5 mb-3" id="portfolioTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab-1" type="button">Topaz
                    Image</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2" type="button">Background</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3" type="button">Color Grading</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4" type="button">Video Editing</button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content">
            <!-- Tab 1 -->
            <div class="tab-pane fade show active" id="tab-1">
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

            <!-- Tab 2 -->
            <div class="tab-pane fade" id="tab-2">
                <div class="grid row" data-masonry='{"percentPosition": true }'>
                    <!-- Grid items -->
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x300" alt="1" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x500" alt="2" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x250" alt="3" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x600" alt="4" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x400" alt="5" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x350" alt="6" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x450" alt="7" />
                    </div>
                    <div class="grid-item col-sm-6 col-md-4">
                        <img src="https://placehold.co/400x380" alt="8" />
                    </div>
                </div>
            </div>

            <!-- Tab 3 -->
            <div class="tab-pane fade" id="tab-3">
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
                    </div>
                </div>
            </div>

            <!-- Tab 4 -->
            <div class="tab-pane fade" id="tab-4">
                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="portfolio-item"><img src="https://placehold.co/400x500" alt=""></div>
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
@endsection
