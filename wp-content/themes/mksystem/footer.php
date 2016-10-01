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

<div class="footer-content text-center">
		<div class="col-md-12" >
			<?php mksystem_social_links() ?>
		</div>
</div>



					<div class="site-info">
						<div class="copyright col-md-12">
								<div class="col-md-3 col-sm-3 col-xs-4">
								<?php mksystem_footer_menu(); ?>
								</div>
								<div class="col-md-5 col-sm-3 col-xs-4">
								<?php mksystem_categories_list_footer(); ?>
								</div>
								<div class="col-md-10 col-sm-3 col-xs-4">
								<span> Postula aqui</span>
								<span> Busca una tienda</span>
								</div>
						</div>

					</div><!-- .site-info -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>