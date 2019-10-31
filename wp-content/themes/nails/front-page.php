<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nails
 */

get_header();
?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'template-parts/content', 'home' ); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>

<?php else : ?>
    <?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>

<?php get_template_part( 'template-parts/section/about-us' ); ?>

<?php get_template_part( 'template-parts/section/price' ); ?>

<?php get_template_part( 'template-parts/section/portfolio' ); ?>

<?php get_template_part( 'template-parts/section/social-networks' ); ?>

<?php get_template_part( 'template-parts/section/contacts' ); ?>

<?php get_sidebar(); ?>

<?php get_footer();
