<div class="bodyContents">
	<div class="navbar commonActionsContainer noprint">

		<?php 
			echo "<div class='error_msg'>";
			echo validation_errors();
			echo "</div>";

			echo form_open('user_admin/show_users_search_result');
		?>
 
		<div class="actionsContainer row-fluid">
			Cautare
		</div>
		<div class="actionsContainer row-fluid">
			<div class="span10">
				<div class="row-fluid">
					<div class="searchElement span8">
						<div class="input-append searchBar">
							<input type="text" class="" id="input_name" name="input_name" placeholder="Nume" results="10" />
							<?php echo form_submit('submit', 'Cautare'); ?>
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



	<div class="mainContainer row-fluid">
		<div class="contentsDiv marginLeftZero" id="rightPanel" style="min-height:550px;">
			<div class="listViewPageDiv">
			
				<div class="listViewTopMenuDiv noprint">
					<div class="listViewActionsDiv row-fluid">
						<span class="btn-toolbar span4">
							<span class="btn-group"><button id="Vendors_listView_basicAction_LBL_ADD_RECORD" class="btn addButton" ><i class="icon-plus"></i>&nbsp;<strong>Lista de utilizatori</strong></button></span>
						</span>
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
										<th nowrap >Username(Nick)&nbsp;&nbsp;</th>
										<th nowrap >Categorie&nbsp;&nbsp;</th>
									</tr>
								</thead>
								<?php
								if(isset($result)) {

									foreach($result as $user) {
									?>
									<tr class="listViewEntries" >
										<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href="<?php echo site_url('user_admin/show_user_details/'. $user->id .'') ?>"><?= $user->user_name ?></a></td>
										<td class="listViewEntryValue medium" data-field-type="string" nowrap><a href=""><?= $user->category ?></a></td>
									</tr>
									<?php
									}
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