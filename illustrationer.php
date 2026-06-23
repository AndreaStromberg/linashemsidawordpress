<?php
// Template Name: illustrationer

get_header();
?>

<div class="outer-container">
    <div class="illustrationer__content">

        <h1>Illustrationer</h1>

        <p class="illustrationer__ingress">
            Här hittar du mina illustrationer som jag gör till mina olika skrivprojekt.
        </p>

        <div id="visisble-posts">
            <div class="masonry" id="masonry">

                <?php
                $args = array(
                    'category_name' => 'illustrationer',
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );

                $query = new WP_Query($args);
                $pic_width = 0;
                $pic_height = 0;

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                        <?php
                        if (has_post_thumbnail()) {
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                            $thumbnail_data = wp_get_attachment_metadata($thumbnail_id);

                            $pic_width = ceil($thumbnail_data['width'] / 100);
                            $pic_height = ceil($thumbnail_data['height'] / 100);
                        }
                        ?>
                        <div class="frame" style="--width: <?php echo ceil($thumbnail_data['width'] / 100); ?>; --height: <?php echo ceil($thumbnail_data['height'] / 100); ?>;">
                            <div class="frame" style="--width: <?php echo $pic_width; ?>; --height: <?php echo $pic_height; ?>;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large') ?>
                                </a>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <?php if ($query->max_num_pages > 1) : ?>
                <!-- Data attribut sparar information som JavaScript behöver -->
                <button data-page="1" data-max-pages="<?php echo $query->max_num_pages; ?>" type="button" class="button" id="show-more-illustrations">Visa mer</button>
            <?php endif; ?>
        </div>

        <div id="hidden-posts" style="display: none;">
            <div class="masonry" id="masonry">

                <?php
                $args = array(
                    'category_name' => 'illustrationer',
                    'post_type' => 'post',
                    'offset' => 3, // Hoppa över de första 5 posterna
                    'posts_per_page' => -1, // Visa alla återstående
                );

                $query = new WP_Query($args);
                $pic_width = 0;
                $pic_height = 0;

                if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                        <?php
                        if (has_post_thumbnail()) {
                            $thumbnail_id = get_post_thumbnail_id();
                            $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                            $thumbnail_data = wp_get_attachment_metadata($thumbnail_id);

                            $pic_width = ceil($thumbnail_data['width'] / 100);
                            $pic_height = ceil($thumbnail_data['height'] / 100);
                        }
                        ?>
                        <div class="frame" style="--width: <?php echo ceil($thumbnail_data['width'] / 100); ?>; --height: <?php echo ceil($thumbnail_data['height'] / 100); ?>;">
                            <div class="frame" style="--width: <?php echo $pic_width; ?>; --height: <?php echo $pic_height; ?>;">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large') ?>
                                </a>
                            </div>
                        </div>
                <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>

            <button type="button" class="button" id="show-more-illustrations">Visa mer</button>
        </div>

    </div>


    <?php
    get_footer();
    ?>