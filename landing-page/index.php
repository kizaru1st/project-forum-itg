<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--========== BOX ICONS ==========-->
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <!--========== CSS ==========-->
        <link rel="stylesheet" href="./assets/css/landing.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">
        <title>Forum IT Gabut</title>
    </head>
    <body id="topMenu">
        <!--========== SCROLL TOP ==========-->
        <a href="#" class="scrolltop" id="scroll-top">
            <i class='bx bx-up-arrow-alt scrolltop__icon'></i>
        </a>
        
        <!--========== HEADER ==========-->
        <header class="l-header" id="header">
            <nav class="nav bd-container">
                <a href="#topMenu" class="nav__logo judulBesar"><i class='bx bxs-message-alt-dots'></i> ITG</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active-link">Home</a></li>
                        <li class="nav__item"><a href="#share" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#decoration" class="nav__link">Feature</a></li>
                        <li class="nav__item"><a href="#" class="nav__link">Login</a></li>
                        <li><i class='bx bx-toggle-left change-theme' id="theme-button"></i></li>
                    </ul>
                </div>
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-grid-alt'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--========== HOME ==========-->
            <section class="home" id="home">
                <div class="home__container bd-container bd-grid">
                    <div class="home__img">
                        <img src="./img/Team meeting_Monochromatic.png" alt="">
                    </div>
                    <div class="home__data">
                        <h1 class="home__title">Lorem ipsum dolor sit amet.</h1>
                        <p class="home__description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, quas odio harum aliquid ipsum possimus?</p>
                        <a href="#" class="button">Get Started</a>
                    </div>   
                </div>
            </section>

            <!--========== SHARE ==========-->
            <section class="share section bd-container" id="share">
                <div class="share__container bd-grid">
                    <div class="share__data">
                        <h2 class="section-title-center">Lorem ipsum dolor sit amet.</h2>
                        <p class="share__description">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet repellendus odit enim aliquid quos doloremque?</p>
                    </div>

                    <div class="share__img">
                        <img src="./img/Brainstorming session _Monochromatic.png" alt="">
                    </div>
                </div>
            </section>

            <!--========== DECORATION ==========-->
            <section class="decoration section bd-container" id="decoration">
                <h2 class="section-title">Lorem ipsum dolor sit amet.</h2>
                <div class="decoration__container bd-grid">
                    <div class="decoration__data">
                        <img src="./img/Chat_Flatline.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="decoration__data">
                        <img src="./img/Video call_Flatline.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Lorem, ipsum dolor.</h3>
                    </div>

                    <div class="decoration__data">
                        <img src="./img/World Connection _Two Color.png" alt="" class="decoration__img">
                        <h3 class="decoration__title">Lorem, ipsum dolor.</h3>
                    </div>
                </div>
            </section>

        <!--========== FOOTER ==========-->
        <footer class="footer section">
            <p class="footer__copy">&#169; 2021 ITGabut Team.</p>
        </footer>

        <!--========== SCROLL REVEAL ==========-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--========== MAIN JS ==========-->
        <script src="./assets/js/landing.js"></script>
    </body>
</html>