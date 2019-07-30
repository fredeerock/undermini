<?php

function smaq_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Have WordPress handle title tags
	add_theme_support( 'title-tag' );

	// Register 1 menu location
	register_nav_menus( array(
		'menu-1' => 'Primary'
	) );

	// Use HTML5 markup
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for custom logo
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	// Add theme support for custom header
	add_theme_support( 'custom-header', apply_filters( 'smaq_custom_header_args', array(
		'width'                  => 1000,
		'height'                 => 250,
		'flex-height'            => true,
	) ) );

}

add_action( 'after_setup_theme', 'smaq_setup' );

// Enqueue scripts and styles
function smaq_scripts() {
	wp_enqueue_style( 'smaq-style', get_stylesheet_uri() );
	wp_enqueue_script( 'smaq-scipt', get_template_directory_uri() . '/js/main.js', array(), '20190729', true );
}

add_action( 'wp_enqueue_scripts', 'smaq_scripts' );