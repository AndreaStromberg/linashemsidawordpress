<?php
// Template Name: Arbetsprocesser
get_header();
?>

<div class="outer-container">
    <div class="pagang-content">
        <h1>Arbetsprocesser</h1>
        <p class="pagang-ingress">
            Är du nyfiken på hur jag arbetar? Här kan du läsa mer!

        </p>

        <div class="pagang-cards" id="arbetsprocesser-cards">

            <?php

            $args = array(
                'category_name' => 'arbetsprocesser',
                'post_type' => 'post',
                'posts_per_page' => 5
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

        <?php if ($query->max_num_pages > 1) : ?>
            <!-- Data attribut sparar information som JavaScript behöver -->
            <button data-current-arbetsprocesser-page="1" data-max-arbetsprocesser-pages="<?php echo $query->max_num_pages; ?>" type="button" class="button" id="load-more-arbetsprocesser">Visa mer</button>
        <?php endif; ?>
    </div>


</div>


<?php get_footer(); ?>