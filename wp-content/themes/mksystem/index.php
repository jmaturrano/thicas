<?php
/**

 * @package mksystem
 */

    get_header();
?>


    
<div class="top-section">
        <?php mksystem_featured_slider(); ?>
</div>

<div id="content" class="site-conten">
<div class="container main-content-area">
        <?php
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
    <div class="row <?php echo $layout_class; ?>"></div>
<!--Formulario de suscripcion -->
        <div class="row">
            <?php mksystem_call_for_action(); ?>
        </div><!--.row-->
        <div class="row">
            <?php mksystem_section_categories_bloque1(); ?>
        </div><!--.row-->
    <div class="row">
        <?php mksystem_section_categories_bloque2(); ?>
    <div class="col-md-6 col-sm-5 col-xs-12 ">
        <div data-ride="carousel" class="carousel slide carousel-fade" id="slideshow2">
<!-- Indicators -->
            <div class="carousel-indicators-block">
                <ol class="carousel-indicators">
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
            </div>
<!-- Wrapper for slides -->
<!--style="width: 465px; height: 377px; margin: -20px auto;"-->
            <div class="carousel-inner slider2" role="listbox" >
            <div class="item active">
            <?php if(get_theme_mod('slider_mksystem_1','')!=''){ ?>
                <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
                <img src="<?php echo get_theme_mod('slider_mksystem_1'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                </a>
            <?php } else { ?>
                <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
            <?php } ?>
                
            </div>
            <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                <div class="item">
                    <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
                    <img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                    </a>
                </div>
            <?php } ?>

            <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
            <div class="item">   
                <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
                <img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                </a>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
            <div class="item">
                <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
                <img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                </a>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
            <div class="item">
                <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
                <img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                </a>
            </div>
            <?php } ?>

            <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
            <div class="item">
                <a href="<?php echo esc_url( home_url( 'colecciones/catalogo/prendas/' ) ); ?>">
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
<!--.row-->

        <div class="row">
            <?php mksystem_section_categories_bloque3(); ?> 
        </div>  

        <div class="row">
            <!--video colocado y responsive-->
            <?php if(get_theme_mod('video','') != ''): ?>
        
            <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                <h1 style="color: black; font-family: Advent Pro;"><?= get_theme_mod('video_titulo','') ;?></h1>
        <!--<hr class="gSeparator gSeparatorTrans" style="display: none;">-->
                <div class="iframe-border gIframe gWidth100p gHeight300 gBorder1 gBorderColorNegro">
                <iframe class="gHeight100p gWidth100p gPositionRelative gTop10 gLeft10" width="560" height="315"  src="<?= get_theme_mod('video','')?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <hr class="gSeparator gSeparatorTrans">
                <div class="text-video-subfooter">
                <h4 style="color: black" class="text-left"> <?= get_theme_mod('video_texto',''); ?></h4>
        <!--ojo usar para indicar una imagen-->
                <img class="youmover" src="<?= get_template_directory_child().'/inc/img/social/youtube_47x47.png'; ?>" />
                </div>
            </div>
        
<?php endif; ?>
<!--termina video -->
<div class="col-md-6 col-sm-6 col-xs-12 text-center posicionslider3" >
    <div data-ride="carousel1" class="carousel slide carousel-fade" id="slideshow3">
<!-- Indicators -->
    <div class="carousel-indicators-block">
        <ol class="carousel-indicators">
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
<!--style="width: 435px; height: 355px; margin: auto;"-->
<div class="carousel-inner posicion-imagen-slider3" role="listbox" >
        <div class="item active">                           
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
<!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
            <img src="<?php echo get_theme_mod('slider_mksystem_2_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
<!--</a>-->
            </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_3_b','')!=''){ ?>
            <div class="item">

<!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
            <img src="<?php echo get_theme_mod('slider_mksystem_3_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
<!--</a>-->
            </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_4_b','')!=''){ ?>
            <div class="item">
        <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
        <img src="<?php echo get_theme_mod('slider_mksystem_4_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
        <!--</a>-->
            </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_5_b','')!=''){ ?>
        <div class="item">
        <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
        <img src="<?php echo get_theme_mod('slider_mksystem_5_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
        <!--</a>-->
        </div>
        <?php } ?>

        <?php if(get_theme_mod('slider_mksystem_6_b','')!=''){ ?>
        <div class="item">
        <!--<a href="<?php // echo esc_url( home_url( '/' ) ); ?>">-->
        <img src="<?php echo get_theme_mod('slider_mksystem_6_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
        <!--</a>-->
        </div>
        <?php } ?>
</div><!--carousel-inner-->

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


    </div><!--.container-->
</div><!--content-->

<div class="subline-title hidden-xs"></div>
 <?php get_footer(); ?>
