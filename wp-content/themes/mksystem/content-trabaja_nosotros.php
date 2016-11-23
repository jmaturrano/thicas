<?php
/**
 * The template used for displaying page content in page-trabaja_nosotros.php
 *
 * @package dazzling
 */
?>	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header text-center">
		<h1 class="entry-title"><?php the_title(); ?></h1>
                <?= 'Parrado de prueba Trabaja con nosotros'; ?> 
                
	</header><!-- .entry-header -->
<div class="entry-content text-center">
		<?php the_content(); ?>
	
        <br>
        <div class="subline-title hidden-xs"></div>
        
   
</article><!-- #post-## -->
