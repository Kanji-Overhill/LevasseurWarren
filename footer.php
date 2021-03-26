<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Levasseur_warren
 */

?>

	<footer class="footer-1" id="footer">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-7 col-lg-6 col-12 formulario">
					<h2><?php _e("Contact Us","levasseur-warren") ?></h2>
					<?php
						if (get_locale() == 'en_US') {
						    echo do_shortcode("[contact-form-7 id='299']");
						}else{
							echo do_shortcode("[contact-form-7 id='265']");
						}
					?>
				</div>
				<div class="col-md-5 col-lg-6 col-12 contact-footer">
					<div class="row">
						<div class="col-12">
							<h3>MONTRÉAL</h3>
							<ul>
								<li>514 703-6746</li>
								<li><a href="mailto:info@levasseurwarren.ca">info@levasseurwarren.ca</a></li>
							</ul>
							<a class="linkedin linkedin-footer" target="_blank" href="https://www.linkedin.com/company/levasseur-warren-coaching-inc/"><img src="<?php echo get_template_directory_uri();?>/resources/linkedin.svg" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
