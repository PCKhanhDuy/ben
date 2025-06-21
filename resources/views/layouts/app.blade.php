<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ben Studio - Photography Portfolio and Services">
    <meta name="keywords" content="photography, studio, Ben, photo, portfolio">
    <meta name="author" content="Ben Studio">

    <title>@yield('title', 'Home Page')</title>
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ secure_asset('vendor/fontawesome/css/all.min.css') }}">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/beerslider/dist/BeerSlider.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/beerslider@1.0.3/dist/BeerSlider.css">

    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    
    <link rel="apple-touch-icon" href="{{ secure_asset('images/main-logo.jpg') }}">
    <link rel="icon" type="image/png" href="{{ secure_asset('images/main-logo.jpg') }}">

    <!-- ✅ Thêm preload nếu bạn muốn speed up Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @yield('head')
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @yield('scripts')
    <!-- jQuery -->
    <script src="{{ secure_asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap JS -->
    <script src="{{ secure_asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('vendor/aos/js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/beerslider@1.0.3/dist/BeerSlider.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</body>

</html>
