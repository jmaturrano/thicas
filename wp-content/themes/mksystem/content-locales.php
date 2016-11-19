<?php
/**
 * The template used for displaying page content in page-locales.php
 *
 * @package dazzling
 */
?>	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title text-center"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
    
 <div class="entry-content text-center col-md-12">
     <div class="container">
         <div class="row">
            <div class="borde-tienda col-md-3">   
                <?php if(get_theme_mod('local_titulo','') != '') :?>
                <h3 class="gTitular gLocalTituloLista gUppercase text-center" style="color: black;"><img class="youmover" src="<?= get_template_directory_child().'/inc/img/social/ubicacion1.png'; ?>" /> <?= get_theme_mod('local_titulo'); ?> </h3>    
                <?php endif; ?>
                <hr class="barra" style="background-color: black; height: 4px; border: 1px;">
                    <p class="gTitular gDetallesLocal">
                        <?php if(get_theme_mod('local_direccion','') != '') :?>
                        <span class="gFontWeight700"> Dirrecion: <?= get_theme_mod('local_direccion'); ?></span><br>
                         <?php endif; ?>
                         <?php if(get_theme_mod('local_telefono','') != '') :?>
                        <span style="">Telefono: <?= get_theme_mod('local_telefono'); ?> </span><br>
                        <?php endif; ?>
                        <?php if(get_theme_mod('local_correo','') != '') :?>
                        <span class="">Correo: <?= get_theme_mod('local_correo'); ?></span><br>
                        <?php endif; ?>
                        <?php if(get_theme_mod('local_horario','') != '') :?>
                        <span class="">Horario: <?= get_theme_mod('local_horario'); ?> </span>
                        <?php endif; ?>
                    </p>    
            </div>   
            <div class="gMarginLeft4p gPositionRelative gBoxMapa gInlineBlock maps" >
              <?php the_content(); ?>
              <?= do_shortcode('[flexiblemap center="-12.061746, -77.019928" title="'.get_bloginfo( 'name' ).'" showinfo="true"  description="Lorem ipsum dolor sit amet, consectetur adipiscing elit." icon="'.get_template_directory_child().'/inc/img/social/marker-thicas.png" alt="ubicacion-thicas" width="100%" height="350" ]'); ?>
            </div>
        </div>    
    </div>
    <div class="subline-title"></div>
    <br>
    

</article><!-- #post-## -->
