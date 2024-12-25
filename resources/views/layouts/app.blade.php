<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Blog - Top Vehicle News</title>
    <!-- meta -->
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index,follow">
    <meta name="author" content="rony">
    <meta name="csrf-token" content="">
    <meta property="og:image" content="assets/images/favicon.png">
    <meta property="og:site_name" content="Blog">
    <meta property="og:title" content="top business news - Blog">
    <meta property="og:url" content="https://blog.com">
    <meta property="og:type" content="article">
    <meta name="description"
        content="top business news blog.">
    <meta name="keywords"
        content="blog, business">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
     <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/intlTelInput.css">
    <link rel="stylesheet" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/select2-bootstrap-5-theme.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

@include('layouts.partials.header')


@yield('content')

 
@include('layouts.partials.footer')

    <!-- scroll to top -->
   <div class="scrollToTop">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/lightgallery.min.js"></script>
    <script src="assets/js/owlcarousel.min.js"></script>
    <script src="assets/js/flatpickr.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/intlTelInput.js"></script>
    <script src="assets/js/intlTelInput-jquery.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    
</body>

</html>