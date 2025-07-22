<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ben Furniture - Photography Portfolio and Services">
    <meta name="keywords" content="furniture, benfurniture, photography, studio, Ben, photo, portfolio">
    <meta name="author" content="Ben Studio">
    <title>@yield('title', 'Home Page')</title>
    <link href="https://fonts.googleapis.com/css2?family=Gwendolyn&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/beerslider@1.0.3/dist/BeerSlider.css">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/image-compare-viewer/image-compare-viewer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/main-logo.jpg') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="icon" type="image/png" href="{{ asset('images/main-logo.jpg') }}">
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
    <script src="{{ asset('vendor/image-compare-viewer/image-compare-viewer.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/aos/js/aos.js') }}"></script>
    <script>
        AOS.init();
    </script>
    <script>
        document.querySelectorAll(".image-compare").forEach(el => {
            const viewer = new ImageCompare(el, {
                controlColor: "#fff",   
                controlShadow: true,
                addCircle: true,
                showLabels: true,
                labelOptions: {
                    before: 'Before',
                    after: 'After'
                }
            });
            viewer.mount();
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/beerslider@1.0.3/dist/BeerSlider.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
</body>

</html>
