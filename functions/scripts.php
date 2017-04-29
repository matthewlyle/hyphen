<?php

function hyphen_scripts() {
	wp_enqueue_style( 'hyphen-style', get_stylesheet_uri() );
	wp_enqueue_script( 'hyphen-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'hyphen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hyphen_scripts' );
