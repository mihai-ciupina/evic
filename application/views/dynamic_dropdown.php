<?php echo form_dropdown($field_name, $field_data, set_value($field_name, (isset($field_value) ? $field_value : '')), 'class="chzn-select" id="'.$field_name.'" ');?>

<?php
	$attributes = array(
		'class' => 'chzn-results',
		'id' => ''.$field_name.'_ul'
	);
?>

<div style="width: 220px;" class="chzn-container chzn-container-single" id="selKD1_chzn">
	<a href="javascript:void(0)" class="chzn-single">
		<span><?php echo set_value($field_name, (isset($field_value) ? $field_value : 'Alegeti o varianta t'));?></span>
		<div><b></b></div>
	</a>
	<div id="<?php echo $field_name;?>_chzn-drop_div" class="chzn-drop" style="left: 0px; width: 218px; top: 28px;">
		<div class="chzn-search">
			<input id="<?php echo $field_name;?>_input" style="width: 183px;" autocomplete="off" type="text">
		</div>
			
		<?php echo ul($field_data, $attributes);?>

	
	
	</div>
</div>