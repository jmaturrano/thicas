<?php
/**
 * The template used for displaying page content in page-nosotros.php
 *
 * @package dazzling
 */
?>	

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header page-header text-center">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
	
    <div class="text-center">
       <?php bloginfo( 'name' ); ?>
    </div>

    <hr class="gSeparator gSeparatorTrans gSeparator35">

    <div class="row">   
        <?php if(get_theme_mod('nosotros_imagen1','') != ''): ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <img class="" src="<?= get_theme_mod('nosotros_imagen1',''); ?>">
        </div>
        <?php endif; ?>
    
        <?php if(get_theme_mod('nosotros_imagen1','') != ''): ?>
        <?php $class_block = 'col-md-6 col-sm-6'; ?>
        <?php else: ?>
        <?php $class_block = 'col-md-12 col-sm-12'; ?>
        <?php endif; ?>
    
        <div class="<?= $class_block ?> col-xs-12">
            <?php if(get_theme_mod('nosotros_titulo1','') != ''): ?>
            <h2 style="color:black;" class="text-center"><?= get_theme_mod('nosotros_titulo1');?></h2>
            <hr class="gSeparator gSeparatorTrans gSeparator10">
            <?php endif; ?>
            <?php if(get_theme_mod('nosotros_texto1','') != ''): ?>
            <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('nosotros_texto1'); ?> </div>
            <?php endif; ?>
        </div>
    </div>

    <hr class="hidden-sm-up gSeparator gSeparatorTrans gSeparator35">

    <div class="row">
        <?php if(get_theme_mod('nosotros_imagen1','') != ''): ?>
        <?php $class_block = 'col-md-6 col-sm-6'; ?>
        <?php else: ?>
        <?php $class_block = 'col-md-12 col-sm-12'; ?>
        <?php endif; ?>
    
        <div class="<?= $class_block ?>  col-xs-12">
            <?php if(get_theme_mod('nosotros_titulo2','') != ''): ?>
            <h2 style="color: black;" class="text-center" ><?= get_theme_mod('nosotros_titulo2');?></h2>
            <hr class="gSeparator gSeparatorTrans gSeparator10">
            <?php endif; ?>
            <?php if(get_theme_mod('nosotros_texto2','') != ''): ?>
            <div class="gLineHeight25 gPadding0-10"> <?= get_theme_mod('nosotros_texto2'); ?></div>
             <?php endif; ?>
        </div>
        <?php if(get_theme_mod('nosotros_imagen2','') != ''): ?>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <img class="" src="<?= get_theme_mod('nosotros_imagen2',''); ?>">
        </div>
        <?php endif; ?>
    </div>

    <hr class="hidden-sm-up gSeparator gSeparatorTrans gSeparator35">
    
    <div class="row">
       <?php if(get_theme_mod('nosotros_imagen3','') != ''): ?>
        <div class="col-md-6 col-sm-6 col-xs-12 ">
            <img class="" src="<?= get_theme_mod('nosotros_imagen3',''); ?>">
        </div>
        <?php endif; ?>
    
        <?php if(get_theme_mod('nosotros_imagen3','') != ''): ?>
        <?php $class_block = 'col-md-6 col-sm-6'; ?>
        <?php else: ?>
        <?php $class_block = 'col-md-12 col-sm-12'; ?>
        <?php endif; ?>
        <?php if(get_theme_mod('nosotros_titulo3','') != ''): ?>
    
        <div class=" <?= $class_block ?> col-xs-12">
            <h2 style="color:black;" class="text-center" ><?= get_theme_mod('nosotros_titulo3');?></h2>
            <hr class="gSeparator gSeparatorTrans gSeparator10">
             <?php endif; ?>
            <?php if(get_theme_mod('nosotros_texto3','') != ''): ?>
            <div class="gLineHeight25 gPadding0-10"><?= get_theme_mod('nosotros_texto3'); ?>  </div>
           <?php endif; ?>
        </div>
    </div>
    

</article><!-- #post-## -->
<div class="subline-title hidden-xs"></div>