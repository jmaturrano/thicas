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

<div class="container">
    <div class="row">
    <!--<div class="col-md-12">-->
 
    <div class="footer-content text-center">   
        <div class="subline-title visible-xs"></div>
        <br>
        <h5 style="color: #000">Sígue nuestras redes sociales y descubre todo el detrás de escena de Thicas.</h5>
    </div>
    </div>
    <div class="row">    
    <div class="col-md-2 col-xs-4">
        <?php if(get_theme_mod('social_facebook','') != ''): ?>
        <a href="<?= get_theme_mod('social_facebook','');?>" ><img class="" src="<?= get_theme_mod('imagen_facebook',''); ?>"></a>
        <?php endif; ?>
        <?php if(get_theme_mod('social_facebook','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_facebook',''); ?>"></a>
         <?php endif; ?>
    </div>             
    <div class="col-md-2 col-xs-4">
        <?php if(get_theme_mod('social_twitter','') != ''): ?>
        <a href="<?= get_theme_mod('social_twitter','');?>" ><img class="" src="<?= get_theme_mod('imagen_twitter',''); ?>"></a>
         <?php endif; ?>
        <?php if(get_theme_mod('social_twitter','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_twitter',''); ?>"></a>
         <?php endif; ?>
    </div>
    <div class="col-md-2 col-xs-4">
        <?php if(get_theme_mod('social_pinterest','') != ''): ?>
        <a href="<?= get_theme_mod('social_pinterest','');?>" ><img class="" src="<?= get_theme_mod('imagen_pinterest',''); ?>"></a>
         <?php endif; ?>
         <?php if(get_theme_mod('social_pinterest','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_pinterest',''); ?>"></a>
         <?php endif; ?>
    </div>
    
    <div class="col-md-2 col-xs-4">
         <?php if(get_theme_mod('social_youtube','') != ''): ?>
        <a href="<?= get_theme_mod('social_youtube','');?>" ><img class="" src="<?= get_theme_mod('imagen_youtube',''); ?>"></a>
         <?php endif; ?>
         <?php if(get_theme_mod('social_youtube','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_youtube',''); ?>"></a>
        <?php endif; ?>
    </div>    
    <div class="col-md-2 col-xs-4">  
        <?php if(get_theme_mod('social_vimeo','') != ''): ?>
        <a href="<?= get_theme_mod('social_vimeo','');?>" ><img class="" src="<?= get_theme_mod('imagen_vimeo',''); ?>"></a>
         <?php endif; ?>
         <?php if(get_theme_mod('social_vimeo','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_vimeo',''); ?>"></a>
         <?php endif; ?>
    </div>   
    <div class="col-md-2 col-xs-4">   
        <?php if(get_theme_mod('social_linkedin','') != ''): ?>
        <a href="<?= get_theme_mod('social_linkedin','');?>" ><img class="" src="<?= get_theme_mod('imagen_linkedin',''); ?>"></a>
         <?php endif; ?>
         <?php if(get_theme_mod('social_linkedin','') == ''): ?>
        <a href="javascript:void(0);" ><img class="" src="<?= get_theme_mod('imagen_linkedin',''); ?>"></a>
         <?php endif; ?>
    </div>
<!--            </div>-->
    </div>
</div>
      



<div class="site-info">
    <div class="container">
	<div class="row">
            <div class="col-md-6 col-sm-4 col-xs-12">
		<?php mksystem_footer_menu(); ?>
            </div>
            <div class="col-md-3 col-sm-8 col-xs-12 text-center">
		<h5 style="font-weight: bold;"><?php echo get_theme_mod('btn_trabaja_titulo1'); ?>  </h5>
                 <hr class="gSeparator gSeparatorTrans">
                 
                <?php 
                $aboutusquery2 = new wp_query('page_id='.get_theme_mod('btn_trabaja_nosotros',true)); 
                 if( $aboutusquery2->have_posts() ) {  
                 //while( $aboutusquery2->have_posts() ) {
                 $url=$aboutusquery2->post->guid;
                //}

                }else{$url= "#";}
                ?>
                 <!--<a href="<?= $url;?>" class="btn btn-default " ><span class="icon-heart"></span> Postula Aqui </a>--> 
                 <!--Redireccional con barra box ;-->
                 <a href="<?= $url;?>" class="btn btn-default btn-animate-black" style="font-weight: bold;" ><span class="icon-heart"></span><?php echo get_theme_mod('btn_trabaja_text1'); ?> </a>
                
                 <!--enviar directo a la pagina trabaja con nosotros-->
                 <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>" ><span class="glyphicon glyphicon-cloud">♥</span> Postula Aqui </a>-->
                 
<!--                <a href="<?= $url;?>" class="btn btn-default btn-animate-black" style="font-weight: bold;" >
                <img class="youmover btn_heart-footer" src="<?= get_template_directory_child().'/inc/img/social/btn_heart 17x15.png'; ?>" /> <?php // echo get_theme_mod('btn_trabaja_text1'); ?>
                </a>-->
            </div>
                    <div class="col-md-3 col-sm-8 col-xs-12 text-center ">
                        <h5 style="font-weight: bold;"> <?php echo get_theme_mod('btn_trabaja_titulo2'); ?> </h5>
                        <hr class="gSeparator gSeparatorTrans">
                        <?php 
                        $aboutusquery2 = new wp_query('page_id='.get_theme_mod('btn_ubicanos',true)); 
                         if( $aboutusquery2->have_posts() ) {  
                         //while( $aboutusquery2->have_posts() ) {
                         $url=$aboutusquery2->post->guid;
                        //}

                        }else{$url= "#";}
                        ?>
                   <a href="<?= $url;?>" class="btn btn-default  btn-animate-black" style="font-weight: bold;" ><i class="icon-location-outline" ></i>
<?php echo get_theme_mod('btn_ubicanos_text2'); ?>  </a>
                   <!--<a href="<?= $url;?>" class="btn btn-default btn_local-footer btn-animate-black" style="font-weight: bold;">-->
<!--                       <img class="youmover " src="<?= get_template_directory_child().'/inc/img/social/btn_local.png'; ?>" /> <?php // echo get_theme_mod('btn_ubicanos_text2'); ?> -->
                   <!--</a>-->
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