<?php
if( is_front_page() || is_home() ) {
	/* HOME BANNER */
	$banner = get_field('banner_image');
	$first_tagline = get_field('banner_tagline');
	$second_line = get_field('banner_tagline_second_line');
	?>

	<?php if($banner) { ?>
	<div class="banner-wrapper home-banner">
		<?php if ($first_tagline || $second_line) { ?>
		<div class="banner-caption text-center home-banner">
			<?php if ($first_tagline) { ?>
			<div class="tagline"><?php echo $first_tagline ?></div>
			<?php } ?>
			<?php if ($second_line) { ?>
			<div class="tagline"><?php echo $second_line ?></div>
			<?php } ?>
		</div>	
		<?php } ?>
		<div class="banner-image" style="background-image:url('<?php echo $banner['url']; ?>')"></div>
	</div>
	<?php } ?>

<?php } else { ?>

	<?php /* SUBPAGE BANNER */ 
	$banner = get_field('banner_image'); ?>
	<?php if($banner) { ?>
	<div class="banner-wrapper subpage-banner">
		<div class="banner-caption text-center subpage-banner">
			<div class="titlediv"><h2 class="page-title"><?php echo get_the_title(); ?></h2></div>
		</div>	
		<div class="banner-image" style="background-image:url('<?php echo $banner['url']; ?>')"></div>
	</div>
	<?php } ?>

<?php } ?>