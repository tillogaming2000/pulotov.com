<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact - Tunis Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="/tunis/dark/css/bootstrap.min.css" rel="stylesheet">
    <link href="/tunis/dark/css/preloader.min.css" rel="stylesheet">
    <link href="/tunis/dark/css/circle.css" rel="stylesheet">
    <link href="/tunis/dark/css/font-awesome.min.css" rel="stylesheet">
    <link href="/tunis/dark/css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="/tunis/dark/css/style.css" rel="stylesheet">

    <!-- CSS Skin File -->
    <link href="/tunis/dark/css/skins/yellow.css" rel="stylesheet">

    <!-- Modernizr JS File -->
    <script src="/tunis/dark/js/modernizr.custom.js"></script>
</head>

<body class="contact">
<!-- Header Starts -->
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box active">
            <i class="fa fa-envelope-open"></i>
            <a href="contact">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-comments"></i>
            <a href="/blogs">
                <h2>Blog</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li><a href=""><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li class="active"><a href="contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>sunatillo.o.pulotov@gmail.com
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span>+1(347)303-8331
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="https://www.facebook.com/sunatillo.pulotov"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="youtube"><a title="Youtube" href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="instagram"><a title="Instagram" href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <form class="contactform" method="post" action="php/process-form.php">
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" placeholder="YOUR NAME">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" placeholder="YOUR EMAIL">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" placeholder="YOUR SUBJECT">
                            </div>
                            <div class="col-12">
                                <textarea name="message" placeholder="YOUR MESSAGE"></textarea>
                                <button type="submit" class="button">
                                    <span class="button-text">Send Message</span>
                                    <span class="button-icon fa fa-send"></span>
                                </button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>
<!-- Template JS Files -->
<script src="/tunis/dark/js/jquery-3.5.0.min.js"></script>
<script src="/tunis/dark/js/preloader.min.js"></script>
<script src="/tunis/dark/js/fm.revealator.jquery.min.js"></script>
<script src="/tunis/dark/js/imagesloaded.pkgd.min.js"></script>
<script src="/tunis/dark/js/masonry.pkgd.min.js"></script>
<script src="/tunis/dark/js/classie.js"></script>
<script src="/tunis/dark/js/cbpGridGallery.js"></script>
<script src="/tunis/dark/js/jquery.hoverdir.js"></script>
<script src="/tunis/dark/js/popper.min.js"></script>
<script src="/tunis/dark/js/bootstrap.js"></script>
<script src="/tunis/dark/js/custom.js"></script>

</body>

</html>