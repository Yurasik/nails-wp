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

?>

</div><!-- container-end -->

<footer class="probootstrap-footer malinna__footer">
    <div class="container-fluid" id="inst-cont__footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="malinna__copyright"><p>© Студия ногтевого сервися “Малинна”. 2019. Все права защищены</p></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php get_template_part('template-parts/modals'); ?>

</body>
</html>
