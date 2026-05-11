<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>



    <!-- ikoner -->
    <script src="https://kit.fontawesome.com/57d02b356d.js" crossorigin="anonymous"></script>

    <!-- Fonter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Uncial+Antiqua&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ga+Maamli&family=Great+Vibes&family=Mynerve&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <?php wp_head(); ?>

    <!-- Scripts -->
    <script src="expandableMenu.js" defer></script>



</head>

<body>

    <header class="site-header">
        <a href="<?php echo home_url('/') ?>" class="logotype">Lina Malm</a>



        <!-- <nav class="menu">
            <ul class="menu__menulist">
                <li class="menu__list-item menu__list-item--current"><a href="index.html">Hem</a></li>
                <li class="menu__list-item"><a href="illustrationer.html">Illustrationer</a></li>
                <li class="menu__list-item menu__list-item--expandable">På gång
                    <ul class="menu__sub">
                        <li class="menu__sub__list-item"><a href="varldarOchKaraktarer.html">Världar och karaktärer</a>
                        </li>
                        <li class="menu__sub__list-item"><a href="arbetsprocesser.html">Arbetsprocesser</a></li>
                        <li class="menu__sub__list-item"><a href="texter.html">Texter</a></li>
                    </ul>
                </li>
                <li class="menu__list-item"><a href="om-mig.html">Om mig</a></li>
                <li class="menu__list-item"><a href="kontakt.html">Kontakt</a></li>
            </ul>

            <button class="hamburger-menu">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 12C0.71667 12 0.479337 11.904 0.288004 11.712C0.0966702 11.52 0.000670115 11.2827 3.44827e-06 11C-0.000663218 10.7173 0.0953369 10.48 0.288004 10.288C0.48067 10.096 0.718003 10 1 10H17C17.2833 10 17.521 10.096 17.713 10.288C17.905 10.48 18.0007 10.7173 18 11C17.9993 11.2827 17.9033 11.5203 17.712 11.713C17.5207 11.9057 17.2833 12.0013 17 12H1ZM1 7C0.71667 7 0.479337 6.904 0.288004 6.712C0.0966702 6.52 0.000670115 6.28267 3.44827e-06 6C-0.000663218 5.71733 0.0953369 5.48 0.288004 5.288C0.48067 5.096 0.718003 5 1 5H17C17.2833 5 17.521 5.096 17.713 5.288C17.905 5.48 18.0007 5.71733 18 6C17.9993 6.28267 17.9033 6.52033 17.712 6.713C17.5207 6.90567 17.2833 7.00133 17 7H1ZM1 2C0.71667 2 0.479337 1.904 0.288004 1.712C0.0966702 1.52 0.000670115 1.28267 3.44827e-06 1C-0.000663218 0.717333 0.0953369 0.48 0.288004 0.288C0.48067 0.0960001 0.718003 0 1 0H17C17.2833 0 17.521 0.0960001 17.713 0.288C17.905 0.48 18.0007 0.717333 18 1C17.9993 1.28267 17.9033 1.52033 17.712 1.713C17.5207 1.90567 17.2833 2.00133 17 2H1Z"
                        fill="currentColor" />
                </svg>

            </button>

            <ul class="hamburgermenu-expanded">
                <li class="hamburgermenu-expanded__listitem close-item"><button class="close-button">X</button></li>
                <li class="hamburgermenu-expanded__listitem menu__list-item--current"><a href="index.html">Hem</a></li>
                <li class="hamburgermenu-expanded__listitem"><a href="illustrationer.html">Illustrationer</a></li>
                <li class="hamburgermenu-expanded__listitem hamburgermenu-expanded__listitem--with-sub-menu">På gång
                    <ul class="hamburgermenu-expanded__submenu-expanded">
                        <li class="menu__sub__list-item"><a href="varldarOchKaraktarer.html">Världar och karaktärer</a>
                        </li>
                        <li class="menu__sub__list-item"><a href="arbetsprocesser.html">Arbetsprocesser</a></li>
                        <li class="menu__sub__list-item"><a href="texter.html">Texter</a></li>


                    </ul>
                </li>
                <li class="hamburgermenu-expanded__listitem"><a href="om-mig.html">Om mig</a></li>
                <li class="hamburgermenu-expanded__listitem"><a href="kontakt.html">Kontakt</a></li>
            </ul>
        </nav> -->

        <?php
        $args = array(
            'theme_location' => 'main_menu',
            'container' => 'nav',
            'container_class' => 'menu',
            'menu_class' => 'menu__menulist'

        );

        wp_nav_menu($args);


        ?>





    </header>


    <div class="container">

        <div class="hero">
            <figure class="hero__image">
                <img src="<?php echo get_template_directory_uri(); ?>/images/herobildMittemellanbred.jpg" alt="">
            </figure>
        </div>

        <div class="ingress-test">
            <div class="ingress">
                <h1>Välkommen till Linas skrivliv!</h1>
                <p class="ingress__text">Jag är en aspirerande författare och här kan du läsa mer om mina projekt, min
                    arbetsprocess och ta del av mina illustrationer som jag skapar till dessa projekt.
                </p>
            </div>

            <section class="test">

                <!-- Hela denna div är en polygonformation för ojämna kanter på sektionerna -->


            </section>
        </div>



        <div class="gallery-and-above-background-forest">


            <div class="gallery">
                <figure class="gallery__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bild1.jpg" alt="">
                </figure>

                <figure class="gallery__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bild2.jpg" alt="">
                </figure>

                <figure class="gallery__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/bild3.jpg" alt="">
                </figure>

                <div class="gallery__text-area">
                    <span class="gallery__text-area__text"> Här samlar jag mina målningar och teckningar. </span>

                    <a href="" class="button button--inverted">Till mina illustrationer</a>
                </div>

            </div>

            <div class="above-backgroundforest">
                <!-- Hela denna div är en polygonformation för ojämna kanter på sektionerna -->

            </div>

        </div>



        <div class="backgroundforest">



            <div class="articles">

                <article class="card">
                    <figure class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bakgrundsbild.jpg" alt="">
                    </figure>

                    <div class="card__content">

                        <div class="card__text">

                            <h3 class=" card__heading">Energihaveriet</h3>

                            <p class="card__exerpt">Detta är en text jag skrev för några år sedan. Det är en prosalyrisk
                                text
                                som
                                handlar om energi.</p>
                        </div>

                        <a href="" class="button">Till texten</a>

                    </div>
                </article>

                <article class="card">
                    <figure class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/bild5.jpg" alt="">
                    </figure>

                    <div class="card__content">

                        <div class="card__text">

                            <h3 class="card__heading">Littfest 2025</h3>

                            <p class="card__exerpt">Detta är en text som handlar om mitt besök på bokmässan Littfest i
                                Umeå
                                2025. En
                                mycket trevlig tillställning med många intressanta föreläsare. </p>
                        </div>

                        <a href="" class="button">Till texten</a>

                    </div>
                </article>

                <article class="card">
                    <figure class="card__image">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/herobild.jpg" alt="">
                    </figure>

                    <div class="card__content">

                        <div class="card__text">


                            <h3 class="card__heading">Nytt projekt på gång</h3>

                            <p class="card__exerpt">Jag har glädjen att berätta för er att jag en tid arbetat på ett
                                alldeles
                                nytt
                                projekt som är ett samarbete med kommunerna Härnösand, Sundsvall och Timrå samt min
                                illustratörskollega
                                Lilly Labrador</p>
                        </div>

                        <a href="" class="button">Läs mer</a>
                    </div>

                </article>

            </div>

            <div class="projects">

                <h2 class="projects__heading">Världar och karaktärer</h2>

                <div class="project__cards">

                    <div class="project__card">
                        <figure class="project__card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/nalle.jpg" alt="">
                        </figure>

                        <h3 class="project__card__title">Nallen Tralle</h3>

                        <a href="" class="button">Läs mer</a>
                    </div>

                    <div class="project__card">
                        <figure class="project__card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/barn.jpg" alt="">
                        </figure>

                        <h3 class="project__card__title">August och Lotta</h3>

                        <a href="" class="button">Läs mer</a>
                    </div>

                    <div class="project__card">
                        <figure class="project__card__image">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/tantOchKatt.jpg" alt="">
                        </figure>

                        <h3 class="project__card__title">Ingegerd och Hilma</h3>

                        <a href="" class="button">Läs mer</a>
                    </div>

                </div>
            </div>

            <div class="above-footer">
                <!-- Hela denna div är en polygonformation för ojämna kanter på sektionerna -->

            </div>

        </div>




        <footer>
            <div class="footer__contact">
                <a href="" class="footer__contact__email">lina@malm.se</a>
                <a href="" class="footer__contact__instagram">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </footer>

    </div>

    <?php wp_footer(); ?>

</body>

</html>