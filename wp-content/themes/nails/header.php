<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nails
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nails' ); ?></a>

    <section>
        <div class="row">
            <div class="col-sm-4" id="fon_1">
                <div class="pos-f-t">
                    <div class="collapsed1">
                        <div class="collapse in width" id="navbarToggleExternalContent">
                            <?php
                            wp_nav_menu( array(
                                'theme_location'    => 'menu-1',
                                'menu_id'           => 'primary-menu',
                                'container'         => '',
                                'items_wrap'        => '<div id="%1$s" class="bg-dark p-4 %2$s"><br><h4 class="text-white">Меню</h4><br>%3$s</div>',
                            ) );
                            ?>
                        </div>
                    </div>
<!--                    <div class="collapsed1">-->
<!--                        <div class="collapse in width" id="navbarToggleExternalContent">-->
<!--                            <div class="bg-dark p-4">-->
<!--                                <br><h4 class="text-white">Меню</h4><br>-->
<!--                                <span class="text-muted" id="menu1">О нас</span><br>-->
<!--                                <span class="text-muted" id="menu2">Прайс</span><br>-->
<!--                                <span class="text-muted" id="menu3">Фото работ</span><br>-->
<!--                                <span class="text-muted" id="menu4">Контакты</span><br>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <nav class="navbar navbar-dark bg-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarToggleExternalContent"
                                aria-controls="navbarToggleExternalContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
            </div>

            <div class="col-sm-4" id="heder-col">
                <?php $header_logo = get_field( 'header_logo', 'options' ); ?>
                <?php if ( $header_logo ): ?>
                    <img class="logo__malinna animated flipInX" src="<?php echo $header_logo; ?>" alt="Header Logo">
                <?php endif; ?>

                <?php if ( have_rows('header_logo_content', 'options') ): ?>
                    <?php while( have_rows('header_logo_content', 'options') ): the_row(); ?>
                        <?php
                        $text = get_sub_field('text');
                        ?>
                        <p class="studio__nails animated pulse"><?php echo $text; ?></p>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="col-sm-4">
                <div id="logo-col">
                    <?php $header_logo_2 = get_field( 'header_logo_2', 'options' ); ?>
                    <?php if ($header_logo_2): ?>
                        <img class="logo__malina_manicure" src="<?php echo $header_logo_2; ?>" alt="Logo">
                    <?php endif; ?>

                    <?php if ( have_rows('header_logo_2_content', 'options') ): ?>
                        <?php while( have_rows('header_logo_2_content', 'options') ): the_row(); ?>
                            <?php
                            $text = get_sub_field('text');
                            $counter += 1;
                            $display = ($counter >= 2) ? ' style="display: block;"' : '';
                            ?>
                            <p class="sweet__manicure<?php echo $counter; ?>" <?php echo $display; ?>><?php echo $text; ?></p>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 call__me animated fadeIn">
                <?php $header_contacts = get_field( 'header_contacts', 'options' ); ?>
                <?php if ($header_contacts): ?>
                    <h4><?php echo $header_contacts; ?></h4>
                <?php endif; ?>
            </div>
        </div>

        <div class="row">
                <div class="col-sm-12" id="btn-main">
                    <?php $header_button = get_field( 'header_button', 'options' ); ?>
                    <button type="button" id="my__button-order" class="btn btn-primary button__order"
                            data-toggle="modal" data-target="#fistModal"> <?php echo $header_button; ?></button>
                </div>
            </div>
    </section>
