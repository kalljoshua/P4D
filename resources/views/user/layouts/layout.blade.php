<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Data Science, Analytics, Data, sass, software company">
    <meta name="description"
        content="P4D - Data Science & Analytics HTML5 Template is designed especially for the agency, multipurpose and business and those who offer business-related services.">
    <meta property="og:site_name" content="P4D">
    <meta property="og:type" content="website">
    <meta property="og:title" content="P4D - Data Science & Analytics HTML5 Template">
    <meta name='og:image' content='images/assets/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#1E78FF">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#1E78FF">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#1E78FF">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="/user_assets/images/fav-icon/icon.png">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="/user_assets/css/style.css" media="all">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="/user_assets/css/responsive.css" media="all">

    <!-- Fix Internet Explorer ______________________________________-->
    <!--[if lt IE 9]>
   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <script src="vendor/html5shiv.js"></script>
   <script src="vendor/respond.js"></script>
  <![endif]-->
</head>

<body>
    <div class="main-page-wrapper">

        <button class="scroll-top">
            <i class="bi bi-arrow-up-short"></i>
        </button>

        <!-- ===================================================
    Loading Transition
   ==================================================== -->
        <section>
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="icon"><img src="/user_assets/images/logo/logo_01.svg" alt=""
                                class="m-auto d-block" width="38"></div>
                        <div class="txt-loading mt-2">
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="4" class="letters-loading">
                                4
                            </span>
                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('user.includes.main_menu')

        @include('user.includes.flash-message')
        @yield('content')

        @include('user.includes.footer')


        <!-- Optional JavaScript _____________________________  -->

        <!-- jQuery first, then Bootstrap JS -->
        <!-- jQuery -->
        <script src="/user_assets/vendor/jquery.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/user_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AOS js -->
        <script src="/user_assets/vendor/aos-next/dist/aos.js"></script>
        <!-- Slick Slider -->
        <script src="/user_assets/vendor/slick/slick.min.js"></script>
        <!-- js Counter -->
        <script src="/user_assets/vendor/jquery.counterup.min.js"></script>
        <script src="/user_assets/vendor/jquery.waypoints.min.js"></script>
        <!-- Fancybox -->
        <script src="/user_assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
		<!-- isotop -->
		<script  src="/user_assets/vendor/isotope.pkgd.min.js"></script>
		<!-- validator js -->
    	<script src="/user_assets/vendor/validator.js"></script>

        <!-- Theme js -->
        <script src="/user_assets/js/theme.js"></script>
    </div> <!-- /.main-page-wrapper -->
</body>

</html>
