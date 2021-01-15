<?php
/**
 * File: 
 *  theme-functions/scripts.php 
 * 
 * This file contains all the JavaScript files needed for the theme.
 * 
 */



/**
 * Loads all the main JavaScript files needed for the theme.
 */
function load_scripts() {
    // --
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js');
    // --
    wp_enqueue_script('jquery');
    // --
    wp_register_script('glidejs', get_template_directory_uri() . '/js/glide.min.js', null, '1.0.0', true);
    // --
    wp_enqueue_script('glidejs');
    // --
    wp_register_script('main', get_template_directory_uri() . '/js/main.js', null, '1.0.0', true);
    // --
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_scripts');




/**
 * Only loads the JavaScript files needed for the Homepage (templates/homepage.php).
 */
function load_homepage_scripts() {
    if (is_page_template('templates/page-home.php')) {
        // --
        wp_register_script('home', get_template_directory_uri() . '/js/templates/home.js', null, '1.0.0', true);
        // --
        wp_enqueue_script('home');
    }
    if (is_page_template('templates/page-team.php')) {
        // --
        wp_register_script('isotipe', 'https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js');
        // --
        wp_enqueue_script('isotipe');

        wp_register_script('awesome', 'https://kit.fontawesome.com/ab58011517.js');
        // --
        wp_enqueue_script('awesome');
          // --
        wp_register_script('teamjs', get_template_directory_uri() . '/js/templates/team.js', null, '1.0.0', true);
        // --
        wp_enqueue_script('teamjs');
    }
    
}
add_action('wp_enqueue_scripts', 'load_homepage_scripts');