<?php
// Template Name: Om-mig

get_header();
?>

<?php
$omMigInnehall = get_field('om-mig-innehall');

if ($omMigInnehall) :

?>

    <div class="content__om-mig">

        <article class="om-mig">

            <div class="om-mig__picture-heading-ingress">


                <?php
                $bild = $omMigInnehall['om-mig-bild'];
                ?>

                <figure class="om-mig__picture">
                    <img src="<?php echo $bild['url']; ?>" alt="">
                </figure>

                <!-- <figure class="om-mig__picture">
                    <?php echo $omMigInnehall['om-mig-bild'] ?>
                </figure> -->

                <div class="om-mig__heading-ingress">

                    <h2><?php echo $omMigInnehall['rubrik'] ?></h2>

                    <p class="om-mig__ingress">
                        <!-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique consectetur modi
                        beatae atque facere, inventore mollitia laboriosam quae, officiis totam impedit, quaerat
                        asperiores doloribus neque! Nisi distinctio voluptatum similique.
                        Enim, iure, deserunt exercitationem voluptatum voluptate fugiat sapiente maiores nobis fugit a
                        ex. -->

                        <?php echo $omMigInnehall['om-mig-ingress'] ?>




                    </p>

                </div>



            </div>

            <div class="om-mig__text">

                <p>
                    <?php echo $omMigInnehall['om-mig-text'] ?>


                </p>





            </div>


        </article>


    </div>

<?php endif; ?>


<?php
get_footer();
?>