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

     <!--===== CONTACT =====-->
     <section class="contact section" id="contact">
        <h2 class="section-title">Contact</h2>

        <div class="contact__container bd-grid">
            <div class="contact__info">
                <h3 class="contact__subtitle">EMAIL</h3>
                <span class="contact__text">190103426@stu.sdu.edu.kz</span>

                <h3 class="contact__subtitle">PHONE</h3>
                <span class="contact__text">+7707 123 45 67</span>

                <h3 class="contact__subtitle">ADRESS</h3>
                <span class="contact__text">Kazakhstan, Astana</span>
            </div>

            <form action="" class="contact__form">
                <div class="contact__inputs">
                    <input type="text" placeholder="Name" class="contact__input">
                    <input type="mail" placeholder="Email" class="contact__input">
                </div>

                <textarea name="" id="" cols="0" rows="10" class="contact__input"></textarea>

                <input type="submit" value="Submit" class="contact__button">
            </form>
        </div>
    </section>
</main>

 <!--===== FOOTER =====-->
 <footer class="footer section">
    <div class="footer__container bd-grid">
        <div class="footer__data">
            <h2 class="footer__title">FOLLOW</h2>
            <a href="https://wa.me/87077897638/" class="footer__social"><i class='bx bxl-whatsapp' ></i></a>
            <a href="https://instagram.com/aaitbaevaa?igshid=1mm1793mwax8n/" class="footer__social"><i class='bx bxl-instagram' ></i></a>
            <a href="https://vk.com/id371059944/" class="footer__social"><i class='bx bxl-vk' ></i></a>
        </div>


    </div>
</footer>

<!--===== SCROLL REVEAL =====-->
<script src="https://unpkg.com/scrollreveal"></script>

<!--===== MAIN JS =====-->
<script src="app.js"></script>
</body>
</html>