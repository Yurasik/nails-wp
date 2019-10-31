<?php
/**
 * Template Name: Портфолио
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nails
 */

get_header();
?>

<?php get_template_part( 'template-parts/block/back-to-home' ); ?>

<?php get_template_part( 'template-parts/section/portfolio-grid' ); ?>

<?php get_template_part( 'template-parts/section/social-networks' ); ?>

<?php get_sidebar(); ?>

<?php get_footer();