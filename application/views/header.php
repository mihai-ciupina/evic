<?php
$pages = array(
			'search' 		=> array('id' => '1', 'name' => 'search/show_search_form', 			'display_name' => 'Cautare'),
			'product_form' 	=> array('id' => '2', 'name' => 'product/show_product_form/all', 	'display_name' => 'Catalogare'),
			'user_search'	=> array('id' => '1', 'name' => 'user_admin/show_user_search_form', 'display_name' => 'Utilizatori'),
			'user_form' 	=> array('id' => '2', 'name' => 'user_admin/show_user_form', 		'display_name' => 'Adaugare Utilizator'),
			'admin' 		=> array('id' => '3', 'name' => 'admin', 							'display_name' => 'Admin')
		);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Produse</title>

	<link rel="SHORTCUT ICON" href="<?php echo base_url('images/favicon.ico'); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('js/main.js'); ?>" charset="utf-8"></script>

	
	


	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-tooltip.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-alert.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-collapse.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-dropdown.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-modal.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-popover.js'); ?>" charset="utf-8"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap-tab.js'); ?>" charset="utf-8"></script>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('css/bootstrap.css'); ?>">


	
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('css/chosen.css'); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('css/main.css'); ?>">

	
	</head>

<body>
	<div id="page"><!-- container which holds data temporarly for pjax calls -->

		<div class="navbar navbar-fixed-top  navbar-inverse noprint">
			<div class="navbar" id="topMenus" style="overflow: visible; height: 40px;">
				<div class="navbar-inner" id="nav-inner">
					<div class="menuBar row-fluid">

					<div class="span9">
							<ul class="nav modulesList" id="largeNav">

								<?php if((isset($this->session->userdata['user_category']))&&($this->session->userdata['user_category'] === 'admin')) { ?>
										<li class="tabs"><a class="alignMiddle " href="<?php echo site_url('search/show_search_form');?>"><img src="<?php echo base_url('images/home.png');?>" alt="Home" title="Home"></a></li>
										<?php foreach($pages as $item) {  ?>
											<li class="tabs"><a id="" href="<?php echo site_url($item['name']);?>"><strong><?php echo $item['display_name'];?></strong></a></li>
								<?php } }?>
								<?php if((isset($this->session->userdata['user_category']))&&($this->session->userdata['user_category'] === 'user')) { ?>
										<li class="tabs"><a class="alignMiddle " href="<?php echo site_url('search/show_search_form');?>"><img src="<?php echo base_url('images/home.png');?>" alt="Home" title="Home"></a></li>
										<li class="tabs"><a id="" href="<?php echo site_url('search/show_search_form');?>"><strong><?php echo 'Cautare';?></strong></a></li>
										<li class="tabs"><a id="" href="<?php echo site_url('product/show_product_form/all');?>"><strong><?php echo 'Catalogare';?></strong></a></li>
								<?php } ?>
								
							</ul>
						</div>
						
						
						<div class="span3 marginLeftZero pull-right" id="headerLinks">
							<span id="headerLinksBig" class="pull-right headerLinksContainer">
								<?php
									if ((isset($this->session->userdata['logged_in']))&&($this->session->userdata['logged_in'])) {
								?>
										<span class="dropdown span">
											<a id="" class="userName textOverflowEllipsis" title="Administrator"><strong><?=$this->session->userdata['username']?></strong></a> 
										</span>
										<span class="dropdown span">
											<a href="<?php echo site_url('user_authentication/logout');?>" id="logout" class="userName textOverflowEllipsis" ><strong>Logout</strong> </a> 
										</span>
								<?php
									} else {
								?>
										<span class="dropdown span">
											<a href="<?php echo site_url('user_authentication/user_login_show');?>" id="login" class="userName textOverflowEllipsis" ><strong>Login</strong></a> 
										</span>
								<?php
									}
								?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>


		<ul>
		   <li></li><li></li>
		</ul>
		
    