<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width nosotros without sidebar
 *
 * @package dazzling
 */

get_header(); ?>
	<div id="primary" class="content-area col-sm-12 col-md-12">
	page-nosotros
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'nosotros'); ?>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
