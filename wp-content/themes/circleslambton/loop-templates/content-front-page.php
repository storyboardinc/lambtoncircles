<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
<section class="blue-bg top-space">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
			<p>Circles is a collaborative committed to the elimination of poverty in our community in our lifetime by exploiting the power of a caring community working together. Everyone needs enough relationships, resources and reasons to thrive.
			</p>
			<p>
			Circles is a supportive, intentional, reciprocal, befriending relationship comprised of a Circle Leader, a family working to get out of poverty, and two to four community Allies, middle class people who are willing to befriend the family and support their way out of poverty.
			</p>
			</div>
			<div class="col-12 col-md-6 pt-3 text-center">
			<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/circles-front.jpg"><br>
			</div>
		</div>
	</div>
</section>


<section class="white-bg">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
				<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/supportandsocial.png">
			</div>
		</div>
</section>

<section class="white-bg front-blog">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Our Blog</h2>
			</div>
		</div>
		<div class="row">
			<?php 
			// WP_Query arguments
				$args = array(
					'posts_per_page'         => '3',
				);
				
				// The Query
				$query = new WP_Query( $args );
				
				// The Loop
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post(); ?>
							<div class="col-12 col-md-4">
								<?php if ( has_post_thumbnail() ) { ?>
									<div class="front-blog-image">
									<?php the_post_thumbnail('large'); ?>
									</div>
								<?php } else { ?>
									<div class="front-blog-image">
										<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/circles-grey-1.png">
									</div>
							<?php } ?>
								<h3 id="post-<?php the_ID(); ?>">
								<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
								</h3>
								<span class="small">- <?php the_time('F j, Y') ?> -</span>
							</div>
							
				<?php	}
				} else {
					// no posts found
				}
				
				// Restore original Post Data
				wp_reset_postdata();
			?>
		</div>
		<div class="row">
			<div class="col-12 text-center mt-3">
				<a href="/news" class="btn btn-lg btn-primary">Read More News</a>
			</div>
		</div>
	</div>
</section>

<section class="blue-bg text-center">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2>Interview with Wendy Asher and Scott Miller</h2>
					<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/8084867?byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
				</div>
			</div>
		</div>
</section>