<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blog - Tunis Personal Portfolio</title>
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
<body class="blog-post">
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
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="contact">
                <h2>Contact</h2>
            </a>
        </li>
        <li class="icon-box active">
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
                <li><a href="portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                <li class="active"><a href="blog"><i class="fa fa-comments"></i><span>Blog</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
<!-- Header Ends -->
<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>my <span>blog</span></h1>
    <span class="title-bg">posts</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Article Starts -->
            <article class="col-12">
                <!-- Meta Starts -->
                <div class="meta open-sans-font">
                    <span><i class="fa fa-user"></i> Sunatillo</span>
                    <span class="date"><i class="fa fa-calendar"></i>{{$blog->created_at}}</span>
                    <span><i class="fa fa-tags"></i> wordpress, business, economy, design</span>
                </div>
                <!-- Meta Ends -->
                <!-- Article Content Starts -->
                <h1 class="text-uppercase text-capitalize">{{$blog->title}}</h1>
                <img src="{{$blog->image}}" class="img-fluid" alt="Blog image"/>
                <div class="blog-excerpt open-sans-font pb-5">
                    <p>{{$blog->description}}</p>
                </div>
                <!-- Article Content Ends -->
            </article>
            <!-- Article Ends -->
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
