<?php get_header(); ?>

<main role="main">
    <section>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo 'Nothing here!';
        endif;
        ?>

    </section>
</main>

<?php get_footer(); ?>
