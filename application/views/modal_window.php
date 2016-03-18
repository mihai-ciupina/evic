<!-- Button to trigger modal -->
<a id="<?php echo $field_name;?>_trigger_modal" href="#<?php echo $field_name;?>_modal" role="button" class="" >E</a>

<!-- Modal -->
<div id="<?php echo $field_name;?>_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
	<button id="<?php echo $field_name;?>_close_modal" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3 id="myModalLabel">Modal header</h3>
	</div>

	<div class="modal-body">
		<div>
			<input type="text" id="<?php echo $field_name;?>_modal_input_text" value="" />
			<input type="button" id="<?php echo $field_name;?>_modal_submit_text" value="Adauga" />
		</div>
		<div id="<?php echo $field_name;?>_ul_modal_div">
		</div>
	</div>
	<div class="modal-footer">
	</div>
</div>