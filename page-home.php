<?php
// Template Name: Home

get_header(); ?>

<div class="container">

    <div class="hero">
        <figure class="hero__image">
            <?php the_post_thumbnail(); ?>
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




    <?php get_footer(); ?>