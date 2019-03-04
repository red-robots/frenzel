<?php
/**
 * The template for Homepage.
 */

get_header(); ?>

<?php get_template_part('template-parts/quick_search') ?>

<div id="primary" class="full-content-area clear home-contents">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row clear">	
		<?php  
			$about_title = get_field('about_title');
			$about_description = get_field('about_description');
			$about_link = get_field('about_link');
		?>
		<div class="about-us col left">
			<div class="inside clear">
				<?php if ($about_title) { ?>
					<h2 class="section-title text-center"><?php echo $about_title ?></h2>
				<?php } ?>
				<?php if ($about_description) { ?>
					<div class="section-text"><?php echo $about_description ?></div>
				<?php } ?>
				<?php if ($about_link) { ?>
					<div class="buttondiv"><a href="<?php echo $about_link ?>">Read more</a></div>
				<?php } ?>
			</div>
		</div>


		<?php  
			$feat_section_title = get_field('feat_section_title');
			$background_image = get_field('background_image');
			$featured_properties = get_field('featured_properties');
		?>
		<div class="featured-properties col right">
			<?php if ($background_image) { ?>
				<div class="bg-image" style="background-image:url('<?php echo $background_image['url'];?>');"></div>
				<div class="bg-overlay"></div>
			<?php } ?>
			<div class="inside clear">
				<?php if ($feat_section_title) { ?>
					<h2 class="section-title text-center"><?php echo $feat_section_title ?></h2>
				<?php } ?>

				<?php if ($featured_properties) { ?>
				<div class="featured-property-list">
					<div class="row clear">
						<?php foreach ($featured_properties as $fp) { 
							$feat_post_id = $fp->ID; 
							$main_photo = get_field('main_photo',$feat_post_id);
							$price = get_field('price',$feat_post_id);
							$street = get_field('street',$feat_post_id);
							?>
							<div class="featcol">
								<div class="featinside clear">
									<?php if ($main_photo) { ?>
										<img src="<?php echo $main_photo['url'] ?>" alt="<?php echo $main_photo['title'] ?>" />
									<?php } else { ?>
										<img src="<?php echo get_bloginfo('template_url') ?>/images/coming-soon-image.gif" alt="" />
									<?php } ?>
									<div class="info">
										<header class="titlediv">
											<?php if ($price) { ?>
												<div class="price"><?php echo $price ?></div>
											<?php } ?>
											<?php if ($street) { ?>
												<div class="street"><?php echo $street ?></div>
											<?php } ?>
										</header>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<?php } ?>

			</div>
		</div>
	</div>
	<?php endwhile; ?>
</div><!-- #primary -->

<?php
get_footer();
