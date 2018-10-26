<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
			
<section class="topnav fixed-top">
<div class="container" style="margin-bottom:-20px;">
	<div class="row">
			<div class="col">
				<div class="page-top">
				<div class="floating">
				<a href="http://circlescanada.com"><img src="<?php echo site_url(); ?>/wp-content/uploads/2018/10/circlesicon.jpg"> See What Circles Canada is Doing</a>
			</div>
			</div>
		 </div>
		</div>
	</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>
	<div class="container-fluid top-nav-wrap clearfix">
		<div class="row">
			<div class="col-12">
				<nav class="navbar navbar-expand-xl bg-white navbar-light">		
					<div class="container-fluid" >
							<a href="<?php echo site_url(); ?>" class="navbar-brand custom-logo-link" rel="home" itemprop="url">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/Circles-Lambton-web-e1540410839665.jpg"  class="img-fluid" alt="Circles Lambton" itemprop="logo">
							</a>
							<a href="<?php echo site_url(); ?>" class="navbar-brand custom-logo-link shrink" rel="home" itemprop="url">
								<img src="<?php echo site_url(); ?>/wp-content/uploads/2018/09/circles-notag-small.jpg"  class="img-fluid" alt="Circles Lambton" itemprop="logo">
							</a>
				
		
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
							<span class="navbar-toggler-icon"></span>
						</button>
		
						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav ml-auto',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'depth'           => 2,
								'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
							)
						); ?>
						<p class="social-icons">
							<a href="https://www.facebook.com/CirclesCanada/" target="_blank" title="Facebook" class="facebook"><i class="fab fa-facebook-f"></i></a>
							<a href="https://twitter.com/CirclesCanada" target="_blank" title="Twitter" class="twitter"><i class="fab fa-twitter"></i></a>
						</p>
					</div><!-- .container -->
		
		
				</nav><!-- .site-navigation -->
			</div>
		</div>
</section>

<?php if (is_page() || is_single() || is_home() && !is_front_page()) { ?>
<div class="sub-header align-left small">
	<div class="container-fluid">
		<div id="banner" class="sub-header-inner row">
			<header class="banner-header col-md-8 col-sm-8">
				<?php if ( is_home()) { ?>
					<h2 class="entry-title">News<h2>
				<?php } else { ?>
					<?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
				<?php } ?>
			</header>
			<div class="breadcrumbs col-md-4 col-sm-4 text-right">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '
				<p id="breadcrumbs">','</p>
				' );
				}
				?>
			</div>
		</div>
	</div>
</div>
<?php } ?>