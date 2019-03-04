<?php
$banner = get_field('banner_image');
$first_tagline = get_field('banner_tagline');
$second_line = get_field('banner_tagline_second_line');
?>
<?php if($banner) { ?>
<div class="banner-wrapper">
	<?php if ($first_tagline || $second_line) { ?>
	<div class="banner-caption cantarell text-center">
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