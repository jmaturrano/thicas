<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package dazzling
 */
?>

        </div><!-- close .row -->
    </div><!-- close .container -->
</div><!-- close .site-content -->

<div class="footer-content text-center">
		<div class=" " >
			<?php mksystem_social_links() ?>
		</div>
</div>

<div class="site-info">
    <div class="container">
	<div class="row">
            <div class="col-md-6 col-sm-3 col-xs-4">
		<?php mksystem_footer_menu(); ?>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 text-center">
		<h5> Trabaja con nosotros</h5>
                <?php 
                $aboutusquery2 = new wp_query('page_id='.get_theme_mod('paginas',true)); 
                 if( $aboutusquery2->have_posts() ) {  
                 //while( $aboutusquery2->have_posts() ) {
                 $url=$aboutusquery2->post->guid;
                //}

                }else{$url= "#";}
                ?>
                 <a href="<?= $url;?>" class="btn btn-default" ><span class="icon-heart"> </span> Postula Aqui </a>
            </div>
		<div class="col-md-3 col-sm-3 col-xs-4 text-center">
		<h5> Quieres Comprar </h5>
		<a href="#" class="btn btn-default" ><span class="glyphicon glyphicon-map-marker"> </span> Busca una tienda </a>
		</div>
        </div>
    <div>

</div><!-- .site-info -->



</div><!-- #page -->


					<div >
						<div class="mksystem-copyrigth col-md-12 text-center">
							<?php mksystem_footer_info(); ?>
						</div>
					</div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>