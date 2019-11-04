<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nails
 */

get_header();
?>

<?php get_template_part( 'template-parts/block/back-to-home' ); ?>

<section>
    <div id="menu3_child" class="row line__photo">
        <div class="col-sm-12">
            <div class="photo__nails"><p>Фото работ</p>
                <div class="pink__line"></div>
            </div>
        </div>
    </div>

    <?php if ( have_posts() ) : ?>

        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php $counter += 1; ?>

                <div id="portfolio-<?php the_ID(); ?>" class="col-md-4 col-sm-12 portfolio-item">
                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                        <?php
                        the_post_thumbnail( 'post-thumbnail', array(
                            'alt' => the_title_attribute( array(
                                'echo' => false,
                            ) ),
                            'class' => 'photo'
                        ) );
                        ?>
                    </a>
                </div>

                <?php if ( $counter % 3 === 0 ) echo '</div><div class="row">'; ?>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>
</section>


<?php get_template_part( 'template-parts/section/social-networks' ); ?>

<?php get_sidebar(); ?>

<?php get_footer();
