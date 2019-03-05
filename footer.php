	</div><!-- #content -->
	<footer id="colophon" class="site-footer clear" role="contentinfo">
		<div class="wrapper">
			<div class="row clear">
				<?php
					$phone = get_field('phone_number','option');  
					$email_address = get_field('email_address','option');
					$email = ($email_address) ? antispambot($email_address,1) : '';
				?>
				<div class="footcol contact">
					<?php if ($phone) { ?>
					<div class="phone"><a href="tel:<?php echo format_phone_number($phone); ?>"><?php echo $phone; ?></a></div>	
					<?php } ?>
					<?php if ($email_address) { ?>
					<div class="email"><a href="mailto:<?php echo $email; ?>"><?php echo $email_address; ?></a></div>	
					<?php } ?>
				</div>
				<div class="footcol footer-links">
					<?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu','container'=>false) ); ?>
				</div>

				<?php
					$instagram = get_field('instagram','option');  
					$facebook = get_field('facebook','option');
					$linkedin = get_field('linkedin','option');
				?>
				<div class="footcol social">
					<?php if ($instagram) { ?>
					<a class="instagram" href="<?php echo $instagram; ?>" target="_blank"><i class="fab fa-instagram"></i></a>
					<?php } ?>
					<?php if ($facebook) { ?>
					<a class="facebook" href="<?php echo $facebook; ?>" target="_blank"><i class="fab fa-facebook"></i></a>	
					<?php } ?>
					<?php if ($linkedin) { ?>
					<a class="linkedin" href="<?php echo $linkedin; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
					<?php } ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

<?php if( is_front_page() || is_home() ) {
	get_template_part('inc/instagram_script');
} ?>
</body>
</html>
