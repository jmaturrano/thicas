<?php
/**

 * @package mksystem
 */

    get_header();
?>
<div class="top-section" >
    <div class="container">
        <div class="row">
            
            <div class="entry-content col-md-12">
                        
                       <div data-ride="carousel" class="carousel slide carousel-fade" id="slideshow">

                        <!-- Indicators -->
                        <div class="carousel-indicators-block">
                            <!-- <div class="container"> -->
                                <!-- <div class="row"> -->
                                    <ol class="carousel-indicators text-right">
                                        <li data-target="#slideshow" data-slide-to="0" class="active"></li>
                                        <?php if(get_theme_mod('slider_mksystem_2_a','')!=''){ ?>
                                            <li data-target="#slideshow" data-slide-to="1"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_3_a','')!=''){ ?>
                                            <li data-target="#slideshow" data-slide-to="2"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_4_a','')!=''){ ?>
                                            <li data-target="#slideshow" data-slide-to="3"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_5_a','')!=''){ ?>
                                            <li data-target="#slideshow" data-slide-to="4"></li>
                                        <?php } ?>
                                        <?php if(get_theme_mod('slider_mksystem_6_a','')!=''){ ?>
                                            <li data-target="#slideshow" data-slide-to="5"></li>
                                        <?php } ?>
                                    </ol>
                                <!-- </div> -->
                            <!-- </div> -->
                        </div>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <?php if(get_theme_mod('slider_mksystem_1_a','')!=''){ ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo get_theme_mod('slider_mksystem_1_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                                <?php } ?>
                            </div>

                            <?php if(get_theme_mod('slider_mksystem_2_a','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_2_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_3_a','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_3_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_4_a','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_4_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_5_a','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_5_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_6_a','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_6_a'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>
                        </div><!--carousel-inner-->

<!--                         Left and right controls -->
                        <a class="left carousel-control anual" href="#slideshow" role="button" data-slide="prev">
                            <span class="fa fa-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                            <!--<span class="sr-only">Previous</span>-->
                        </a>
                        <a class="right carousel-control" href="#slideshow" role="button" data-slide="next">
                            <span class="fa fa-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
                            <!--<span class="sr-only">Next</span>-->
                        </a>

                </div><!--.carousel.slide-->
             </div> 
        </div><!--.row-->
    </div><!--.container-->
</div>
<!--Estamos crando un sleder -->
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
                        <!-- Indicators -->
                        
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
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <?php if(get_theme_mod('slider_mksystem_1','')!=''){ ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo get_theme_mod('slider_mksystem_1'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                                <?php } ?>
                            </div>

                            <?php if(get_theme_mod('slider_mksystem_2','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_2'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_3','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_3'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_4','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_4'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_5','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_5'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_6','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_6'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>
                        </div><!--carousel-inner-->
                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#slideshow2" role="button" data-slide="prev">
                            <span class="fa fa-angle-left glyphicon-chevron-left" aria-hidden="true"></span>
                            <!--<span class="sr-only">Previous</span>-->
                        </a>
                        <a class="right carousel-control" href="#slideshow2" role="button" data-slide="next">
                            <span class="fa fa-angle-right glyphicon-chevron-right" aria-hidden="true"></span>
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
            <?php mksystem_section_categories_bloque3(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
<div>
    <div class="container2">
        <div class="row2">
            <?= get_theme_mod('social_youtube','')?>
            <div class="entry-content col-md-6">
                        
                       <div data-ride="carousel1" class="carousel slide carousel-fade" id="slideshow3">

                        <!-- Indicators -->
                        <div class="carousel-indicators-block">
                            <!-- <div class="container"> -->
                                <!-- <div class="row"> -->
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

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>                                
                                <?php if(get_theme_mod('slider_mksystem_1_b','')!=''){ ?>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                        <img src="<?php echo get_theme_mod('slider_mksystem_1_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                    </a>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_child(); ?>/inc/img/predeterminada.jpg" />
                                <?php } ?>
                            </div>

                            <?php if(get_theme_mod('slider_mksystem_2_b','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_2_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_3_b','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_3_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_4_b','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_4_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_5_b','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_5_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>

                            <?php if(get_theme_mod('slider_mksystem_6_b','')!=''){ ?>
                            <div class="item">
                                <div class="carousel-background">
                                    <div class="carousel-marco">
                                      <p>&nbsp;</p>
                                    </div>
                                </div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img src="<?php echo get_theme_mod('slider_mksystem_6_b'); ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div>
                            <?php } ?>
                        </div><!--carousel-inner-->

<!--                         Left and right controls -->
                      <a class="left carousel-control" href="#slideshow3" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left " aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#slideshow3" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right fa-angle-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                 </div><!--.carousel.slide-->
             </div> 
            <div class="entry-content col-md-6">  
            </div>
        </div><!--.row-->
    </div><!--.container-->
</div>
            </div>
<?php get_footer(); ?>
