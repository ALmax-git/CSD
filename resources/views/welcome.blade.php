<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - CSD</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    {{-- <link href="build/assets/img/favicon.png" rel="icon">
    <link href="build/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet">

    <link href="build/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="build/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="build/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="build/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="build/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <link href="build/assets/css/main.css" rel="stylesheet">
    @livewireStyles()
  </head>

  <body class="index-page">
    @if (Auth::user())
      @livewire('welcome')
      @livewire('dashboard')
    @else
      @livewire('welcome')
    @endif

    @livewire('footer')
    <a class="scroll-top d-flex align-items-center justify-content-center" id="scroll-top" href="#"><i
        class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    @livewireScripts()

    <script src="{{ asset('build/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
    <x-livewire-alert::scripts />
    <script src="build/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="build/assets/vendor/php-email-form/validate.js"></script>
    <script src="build/assets/vendor/aos/aos.js"></script>
    <script src="build/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="build/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="build/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="build/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="build/assets/vendor/purecounter/purecounter_vanilla.js"></script>

    <script src="build/assets/js/main.js"></script>

  </body>

</html>
