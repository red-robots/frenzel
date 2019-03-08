<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ACStarter
 */

get_header(); ?>

<div id="primary" class="full-content-area default-template clear error404content no_banner">
	<main id="main" class="site-main med-wrapper clear" role="main">
	
		<header class="entry-header"><h1 class="entry-title"><?php esc_html_e( 'Sorry! That page can&rsquo;t be found.', 'acstarter' ); ?></h1></header>
		<div class="entry-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'acstarter' ); ?></p>
			<?php get_template_part( 'template-parts/content', 'sitemap' ); ?>
		</div>
	
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
