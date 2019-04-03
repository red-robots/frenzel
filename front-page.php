<?php
/**
 * The template for Homepage.
 */

get_header(); ?>

<?php //get_template_part('template-parts/quick_search') ?>
<?php get_template_part('template-parts/home-search') ?>

<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="home-contents clear">
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
			/* FEATURED PROPERTIES */
			$feat_section_title = get_field('feat_section_title');
			$background_image = get_field('background_image');
			// http://frenzel.localhomesearch.net/idx/?op=query&zip=28205
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

					<div class="davis-farrell">
						<?php  
							$idx_id = ( isset($_GET['id']) && $_GET['id'] ) ? urldecode($_GET['id']) : '';
							echo $idx_id;
						?>
						<?php echo do_shortcode('[idx mylistings="1"]');?>
			        </div><!--davis-farrell-->

					<?php 
					/*
							This will pull featured properties from a custom post type
							But we will use Davis Farrell from the plugin for now.

					*/
					
					//get_template_part('template-parts/featured'); 

					?>
				</div>
			</div>
		</div>
	</div>
	
	<?php endwhile; ?>


	<div class="section section-instagram clear">
		<div class="row clear">
			<div class="col left text-center">

				<div class="insta-wrap clear">
					<div class="insta-title">
						<h2 class="section-title">Follow us on <br/>Instagram</h2>
					</div>
					<?php
					$instagram = get_field('instagram','option');  
					?>
					<?php if ($instagram) { ?>
					<div class="insta-icon clear">
						<span class="line"></span>
						<a class="icon-box" id="instagramLink" href="<?php echo $instagram;?>" target="_blank"><span class="icon"><i class="fab fa-instagram"></i></span></a>
					</div>
					<?php } ?>
				</div>
				
			</div>
			<div class="col right insta-feeds">
				<div id="instagram_feeds" class="inst-row"></div>
			</div>
		</div>
		
	</div>
</div><!-- #primary -->

<?php
get_footer();
