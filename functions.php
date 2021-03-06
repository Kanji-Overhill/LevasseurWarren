<?php
/**
 * Levasseur warren functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Levasseur_warren
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'levasseur_warren_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function levasseur_warren_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Levasseur warren, use a find and replace
		 * to change 'levasseur-warren' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'levasseur-warren', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'levasseur-warren' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'levasseur_warren_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'levasseur_warren_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function levasseur_warren_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'levasseur_warren_content_width', 640 );
}
add_action( 'after_setup_theme', 'levasseur_warren_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function levasseur_warren_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'levasseur-warren' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'levasseur-warren' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'levasseur_warren_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function levasseur_warren_scripts() {
	wp_enqueue_style( 'levasseur-warren-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'levasseur-warren-style', 'rtl', 'replace' );

	wp_enqueue_script( 'levasseur-warren-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'levasseur_warren_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * ====
 * All theme styles/scripts/libraries are added here
 * ====
 */

/* Custom Post Type function for Team content */
function create_team_member() {
 
    register_post_type( 'team',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Team' ),
                'singular_name' => __( 'Team' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'show_in_rest' => true
 
        )
    );
}
/*Function Loop Custom Post type team*/
function team_loop_shortcode() {
    $args = array(
        'post_type' => 'team',
        'post_status' => 'publish',
        'order' => 'asc',
        'order_by' => 'date',
        'posts_per_page' => -1,
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        while($my_query->have_posts()) : $my_query->the_post();
            $colors = get_field('category');
        	echo '
        		<div class="col-md-3 mb-4 grid-item ';
            
            if( $colors ):
                foreach( $colors as $color ):
                    echo $color.' ';
                endforeach;
            endif;
            echo    '">
					<div class="container-member">
					<a href="'.get_permalink().'">
						<div class="thumb-info-wrapper">
							<img src="'.get_field('image').'" alt="choaching" class="img-fluid">
							<span class="thumb-info-title">
								<span class="thumb-info-inner">'.get_the_title().'</span>
							</span>
						</div>
					</a>
						<p class="social-media text-center">';
							if (get_field("facebook") != "") {
								echo '<a href="'.get_field('facebook').'" target="_blank"><i class="fab fa-facebook-f"></i></a>';
							}else{}
							if (get_field("twitter") != "") {
								echo '<a href="'.get_field('twitter').'" target="_blank"><i class="fab fa-twitter"></i></a>';
							}else{}
							if (get_field("linkedin") != "") {
								echo '<a href="'.get_field('linkedin').'" target="_blank"><i class="fab fa-linkedin-in"></i></a>';
							}else{}
						echo '</p>
						<p class="pl-3 pr-3">'.get_field('position').'</p>
						<p class="mb-4 pl-3 pr-3">'.get_field('position_2').'</p>
					</div>
				</div>
        	';
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

/*Function Team buttons group*/
function team_buttons_shortcode() {
    $args = array(
        'post_type' => 'team',
        'post_status' => 'publish',
        'order' => 'asc',
        'order_by' => 'date',
        'posts_per_page' => -1,
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
    	echo'<div class="button-group filter-button-group">
        	<button data-filter="*">'; echo _e("Show All","levasseur-warren"); echo '</button>';
        while($my_query->have_posts()) : $my_query->the_post();
            if (get_field('testimonials') == "") {
            
            }else{
                $title = str_replace(" ","_",get_the_title());
                echo '
                    <button data-filter=".'.$title.'">'.get_the_title().'</button>
                ';
            }
        endwhile;
        echo '</div>';
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

function eliminar_tildes($cadena){

    //Codificamos la cadena en formato utf8 en caso de que nos de errores
    $cadena = utf8_encode($cadena);

    //Ahora reemplazamos las letras
    $cadena = str_replace(
        array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $cadena
    );

    $cadena = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $cadena );

    $cadena = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $cadena );

    $cadena = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $cadena );

    $cadena = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $cadena );

    $cadena = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç'),
        array('n', 'N', 'c', 'C'),
        $cadena
    );

    return $cadena;
}
/* Custom Post Type function for Areas content */
function create_area_expertise() {
 
    register_post_type( 'area',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Areas' ),
                'singular_name' => __( 'Area' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'area'),
            'show_in_rest' => true
 
        )
    );
}
/*Function Loop Custom Post type Areas*/
function areas_loop_shortcode() {
    $args = array(
        'post_type' => 'area',
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        while($my_query->have_posts()) : $my_query->the_post();
            if (get_field('permalink') != "") {
                $link = get_field('permalink');
                echo '
                <div class="col-12 col-md-4 mb-4">
                    <div class="content-area">
                        <img src="'.get_field('image').'" alt="choaching" class="img-fluid">
                        <div class="description-area">
                            <a href="'.$link.'"><h2>'.get_the_title().'</h2></a>
                            '.get_field('breadcrumb').'
                        </div>
                    </div>
                </div>
            ';
            }elseif(get_field('content') != ""){
                    $link = get_permalink();
                    echo '
                <div class="col-12 col-md-4 mb-4">
                    <div class="content-area">
                        <img src="'.get_field('image').'" alt="choaching" class="img-fluid">
                        <div class="description-area">
                            <a href="'.$link.'"><h2>'.get_the_title().'</h2></a>
                            '.get_field('breadcrumb').'
                        </div>
                    </div>
                </div>
            ';
            }else{
                $link = "";
                echo '
                <div class="col-12 col-md-4 mb-4">
                    <div class="content-area">
                        <img src="'.get_field('image').'" alt="choaching" class="img-fluid">
                        <div class="description-area">
                            <h2>'.get_the_title().'</h2>
                            '.get_field('breadcrumb').'
                        </div>
                    </div>
                </div>
            ';
            }
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

/* Custom Post Type function for Testimonial content */
function create_testimonials() {
 
    register_post_type( 'testimonial',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonial'),
            'show_in_rest' => true
 
        )
    );
}
/*Function Loop Custom Post type Areas*/
function testimonial_loop_shortcode() {
    $args = array(
        'post_type' => 'testimonial',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        while($my_query->have_posts()) : $my_query->the_post();
        	$title = str_replace(" ","_",get_field('letter_of_recommendation'));
        	echo '
        		<div class="col-md-12 grid-item '.$title.'">
					<p class="blue-color">';
					echo _e('Letter of Recommendation: ', 'levasseur-warren' ).get_field('letter_of_recommendation');
					echo '</p>
					<p>
						<b>'.get_field('location').', '.get_field('date').'</b>
					</p>
					'.get_field('description').'
				</div>
        	';
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}

function testimonial_slide_shortcode() {
    $args = array(
        'post_type' => 'testimonial',
        'post_status' => 'publish',
        'orderby'   => 'rand',
        'posts_per_page' => 4,
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        while($my_query->have_posts()) : $my_query->the_post();
        	echo '
        		<div class="glide__slide text-center">
					'.get_field('description').'
				</div>
        	';
        endwhile;
        wp_reset_postdata();
    else :
    _e( 'Sorry, no posts matched your criteria.' );
    endif;
}



function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
                $post = get_page($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}

function related_post_shortcode( $categoria ){
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $categoria['categoria'],
        'order' => 'ASC',
        'order_by' => 'date',
        'posts_per_page' => 3,
        
    );

    $my_query = null;
    $my_query = new WP_query($args);
    if($my_query->have_posts()):
        echo '
            <div class="col-12 border-top">
                    <h2 style="color: #0077C0" class="mt-4 mb-4">'; echo _e("Related Posts","levasseur-warren").'</h2>
                </div>
        ';
        while($my_query->have_posts()) : $my_query->the_post();
            $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
            $cadena = substr(get_the_content(), 0, 140);
            echo '
                <div class="col-12 col-md-4 mb-4">
                    <div class="content-area overlay-blue">
                    <a href="'.get_permalink().'">
                        <img src="'.$src[0].'" alt="choaching" class="img-fluid">
                        <div class="description-area p-2 border">
                            <h2 class="h4 mt-2 mb-2">'.get_the_title().'</h2>
                            <p>'.$cadena.'...</p>
                        </div>
                    </a>
                    </div>
                </div>
            ';
        endwhile;
        wp_reset_postdata();
    else :
    
    endif;
}
add_shortcode( 'related_post', 'related_post_shortcode' );

// Add init Custom Post Type function for Team content 
add_action( 'init', 'create_team_member' );

// Add init Custom Post Type function for Area content 
add_action( 'init', 'create_area_expertise' );

// Add init Custom Post Type function for Testimonial content 
add_action( 'init', 'create_testimonials' );

/*Add Shortcode Team Shortcode*/
add_shortcode( 'team_loop', 'team_loop_shortcode' );

/*Add Shortcode Areas Shortcode*/
add_shortcode( 'areas_loop', 'areas_loop_shortcode' );

/*Add Shortcode Testimonial Shortcode*/
add_shortcode( 'testimonial_loop', 'testimonial_loop_shortcode' );

/*Add Shortcode Testimonial Shortcode*/
add_shortcode( 'team_buttons', 'team_buttons_shortcode' );

/*Add Shortcode Testimonial Shortcode*/
add_shortcode( 'testimonial_slide', 'testimonial_slide_shortcode' );


require_once __DIR__ . '/theme-functions/index.php';

