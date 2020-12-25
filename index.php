<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- == BOXICONS == -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="./index.css">
    <title>MARRIED</title>
</head>

<body>
    <!-- == HEADER == -->
    <header class="l-header">
        <nav class="nav bd-grid">
            <div>
                <a href="./index.php" class="nav__logo">Married</a>
            </div>
            <div class="nav__toggle" id="nav-toggle">
                <i class='bx bx-menu'></i>
            </div>

            <div class="nav__menu" id="nav-menu">
                <div class="nav__close" id="nav-close">
                    <i class='bx bx-x'></i>
                </div>
                <ul class="nav__list">
                    <li class="nav__item"><a href="" class="nav__link">Home</a></li>
                    <li class="nav__item"><a href="" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Services</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="l-main">
        <!-- == HOME == -->
        <section class="home">
            <div class="home__container bd-grid">
                <div class="home__img">
                    <img src="./img/svg1.svg" alt="" data-speed="3" class="move">
                    <!-- <img src="./img/svg2.svg" alt="" data-speed="4" class="move"> -->
                    <!-- <img src="./img/svg3.svg" alt="" data-speed="-2" class="move"> -->
                </div>
                <div class="home__data">
                    <h1 class="home__title">Married<br> Efficiently</h1>
                    <p class="home__description">Let's get married</p>
                    <a href="./components/RegisterPage/Register.php" class="home__button">Get Started</a>
                </div>
            </div>
        </section>
    </main>

    <!-- == GSAP == -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js" integrity="sha512-IQLehpLoVS4fNzl7IfH8Iowfm5+RiMGtHykgZJl9AWMgqx0AmJ6cRWcB+GaGVtIsnC4voMfm8f2vwtY+6oPjpQ==" crossorigin="anonymous"></script>

    <!-- == JAVASCRIPT FILE == -->
    <script src="./index.js"></script>

</body>

</html>