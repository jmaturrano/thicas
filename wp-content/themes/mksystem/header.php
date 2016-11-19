<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */

// acarrasco
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta charset="UTF-8"> 


    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>    
    
<div id="loader-logo"></div>
<div id="wptime-plugin-preloader"></div>

<div id="page" class="hfeed site ">

	<nav class="navbar navbar-default navbar-mksystem animate" role="navigation">
			<div class="navbar-header ">
			  

				<?php if( get_header_image() != '' ) : ?>
                            <div id="logo" >
                                <a class="text-center" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img class="animate" src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/>
                                </a>
                            </div><!-- end of #logo -->
                                <?php endif; // header image was removed ?>

                            <?php if( !get_header_image() ) : ?>
                            <div >
                               <span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
                            </div><!-- end of #logo -->
                                    <?php $description = get_bloginfo( 'description', 'display' );
                                     if ( $description || is_customize_preview() ) : ?>
                                         <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                                     <?php endif; ?>
                            <?php endif; // header image was removed (again) ?>

			</div>
            
			<div class="container">
                                <div class="gMenuBox">
                                    <?php mksystem_header_menu(); ?>
                                    
                                <div class="visible-xs">
                                    <?php mksystem_header_menu2(); ?>
                                    <button type="button" class="navbar-toggle bt" data-toggle="collapse" data-target=".collapse-nav-menu">
                                    <span class="sr-only"><?php _e( 'Toggle navigation', 'mksystem' ); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                </div>	
	</nav><!-- .site-navigation -->


