<div class="bodyContents">
			
		<?php
			
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
				
					<?php echo form_open('user_admin/user_update', array('class' => 'form-horizontal recordEditView', 'id' => 'EditView', 'name' => 'EditView'));?>

					<div class="contentHeader row-fluid">
						<h3 class="span8 textOverflowEllipsis" title="Editing Vendor Dan Bigza"><?=$result[0]->category?> &gt; <?=$result[0]->name?></h3>
						<span class="pull-right">
							<?php echo form_submit('submit', 'Save', "class = 'btn btn-success'")?>
							<a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a>
							</span>
					</div>
					<table class="table table-bordered blockContainer showInlineTable equalSplit">
						<thead>
							<tr>
								<th class="blockHeader" colspan="4">Date utilizator</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Nume utilizator(Nick) ', 'user_name', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'user_name', 'value' => set_value('user_name', (isset($result) ? $result[0]->user_name : '') ), 'id' => 'user_name', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Nume intreg ', 'name', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'name', 'value' => set_value('name', (isset($result) ? $result[0]->name : '') ), 'id' => 'name', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Parola ', 'user_password', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('type' => 'password', 'name' => 'user_password', 'class' => 'input-large nameField')) ?>
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
											<?php echo form_dropdown('category', array(''=>'Alege', 'user'=>'Utilizator', 'admin'=>'Admin'), set_value('category', (isset($result) ? $result[0]->category : '')));?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Email ', 'user_email', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'user_email', 'value' => set_value('user_email', (isset($result) ? $result[0]->user_email : '') ), 'id' => 'user_email', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Note ', 'notes', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'notes', 'value' => set_value('notes', (isset($result) ? $result[0]->notes : '') ), 'id' => 'notes', 'class' => 'input-large nameField')) ?>
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
				<?php if(isset($result)){echo form_hidden('user_id', $result[0]->id);}?>				
				<?php if(isset($user_id)){echo form_hidden('user_id', $user_id);}?>				
				<?php echo form_close();?>
			</div>
		</div>


</div>