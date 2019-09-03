<?php
/**
 * jglp-zuerich functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jglp-zuerich
 */

if ( ! function_exists( 'jglp_zuerich_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jglp_zuerich_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jglp-zuerich, use a find and replace
		 * to change 'jglp-zuerich' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jglp-zuerich', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jglp-zuerich' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'jglp_zuerich_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'jglp_zuerich_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jglp_zuerich_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jglp_zuerich_content_width', 640 );
}
add_action( 'after_setup_theme', 'jglp_zuerich_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function jglp_zuerich_scripts() {
	wp_enqueue_style( 'jglp-zuerich-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jglp-zuerich-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'jglp-zuerich-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jglp_zuerich_scripts' );




### CUSTOM

# Intro
function intro($wp_customize) {

	$wp_customize->add_section('intro-section', array(
		'title' => 'Intro'
	));

	# Name
	$wp_customize->add_setting('candidate-name-setting', array(
		'default' => 'Hans Nötig'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro-name-control', array(
		'label' => 'Kandidatenname',
		'section' => 'intro-section',
		'settings' => 'candidate-name-setting'
	)));

	# Listeninfo
	$wp_customize->add_setting('candidate-listinfo-setting', array(
		'default' => 'Nationalratskandidatin jglp (Liste 29)'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro-listinfo-control', array(
		'label' => 'Listeninfo',
		'section' => 'intro-section',
		'settings' => 'candidate-listinfo-setting'
	)));

	#  Description
	$wp_customize->add_setting('candidate-description-setting', array(
		'default' => 'Ice cream chocolate cake brownie. Apple pie brownie tart donut bear claw chocolate cake sugar plum gingerbread. Carrot cake chocolate pudding sweet roll toffee gummi bears. Chocolate chocolate cake danish donut.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'intro-description-control', array(
		'label' => 'Beschreibung',
		'section' => 'intro-section',
		'settings' => 'candidate-description-setting'
	)));

	# Image
	$wp_customize->add_setting('candidate-image-setting', array(
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro-image-control', array(
		'label' => 'Kandidatenbild',
		'section' => 'intro-section',
		'settings' => 'candidate-image-setting'
	)));

	# Background Image
	$wp_customize->add_setting('candidate-background-setting', array(
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'intro-background-control', array(
		'label' => 'Background',
		'section' => 'intro-section',
		'settings' => 'candidate-background-setting'
	)));
}

add_action('customize_register', 'intro');


# About
function about($wp_customize) {

	$wp_customize->add_section('about-section', array(
		'title' => 'Über mich'
	));

	# first
	$wp_customize->add_setting('about-first-setting', array(
		'default' => 'Cake cake cheesecake soufflé icing fruitcake wafer cookie. Wafer chupa chups sugar plum cookie bonbon dessert carrot cake sugar plum. Cookie candy liquorice macaroon danish jelly fruitcake. Candy lemon drops chocolate bar pastry.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-first-control', array(
		'label' => 'Über',
		'section' => 'about-section',
		'settings' => 'about-first-setting'
	)));

	# engagement
	$wp_customize->add_setting('about-engagement-setting', array(
		'default' => 'Chocolate croissant oat cake chocolate ice cream oat cake brownie jujubes. Gummies carrot cake brownie donut jujubes sesame snaps sugar plum. Donut chocolate cake jelly-o cake pastry. Jelly pastry jelly liquorice tootsie roll wafer.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'about-engagement-control', array(
		'label' => 'Engagement',
		'section' => 'about-section',
		'settings' => 'about-engagement-setting'
	)));
}

add_action('customize_register', 'about');


# Positions
function positions($wp_customize) {

	$wp_customize->add_section('positions-section', array(
		'title' => 'Positionen'
	));

	# first
	$wp_customize->add_setting('positions-first-setting', array(
		'default' => 'Topping chocolate cake muffin. Sweet carrot cake cake oat cake ice cream donut. Halvah cheesecake jujubes sugar plum sesame snaps soufflé topping cake marshmallow.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-first-control', array(
		'label' => 'Positionen',
		'section' => 'positions-section',
		'settings' => 'positions-first-setting'
	)));

	# umwelt-title
	$wp_customize->add_setting('positions-umwelt-title-setting', array(
		'default' => 'Umwelt Titel...'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-umwelt-title-control', array(
		'label' => 'Umwelt Titel',
		'section' => 'positions-section',
		'settings' => 'positions-umwelt-title-setting'
	)));

	# umwelt
	$wp_customize->add_setting('positions-umwelt-setting', array(
		'default' => 'Chocolate cake topping sugar plum tootsie roll soufflé dessert sesame snaps toffee. Carrot cake biscuit fruitcake bonbon fruitcake chocolate cake cake sweet roll. Icing fruitcake jelly beans soufflé tiramisu sesame snaps macaroon sweet.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-umwelt-control', array(
		'label' => 'Umwelt',
		'section' => 'positions-section',
		'settings' => 'positions-umwelt-setting'
	)));

	# finanzen-title
	$wp_customize->add_setting('positions-finanzen-title-setting', array(
		'default' => 'Finanzen Titel...'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-finanzen-title-control', array(
		'label' => 'Finanzen Titel',
		'section' => 'positions-section',
		'settings' => 'positions-finanzen-title-setting'
	)));

	# finanzen
	$wp_customize->add_setting('positions-finanzen-setting', array(
		'default' => 'Chocolate cake topping sugar plum tootsie roll soufflé dessert sesame snaps toffee. Carrot cake biscuit fruitcake bonbon fruitcake chocolate cake cake sweet roll. Icing fruitcake jelly beans soufflé tiramisu sesame snaps macaroon sweet.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-finanzen-control', array(
		'label' => 'Finanzen',
		'section' => 'positions-section',
		'settings' => 'positions-finanzen-setting'
	)));

	# international-title
	$wp_customize->add_setting('positions-international-title-setting', array(
		'default' => 'International Titel...'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-international-title-control', array(
		'label' => 'International Titel',
		'section' => 'positions-section',
		'settings' => 'positions-international-title-setting'
	)));

	# international
	$wp_customize->add_setting('positions-international-setting', array(
		'default' => 'Chocolate cake topping sugar plum tootsie roll soufflé dessert sesame snaps toffee. Carrot cake biscuit fruitcake bonbon fruitcake chocolate cake cake sweet roll. Icing fruitcake jelly beans soufflé tiramisu sesame snaps macaroon sweet.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-international-control', array(
		'label' => 'International',
		'section' => 'positions-section',
		'settings' => 'positions-international-setting'
	)));

	# verkehr-title
	$wp_customize->add_setting('positions-verkehr-title-setting', array(
		'default' => 'Verkehr Titel...'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-verkehr-title-control', array(
		'label' => 'Verkehr Titel',
		'section' => 'positions-section',
		'settings' => 'positions-verkehr-title-setting'
	)));

	# verkehr
	$wp_customize->add_setting('positions-verkehr-setting', array(
		'default' => 'Chocolate cake topping sugar plum tootsie roll soufflé dessert sesame snaps toffee. Carrot cake biscuit fruitcake bonbon fruitcake chocolate cake cake sweet roll. Icing fruitcake jelly beans soufflé tiramisu sesame snaps macaroon sweet.'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'positions-verkehr-control', array(
		'label' => 'Verkehr',
		'section' => 'positions-section',
		'settings' => 'positions-verkehr-setting'
	)));
}

add_action('customize_register', 'positions');


# spider 
function spider($wp_customize) {

	$wp_customize->add_section('spider-section', array(
		'title' => 'SmartSpider'
	));

	# Image
	$wp_customize->add_setting('spider-setting', array(
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'spider-control', array(
		'label' => 'Smartspider',
		'section' => 'spider-section',
		'settings' => 'spider-setting'
	)));

	# smartvote-link 
	$wp_customize->add_setting('smartvote-setting', array(
		'default' => 'https://smartvote.ch/en/group/2/election/19_ch_nr/db/candidates/44200003691'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smartvote-control', array(
		'label' => 'Smartvote-Link',
		'section' => 'spider-section',
		'settings' => 'smartvote-setting'
	)));
}

add_action('customize_register', 'spider');

# kontakt
function contact($wp_customize) {

	$wp_customize->add_section('contact-section', array(
		'title' => 'Kontakt'
	));

	# fb-link 
	$wp_customize->add_setting('facebook-setting', array(
		'default' => 'https://facebook.com'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'facebook-control', array(
		'label' => 'Facebook-Link',
		'section' => 'contact-section',
		'settings' => 'facebook-setting'
	)));

	# twitter-link 
	$wp_customize->add_setting('twitter-setting', array(
		'default' => 'https://twitter.com'
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'twitter-control', array(
		'label' => 'Twitter-Link',
		'section' => 'contact-section',
		'settings' => 'twitter-setting'
	)));
}

add_action('customize_register', 'contact');