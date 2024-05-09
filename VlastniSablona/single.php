<?php get_header(); ?>

<main class="main" role="main">
    <?php
    // Začátek smyčky
    while ( have_posts() ) : the_post();

        get_template_part( 'content', get_post_format() );

         // Zobrazení obsahu příspěvku
        the_content();

        // konec smyčky
    endwhile;
    ?>
</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>