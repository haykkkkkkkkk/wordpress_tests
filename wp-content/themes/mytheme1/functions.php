<?php




if ( ! function_exists( 'mytheme1_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features
*
*  It is important to set up these functions before the init hook so that none of these
*  features are lost.
*
*  @since MyTheme 1.0
*/
	function mytheme1_setup() {
		wp_enqueue_script('jquery');
		wp_enqueue_style( 'style', get_template_directory_uri() . "/css/style.css");
		wp_enqueue_script( 'script', get_template_directory_uri() . "/js/index.js");
		/**
	     * Make theme available for translation.
	     * Translations can be placed in the /languages/ directory.
	     */
	    load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );
	 
	    /**
	     * Add default posts and comments RSS feed links to <head>.
	     */
	    add_theme_support( 'automatic-feed-links' );
	 
	    /**
	     * Enable support for post thumbnails and featured images.
	     */
	    add_theme_support( 'post-thumbnails' );
	 
	    /**
	     * Add support for two custom navigation menus.
	     */
	    register_nav_menus( array(
	        'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
	        'secondary' => __('Secondary Menu', 'myfirsttheme' )
	    ));
	 
	    /**
	     * Enable support for the following post formats:
	     * aside, gallery, quote, image, and video
	     */
	    add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
	}
endif;

add_action( 'after_setup_theme', 'mytheme1_setup' );