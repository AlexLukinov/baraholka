<?php
/**
 * baraholka functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package baraholka
 */

if ( ! function_exists( 'baraholka_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function baraholka_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on baraholka, use a find and replace
		 * to change 'baraholka' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'baraholka', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'baraholka' ),
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
		add_theme_support( 'custom-background', apply_filters( 'baraholka_custom_background_args', array(
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
add_action( 'after_setup_theme', 'baraholka_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function baraholka_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'baraholka_content_width', 640 );
}
add_action( 'after_setup_theme', 'baraholka_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function baraholka_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'baraholka' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'baraholka' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'baraholka_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function baraholka_scripts() {
	wp_enqueue_style( 'baraholka-style', get_stylesheet_uri() );

	wp_enqueue_script( 'baraholka-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'baraholka-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'baraholka_scripts' );

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

function energy_form_handler() {
    $post_id = wp_insert_post(array (
        'post_type' => 'energy',
        'post_title' => $_POST['energy_nazv'],
        'post_content' => '',
        'post_status' => 'publish',
    ));

    if ($post_id) {
        // insert post meta
        add_post_meta($post_id, 'energy_nazv', $_POST['energy_nazv']);
        add_post_meta($post_id, 'energy_gorod', $_POST['energy_gorod']);
        add_post_meta($post_id, 'energy_ruk', $_POST['energy_ruk']);
        add_post_meta($post_id, 'energy_ped', $_POST['energy_ped']);
        add_post_meta($post_id, 'energy_sopr', $_POST['energy_sopr']);
        add_post_meta($post_id, 'energy_adres', $_POST['energy_adres']);
        add_post_meta($post_id, 'energy_e-mail', $_POST['energy_e-mail']);
        add_post_meta($post_id, 'energy_tel', $_POST['energy_tel']);
        add_post_meta($post_id, 'energy_nom', $_POST['energy_nom']);
        add_post_meta($post_id, 'energy_kat', $_POST['energy_kat']);
        add_post_meta($post_id, 'energy_name-dance', $_POST['energy_name-dance']);
        add_post_meta($post_id, 'energy_time', $_POST['energy_time']);

        handle_energy_attachment('energy_foto', $post_id);
        handle_energy_attachment('energy_video', $post_id);
        handle_energy_attachment('energy_spisok', $post_id);

        $_SESSION['success_message'] = 'Ваша заявка принята!';
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'admin_post_nopriv_energy_form', 'energy_form_handler' );
add_action( 'admin_post_energy_form', 'energy_form_handler' );

function handle_energy_attachment($attach_name, $post_id) {
    $overrides = array(
        'test_form' => false,
        'unique_filename_callback' => function ($dir, $name, $ext) use($post_id, $attach_name) {
            return $post_id.'_'.$attach_name.$ext;
        }
    );

    $file = &$_FILES[$attach_name];
    $movefile = wp_handle_upload( $file, $overrides );
    $file_att_id = pods_attachment_import ( $movefile['url'], $post_id );
    $data_file = array(
        $attach_name       => array(
            'id'    => $file_att_id,
            'title' => $attach_name
        )
    );
    $pod_file = pods( 'energy', $post_id );
    $item_file = $pod_file->save( $data_file);
}

function stavni_form_handler() {
    $post_id = wp_insert_post(array (
        'post_type' => 'stavni',
        'post_title' => $_POST['stavni_nazv'],
        'post_content' => '',
        'post_status' => 'publish',
    ));

    if ($post_id) {
        // insert post meta
        add_post_meta($post_id, 'stavni_nazv', $_POST['stavni_nazv']);
        add_post_meta($post_id, 'stavni_gorod', $_POST['stavni_gorod']);
        add_post_meta($post_id, 'stavni_ruk', $_POST['stavni_ruk']);
        add_post_meta($post_id, 'stavni_e-mail', $_POST['stavni_e-mail']);
        add_post_meta($post_id, 'stavni_tel', $_POST['stavni_tel']);
        add_post_meta($post_id, 'stavni_name-dance', $_POST['stavni_name-dance']);
        add_post_meta($post_id, 'stavni_time', $_POST['stavni_time']);
        add_post_meta($post_id, 'stavni_kol', $_POST['stavni_kol']);

        handle_stavni_attachment('stavni_foto', $post_id);
        handle_stavni_attachment('stavni_video', $post_id);

        $_SESSION['success_message'] = 'Ваша заявка принята!';
        wp_redirect( home_url() );
        exit;
    }
}
add_action( 'admin_post_nopriv_stavni_form', 'stavni_form_handler' );
add_action( 'admin_post_stavni_form', 'stavni_form_handler' );

function handle_stavni_attachment($attach_name, $post_id) {
    $overrides = array(
        'test_form' => false,
        'unique_filename_callback' => function ($dir, $name, $ext) use($post_id, $attach_name) {
            return $post_id.'_'.$attach_name.$ext;
        }
    );

    $file = &$_FILES[$attach_name];
    $movefile = wp_handle_upload( $file, $overrides );
    $file_att_id = pods_attachment_import ( $movefile['url'], $post_id );
    $data_file = array(
        $attach_name       => array(
            'id'    => $file_att_id,
            'title' => $attach_name
        )
    );
    $pod_file = pods( 'stavni', $post_id );
    $item_file = $pod_file->save( $data_file);
}

function my_cust_filename($dir, $name, $ext){
    return $name.$ext;
}

