<?php
/* 
 * Template Name: Sitemap
 */
$banner = get_field('banner_image');
get_header(); ?>
<div id="primary" class="full-content-area default-template clear <?php echo ($banner) ? 'has_banner':'no_banner';?>">
	<main id="main" class="site-main med-wrapper clear" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php if (!$banner) { ?>
				<header class="entry-header"><h1 class="entry-title"><?php the_title(); ?></h1></header>
			<?php } ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php get_template_part( 'template-parts/content', 'sitemap' ); ?>		
			</div>

		<?php endwhile; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
