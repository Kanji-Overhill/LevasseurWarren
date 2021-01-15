<?php
/**
 * File: 
 *  theme-functions/styles.php 
 * 
 * This file contains all the CSS files needed for the theme.
 * 
 */



/**
 * Loads all the main CSS files needed for the theme, all the general styles are here.
 * 
 */
function load_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/style/main.css');
}
add_action('wp_enqueue_scripts', 'load_styles');




/**
 * Only loads CSS files needed for the Homepage (templates/homepage.php)
 * 
 */
function load_homepage_styles() {
    // Check if we are in the homepage
    if (is_page_template('templates/page-home.php')) {
        //Glide CSS
	    wp_enqueue_style('glide',  get_template_directory_uri() . '/css/glide.core.css');
	    wp_enqueue_style('glide-theme',  get_template_directory_uri() . '/css/glide.theme.css');
	    //Home CSS
	    wp_enqueue_style('home', get_template_directory_uri() . '/style/templates/home.css');
    }
    if (is_page_template('templates/page-areas.php')) {
	    //Areas of Expertise CSS
	    wp_enqueue_style('areas', get_template_directory_uri() . '/style/templates/areas.css');
    }
    if (is_page_template('templates/page-about-us.php')) {
        //About Us CSS
        wp_enqueue_style('about-us', get_template_directory_uri() . '/style/templates/about-us.css');
    }
    if (is_page_template('templates/page-team.php')) {
        //Our Team CSS
        wp_enqueue_style('team', get_template_directory_uri() . '/style/templates/team.css');
    }
    if (is_page_template('templates/page-testimonials.php')) {
        //Testimonials CSS
        wp_enqueue_style('testimonials', get_template_directory_uri() . '/style/templates/testimonials.css');
    }
    if (is_page_template('templates/page-advisory.php')) {
        //Advisory Board CSS
        wp_enqueue_style('advisory', get_template_directory_uri() . '/style/templates/advisory.css');
    }
}
add_action('wp_enqueue_scripts', 'load_homepage_styles');