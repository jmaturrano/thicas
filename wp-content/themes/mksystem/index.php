<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package mksystem
 */

    get_header();
?>


<div class="top-section" style="display:none">
    <div class="container">
        <div class="row">
            <?php mksystem_featured_slider(); ?>
        </div><!--.row-->
    </div><!--.container-->
</div>

<div>
	<?php mksystem_call_for_action(); ?>
</div>
<div>
	<?php mksystem_categories_list_page(); ?>
</div>

<?php get_footer(); ?>     