<?php
/**
 * Template Name: About
 *
 */
get_header(); ?>
<div id="primary" class="full-content-area clear">
	<?php while ( have_posts() ) : the_post(); ?>
	<section class="maintext gradient_gold clear">
		<div class="med-wrapper clear text-center"><?php the_content(); ?></div>
	</section>
	<?php endwhile; ?>

	<?php  
	$args = array(
		'posts_per_page'   => -1,
		'post_type'        => 'team',
		'post_status'      => 'publish'
	);
	$items = new WP_Query($args);
	if ( $items->have_posts() ) { ?>
	<section class="section staff-section clear">
		<div class="med-wrapper clear">
			<?php $i=1; while ( $items->have_posts() ) : $items->the_post(); 
				$img = get_field('image');
				$licenses = get_field('educationprofessional_licenses'); ?>
				<div class="staff clear<?php echo ($i==1) ? ' first':''?>">
					<div class="col-left">
						<div class="photo clear">
							<?php if ($img) { ?>
								<img src="<?php echo $img['url'] ?>" alt="<?php echo $img['title'] ?>" />
							<?php } else { ?>
								<img src="<?php echo get_bloginfo('template_url') ?>/images/coming-soon-image.gif" alt="" />
							<?php } ?>
						</div>
						<?php if ($licenses) { ?>
						<div class="licenses clear">
							<div class="title">Education / Professional Licenses</div>
							<div class="list">
								<?php 
									$list = preg_replace("/<br\W*?\/>/", "___", $licenses);
									$parts = explode("___",$list);
									$x=1; foreach($parts as $p) {
										if($p) { ?>
										<div class="item<?php echo ($x==1) ? ' first':''?>"><?php echo $p; ?></div>
										<?php $x++; 
										}
									}
								?>
							</div>
						</div>	
						<?php } ?>
					</div>
					
					<div class="col-right">
						<h3 class="name"><?php the_title(); ?></h3>
						<?php 
							$content = get_the_content();
							$content = str_replace("&nbsp;","", $content);
							$content = apply_filters("the_content",$content);
							echo $content;
						?>
					</div>
					<div class="line"><span><i class="symbol"></i></span></div>
				</div>
			<?php $i++; endwhile; wp_reset_postdata(); ?>
		</div>
	</section>
	<?php } ?>
</div>
<?php
get_footer();
