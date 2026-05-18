<?php get_header(); ?>

<div class="outer-container">
    <div class="page-content">

        <h1 class="page__title"><?php the_title(); ?></h1>
        <!-- <h1>Nallen Tralle</h1> -->

        <?php if (has_post_thumbnail()) : ?>
            <figure>
                <!-- <img src="images/nalle.jpg" alt=""> -->
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php endif; ?>

        <div class="page__content">
            <?php the_content(); ?>
        </div>
        <!-- <p class="single-ingress">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magni adipisci perferendis quibusdam vero
            labore dolorem cum officia at optio, facilis reprehenderit temporibus ducimus suscipit cupiditate
            corporis sed sit enim maxime.
            Dignissimos quas libero, non ea voluptatem quam iste blanditiis dolor obcaecati beatae nobis, enim a
            quaerat commodi fuga dicta optio, impedit soluta vero sint excepturi ab quasi! Cum, molestias magni.
        </p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quo repudiandae omnis vero facilis,
            amet iure rem expedita asperiores ullam neque similique molestiae beatae cumque eligendi ducimus autem
            quasi blanditiis.
            Atque dolores porro inventore, ex voluptates adipisci dignissimos maxime beatae doloremque. Saepe iusto
            ut iste omnis aliquid voluptatum nisi natus voluptates dolorem, temporibus blanditiis excepturi vitae
            dolorum doloremque consequuntur! Soluta.
            Voluptatem fuga accusantium ad doloribus maxime voluptatibus quisquam illo et fugiat, sunt consequatur,
            tempora voluptas cumque ipsa quae. Enim odit veniam vitae dolores necessitatibus consectetur similique
            beatae dolore nisi voluptatibus.
            Assumenda corrupti minus illum voluptas doloribus repudiandae facilis dolore soluta excepturi
            voluptatibus quaerat quae at vitae deserunt odit et vero, nam praesentium quis nesciunt sit? Nam rem
            debitis eveniet praesentium!</p>

        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus officiis mollitia officia porro
            quaerat quam sequi debitis, in odio rerum, omnis earum tenetur numquam nobis reprehenderit fuga quis
            quasi iusto.
            Similique neque magnam ea illo tenetur, provident architecto, obcaecati aliquam nobis sit sapiente
            corrupti facilis dolorem corporis magni numquam quasi ab? Sequi delectus obcaecati dicta praesentium
            quod architecto minima officiis!</p> -->

    </div>

</div>




<?php get_footer() ?>