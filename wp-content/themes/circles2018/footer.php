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

	<div class="container footer-logos">

		<div class="row">

			<div class="col-3">
				<img src="https://circlescanada-aaronrobb.c9users.io/wp-content/uploads/2018/09/CIRCLES-Canada-Small-e1536607259769.jpg">
			</div><!--col end -->
			
			<div class="col-6 text-center">
				<strong>We’d love to hear from you!</strong><br>
				<br>
				Gayle.Montgomery@county-lambton.on.ca<br>
				Kim.Godin@county-lambton.on.ca 
			</div><!--col end -->
			
			<div class="col-3">
				<img src="https://circlescanada-aaronrobb.c9users.io/wp-content/uploads/2018/09/LambtonCountyLogoRGB-300x300-e1536607276964.jpg">
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->


	<div class="container-fluid footer-bar text-center">

		<div class="row">

			<div class="col-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						&copy; <?php echo date("Y"); ?> Circles Canada, All Rights Reserved.

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

