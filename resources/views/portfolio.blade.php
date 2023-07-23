<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Portfolio</title>
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
<body class="portfolio">
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
        <li class="icon-box active">
            <i class="fa fa-briefcase"></i>
            <a href="portfolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
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
                <li><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li class="active"><a href="portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li><a href="blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>portfolio</span></h1>
    <span class="title-bg">works</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content text-center revealator-slideup revealator-once revealator-delay1">
    <div id="grid-gallery" class="container grid-gallery">
        <!-- Portfolio Grid Starts -->
        <section class="grid-wrap">
            <ul class="row grid">

                @foreach($portfolios as $portfolio)
                    <!-- Portfolio Item Starts -->
                    <li>
                        <figure>
                            <img src="{{$portfolio->image}}" alt="Portfolio Image" />
                            <div><span>Project #{{$portfolio->id}}</span></div>
                        </figure>
                    </li>
                    <!-- Portfolio Item Ends -->
                @endforeach

            </ul>
        </section>
        <!-- Portfolio Grid Ends -->
        <!-- Portfolio Details Starts -->
        <section class="slideshow">
            <ul>
                @foreach($portfolios as $portfolio)
                    <!-- Portfolio Item Detail Starts -->
                    <li>
                        <figure>
                            <!-- Project Details Starts -->
                            <figcaption>
                                <h3>Image Project</h3>
                                <div class="row open-sans-font">
                                    <div class="col-12 col-sm-6 mb-2">
                                        <i class="fa fa-file-text-o pr-2"></i><span class="project-label">Project </span>: <span class="ft-wt-600 uppercase">Website</span>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-2">
                                        <i class="fa fa-user-o pr-2"></i><span class="project-label">Client </span>: <span class="ft-wt-600 uppercase">Envato</span>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-2">
                                        <i class="fa fa-code pr-2"></i><span class="project-label">Langages </span>: <span class="ft-wt-600 uppercase">HTML, CSS, Javascript</span>
                                    </div>
                                    <div class="col-12 col-sm-6 mb-2">
                                        <i class="fa fa-external-link pr-2"></i><span class="project-label">Preview </span>: <span class="ft-wt-600 uppercase"><a href="#" target="_blank">www.envato.com</a></span>
                                    </div>
                                </div>
                            </figcaption>
                            <!-- Project Details Ends -->
                            <!-- Main Project Content Starts -->
                            <img src="{{$portfolio->image}}" alt="Portolio Image" />
                            <!-- Main Project Content Ends -->
                        </figure>
                    </li>
                    <!-- Portfolio Item Detail Ends -->
                @endforeach
            </ul>
            <!-- Portfolio Navigation Starts -->
            <nav>
                <span class="icon nav-prev"><img src="img/projects/navigation/left-arrow.png" alt="previous"></span>
                <span class="icon nav-next"><img src="img/projects/navigation/right-arrow.png" alt="next"></span>
                <span class="nav-close"><img src="img/projects/navigation/close-button.png" alt="close"> </span>
            </nav>
            <!-- Portfolio Navigation Ends -->
        </section>
    </div>
</section>
<!-- Main Content Ends -->

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
