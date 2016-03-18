<div class="bodyContents">
	<div class="navbar commonActionsContainer noprint">

		<?php 
			echo "<div class='error_msg'>";
			echo validation_errors();
			echo "</div>";

			echo form_open('product/show_products_search_result/', array('id' => 'search_result_form', 'name' => 'search_result_form'));
			//echo form_open('product/show_products_search_result');
		?>
	 
		<div class="actionsContainer row-fluid">
			Cautare
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<?php echo form_input(array('name' => 'input_name', 'value' => set_value('input_name'), 'id' => 'input_name', 'class' => 'input-large nameField', 'placeholder' => 'Nume' )) ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<?php echo form_dropdown('category', array(''=>'Alegeti o varianta', 'mb'=>'Placa de baza', 'pr'=>'Procesor', 'co'=>'Cooler', 'gb'=>'Placa grafica', 'me'=>'Memorie', 'hd'=>'Hard disk', 'ps'=>'Sursa'), set_value('category'), 'placeholder="Categorie produs"');?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<input type="text" class="" id="input_compatibility" name="input_compatibility" placeholder="Compatibilitate" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<input type="text" class="" id="input_provenience" name="input_provenience" placeholder="Provenienta" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<input type="text" class="" id="input_code" name="input_code" placeholder="Cod produs" />
							<?php echo form_submit('submit', 'Cautare', "id = 'submit_button'"); ?>
							<span id="searchIcon" class="add-on search-icon">
								<i class="icon-white icon-search "></i>
							</span>
							<input type="hidden" name="hidden_page_number" id="hidden_page_number" value="1" />
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php
		echo "<div class='error_msg'>";
		if(isset($message_display)) {
			echo $message_display;
		}
		echo "</div>";
		
		
		//echo form_close();
	?>	
	</div>

		<?php 
			echo "<div class='error_msg'>";
			echo validation_errors();

			//echo 'xxx'; 

			echo "</div>";
		?>


	<div class="mainContainer row-fluid">
		<div class="contentsDiv marginLeftZero" id="rightPanel" style="min-height:550px;">
			<div class="listViewPageDiv">
			
				<div class="listViewTopMenuDiv noprint">
					<div class="listViewActionsDiv row-fluid">
						<span class="btn-toolbar span4">
							<span class="btn-group"><button id="Vendors_listView_basicAction_LBL_ADD_RECORD" class="btn addButton" ><i class="icon-plus"></i>&nbsp;<strong>Lista de produse rezultate</strong></button></span>
						</span>
					</div>
				</div>
				<div class="listViewTopMenuDiv noprint">
					<div class="listViewActionsDiv row-fluid">
						<div id="pagination">
							<?php echo $links; 		echo form_close();
?>
						</div>
					</div>
				</div>
						

				<div class="listViewContentDiv" id="listViewContents">
					
					<div id="selectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="selectAllMsg">Select all&nbsp;Vendors&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div>
					<div id="deSelectAllMsgDiv" class="alert-block msgDiv noprint"><strong><a id="deSelectAllMsg">Deselect all</a></strong></div>
					<div class="contents-topscroll noprint">
						<div class="topscroll-div">&nbsp;</div>
					</div>
					<div class="listViewEntriesDiv contents-bottomscroll">
						<div class="bottomscroll-div">
							<table class="table table-bordered listViewEntriesTable">
								<thead>
									<tr class="listViewHeaders">
										<th nowrap >Nume&nbsp;&nbsp;</th>
										<th nowrap >Categorie&nbsp;&nbsp;</th>
										<th nowrap >Stare&nbsp;&nbsp;</th>
										<th nowrap >Compatibilitate&nbsp;&nbsp;</th>
										<th nowrap >Provenienta&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<?php
								foreach($result as $product) {
								?>
								<tr class="listViewEntries" >
									<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href="<?php echo site_url('product/show_product_details/'. $product->id .'') ?>"><?= $product->name ?></a></td>
									<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href=""><?= $product->category ?></a></td>
									<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href=""><?= $product->status ?></a></td>
									<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href=""><?= $product->compatibility ?></a></td>
									<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href=""><?= $product->provenience ?></a></td>
								</tr>
								<?php
								}
								?>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>







