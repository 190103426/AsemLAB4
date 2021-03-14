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
                        <li class="nav__item"><a href=" {{ route('about') }} " class="nav__link">About</a></li>
                       <li class="nav__item"><a href=" {{ route('portfolio') }} " class="nav__link">Portfolio</a></li>
                        <li class="nav__item"><a href=" {{ route('contact') }} " class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>
  

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <h1 class="home__title"><span>Aitbayeva</span><br>Assem</h1>

                   

                    <img src="wctg3EiBq8w-removebg-preview.png" alt="" class="home__img">
                </div>
            </section>
            
            

           
           
           

        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="app.js"></script>
    </body>
</html>