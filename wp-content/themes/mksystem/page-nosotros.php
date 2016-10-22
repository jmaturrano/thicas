<<<<<<< HEAD
<?php
/**
 * Template Name: Full-width(no sidebar)
 *
 * This is the template that displays full width nosotros without sidebar
=======

<?php
/**
 * Template Name: Página Nosotros
 *
 * This is the template that displays full width page without sidebar
>>>>>>> 0e08d08160659d2a55642f66f15c02ff9d4028ad
 *
 * @package dazzling
 */

get_header(); ?>
<<<<<<< HEAD
	<div id="primary" class="content-area col-sm-12 col-md-12">
	page-nosotros
		<main id="main" class="site-main" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'nosotros'); ?>
=======
	<div id="primary" class="content-area col-sm-12 col-md-8">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'nosotros' ); ?>
                                
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

>>>>>>> 0e08d08160659d2a55642f66f15c02ff9d4028ad
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<<<<<<< HEAD
=======
<?php get_sidebar(); ?>
>>>>>>> 0e08d08160659d2a55642f66f15c02ff9d4028ad
<?php get_footer(); ?>
