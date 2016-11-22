<?php
/**

 * @package mksystem
 */

    get_header();
?>


<div class="top-section">
        <?php mksystem_featured_slider(); ?>
</div>
<div id="content" class="site-content container">

    <div class="container main-content-area"><?php

        global $post;
        if( get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
        }
        else{
                $layout_class = of_get_option( 'site_layout' );
        }
        if( is_home() && is_sticky( $post->ID ) ){
                $layout_class = of_get_option( 'site_layout' );
        }
        ?>
        <div class="row <?php echo $layout_class; ?>">


<!--Formulario de suscripcion -->
<div>
    <div class="container">
        <div class="row">
            <?php mksystem_call_for_action(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>

<div>
    <div class="container">
        <div class="row">
            <?php mksystem_section_categories_bloque1(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
<div>
    <div class="container">
        <div class="row">
            <?php mksystem_section_categories_bloque2(); ?>
                    <div class="entry-content col-md-6">
                       <div data-ride="carousel" class="carousel slide carousel-fade" id="slideshow2">
                        <!-- Indicators -->
                        <div class="carousel-indicators-block">
                            <!-- <div class="container"> -->
                                <!-- <div class="row"> -->
                                    <ol class="carousel-indicators text-right">
                                        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                                        <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>                                        
                                            <li data-target="#slideshow2" data-slide-to="1"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                                            <li data-target="#slideshow2" data-slide-to="2"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                                            <li data-target="#slideshow2" data-slide-to="3"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                                            <li data-target="#slideshow2" data-slide-to="4"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                                            <li data-target="#slideshow2" data-slide-to="5"></li>
                                        <?php } ?>
                                   </ol>
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner slider2" role="listbox" style="width: 465px; height: 377px; margin: -20px auto;">
                            <div class="item active">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <?php if(get_theme_mod('slider_mksystem_1','')!=''){ ?>
                                    <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                        <img src="<?php echo get_theme_mod('slider_mksystem_1'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                                <?php } ?>
                            </div>

                            <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                            <div class="item">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                            <div class="item">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                            <div class="item">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                            <div class="item">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                            <div class="item">
<!--                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>-->
                                <a href="<?php echo esc_url( home_url( '/product-category/catalogo/prendas' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_6'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>
                        </div><!--carousel-inner-->
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#slideshow2" role="button" data-slide="prev">
                            <span class="icon-slider-left" aria-hidden="true"> &lt;</span>
                            <!--<span class="sr-only">Previous</span>-->
                        </a>
                        <a class="right carousel-control" href="#slideshow2" role="button" data-slide="next">
                            <span class="icon-slider-rigth" aria-hidden="true"> &gt;</span>
                            <!--<span class="sr-only">Next</span>-->
                        </a>
                </div><!--.carousel.slide-->
                        </div>
                      </div>
                </div><!--.carousel.slide-->
        </div><!--.row-->
    </div><!--.container-->
</div>
<div>
    <div class="container2">
        <div class="row2">
            
<!--            <h4 class="favorito"> Favoritos de Thicas </h4>
            <hr class="gSeparator_barra gInlineBlock_barra gHeight3_barra gClaseTextoModelo">-->
<!--            <span class="favorito">


</span>-->
            <?php mksystem_section_categories_bloque3(); ?> 
        </div><!--.row-->
    </div><!--.container-->
</div>


<div> 
    <div class="container2">    
        
        <div class="row2">
           
            
            <!--video colocado--> 
            <?php if(get_theme_mod('video','') != ''): ?>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        
                        <h1 style="color: black; font-family: Advent Pro;"><?= get_theme_mod('video_titulo','') ;?></h1>
                        <!--<hr class="gSeparator gSeparatorTrans" style="display: none;">-->
                        <div class="iframe-border gIframe gWidth100p gHeight300 gBorder1 gBorderColorNegro">
                            <iframe class="gHeight100p gWidth100p gPositionRelative gTop10 gLeft10" width="560" height="315"  src="<?= get_theme_mod('video','')?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <hr class="gSeparator gSeparatorTrans">
                        <div class="text-video-subfooter">
                            <h4 style="color: black"> <?= get_theme_mod('video_texto',''); ?></h4>
                            <!--ojo usar para indicar una imagen-->
                            <img class="youmover" src="<?= get_template_directory_child().'/inc/img/social/youtube_47x47.png'; ?>" />
                        </div>
                </div>
        </div>
            <?php endif; ?>
            <!--termina video -->
            <div class="entry-content col-md-6 col-sm-6 col-xs-12">
                <div data-ride="carousel1" class="carousel slide carousel-fade" id="slideshow3"
                            <!-- Indicators -->
                    <div class="carousel-indicators-block">
                    <ol class="carousel-indicators text-right">
                       <li data-target="#slideshow3" data-slide-to="0" class="active"></li>
                       <?php if(get_theme_mod('slider_mksystem_2_b','')!=''){ ?>
                           <li data-target="#slideshow3" data-slide-to="1"></li>
                       <?php } ?>
                       <?php if(get_theme_mod('slider_mksystem_3_b','')!=''){ ?>
                           <li data-target="#slideshow3" data-slide-to="2"></li>
                       <?php } ?>
                       <?php if(get_theme_mod('slider_mksystem_4_b','')!=''){ ?>
                           <li data-target="#slideshow3" data-slide-to="3"></li>
                       <?php } ?>
                       <?php if(get_theme_mod('slider_mksystem_5_b','')!=''){ ?>
                           <li data-target="#slideshow3" data-slide-to="4"></li>
                       <?php } ?>
                       <?php if(get_theme_mod('slider_mksystem_6_b','')!=''){ ?>
                           <li data-target="#slideshow3" data-slide-to="5"></li>
                       <?php } ?>
                   </ol>
                   <!-- </div> -->
               <!-- </div> -->
                    </div>

<div class="carousel-inner" role="listbox" style="width: 435px; height: 355px; margin: auto;">
    <div class="item active">
        <div class="carousel-background">
<!--            <div class="carousel-marco">
              <p>&nbsp;</p>
            </div>-->
        </div>                                
            <?php if(get_theme_mod('slider_mksystem_1_b','')!=''){ ?>
                <!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>">-->
                    <img src="<?php echo get_theme_mod('slider_mksystem_1_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                <!--</a>-->
            <?php } else { ?>
                <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
            <?php } ?>
    </div>

        <?php if(get_theme_mod('slider_mksystem_2_b','')!=''){ ?>
        <div class="item">
<!--            <div class="carousel-background">
                <div class="carousel-marco">
                  <p>&nbsp;</p>
                </div>
            </div>-->
            <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
                <img src="<?php echo get_theme_mod('slider_mksystem_2_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
            <!--</a>-->
        </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_3_b','')!=''){ ?>
        <div class="item">
<!--            <div class="carousel-background">
                <div class="carousel-marco">
                  <p>&nbsp;</p>
                </div>
            </div>-->
            <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
                <img src="<?php echo get_theme_mod('slider_mksystem_3_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
            <!--</a>-->
        </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_4_b','')!=''){ ?>
        <div class="item">
<!--            <div class="carousel-background">
                <div class="carousel-marco">
                  <p>&nbsp;</p>
                </div>
            </div>-->
            <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
                <img src="<?php echo get_theme_mod('slider_mksystem_4_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
            <!--</a>-->
        </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_5_b','')!=''){ ?>
        <div class="item">
<!--            <div class="carousel-background">
                <div class="carousel-marco">
                  <p>&nbsp;</p>
                </div>
            </div>-->
            <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
                <img src="<?php echo get_theme_mod('slider_mksystem_5_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
            <!--</a>-->
        </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_6_b','')!=''){ ?>
        <div class="item">
<!--            <div class="carousel-background">
                <div class="carousel-marco">
                  <p>&nbsp;</p>
                </div>
            </div>-->
            <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
                <img src="<?php echo get_theme_mod('slider_mksystem_6_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
            <!--</a>-->
        </div>
        <?php } ?>
                </div><!--carousel-inner-->

<!--                         Left and right controls -->
<!--
              <a class="left carousel-control" href="#slideshow3" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#slideshow3" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
-->
            <a class="left carousel-control" href="#slideshow3" role="button" data-slide="prev">
                <span class="icon-slider-left" aria-hidden="true"> &lt;</span>
                <!--<span class="sr-only">Previous</span>-->
            </a>
            <a class="right carousel-control" href="#slideshow3" role="button" data-slide="next">
                <span class="icon-slider-rigth" aria-hidden="true"> &gt;</span>
                <!--<span class="sr-only">Next</span>-->
            </a>
                
                    </div><!--.carousel.slide-->
        
                 </div>
            </div>
            
        </div><!--.row-->
          
    </div><!--.container-->
            

        

<?php get_footer(); ?>
