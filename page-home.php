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



        <!-- Ingress -->
        <?php
        $ingress = get_field('ingress');
        if ($ingress) :

        ?>
            <div class="ingress">
                <h1><?php echo $ingress['rubrik'] ?></h1>
                <p class="ingress__text"><?php echo $ingress['ingresstext'] ?>
                </p>
            </div>

        <?php endif; ?>

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

            <?php

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3
            );

            $query = new WP_Query($args);


            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <!-- Kort 1 -->
                    <a href="<?php the_permalink(); ?>">

                        <article class="card">
                            <figure class="card__image">
                                <?php the_post_thumbnail('large'); ?>
                            </figure>


                            <div class="card__content">

                                <div class="card__text">

                                    <h3 class=" card__heading"><?php the_title(); ?></h3>

                                    <p class="card__exerpt"><?php the_excerpt(); ?></p>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="button">Läs mer</a>


                            </div>
                        </article>
                    </a>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

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