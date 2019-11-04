<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nails
 */

$footer_copyright = get_field('footer_copyright', 'options');
?>

</div><!-- container-end -->

<footer class="probootstrap-footer malinna__footer">
    <div class="container-fluid" id="inst-cont__footer">
        <div class="container text-center">
            <div class="row">
                <?php if ($footer_copyright): ?>
                    <div class="col-sm-12">
                        <div class="malinna__copyright"><p><?php echo $footer_copyright; ?></p></div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php get_template_part('template-parts/modals'); ?>

</body>
</html>
