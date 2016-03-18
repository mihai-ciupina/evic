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
				
					<?php echo form_open('user_admin/user_insert', array('class' => 'form-horizontal recordEditView', 'id' => 'EditView', 'name' => 'EditView', 'enctype' => 'multipart/form-data'));?>

					<div class="contentHeader row-fluid">
						<h3 class="span8 textOverflowEllipsis" title="Editing Vendor Dan Bigza"></h3>
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
									<?php echo form_label('<span class="redColor">*</span> Nume utilizator ', 'name', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('name' => 'user_name', 'value' => set_value('user_name'), 'id' => 'user_name', 'class' => 'input-large nameField')) ?>
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
											<?php echo form_input(array('name' => 'name', 'value' => set_value('name'), 'id' => 'name', 'class' => 'input-large nameField')) ?>
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
											<?php echo form_input(array('type' => 'password', 'name' => 'user_password', 'value' => set_value('user_password'), 'id' => 'user_password', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
							<tr>
								<td class="fieldLabel medium">
									<?php echo form_label('<span class="redColor">*</span> Parola din nou', 'user_password_again', array('class' => 'muted pull-right marginRight10px'));?>
								</td>
								<td class="fieldValue medium" >
									<div class="row-fluid">
										<span class="span10">
											<?php echo form_input(array('type' => 'password', 'name' => 'user_password_again', 'value' => set_value('user_password_again'), 'id' => 'user_password_again', 'class' => 'input-large nameField')) ?>
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
											<?php echo form_dropdown('category', array(''=>'Alege', 'user'=>'Utilizator', 'admin'=>'Admin'), set_value('category', ''));?>
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
											<?php echo form_input(array('name' => 'user_email', 'value' => set_value('user_email'), 'id' => 'user_email', 'class' => 'input-large nameField')) ?>
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
											<?php echo form_input(array('name' => 'notes', 'value' => set_value('notes' ), 'id' => 'notes', 'class' => 'input-large nameField')) ?>
										</span>
									</div>
								</td>
							</tr>
						</tbody>
					</table>


					<br />
					<div class="row-fluid">
						<div class="pull-right">							<?php echo form_submit('submit', 'Save', "class = 'btn btn-success'")?>
							<a class="cancelLink" type="reset" onclick="javascript:window.history.back();">Cancel</a>
</div>
						<div class="clearfix"></div>
					</div>
					<br />
				<?php echo form_close();?>
			</div>
		</div>

</div>