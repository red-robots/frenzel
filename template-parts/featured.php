<?php 
$featured_properties = get_field('featured_properties');

if ($featured_properties) { ?>
	<div class="featured-property-list">
		<div class="row clear">
			<?php foreach ($featured_properties as $fp) { 
				$feat_post_id = $fp->ID; 
				$main_photo = get_field('main_photo',$feat_post_id);
				$price = get_field('price',$feat_post_id);
				$street = get_field('street',$feat_post_id);
				$mls_num = get_field('mls',$feat_post_id);
				$other_info = get_field('other_info',$feat_post_id);
				$broker = get_field('broker',$feat_post_id);
				$broker_name = ($broker) ? $broker->post_title : '';
				$subdivision = get_field('subdivision',$feat_post_id);
				$subdivision_name = '';
				if($subdivision){
					$sub_term = get_term($subdivision,'subdivision');
					$subdivision_name = ($sub_term) ? $sub_term->name : '';
				}
				$neighborhood = get_the_terms($feat_post_id,'neighborhood');
				$bottom_info = array_filter(array($mls_num,$broker_name));
				$pagelink = get_permalink($feat_post_id);
				?>
				<div class="featcol">
					<div class="featinside clear">
						<a class="pplink" href="<?php echo $pagelink ?>">
						<?php if ($main_photo) { ?>
							<img src="<?php echo $main_photo['sizes']['medium_large'] ?>" alt="<?php echo $main_photo['title'] ?>" />
						<?php } else { ?>
							<img src="<?php echo get_bloginfo('template_url') ?>/images/coming-soon-image.gif" alt="" />
						<?php } ?>
						</a>
						<div class="info clear">
							<header class="titlediv">
								<?php if ($price) { ?>
									<div class="price"><?php echo $price ?></div>
								<?php } ?>
								<?php if ($street) { ?>
									<div class="street"><?php echo $street ?></div>
								<?php } ?>
							</header>

							<div class="property_data">
								<?php if ($subdivision) { ?>
									<div class="pdata">Subdivision: <?php echo $subdivision_name ?></div>	
								<?php } ?>
								<?php if ($neighborhood) { ?>
									<div class="pdata">Neighborhood:
										<?php $n=1; foreach ($neighborhood as $nh) { 
											$comma = ($n>1) ? ', ':'';
											echo $comma . $nh->name;
										$n++; } ?>
									</div>
								<?php } ?>
								<?php if ($other_info) { ?>
									<div class="pdata"><?php echo $other_info ?></div>	
								<?php } ?>
								<?php if ($bottom_info) { ?>
									<div class="pdata last-info">
										<?php if ($mls_num) { ?>
											<span>MLS # <?php echo $mls_num ?></span>
										<?php } ?>

										<?php if ($mls_num && $broker_name) { ?>
											<span class="separator"> | </span>	
										<?php } ?>

										<?php if ($broker_name) { ?>
											<span><?php echo $broker_name ?></span>
										<?php } ?>
									</div>	
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
	<?php } ?>