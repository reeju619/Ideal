<?php
/**
 * Ideal-new functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ideal-new
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ideal_new_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Ideal-new, use a find and replace
		* to change 'ideal-new' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ideal-new', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ideal-new' ),
			'menu-2' => esc_html__( 'footer', 'ideal-new' ),
			'menu-3' => esc_html__( 'footer_projects', 'ideal-new' ),
			'menu-4' => esc_html__( 'footer_projects_second', 'ideal-new' ),
			'menu-5' => esc_html__( 'footer_projects_third', 'ideal-new' ),
			'menu-6' => esc_html__( 'footer_profile', 'ideal-new' ),
			'menu-7' => esc_html__( 'footer_move_in', 'ideal-new' ),
			'menu-8' => esc_html__( 'footer_completed', 'ideal-new' ),
			'menu-9' => esc_html__( 'footer_commercial', 'ideal-new' ),
			'menu-10' => esc_html__( 'Header', 'ideal-new' ),
			'menu-11' => esc_html__( 'F_careers', 'ideal-new' ),
			'menu-12' => esc_html__( 'F_contact', 'ideal-new' ),
			'menu-13' => esc_html__( 'F_disclaimer', 'ideal-new' ),
			'menu-14' => esc_html__( 'F_blog', 'ideal-new' )
			
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
			'ideal_new_custom_background_args',
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
add_action( 'after_setup_theme', 'ideal_new_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
require_once ( dirname(__FILE__) . '/config.php' );
/* require_once ( dirname(__FILE__) . '/custom-walker.php' ); */
function ideal_new_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ideal_new_content_width', 640 );
}
add_action( 'after_setup_theme', 'ideal_new_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 

/**
 * Enqueue scripts and styles.
 */
function ideal_new_scripts() {
	wp_enqueue_style( 'ideal-new-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ideal-new-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ideal-new-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ideal_new_scripts' );

if( is_page_template( 'template-our-promoters.php' ) ){
		wp_enqueue_style( 'our-promoter-mcustomscrollbar-css',$templet_directory_uri.'css/jquery.mCustomScrollbar.css' );
	}
if( is_page_template( 'template-our-promoters.php' ) ){
		wp_enqueue_script( 'our-promoter-mcustomscrollbar-js',$templet_directory_uri.'js/jquery.mCustomScrollbar.concat.min.js' );
	}

function prefix_create_custom_post_type() {
    /*
     * The $labels describes how the post type appears.
     */
    $labels = array(
        'name'          => 'Products', // Plural name
        'singular_name' => 'Product'   // Singular name
    );

    /*
     * The $supports parameter describes what the post type supports
     */
    $supports = array(
        'title',        // Post title
        'editor',       // Post content
        'excerpt',      // Allows short description
        'author',       // Allows showing and choosing author
        'thumbnail',    // Allows feature images
        'comments',     // Enables comments
        'trackbacks',   // Supports trackbacks
        'revisions',    // Shows autosaved version of the posts
        'custom-fields', // Supports by custom fields
		'post-formats',
		'page-attributes'
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post product', // Description
        'supports'            => $supports,
        'taxonomies'          => array( 'category', 'post_tag' ), // Allowed taxonomies
        'hierarchical'        => false, // Allows hierarchical categorization, if set to false, the Custom Post Type will behave like Post, else it will behave like Page
        'public'              => true,  // Makes the post type public
        'show_ui'             => true,  // Displays an interface for this post type
        'show_in_menu'        => true,  // Displays in the Admin Menu (the left panel)
        'show_in_nav_menus'   => true,  // Displays in Appearance -> Menus
        'show_in_admin_bar'   => true,  // Displays in the black admin bar
        'menu_position'       => 5,     // The position number in the left menu
        'menu_icon'           => true,  // The URL for the icon used for this post type
        'can_export'          => true,  // Allows content export using Tools -> Export
        'has_archive'         => true,  // Enables post type archive (by month, date, or year)
        'exclude_from_search' => false, // Excludes posts of this type in the front-end search result page if set to true, include them if set to false
        'publicly_queryable'  => true,  // Allows queries to be performed on the front-end part if set to true
        'capability_type'     => 'post' // Allows read, edit, delete like “Post”
    );

    register_post_type('product', $args); //Create a post type with the slug is ‘product’ and arguments in $args.
}
add_action('init', 'prefix_create_custom_post_type');






function maxWord($title){

    global $post;

    $title = $post->post_title;

    if (str_word_count($title) >= 100 ) //set this to the maximum number of words

        wp_die( __('Error: your post title is over the maximum word count.') );

}

add_action('publish_post', 'maxWord');

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );



/*if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer
 
        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }
endif; */


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






   // function after_sent_mail($wpcf7)

   // {
   //     header("Location: https://magical-leavitt.143-244-131-3.plesk.page/ideal_web/wp-content/themes/ideal-new/pdf/Ideal_Aurum.pdf");
   // } 
	




	
add_action( 'wp_footer', 'mycustom_wp_footer' );


function ideal_register_styles(){
    

	wp_enqueue_style( 'ideal_owl_carousel', get_template_directory_uri(). "/css/owl.carousel.min.css", array(), '2.3.4', 'all');
	wp_enqueue_style( 'ideal_fancybox', get_template_directory_uri(). "/css/jquery.fancybox.css", array(), '1.0','all');
	wp_enqueue_style( 'ideal_font_awesome', "https://use.fontawesome.com/releases/v5.1.1/css/all.css", array(), '5.1.1', 'all');
	wp_enqueue_style( 'ideal_filtertab', get_template_directory_uri(). "/css/filtertab.css", array(), '1.0','all');
	wp_enqueue_style( 'ideal_rtab', get_template_directory_uri(). "/css/rtab.css", array(), '1.0','all');
	wp_enqueue_style( 'ideal_style', get_template_directory_uri(). "/css/custom.css", array(), '1.0', 'all');
	wp_enqueue_style( 'ideal_responsive', get_template_directory_uri(). "/css/responsive.css", array(), '1.0', 'all');
	wp_enqueue_style( 'ideal_social_icons', get_template_directory_uri(). "/css/share-icons.css", array(), '1.0', 'all');
	wp_enqueue_style( 'ideal_font_awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), '4.7.0', 'all');
}

add_action('wp_enqueue_scripts', 'ideal_register_styles');


function ideal_register_scripts() {

	wp_enqueue_script('ideal_jquery', get_template_directory_uri()."/js/jquery.min.js", array(), '3.5.1', true);
	wp_enqueue_script('ideal_jquery_fancybox', get_template_directory_uri()."/js/jquery.fancybox.js", array(), '4.0.27', true);
	wp_enqueue_script('ideal_owlcarousel', get_template_directory_uri()."/js/owl.carousel.min.js", array(), '2.3.4', true);
	wp_enqueue_script('ideal_js', get_template_directory_uri()."/js/custom.js", array(), '1.0', true);
	wp_enqueue_script('ideal_glightbox', get_template_directory_uri()."/js/glightbox.min.js", array(), '1.0', true);
	wp_enqueue_script('ideal_index_js', get_template_directory_uri()."/js/index.js", array(), '1.0', true);
	wp_enqueue_script('ideal_social_icons_js', get_template_directory_uri()."/js/share-icons.js", array(), '1.0', true);
	


}

add_action('wp_enqueue_scripts', 'ideal_register_scripts');

  
function mycustom_wp_footer() {
?>
<script>
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     location = 'https://www.ideal.in/wp-content/themes/ideal-new/pdf/Ideal_Aurum.pdf';
// }, false );


document.addEventListener( 'wpcf7mailsent', function( event ) {
	  if ( '2007' == event.detail.contactFormId ) {

		var a_link = document.createElement('a');
		var url = "/wp-content/themes/ideal-new/pdf/Ideal_Aurum.pdf";
		// var url = window.URL.createObjectURL(a);
		a_link.href = url;
		a_link.download = 'Ideal_Aurum.pdf';
		document.body.append(a_link);
		a_link.click();
		a_link.remove();
		window.URL.revokeObjectURL(url);
	    
	    // location = <!-- specific url derived from $lpcnt? -->;

	  }
	  if ( '3291' == event.detail.contactFormId ) {

		var a_link = document.createElement('a');
		var url = "/wp-content/themes/ideal-new/pdf/Ideal-Aquaview-Brochure.pdf";
		// var url = window.URL.createObjectURL(a);
		a_link.href = url;
		a_link.download = 'Ideal-Aquaview-Brochure.pdf';
		document.body.append(a_link);
		a_link.click();
		a_link.remove();
		window.URL.revokeObjectURL(url);
	    
	    // location = <!-- specific url derived from $lpcnt? -->;

	  }
	  if ( '3292' == event.detail.contactFormId ) {

		var a_link = document.createElement('a');
		var url = "/wp-content/themes/ideal-new/pdf/Ideal-Paradiso-Brochure.pdf";
		// var url = window.URL.createObjectURL(a);
		a_link.href = url;
		a_link.download = 'Ideal-Paradiso-Brochure.pdf';
		document.body.append(a_link);
		a_link.click();
		a_link.remove();
		window.URL.revokeObjectURL(url);
	    
	    // location = <!-- specific url derived from $lpcnt? -->;

	  }
	  if ( '3310' == event.detail.contactFormId ) {

		var a_link = document.createElement('a');
		var url = "/wp-content/themes/ideal-new/pdf/Ideal-Exotica-Brochure.pdf";
		// var url = window.URL.createObjectURL(a);
		a_link.href = url;
		a_link.download = 'Ideal-Exotica-Brochure.pdf';
		document.body.append(a_link);
		a_link.click();
		a_link.remove();
		window.URL.revokeObjectURL(url);
	    
	    // location = <!-- specific url derived from $lpcnt? -->;

	  }
});
</script>
<?php
}

// this will deactive demo mode of reduxframework plugin and will not display and addvertisement

if ( ! function_exists( 'redux_disable_dev_mode_plugin' ) ) {
	function redux_disable_dev_mode_plugin( $redux ) {
		if ( $redux->args['opt_name'] != 'redux_demo' ) {
			$redux->args['dev_mode'] = false;
		}
	}

	add_action( 'redux/construct', 'redux_disable_dev_mode_plugin' );
}
		
		// load the theme's options 
		if ( !isset( $redux_demo ) && file_exists( dirname(__FILE__) . '/framework/sample/config.php' ) ) {
		require_once( dirname(__FILE__) . '/framework/sample/config.php' );
		}


