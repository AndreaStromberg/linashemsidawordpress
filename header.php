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
    <!-- <script src="expandableMenu.js" defer></script> -->

</head>

<body>

    <header class="site-header">
        <a href="<?php echo home_url('/') ?>" class="logotype">Lina Malm</a>

        <nav class="menu">
            <!-- <ul class="menu__menulist">
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
            </ul> -->

            <?php
            $args = array(
                'theme_location' => 'main_menu',
                'container' => 'nav',
                'container_class' => 'menu',
                'menu_class' => 'menu__menulist'

            );

            wp_nav_menu($args);
            ?>

            <button class="hamburger-menu">
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M1 12C0.71667 12 0.479337 11.904 0.288004 11.712C0.0966702 11.52 0.000670115 11.2827 3.44827e-06 11C-0.000663218 10.7173 0.0953369 10.48 0.288004 10.288C0.48067 10.096 0.718003 10 1 10H17C17.2833 10 17.521 10.096 17.713 10.288C17.905 10.48 18.0007 10.7173 18 11C17.9993 11.2827 17.9033 11.5203 17.712 11.713C17.5207 11.9057 17.2833 12.0013 17 12H1ZM1 7C0.71667 7 0.479337 6.904 0.288004 6.712C0.0966702 6.52 0.000670115 6.28267 3.44827e-06 6C-0.000663218 5.71733 0.0953369 5.48 0.288004 5.288C0.48067 5.096 0.718003 5 1 5H17C17.2833 5 17.521 5.096 17.713 5.288C17.905 5.48 18.0007 5.71733 18 6C17.9993 6.28267 17.9033 6.52033 17.712 6.713C17.5207 6.90567 17.2833 7.00133 17 7H1ZM1 2C0.71667 2 0.479337 1.904 0.288004 1.712C0.0966702 1.52 0.000670115 1.28267 3.44827e-06 1C-0.000663218 0.717333 0.0953369 0.48 0.288004 0.288C0.48067 0.0960001 0.718003 0 1 0H17C17.2833 0 17.521 0.0960001 17.713 0.288C17.905 0.48 18.0007 0.717333 18 1C17.9993 1.28267 17.9033 1.52033 17.712 1.713C17.5207 1.90567 17.2833 2.00133 17 2H1Z"
                        fill="currentColor" />
                </svg>

            </button>

            <button class="close-button">
                X
            </button>
            <!-- 
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
            </ul> -->

            <?php
            $args = array(
                'theme_location' => 'hamburgermenu-expanded',
                'container' => 'ul',
                'menu_class' => 'hamburgermenu-expanded'


            );

            wp_nav_menu($args);

            ?>

        </nav>

    </header>