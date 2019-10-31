<?php

function nails_scripts() {

    wp_enqueue_style( 'nails-style', get_stylesheet_uri() );
    wp_enqueue_style( 'corinthia-font-style', '//allfont.ru/allfont.css?fonts=corinthia' );
    wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
    wp_enqueue_style( 'nails-custom-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_style( 'adapt-style', get_template_directory_uri() . '/assets/css/adapt.css' );
    wp_enqueue_style( 'forma-style', get_template_directory_uri() . '/assets/css/forma.css' );
    wp_enqueue_style( 'animate-style', get_template_directory_uri() . '/assets/css/animate.css' );
    wp_enqueue_style( 'photo__nails-style', get_template_directory_uri() . '/assets/css/photo__nails.css' );
    wp_enqueue_style( 'font-awesome-style', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
    wp_enqueue_style( 'owl-carousel-style', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
    wp_enqueue_style( 'fonts-Marck-style', 'https://fonts.googleapis.com/css?family=Marck+Script&display=swap' );
    wp_enqueue_style( 'jquery-fancybox-style', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css' );


    wp_enqueue_script( 'jquery-script', 'https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'), null, false );
    wp_enqueue_script( 'owl-carousel-script', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), null, false );
    wp_enqueue_script( 'jquery-fancybox-script', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array(), null, false );
    wp_enqueue_script( 'popper-script', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), null, false );
    wp_enqueue_script( 'bootstrap-script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array(), null, false );

    wp_enqueue_script( 'nails-navigation-script', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'nails-skip-link-focus-fix-script', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }

}
add_action( 'wp_enqueue_scripts', 'nails_scripts' );