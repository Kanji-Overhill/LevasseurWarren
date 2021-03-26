<?php
/**
 * File: 
 *  theme-functions/lib.php 
 * 
 * This file contains all the JavaScript & CSS files included from external libraries.
 *  Ex: Bootstrap, ScrollMagic etc.
 * 
 */


/**
 * Loads all the libraries JavaScript files.
 */
function load_lib_scripts() {
	 // --
    wp_register_script('glidejs', get_template_directory_uri() . '/js/glide.min.js', null, '1.0.0', true);
    // --
    wp_enqueue_script('glidejs');

    wp_register_script('main', get_template_directory_uri() . '/js/main.js', null, '1.0.0', true);
    // --
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'load_lib_scripts');




/**
 * Loads all the libraries CSS files.
 */
function load_lib_style() {
    // Bootstrap
    wp_enqueue_style('bootstrap',  'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    // Google fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto&Roboto+Condensed');
    //Glide CSS
    wp_enqueue_style('glide',  get_template_directory_uri() . '/css/glide.core.css');
    wp_enqueue_style('glide-theme',  get_template_directory_uri() . '/css/glide.theme.css');
}
add_action('wp_enqueue_scripts', 'load_lib_style');