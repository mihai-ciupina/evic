<div class="bodyContents">
	<div class="navbar commonActionsContainer noprint">

		<?php 
			echo "<div class='error_msg'>";
			echo validation_errors();
			echo "</div>";

			echo form_open('product/show_products_search_result');
		?>
	 
		<div class="actionsContainer row-fluid">
			Cautare
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<input type="text" class="" id="input_name" name="input_name" placeholder="Nume" />
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
							<?php echo form_submit('submit', 'Cautare'); ?>
							<span id="searchIcon" class="add-on search-icon">
								<i class="icon-white icon-search "></i>
							</span>
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
		
		
		echo form_close();
	?>	
	</div>
</div>
