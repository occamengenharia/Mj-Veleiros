<?php


function mjveleiros_load_scripts(){
    wp_enqueue_style('mjveleiros-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;600;700&display=swap', array(), null, 'all');
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mjveleiros_load_scripts');



function mjveleiros_config(){
    register_nav_menus(
        array(
            'mj_veleiros_main_menu' => 'Main Menu',
            'mj_veleiros_footer_menu' => 'Footer Menu'
        )
    );

    $args = array(
        'height' => 700,
        'width' => 1440,
        'flex-height' => true,
        'flex-width' => true
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => '80',
        'height' => '80',

    ));

}
add_action('after_setup_theme', 'mjveleiros_config', 0);

add_action('widgets_init', 'mjveleiros_sidebars');

function mjveleiros_sidebars(){
    register_sidebar(
        array(
            'name' => "MJ 34' Deck Solarium",
            'id' => 'mj-34-deck-solarium',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => "MJ 38' Deck Solarium",
            'id' => 'mj-38-deck-solarium',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    register_sidebar(
        array(
            'name' => "MJ 44' Deck Solarium",
            'id' => 'mj-44-deck-solarium',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
}


