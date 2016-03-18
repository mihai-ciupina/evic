<?php
	switch($category_page) {
		case 'mb': {
			$dependent_name[0] = 'mb_format_select';
			$dependent_name[1] = 'mb_socket';
			$dependent_name[2] = 'mb_graphics_interface';
			$dependent_name[3] = 'mb_memory_type';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_value[0] = $result[0]->mb_format_select;
			$dependent_value[1] = $result[0]->mb_socket_select;
			$dependent_value[2] = $result[0]->mb_graphics_interface_select;
			$dependent_value[3] = $result[0]->mb_memory_type_select;
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
			$dependent_name[1] = 'pr_core';
			$dependent_name[2] = 'pr_frequency';
			$dependent_name[3] = '';
			$dependent_name[4] = '';
			$dependent_name[5] = '';
			
			$dependent_value[0] = $result[0]->pr_socket_select;
			$dependent_value[1] = $result[0]->pr_core_select;
			$dependent_value[2] = $result[0]->pr_frequency_select;
			$dependent_value[3] = '';
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
			
			$dependent_value[0] = $result[0]->co_socket_select;
			$dependent_value[1] = $result[0]->co_cooling_type_select;
			$dependent_value[2] = $result[0]->co_cooling_mode_select;
			$dependent_value[3] = '';
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
			
			$dependent_value[0] = $result[0]->gb_manufacturer_select;
			$dependent_value[1] = $result[0]->gb_model_select;
			$dependent_value[2] = $result[0]->gb_interface_select;
			$dependent_value[3] = $result[0]->gb_chipset_select;
			$dependent_value[4] = $result[0]->gb_memory_select;
			$dependent_value[5] = $result[0]->gb_memory_dimension_select;
			
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
			
			$dependent_value[0] = $result[0]->me_type_select;
			$dependent_value[1] = $result[0]->me_frequency_select;
			$dependent_value[2] = $result[0]->me_capacity_select;
			$dependent_value[3] = '';
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
			
			$dependent_value[0] = $result[0]->hd_interface_select;
			$dependent_value[1] = $result[0]->hd_capacity_select;
			$dependent_value[2] = $result[0]->hd_dimension_select;
			$dependent_value[3] = '';
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
			
			$dependent_value[0] = $result[0]->ps_type_select;
			$dependent_value[1] = $result[0]->ps_power_select;
			$dependent_value[2] = $result[0]->ps_efficiency_select;
			$dependent_value[3] = '';
			$dependent_value[4] = '';
			$dependent_value[5] = '';
			
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
									<?php
			echo "<div class='error_msg'>";
			if(isset($message_display)) {
				echo $message_display;
			}
			echo "</div>";
			?>

<div class="bodyContents">
		<div class="contentsDiv marginLeftZero" id="rightPanel" style="min-height:550px;">
			<div class="detailViewContainer">
			
			
				<div class="row-fluid detailViewTitle">
					<div class=" span10 ">
						<div class="row-fluid">
							<div class="span5">
								<div class="row-fluid"><span class="span10 margin0px"><span class="row-fluid"><span class="recordLabel font-x-x-large textOverflowEllipsis span pushDown" title="<?=$result[0]->name?>"><span class="vendorname"><?=$result[0]->name?></span>&nbsp;</span></span></span></div>
							</div>
							<div class="span7">
								<div class="pull-right">
									<div class="btn-toolbar">
										<span class="btn-group">
											<button class="btn" id="Vendors_detailView_basicAction_LBL_EDIT" onclick="window.location.href='<?php echo site_url('product/show_product_form/no/' . $result[0]->id)?>'">
												<strong>Edit</strong>
											</button>
										</span>
										<span class="btn-group">
											<button class="btn" id="Product_detailView_basicAction_LBL_DELETE" product_id="<?=$result[0]->id?>" redirect_url="<?php echo site_url('search/show_search_form')?>">
												<strong>Delete</strong>
											</button>
										</span>
										<span class="btn-group" id="Product_detailView_basicAction_LBL_LABEL_span">
											<button class="btn" id="Product_detailView_basicAction_LBL_LABEL" product_code="<?=$result[0]->product_code?>" >
												<strong>Eticheta</strong>
											</button>
											<a target="_blank" class="btn remove_visibility" id="Product_detailView_basicAction_LBL_A" href="<?php echo base_url('/files/output.pdf')?>" >AFISARE</a>

										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="detailViewInfo row-fluid">
					
						<form id="detailView" data-name-fields='["vendorname"]' method="POST">
							<div class="contents">
								<table class="table table-bordered equalSplit detailview-table">
									<thead><tr><th class="blockHeader" colspan="4">&nbsp;&nbsp;Detalii speciale</th></tr></thead>
									<tbody >
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Nume produs</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->name?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[0]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[0]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Categorie</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->category?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[1]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[1]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Stare</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->status?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[2]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[2]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Compatibilitate</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->compatibility?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[3]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[3]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Provenienta</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->provenience?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[4]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[4]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px"><?=$dependent_label[5]?></label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$dependent_value[5]?></span></td>
										</tr>
									</tbody>
								</table>

								
								
								<br />
								<table class="table table-bordered equalSplit detailview-table">
									<thead><tr><th class="blockHeader" colspan="4">&nbsp;&nbsp;Date generale</th></tr></thead>
									<tbody >
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Cod produs</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->product_code?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Locatie</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->location?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Unitate</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->unit?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Cantitate/Unitate</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->unit_quantity?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Cantitate in stoc</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->quantity?></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Pret</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->unit_price?> LEI</span></td>
										</tr>
									</tbody>
								</table>


								


								<br />
								<table class="table table-bordered equalSplit detailview-table">
									<thead><tr><th class="blockHeader" colspan="4">&nbsp;&nbsp;</th></tr></thead>
									<tbody >
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Imagine</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><img src="<?=base_url('images/uploads/'.$result[0]->image)?>" /></span></td>

											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Descriere</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->notes?></span></td>
										</tr>
									</tbody>
								</table>





								<br />
								<table class="table table-bordered equalSplit detailview-table">
									<thead><tr><th class="blockHeader" colspan="4">&nbsp;&nbsp;</th></tr></thead>
									<tbody >
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">URL</label></td>
											<td class="fieldValue medium" id="" colspan="3">
												<span class="value" ><a href="<?=$result[0]->url?>" target="_blank"><?=$result[0]->url?></a></span></td>
										</tr>
									</tbody>
								</table>
								<br />



							</div>
						</form>

				</div>
			</div>
		</div>

</div>
