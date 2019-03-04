<?php  

$neighbors_subdivisions = array();

$property_types = get_terms( array(
	'taxonomy' => 'property_types',
	'hide_empty' => true,
));

$neighbor_list = get_terms( array(
	'taxonomy' => 'neighborhood',
	'hide_empty' => true,
));

// $subdivisions = get_terms( array(
// 	'taxonomy' => 'subdivision',
// 	'hide_empty' => true,
// ));

//$neighbors_subdivisions = array_merge($neighbors,$subdivisions);
//$neighbor_list = ($neighbors_subdivisions) ? sort_object_items($neighbors_subdivisions,'name','ASC') : false;

$street_lists = get_acf_custom_fields('street');
$mls_lists = get_acf_custom_fields('mls');

?>
<div class="quick-search">
	<div class="wrapper">
		<h3 class="form-title cantarell text-center">Quick Search</h3>
		<form id="quick_search" action="<?php echo get_site_url(); ?>" method="GET" class="quick-search-form">
			<div class="form-fields clear">
				<div class="form-group">
					<label for="property_type">Property Type</label>
					<select id="property_type" class="property_type form-control js-select2">
						<?php if ($property_types) { ?>
							<option></option>
							<?php foreach ($property_types as $pt) { 
								$pt_term_id = $pt->term_id;
								$pt_term_name = $pt->name;
							?>
							<option value="<?php echo $pt_term_id?>"><?php echo $pt_term_name?></option>
							<?php } ?>
						<?php } else { ?>
							<option value="-1">Not Available</option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="neighborhood">Neighborhood/Subdivision</label>
					<select id="neighborhood" class="neighborhood form-control js-select2">
						<?php if ($neighbor_list) { ?>
							<option></option>
							<?php foreach ($neighbor_list as $nh) { 
								$nh_term_id = $nh->term_id;
								$nh_term_name = $nh->name;
							?>
							<option value="<?php echo $nh_term_id?>"><?php echo $nh_term_name?></option>
							<?php } ?>
						<?php } else { ?>
							<option value="-1">Not Available</option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="neighborhood">Street</label>
					<select id="street" class="street form-control js-select2">
						<?php if ($street_lists) { ?>
							<option></option>
							<?php foreach ($street_lists as $st) { 
								$street_name = $st->meta_value;
							?>
							<option value="<?php echo $street_name?>"><?php echo $street_name?></option>
							<?php } ?>
						<?php } else { ?>
							<option value="-1">Not Available</option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="mls">MLS #</label>
					<select id="mls" class="mls form-control js-select2">
						<?php if ($mls_lists) { ?>
							<option></option>
							<?php foreach ($mls_lists as $ms) { 
								$mls_num = $ms->meta_value;
							?>
							<option value="<?php echo $mls_num?>"><?php echo $mls_num?></option>
							<?php } ?>
						<?php } else { ?>
							<option value="-1">Not Available</option>
						<?php } ?>
					</select>
				</div>

			</div>
			
		</form>
	</div>
</div>