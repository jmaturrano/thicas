<?php
/**

 * @package mksystem
 */

    get_header();
?>

<div class="top-section" style="display:none">
    <div class="container">
        <div class="row">
            <?php mksystem_featured_slider() ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
<!--Estamos crando un sleder -->

<!--<div class="top-section" style="display:none">-->
    <div class="container">
        <div class="row">
          
        </div><!--.row-->
    </div><!--.container-->
</div>



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
            <!--catalogo y accesorios-->
            <?php mksystem_section_categories_bloque1(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
<div>
    <div class="container">
        <div class="row">
            <!--Coloca el cuadro de prendas-->
            <?php mksystem_section_categories_bloque2(); ?> 
            <?php mksystem_featured_slider_icon(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
<div>
    <div class="container2">
        <div class="row2">
            <!--Jovenes--> 
            <?php mksystem_section_categories_bloque3(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>
 <div>
    <div class="container3">
        <div class="row3">
            <!--Jovenes--> 
            <?php mksystem_section_categories_bloque2(); ?>
             <?php mksystem_featured_slider_icon(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>


  
<?php get_footer(); ?>
