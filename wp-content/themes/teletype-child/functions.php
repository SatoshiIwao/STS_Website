<?php
    add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
    function my_theme_enqueue_styles() {					 
        $parent_style = 'teletype-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css?v=3.3.5' );
				 
	 wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	 wp_enqueue_style( 'child-style',
	     get_stylesheet_directory_uri() . '/style.css',
	     array( $parent_style ),
	     wp_get_theme()->get('Version')
	 );

	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css?v=4.2' );
	wp_enqueue_style( 'etlinefont', get_template_directory_uri() . '/css/etlinefont.css?v=4.2' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css?v=4.2' );

        wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '1.0', false );
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.2', true );

        wp_enqueue_script( 'jquery-isotope', get_template_directory_uri() . '/js/jquery.isotope.js', array(), '1.0', true );
        wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array(), '1.0', true );
        wp_enqueue_script( 'jquery-onscreen', get_template_directory_uri() . '/js/jquery.onscreen.min.js', array(), '1.0', true );

        wp_enqueue_script( 'teletype-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );

        // if lt IE 9
        wp_enqueue_script( 'html5', get_template_directory_uri() . '/js/html5.min.js', array(), '3.7.3' );
        wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );

        // if lt IE 9
        wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
        wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );

        wp_enqueue_script( 'teletype-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
                wp_enqueue_script( 'comment-reply' );
        }
        if ( is_home() || is_front_page() ) {
                wp_enqueue_script( 'scroll', get_template_directory_uri() . '/js/scroll.js', array(), '20151215', true );
        }

    }
?>
