<?php
	switch($category_page) {
		
		case 'mb': {

			$dependent_name[0] = 'mb_format_select';
			$dependent_name[1] = 'mb_socket_select';
			$dependent_name[2] = 'mb_graphics_interface_select';
			$dependent_name[3] = 'mb_memory_type_select';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $mb_format_select;
			$dependent_select_array[1] = $mb_socket_select;
			$dependent_select_array[2] = $mb_graphics_interface_select;
			$dependent_select_array[3] = $mb_memory_type_select;
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Format';
			$dependent_label[1] = 'Soclu procesor';
			$dependent_label[2] = 'Interfata grafica';
			$dependent_label[3] = 'Tip memorie';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
		case 'pr': {

			$dependent_name[0] = 'pr_socket_select';
			$dependent_name[1] = 'pr_core_select';
			$dependent_name[2] = 'pr_frequency_select';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $pr_socket_select;
			$dependent_select_array[1] = $pr_core_select;
			$dependent_select_array[2] = $pr_frequency_select;
			$dependent_select_array[3] = '';
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Socket';
			$dependent_label[1] = 'Nucleu';
			$dependent_label[2] = 'Frecventa';
			$dependent_label[3] = '';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
		case 'co': {

			$dependent_name[0] = 'co_socket_select';
			$dependent_name[1] = 'co_cooling_type_select';
			$dependent_name[2] = 'co_cooling_mode_select';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $co_socket_select;
			$dependent_select_array[1] = $co_cooling_type_select;
			$dependent_select_array[2] = $co_cooling_mode_select;
			$dependent_select_array[3] = '';
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Compatibilitate soket';
			$dependent_label[1] = 'Tip racie';
			$dependent_label[2] = 'Racire';
			$dependent_label[3] = '';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
		case 'gb': {

			$dependent_name[0] = 'gb_manufacturer_select';
			$dependent_name[1] = 'gb_model_select';
			$dependent_name[2] = 'gb_interface_select';
			$dependent_name[3] = 'gb_chipset_select';
			$dependent_name[4] = 'gb_memory_select';
			$dependent_name[5] = 'gb_memory_dimension_select';
			
			$dependent_select_array[0] = $gb_manufacturer_select;
			$dependent_select_array[1] = $gb_model_select;
			$dependent_select_array[2] = $gb_interface_select;
			$dependent_select_array[3] = $gb_chipset_select;
			$dependent_select_array[4] = $gb_memory_select;
			$dependent_select_array[5] = $gb_memory_dimension_select;

			$dependent_label[0] = 'Producator';
			$dependent_label[1] = 'Model';
			$dependent_label[2] = 'Interfata';
			$dependent_label[3] = 'Cipset';
			$dependent_label[4] = 'Memorie';
			$dependent_label[5] = 'Dimensiune memorie';
			
			break;
		}
		case 'me': {

			$dependent_name[0] = 'me_type_select';
			$dependent_name[1] = 'me_frequency_select';
			$dependent_name[2] = 'me_capacity_select';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $me_type_select;
			$dependent_select_array[1] = $me_frequency_select;
			$dependent_select_array[2] = $me_capacity_select;
			$dependent_select_array[3] = '';
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Tip';
			$dependent_label[1] = 'Frecventa';
			$dependent_label[2] = 'Capacitate';
			$dependent_label[3] = '';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
		case 'hd': {

			$dependent_name[0] = 'hd_interface_select';
			$dependent_name[1] = 'hd_capacity_select';
			$dependent_name[2] = 'hd_dimension_select';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $hd_interface_select;
			$dependent_select_array[1] = $hd_capacity_select;
			$dependent_select_array[2] = $hd_dimension_select;
			$dependent_select_array[3] = '';
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Interfata';
			$dependent_label[1] = 'Capacitate';
			$dependent_label[2] = 'Dimensiune';
			$dependent_label[3] = '';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
		case 'ps': {

			$dependent_name[0] = 'ps_type_select';
			$dependent_name[1] = 'ps_power_select';
			$dependent_name[2] = 'ps_efficiency_select';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_select_array[0] = $ps_type_select;
			$dependent_select_array[1] = $ps_power_select;
			$dependent_select_array[2] = $ps_efficiency_select;
			$dependent_select_array[3] = '';
			$dependent_select_array[4] = '';
			$dependent_select_array[5] = '';

			$dependent_label[0] = 'Tip';
			$dependent_label[1] = 'Putere';
			$dependent_label[2] = 'Eficienta';
			$dependent_label[3] = '';
			$dependent_label[4] = '';
			$dependent_label[5] = '';
			
			break;
		}
	}	
?>
<div class="bodyContents">
	<?php
	if(!isset($category_page)) {
		$category_page = 'no';
		echo 'Unexpected error $category_page = no';
	} else {
		if($category_page == 'all') {
			?>
				
					<div class="contentsDiv marginLeftZero" id="rightPanel" style="min-height:550px;">
						<div class="listViewPageDiv">
							
							<div class="listViewContentDiv" id="listViewContents">
								<div class="alphabetSorting noprint">
									<h2>Alege categoria</h2><h2>&nbsp;</h2>
									<table width="100%" class="table-bordered" style="border: 1px solid #ddd;table-layout: fixed">
										<tbody>
											<tr>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="mb" href="<?php echo site_url('product/show_product_form/mb/'); ?>">Placa de baza</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="pr" href="<?php echo site_url('product/show_product_form/pr/'); ?>">Procesor</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="co" href="<?php echo site_url('product/show_product_form/co/'); ?>">Cooler</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="gb" href="<?php echo site_url('product/show_product_form/gb/'); ?>">Placa grafica</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="me" href="<?php echo site_url('product/show_product_form/me/'); ?>">Memorie</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="hd" href="<?php echo site_url('product/show_product_form/hd/'); ?>">Hard Disk</a></td>
												<td class="alphabetSearch textAlignCenter cursorPointer " style="padding : 0px !important"><a id="ps" href="<?php echo site_url('product/show_product_form/ps/'); ?>">Sursa</a></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				
			
			<?php
			
		} else {
			echo "<div class='error_msg'>";
			echo validation_errors();
			echo "</div>";
			echo "<div class='error_msg'>";
			if(isset($message_display)) {
				echo $message_display;
			}
			echo "</div>";
		?>
        <div class="contentsDiv marginLeftZero" id="rightPanel" style="min-height:550px;">
			<div class='container-fluid editViewContainer'>
				
					<?php echo form_open_multipart('product/product_update', array('class' => 'form-horizontal recordEditView', 'enctype' => 'multipart/form-data'));?>

					<div class="contentHeader row-fluid">
						<h3 class="span8 textOverflowEllipsis" title="Editing Vendor Dan Bigza">...</h3>
						<span class="pull-right">
							<?php echo form_submit('submit', 'Save', "class = 'btn btn-success'")?>
							<a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a>
					</div>
					<table class="table table-bordered blockContainer showInlineTable equalSplit">
						<thead>
							<tr>
								<th class="blockHeader" colspan="4">Date produs</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Nume produs ', 'name', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'name', 'value' => set_value('name', (isset($result) ? $result[0]->name : '') ), 'id' => 'name', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[0], $dependent_name[0], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium">
									<div class="row-fluid">
										<span id="<?=$dependent_name[0]?>_span" class="span10">
											<?php
												if($dependent_name[0] != '') {
													$data['field_name'] = $dependent_name[0];
													$data['field_data'] = $dependent_select_array[0];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Categorie ', 'category', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'category', 'value' => set_value('category', (isset($result) ? $result[0]->category : '') ), 'id' => 'Vendors_editView_fieldName_vendorname', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[1], $dependent_name[1], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span id="<?=$dependent_name[1]?>_span" class="span10">
											<?php
												if($dependent_name[1] != '') {
													$data['field_name'] = $dependent_name[1];
													$data['field_data'] = $dependent_select_array[1];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Stare ', 'status', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php //echo form_input(array('name' => 'status', 'value' => set_value('status', (isset($result) ? $result[0]->status : '') ), 'id' => 'Vendors_editView_fieldName_vendorname', 'class' => 'input-large nameField')) ?>
											<?php echo form_dropdown('status', array(''=>'Alegeti o varianta','new'=>'Nou','second'=>'Second'), set_value('status', (isset($result) ? $result[0]->status : '')));?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[2], $dependent_name[2], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span id="<?=$dependent_name[2]?>_span" class="span10">
											<?php
												if($dependent_name[2] != '') {
													$data['field_name'] = $dependent_name[2];
													$data['field_data'] = $dependent_select_array[2];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Compatibilitate ', 'compatibility', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'compatibility', 'value' => set_value('compatibility', (isset($result) ? $result[0]->compatibility : '') ), 'id' => 'Vendors_editView_fieldName_vendorname', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[3], $dependent_name[3], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span id="<?=$dependent_name[3]?>_span" class="span10">
											<?php
												if($dependent_name[3] != '') {
													$data['field_name'] = $dependent_name[3];
													$data['field_data'] = $dependent_select_array[3];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Provenience ', 'provenience', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'provenience', 'value' => set_value('provenience', (isset($result) ? $result[0]->provenience : '') ), 'id' => 'provenience', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[4], $dependent_name[4], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span id="<?=$dependent_name[4]?>_span" class="span10">
											<?php
												if($dependent_name[4] != '') {
													$data['field_name'] = $dependent_name[4];
													$data['field_data'] = $dependent_select_array[4];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('', '')?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label($dependent_label[5], $dependent_name[5], array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span id="<?=$dependent_name[5]?>_span" class="span10">
											<?php
												if($dependent_name[5] != '') {
													$data['field_name'] = $dependent_name[5];
													$data['field_data'] = $dependent_select_array[5];
													$this->load->view('dynamic_dropdown', $data);
													$this->load->view('modal_window', $data);
												}
											?>
										</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
					<br />
					<table class="table table-bordered blockContainer showInlineTable equalSplit">
						<thead>
							<tr>
								<th class="blockHeader" colspan="4">Date generale</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Cod produs ', 'product_code', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'product_code', 'value' => set_value('product_code', (isset($result) ? $result[0]->product_code : '') ), 'id' => 'product_code', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label('Locatie ', 'location', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'location', 'value' => set_value('location', (isset($result) ? $result[0]->location : '') ), 'id' => 'location', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Unitate ', 'unit', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'unit', 'value' => set_value('unit', (isset($result) ? $result[0]->unit : '') ), 'id' => 'unit', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label('Cantitate/Unitate ', 'unit_quantity', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'unit_quantity', 'value' => set_value('unit_quantity', (isset($result) ? $result[0]->unit_quantity : '') ), 'id' => 'unit_quantity', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Cantitate in stoc ', 'quantity', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'quantity', 'value' => set_value('quantity', (isset($result) ? $result[0]->quantity : '') ), 'id' => 'quantity', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label('Pret ', 'unit_price', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'unit_price', 'value' => set_value('unit_price', (isset($result) ? $result[0]->unit_price : '') ), 'id' => 'unit_price', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					<br />
					<table class="table table-bordered blockContainer showInlineTable equalSplit">
						<thead>
							<tr>
								<th class="blockHeader" colspan="4">&nbsp;&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('Imagine ', 'image', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'image', 'value' => set_value('image', (isset($result) ? $result[0]->image : '') ), 'id' => 'image', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
								<td class="fieldLabel medium">
									<?php echo form_label('Descriere ', 'notes', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_textarea(array('name' => 'notes', 'value' => set_value('notes', (isset($result) ? $result[0]->notes : '') ), 'id' => 'notes', 'class' => 'input-large nameField', 'rows' => 10, 'cols' => 50)) ?>
										</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>

					<br />
					<table class="table table-bordered blockContainer showInlineTable equalSplit">
						<thead>
							<tr>
								<th class="blockHeader" colspan="4">&nbsp;&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('URL ', 'image', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" colspan="3">
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'url', 'value' => set_value('url', (isset($result) ? $result[0]->url : '') ), 'id' => 'url', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>


					<br />
					<div class="row-fluid">
						<div class="pull-right">
							<?php echo form_submit('submit', 'Save', "class = 'btn btn-success'")?>
							<a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<br />
				<?php if(isset($result)){echo form_hidden('product_id', $result[0]->id);}?>				
				<?php if(isset($result)){echo form_hidden('category_page', $result[0]->category);}?>				
				<?php if(isset($product_id)){echo form_hidden('product_id', $product_id);}?>				
				<?php if(isset($category_page)){echo form_hidden('category_page', $category_page);}?>				
				<?php echo form_close();?>
			</div>
		</div>
	<?php
		}
	}
	?>

</div>