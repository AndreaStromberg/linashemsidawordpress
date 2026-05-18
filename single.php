<?php get_header() ?>

<div class="outer-container">
    <div class="single-content">
        <h1><?php the_title(); ?></h1>
        <figure>
            <?php the_post_thumbnail(); ?>
        </figure>

        <div class="single-content__text">
            <?php the_content(); ?>
        </div>

    </div>

</div>


<?php get_footer(); ?>

</body>