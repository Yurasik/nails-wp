<?php

add_action('init', 'cpt_custom_init');
function cpt_custom_init(){

    register_post_type('portfolio', array(
        'labels'             => array(
            'name'               => 'Портфолио',
            'singular_name'      => 'Портфолио',
            'add_new'            => 'Добавить новое',
            'add_new_item'       => 'Добавить новое портфолио',
            'edit_item'          => 'Редактировать портфолио',
            'new_item'           => 'Новое портфолио',
            'view_item'          => 'Посмотреть портфолио',
            'search_items'       => 'Найти портфолио',
            'not_found'          => 'Портфолио не найдено',
            'not_found_in_trash' => 'В корзине портфолио не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Портфолио'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-images-alt',
        'supports'           => array('title','editor','thumbnail')
    ) );

    register_post_type('services', array(
        'labels'             => array(
            'name'               => 'Услуги',
            'singular_name'      => 'Услуги',
            'add_new'            => 'Добавить новую',
            'add_new_item'       => 'Добавить новую услугу',
            'edit_item'          => 'Редактировать услугу',
            'new_item'           => 'Новая услуга',
            'view_item'          => 'Посмотреть услугу',
            'search_items'       => 'Найти услугу',
            'not_found'          => 'Услуг не найдено',
            'not_found_in_trash' => 'В корзине услуг не найдено',
            'parent_item_colon'  => '',
            'menu_name'          => 'Услуги'
        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        //'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-store',
        'supports'           => array('title','editor','thumbnail','excerpt')
    ) );

}