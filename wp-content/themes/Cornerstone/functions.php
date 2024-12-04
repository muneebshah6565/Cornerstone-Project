<?php
function load_styles() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    // Enqueue Custom style.css
    wp_enqueue_style('main-style',get_stylesheet_uri());

    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css');

    wp_register_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap'), false, 'all');
    wp_enqueue_style('custom-style');
}

add_action('wp_enqueue_scripts', 'load_styles'); // Pass the function name as a string, not a function call.

function load_scripts() {
    // Enqueue Bootstrap script
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap');

    // Enqueue Custom script.js
    wp_register_script('custom-script', get_template_directory_uri() . '/assets/js/myscript.js', array('jquery'), false, true);
    wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts', 'load_scripts');


// register nav menu
function my_theme_register_menus() {
    register_nav_menus(
        array(
            'primary_menu' =>__('Primary Menu','text_domain'),
            'security-menu' =>__('Security Menu','text_domain'),
            'footer-menu-1' =>__('Footer Menu 1','text_domain'),
            'footer-menu-2' =>__('Footer Menu 2','text_domain'),  // This will register the main navigation menu
        )
    );
}
add_action('init', 'my_theme_register_menus');

// add extra features to theme
function theme_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme','theme_features');

function my_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Widgets Area', 'my-theme'),
        'id'            => 'widgets-area',
        'description'   => __('Widgets would be added here', 'my-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');


function theme_customize_register($wp_customize) {
    $wp_customize->add_section('footer_section', array(
        'title'    => __('Footer Settings', 'theme_text_domain'),
        'priority' => 130,
    ));

    $wp_customize->add_setting('footer_copyright_text', array(
        'default'           => '© ' . date("Y") . ' Your Website Name. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('footer_copyright_text', array(
        'label'    => __('Copyright Text', 'theme_text_domain'),
        'section'  => 'footer_section',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'theme_customize_register');

function my_theme_customize_register($wp_customize) {
    // Add a new setting for the site description
    $wp_customize->add_setting('site_custom_description', array(
        'default'           => '', // Set a default value if needed
        'sanitize_callback' => 'sanitize_textarea_field', // Sanitize input
        'transport'         => 'refresh', // Can use 'postMessage' for live preview
    ));

    // Add a control (textarea) for the site description
    $wp_customize->add_control('site_custom_description', array(
        'type'        => 'textarea',
        'section'     => 'title_tagline', // Add to the Site Identity section
        'label'       => __('Site Description', 'my-theme'),
        'description' => __('Enter a custom description for your site.', 'my-theme'),
    ));
}
add_action('customize_register', 'my_theme_customize_register');

function footer_customizer_social_icons($wp_customize) {

     // Address
     $wp_customize->add_setting('footer_address', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_address', array(
        'label'   => __('Footer Address', 'text-domain'),
        'section' => 'title_tagline', // Add this under the "Site Identity" section
        'type'    => 'text',
    ));

    // Phone
    $wp_customize->add_setting('footer_phone', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_phone', array(
        'label'   => __('Footer Phone', 'text-domain'),
        'section' => 'title_tagline',
        'type'    => 'text',
    ));

    // Add Social Media Section
    $wp_customize->add_section('footer_social_section', array(
        'title'    => __('Footer Social Media', 'text-domain'),
        'priority' => 30,
    ));

    // Facebook
    $wp_customize->add_setting('footer_facebook', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_facebook', array(
        'label'   => __('Facebook URL', 'text-domain'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));

    // Twitter
    $wp_customize->add_setting('footer_twitter', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_twitter', array(
        'label'   => __('Twitter URL', 'text-domain'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));

    // Instagram
    $wp_customize->add_setting('footer_linkedin', array(
        'default'   => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('footer_linkedin', array(
        'label'   => __('Linkedin URL', 'text-domain'),
        'section' => 'footer_social_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'footer_customizer_social_icons');



