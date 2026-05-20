<?php
// Template Name: Texter
get_header();
?>

<div class="outer-container">
    <div class="pagang-content">
        <h1>Texter</h1>
        <p class="pagang-ingress">
            Många texter blir det, både längre och kortare. Några publiceras, andra inte, och några kan du läsa här.

        </p>

        <div class="pagang-cards">

            <?php

            $args = array(
                'category_name' => 'texter',
                'post_type' => 'post',
                'posts_per_page' => 3
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <a href="<?php the_permalink(); ?>">

                        <article class="pagang-card card">
                            <figure class="card__image">
                                <?php the_post_thumbnail('large') ?>
                            </figure>

                            <div class="card__content">

                                <div class="card__text">

                                    <h3 class=" card__heading"><?php the_title(); ?></h3>

                                    <p class="card__exerpt"><?php the_excerpt(); ?>
                                    </p>
                                </div>

                                <a href="<?php the_permalink(); ?>" class="button">Läs mer</a>


                            </div>
                        </article>
                    </a>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>
    </div>


</div>


<?php get_footer(); ?>