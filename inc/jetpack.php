<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Club Website
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function club_website_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'club_website_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function club_website_jetpack_setup
add_action( 'after_setup_theme', 'club_website_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function club_website_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function club_website_infinite_scroll_render
