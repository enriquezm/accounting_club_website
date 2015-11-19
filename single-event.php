<?php
/**
 * The template for displaying all single event posts.
 *
 * @package Club Website
 */

get_header(); ?>

	<div id="event">
	  <h1>Event</h1>
    <div class="jumbotron">
      <h1>
        <?php do_shortcode( '[event post_id="167"]' ); ?>
      </h1>
    </div>
	</div>

<?php get_footer(); ?>
