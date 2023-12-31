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
<body class="blog">
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
                <li class="active"><a href="/blogs"><i class="fa fa-comments"></i><span>Blog</span></a></li>
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
        <!-- Articles Starts -->
        <div class="row">
        @foreach($blogs as $blog)
            <!-- Article Starts -->
            <div class="col-12 col-md-6 col-lg-6 col-xl-4 mb-30">
                <article class="post-container">
                    <div class="post-thumb">
                        <a href="/blog/{{$blog->id}}" class="d-block position-relative overflow-hidden">
                            <img src="{{$blog->image}}" class="img-fluid" alt="Blog Post">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="entry-header">
                            <h3><a href="/blog/{{$blog->id}}">{{$blog->title}}</a></h3>
                        </div>
                        <div class="entry-content open-sans-font">
                            <p>{{$blog->description}}</p>
                        </div>
                    </div>
                </article>
            </div>
            <!-- Article Ends -->
        @endforeach
            <!-- Pagination Starts -->
            <div class="col-12 mt-4">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Pagination Ends -->
        </div>
        <!-- Articles Ends -->
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
