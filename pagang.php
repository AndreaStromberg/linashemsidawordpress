<?php
// Template Name: Pagang
get_header();
?>

<div class="outer-container">
    <div class="pagang-content">
        <h1>På gång</h1>
        <div class="category-buttons">

            <a href="<?php echo home_url('/pa-gang') ?>" class="category-button button">Alla inlägg</a>

            <a href="<?php echo home_url('/varldar-och-karaktarer') ?>" class="category-button button">Världar och karaktärer</a>

            <a href="<?php echo home_url('/arbetsprocesser') ?>" class="category-button button">Arbetsprocesser</a>

            <a href="<?php echo home_url('/texter') ?>" class="category-button button">Texter</a>

        </div>

        <div class="pagang-cards" id="pagang-cards">

            <?php
            $args = array(
                'category_name'     => 'pa-gang',
                'post_type'         => 'post',
                'posts_per_page'    => 6
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <article class="pagang-card card">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="card__image">
                                <?php the_post_thumbnail('large') ?>
                            </figure>

                            <div class="card__content">

                                <div class="card__text">

                                    <h3 class=" card__heading"><?php the_title(); ?></h3>

                                    <?php the_excerpt(); ?>
                                </div>

                                <button type="button" class="button">Läs mer</button>

                            </div>
                        </a>
                    </article>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>
        <?php if ($query->max_num_pages > 1) : ?>
            <!-- Data attribut sparar information som JavaScript behöver -->
            <button data-current-pagang-page="1" data-max-pagang-pages="<?php echo $query->max_num_pages; ?>" type="button" class="button" id="load-more-pagang">Visa mer</button>
        <?php endif; ?>

    </div>


</div>


<?php get_footer(); ?>