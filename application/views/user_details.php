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
								<div class="pull-right detailViewButtoncontainer">
									<div class="btn-toolbar">
										<span class="btn-group">
											<button class="btn" id="User_detailView_basicAction_LBL_EDIT"onclick="window.location.href='<?php echo base_url('user_admin/show_user_form/' . $result[0]->id)?>'">
												<strong>MODIFICARE CONT</strong>
											</button>
										</span>
										<span class="btn-group">
											<button class="btn" id="User_detailView_basicAction_LBL_DELETE" user_id="<?=$result[0]->id?>" redirect_url="<?php echo site_url('user_admin/show_user_search_form')?>">
												<strong>STERGERE CONT</strong>
											</button>
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
									<thead><tr><th class="blockHeader" colspan="4">&nbsp;&nbsp;Detalii utilizator</th></tr></thead>
									<tbody >
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Nume utilizator(Nick)</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value" ><?=$result[0]->user_name?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Nume intreg</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->name?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Categorie utilizator</label></td>
											<td class="fieldValue medium" id="" >
												<?php $array_category_display_text = array('user'=>'Utilizator', 'admin'=>'Admin'); ?>
											
												<span class="value" ><?=$array_category_display_text[$result[0]->category]?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Email</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->user_email?></span></td>
										</tr>
										<tr>
											<td class="fieldLabel medium" id="" >
												<label class="muted pull-right marginRight10px">Note</label></td>
											<td class="fieldValue medium" id="" >
												<span class="value"><?=$result[0]->notes?></span></td>
										</tr>
									</tbody>
								</table>

								
								




							</div>
						</form>
					
				</div>
			</div>
		</div>
	
</div>
