<?php
/**
 * Template Name: Custom Page
 */
get_header(); ?>

<div class="custom-page">
    <h1><?php the_title(); ?></h1>
    <div class="content">
        
        <?php
        echo 123;
        // Виводимо контент сторінки
        while (have_posts()): the_post();
            the_content();
        endwhile;
        ?>
    </div>
</div>

<?php get_footer(); ?>
