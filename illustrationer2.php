<?php
// Template Name: illustrationer2

get_header();
?>

<div class="outer-container">
    <div class="illustrationer__content">

        <h1>Illustrationer</h1>

        <p class="illustrationer__ingress">
            Här hittar du mina illustrationer som jag gör till mina olika skrivprojekt.
        </p>

        <div class="masonry">

            <?php

            $args = array(
                'category_name' => 'illustrationer',
                'post_type' => 'post',
                'posts_per_page' => 10
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

                    <?php
                    if (has_post_thumbnail()) {
                        $thumbnail_id = get_post_thumbnail_id();
                        $thumbnail_url = wp_get_attachment_url($thumbnail_id);
                        $thumbnail_data = wp_get_attachment_metadata($thumbnail_id);

                        // Output the data
                        // echo '<pre>';
                        // print_r($thumbnail_data);
                        // echo $thumbnail_data['width'];
                        // echo $thumbnail_data['height'];
                        // echo '</pre>';

                        // $width = $thumbnail_data['width'];
                        // $height = $thumbnail_data['height'];
                        // echo $width;
                        // echo $height;
                    }
                    ?>
                    <div class="frame" style="--width: <?php echo ceil($thumbnail_data['width'] / 100); ?>; --height: <?php echo ceil($thumbnail_data['height'] / 100); ?>;">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large') ?>
                        </a>
                    </div>

            <?php endwhile;
                wp_reset_postdata();
            endif; ?>

        </div>

    </div>

</div>


<?php
get_footer();
?>





<!-- 
<div class="frame" style="--width: 2; --height: 2;">
    <img src="images/reservbilder/bildrav.jpg" alt="">

        <img src="https://picsum.photos/200/400" />
</div>
<div class="frame" style="--width: 2; --height: 2;">

        <img src="https://picsum.photos/500/200" />
    <img src="images/reservbilder/bildsoluppgang.jpg" alt="">
</div>
<div class="frame" style="--width: 1; --height: 1;">

    <img src="images/bild1.jpg" />
</div>
<div class="frame" style="--width: 3; --height: 2;">

    <img src="images/bakgrundsbild.jpg" />
</div>
<div class="frame" style="--width: 3; --height: 3;">
        <img src="https://picsum.photos/400/300" />
    <img src="images/bild3.jpg" alt="">
</div>
-->