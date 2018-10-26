<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>

<div class="footer" id="wrapper-footer">

	<div class="container footer-logos mb-3">

		<div class="row">

			<div class="col-3 d-none d-md-block text-center">
			<h3>See what Circles Canada is doing:</h3>
				<a href="http://circlescanada.com"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/CIRCLES-Canada-Small-e1536607259769.jpg"></a>
			</div><!--col end -->
			
			<div class="col-md-6 col-12 text-center">
			
			</div><!--col end -->
			
			<div class="col-6 col-md-3 text-center">
			<h3>Brought to you by:</h3>
			<br>
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/LambtonCountyLogoRGB-300x300-e1536607276964.jpg">
			</div><!--col end -->
			<div class="col-6 d-block d-md-none">
				<a href="http://circlescanada.com"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/CIRCLES-Canada-Small-e1536607259769.jpg"></a>
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->


	<div class="container-fluid footer-bar text-center">

		<div class="row">

			<div class="col-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						&copy; <?php echo date("Y"); ?> Circles® Canada, All Rights Reserved.

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

