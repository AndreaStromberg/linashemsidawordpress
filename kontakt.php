<?php
// Template Name: Kontakt
get_header();
?>

<div class="outer-container">

    <div class="contact-container">
        <form action="https://api.web3forms.com/submit" method="POST" class="contact-left">
            <div class="contact-left-title">
                <h2>Kontakta mig</h2>

            </div>

            <?php
            $kontakttext = get_field('kontakt-text');

            if ($kontakttext) :
            ?>
                <p><?php echo $kontakttext ?></p>

            <?php endif; ?>


            <input type="hidden" name="access_key" value="7c0c4de4-1e73-4f46-b67f-645fa27a7996">
            <input type="text" name="name" placeholder="Ditt namn" class="contact-inputs" required>
            <input type="email" name="email" placeholder="Din epostadress" class="contact-inputs" required>

            <textarea name="message" placeholder="Skriv något" class="contact-inputs"></textarea>

            <button type="submit" class="button">Skicka</button>

        </form>

        <!-- <div class="contact-right">
                <img src="images/brev.png" alt="">

            </div> -->
    </div>
</div>


<?php get_footer(); ?>