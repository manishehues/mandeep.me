<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array( 'avada-stylesheet' ) );
    wp_enqueue_style( 'fontawesome-style', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array( 'avada-stylesheet' ) );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



function my_custom_scripts() {
    wp_enqueue_script( 'global-js', get_stylesheet_directory_uri() . '/assets/js/global.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_scripts' );



function avada_lang_setup() {
	$lang = get_stylesheet_directory() . '/languages';
	load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );







