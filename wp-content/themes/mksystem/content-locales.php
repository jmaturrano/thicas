<?php
/**
 * The template used for displaying page content in page-locales.php
 *
 * @package dazzling
 */
?>	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header ">
		<h1 class="entry-title text-center"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
    
 <div class="entry-content text-center">
     <div class="container">
         <div class="row">
            <div class="gInlineBlock gAlignLeft gBoxListaLocales">
            <ul class="gNav gNavVertical gMenuLocales gWidth100p">
                
                        <li class="gItemListaLocales">
                            <a href="javascript:void(0)" local="local-0" class="gTitular gLocalTituloLista gUppercase"><i class="icon-pin">&nbsp;</i>Maloko Plaza Norte Modas<i class="icon-right-open-mini gFloatRight">&nbsp;</i></a>
                            <div id="local-0" class="gDetallesLocalBox" style="display: block;">
                                <p class="gTitular gDetallesLocal">
                                    <span class="gFontWeight700">C.C Plaza Norte Tda 127-Independencia</span><br>
                                    <span>533 5974</span><br>
                                    <span>Modas</span><br>
                                    <span>plz.limanorte@gmail.com</span><br>
                                    Horario:<br>
                                    <span>L a D - 10:00 AM a 10:00 PM</span>
                                </p>

                                <a href="#locales" local="mapa-0" class="gBlock Mnk-boton-negro-listalocales">Ver mapa</a>
                            </div>
                        </li>
            </ul>
            </div>   
             
             <div class="entry-content col-md-6 maps-rigth" >
                 <?php the_content(); ?>
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
