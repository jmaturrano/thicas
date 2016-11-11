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

<div class="">
    <div class="footer-content text-center">
        <div class="subline-title"></div>
        <br>
        <h5 style="color: #000">Sígue nuestras redes sociales y descubre todo el detrás de escena de Thicas.</h5>
    	<div class="">
            <a target="_blank" href="<?= get_theme_mod('social_facebook','');?>" ><img class="" src="<?= get_theme_mod('imagen_facebook',''); ?>"></a>
            <a target="_blank" href="<?= get_theme_mod('social_twitter','');?>" ><img class="" src="<?= get_theme_mod('imagen_twitter',''); ?>"></a>
            <a target="_blank" href="<?= get_theme_mod('social_pinterest','');?>" ><img class="" src="<?= get_theme_mod('imagen_pinterest',''); ?>"></a>
            <a target="_blank" href="<?= get_theme_mod('social_youtube','');?>" ><img class="" src="<?= get_theme_mod('imagen_youtube',''); ?>"></a>
            <a target="_blank" href="<?= get_theme_mod('social_vimeo','');?>" ><img class="" src="<?= get_theme_mod('imagen_vimeo',''); ?>"></a>
            <a target="_blank" href="<?= get_theme_mod('social_linkedin','');?>" ><img class="" src="<?= get_theme_mod('imagen_linkedin',''); ?>"></a>
        </div>
    </div>  
</div>

<div class="site-info">
    <div class="container">
	<div class="row">
            <div class="col-md-6 col-sm-3 col-xs-4">
		<?php mksystem_footer_menu(); ?>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-4 text-center">
		<h5 style="font-weight: bold;"> Trabaja con nosotros</h5>
                 <hr class="gSeparator gSeparatorTrans">
                <?php 
                $aboutusquery2 = new wp_query('page_id='.get_theme_mod('trabaja_nosotros',true)); 
                 if( $aboutusquery2->have_posts() ) {  
                 //while( $aboutusquery2->have_posts() ) {
                 $url=$aboutusquery2->post->guid;
                //}

                }else{$url= "#";}
                ?>
                 <!--<a href="<?= $url;?>" class="btn btn-default " ><span class="icon-heart">♥</span> Postula Aqui </a>--> 
                 <a href="<?= $url;?>" class="btn btn-default " style="font-weight: bold;" ><img class="youmover btn_heart-footer" src="<?= get_template_directory_child().'/inc/img/social/btn_heart 17x15.png'; ?>" /> Postula Aqui </a>
            </div>
                    <div class="col-md-3 col-sm-3 col-xs-4 text-center ">
                        <h5 style="font-weight: bold;"> Quieres Comprar </h5>
                        <hr class="gSeparator gSeparatorTrans">
                        <?php 
                        $aboutusquery2 = new wp_query('page_id='.get_theme_mod('ubicanos',true)); 
                         if( $aboutusquery2->have_posts() ) {  
                         //while( $aboutusquery2->have_posts() ) {
                         $url=$aboutusquery2->post->guid;
                        //}

                        }else{$url= "#";}
                        ?>
                   <!--<a href="<?= $url;?>" class="btn btn-default" ><span class="glyphicon glyphicon-map-marker"> Busca una tienda </span> </a>-->
                   <a href="<?= $url;?>" class="btn btn-default btn_local-footer" style="font-weight: bold;"><img class="youmover" src="<?= get_template_directory_child().'/inc/img/social/btn_local 13x17.png'; ?>" /> Busca una tienda </a>
                    </div>
                </div>
            <div>
        </div><!-- .site-info -->
    </div><!-- #page -->
</div>

					<div >
						<div class="mksystem-copyrigth col-md-12 text-center">
							<?php mksystem_footer_info(); ?>
						</div>
					</div><!-- .site-info -->

<?php wp_footer(); ?>

</body>
</html>