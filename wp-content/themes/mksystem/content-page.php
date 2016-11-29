<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package dazzling
 */

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <div class="row">
            <div class="col-md-12 sm-12">
	<header class="entry-header page-header entry-title text-center">
		<h1 class="page-title entry-title "><?php the_title(); ?></h1>
	</header>  
            </div>
        </div>
	<div class="entry-content text-center">
           
                <div class="row">
                    <div class="">
		<?php the_content(); ?>
                    </div>
                </div>
        </div>
        
    </div>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'dazzling' ),
				'after'  => '</div>',
			) );
		?>
            <?php
            // Checks if this is homepage to enable homepage widgets
            if ( is_front_page() ) :
              get_sidebar( 'home' );
            endif;
          ?>
	</div><!-- .entry-content -->
	<?php edit_post_link( __( 'Edit', 'dazzling' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
</article><!-- #post-## -->



