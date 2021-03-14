<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Portfolio</title>
</head>
<body>
    <!--===== HEADER =====-->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <img src="unnamed-removebg-preview.png" class="nav__logo">
            </div>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item"><a href="{{ route('html') }}" class="nav__link active">Home</a></li>
                    <li class="nav__item"><a href="{{ route('about') }}" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="{{ route('portfolio') }}" class="nav__link">Portfolio</a></li>
                    <li class="nav__item"><a href="{{ route('contact') }}" class="nav__link">Contact</a></li>
                </ul>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>
        </nav>
    </header>

     <!--===== PORTFOLIO =====-->
     <section class="portfolio section" id="portfolio">
        <h2 class="section-title">Portfolio</h2>

        <div class="portfolio__container bd-grid">
            <div class="portfolio__img">
                <img src="Sd3Nw0Bv-removebg-preview.png" alt="">

                <div class="portfolio__link">
                    <a href="#" class="portfolio__link-name">View details</a>
                </div>
            </div>
            <div class="portfolio__img">
                <img src="wctg3EiBq8w-removebg-preview.png" alt="">

                <div class="portfolio__link">
                    <a href="#" class="portfolio__link-name">View details</a>
                </div>
            </div>
            <div class="portfolio__img">
                <img src="vanellope-von-schweetz-character-desktop-wreck-it-ralph-png-clip-art-removebg-preview.png" alt="">

                <div class="portfolio__link">
                    <a href="#" class="portfolio__link-name">View details</a>
                </div>
            </div>
    </section>

    <!--===== SCROLL REVEAL =====-->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!--===== MAIN JS =====-->
    <script src="bonus/app.js"></script>
</body>
</html>