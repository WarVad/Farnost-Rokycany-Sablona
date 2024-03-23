<?php get_header(); ?>

<main class="main" role="main">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        /*
         * Include the post format-specific template for the content. If you want to
         * use this in a child theme, then include a file called called content-___.php
         * (where ___ is the post format) and that will be used instead.
         */
        get_template_part( 'content', get_post_format() );

        // Display the content of the post
        the_content();

        // End the loop.
    endwhile;
    ?>
</main><!-- .site-main -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>