<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i" rel="stylesheet">
<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site clear">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header clear" role="banner">

		<div class="wrapper clear">
			<div class="logo-wrapper">
				<?php if( get_custom_logo() ) { ?>
		            <div class="logo">
		            	<?php the_custom_logo(); ?>
		            </div>
		        <?php } else { ?>
		            <h1 class="logo">
			            <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
		            </h1>
		        <?php } ?>
			</div>

			<nav id="site-navigation" class="main-navigation" role="navigation">
				<a class="menu-toggle" href="#"><span></span></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu','container_class'=>'main-menu-wrapper') ); ?>
			</nav><!-- #site-navigation -->


			<?php /* MOBILE NAVIGATION */ ?>
			<div class="mobile-nav-wrapper clear mobile-only">
				<a href="#" id="toggleMenu" class="toggleMenu"><span></span></a>
				<nav id="mobile-navigation" class="mobile-main-navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'mobile-primary-menu','container_class'=>'mobile-inner-nav clear' ) ); ?>
				</nav>
			</div>

		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<?php get_template_part('template-parts/banner') ?>

	

	<div id="content" class="site-content clear">
