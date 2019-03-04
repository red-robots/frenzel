<?php
/**
 * The template for Homepage.
 */

get_header(); ?>

<?php get_template_part('template-parts/quick_search') ?>

<div id="primary" class="full-content-area clear home-contents">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row clear">	
		<div class="about-us col left">
			
		</div>

		<div class="featured-properties col right">
			
		</div>
	</div>
	<?php endwhile; ?>
</div><!-- #primary -->

<?php
get_footer();
