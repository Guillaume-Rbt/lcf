<?php

function theme_enqueue_styles() 
{
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function register_scripts ()
{
	wp_register_script("gsap", "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js" , [] , "" , true);
	wp_register_script("app_script" , get_stylesheet_directory_uri() . '/JS/app.js',[],"", true);
	wp_register_script("iconify" ,"https://code.iconify.design/2/2.1.2/iconify.min.js",[],"", true);
	wp_register_script("scrollMagic" ,"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js",[],"", true);
	wp_register_script("scrollMagicPlugin" ,"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js",[],"", true);
	wp_register_script("pluginIndicators" ,"https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js",[],"", true);
	wp_register_script("Jquery" ,"https://code.jquery.com/jquery-3.2.1.slim.min.js",[],"", true);
	wp_register_script("ScrollTrigger" ,"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js",[],"", true);
	wp_enqueue_script("scrollMagic");
	wp_enqueue_script("scrollMagicPlugin");
	wp_enqueue_script("pluginIndicators");
	wp_enqueue_script("gsap");
	wp_enqueue_script("Jquery");
	wp_enqueue_script("ScrollTrigger");
	wp_enqueue_script('iconify');
	wp_enqueue_script('app_script');
}

function wpc_theme_support() {
	add_theme_support('custom-logo', array(
		'flex-height' => true,
		'flex-width'  => true,
	));
}

function theme_image_format() {
	add_image_size( 'customMedium', 300, 500, true ); 
}

function filter_placeholder_post_artistes ($title) {
    $screen = get_current_screen();

    if ('produits' == $screen->post_type ) {
        $title = "Nom du produit";
    }   
    return $title;
}



add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
add_action('after_setup_theme','wpc_theme_support');
add_action('wp_enqueue_scripts', 'register_scripts');
add_action('after_setup_theme' , 'theme_image_format');

add_filter('enter_title_here' , 'filter_placeholder_post_artistes');