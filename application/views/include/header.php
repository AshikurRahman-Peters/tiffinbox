
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo @$page_title; ?></title>

		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->
		<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->
		
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chosen.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/colorpicker.css" />
		<!--fonts-->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/colorbox.css" />
		 <!--page specific plugin styles-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.gritter.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/select2.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-editable.css" />

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <!--[if IE]>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <![endif]-->

        <!--[if !IE]>-->

        <script type="text/javascript">
            window.jQuery || document.write("<script src='<?php echo base_url();?>assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
        </script>

        <!--<![endif]-->

        <script type="text/javascript">
            if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
	</head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="<?php echo base_url();?>" class="brand">
						<small>
							<i class="icon icon-gift white"></i>
							<span class="red">Tiffin</span><span class="white">Box</span> :: School Management System
						</small>
					</a><!--/.brand-->

					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								<span class="badge badge-grey">4</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									4 Tasks to complete
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Software Update</span>
											<span class="pull-right">65%</span>
										</div>

										<div class="progress progress-mini ">
											<div style="width:65%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Hardware Upgrade</span>
											<span class="pull-right">35%</span>
										</div>

										<div class="progress progress-mini progress-danger">
											<div style="width:35%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Unit Testing</span>
											<span class="pull-right">15%</span>
										</div>

										<div class="progress progress-mini progress-warning">
											<div style="width:15%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">Bug Fixes</span>
											<span class="pull-right">90%</span>
										</div>

										<div class="progress progress-mini progress-success progress-striped active">
											<div style="width:90%" class="bar"></div>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See tasks with details
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-mini btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-mini no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										<img src="assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="#">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="<?php echo base_url();?>assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php
									//take user data from session:
									$user_data = $this->session->userdata('is_logged');
									echo $user_data['user_name'];
									?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>
									<a href="<?php echo base_url();?>setting/index">
										<i class="icon-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="#">
										<i class="icon-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo base_url()?>welcome/logout">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<a href="<?php echo base_url();?>subjects">
						<button class="btn btn-small btn-success">
							<i class="icon-book"></i>
						</button>
						</a>
						<a href="<?php echo base_url();?>classroutin/index">
						<button class="btn btn-small btn-info">
							<i class="icon-calendar"></i>
						</button>
						</a>
						<a href="<?php echo base_url();?>students">
						<button class="btn btn-small btn-warning">
							<i class="icon-group"></i>
						</button>
						</a>
						<a href="<?php echo base_url();?>setting">
						<button class="btn btn-small btn-danger">
							<i class="icon-cogs"></i>
						</button>
						</a>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
					<li <?php echo ($this->uri->segment(1) =="") || ($this->uri->segment(1) =="dashboard")? 'class="active"':'';?> >
						<a href="<?php echo base_url(); ?>">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					 
					<li <?php echo (($this->uri->segment(1) =="students") && (($this->uri->segment(2) =="create" ) || ($this->uri->segment(2) =="update" ) || ($this->uri->segment(2) =="" ) || ($this->uri->segment(2) =="index" ))) ? 'class="active"':'';?>>
						<a href="<?php echo base_url(); ?>students">
						<i class="icon-group"></i>
							<span class="menu-text"> Student  </span>
						</a>
					</li>
					
					<li <?php echo ($this->uri->segment(1) =="attendance") ? 'class="active"':'';?> >
						<a href="<?php echo base_url(); ?>attendance/index">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Student Attendance </span>
						</a>
					</li>
					<li <?php echo ($this->uri->segment(1) =="att_report") ? 'class="active"':'';?> >
						<a href="<?php echo base_url(); ?>att_report/index">
							<i class="icon-group"></i>
							<span class="menu-text">Attendance Report</span>
						</a>
					</li>
					<li <?php echo (($this->uri->segment(1) =="employee") && (($this->uri->segment(2) =="departments") || ($this->uri->segment(2) =="createdepartment") || ($this->uri->segment(2) =="updatedepartment")))? 'class="active"':'';?>>
						<a href="<?php echo base_url();?>employee/departments">
							<i class="icon-sitemap green"></i>
							Departments
						</a>
					</li>	
			 		<li <?php echo (($this->uri->segment(1) =="employee") && (($this->uri->segment(2) =="designations") || ($this->uri->segment(2) =="createdesignation") || ($this->uri->segment(2) =="updatedesignations")))? 'class="active"':'';?>>
						<a href="<?php echo base_url();?>employee/designations">
							<i class="icon-bookmark green"></i>
							Designations
						</a>
					</li>
					
					<li <?php echo (($this->uri->segment(1) =="employee") && ($this->uri->segment(2) =="index"))? 'class="active"':'';?>>	
						<a href="<?php echo base_url(); ?>employee/index">
							<i class="icon-group"></i>
						 Staff/Teacher
						</a>
					</li> 
		 
						 
			 			
								
					<li <?php echo ($this->uri->segment(1) =="classes")? 'class="active"':'';?>>
						<a href="<?php echo base_url();?>classes">
							<i class="icon-double-angle-right"></i>
							Classes
						</a>
						 
					</li>		 
					 
					 
					<!--li <?php echo ($this->uri->segment(1) =="subjects")? 'class="active"':'';?>>
						<a href="<?php echo base_url(); ?>subjects">
							<i class="icon-book"></i> Subject 
						</a>
					</li-->
					<li <?php echo ($this->uri->segment(1) =="classroutin" && $this->uri->segment(2) =="index" )? 'class="active"':'';?>>
						<a href="<?php echo base_url();?>classroutin/index">
							<i class="icon-double-angle-right"></i>
							Class Routin
						</a>
					</li>
							
						 
					<li <?php echo ($this->uri->segment(1) =="exams" || $this->uri->segment(1) =="examresult" || $this->uri->segment(1) =="examgrades" )? 'class="active open"':'';?>>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text">Exam </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li <?php echo ($this->uri->segment(1) =="examgrades" && $this->uri->segment(2) =="index" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>examgrades/index">
									<i class="icon-double-angle-right"></i>
									Grades Setting
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="exams" && $this->uri->segment(2) =="index" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>exams/index">
									<i class="icon-double-angle-right"></i>
									Exams Setting
								</a>
							</li>
						 	<li <?php echo ($this->uri->segment(1) =="examresult" && $this->uri->segment(2) =="create") ? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>examresult/create" class="dropdown-toggle">
									<i class=" icon-certificate"></i>
									<span class="menu-text">Marks &amp; Result</span>
								</a>
								 
							</li>
						</ul>
					</li>
					<li <?php echo ($this->uri->segment(1) =="library")? 'class="active open"':'';?>>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text">Library</span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li <?php echo ($this->uri->segment(1) =="library" && $this->uri->segment(2) =="books" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>library/books">
									<i class="icon-book"></i>
									Books & Issue
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="library" && $this->uri->segment(2) =="issuedbook" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>library/issuedbook">
									<i class="icon-double-angle-right"></i>
									Issues & Return
								</a>
							</li>
						 	<li <?php echo ($this->uri->segment(1) =="library" && $this->uri->segment(2) =="duereport")? 'class="active"':'';?>>
								<a href="<?php echo site_url('library/duereport'); ?>" class="dropdown-toggle">
									<i class=" icon-certificate"></i>
									<span class="menu-text">Due Report</span>
								</a>
								 
							</li>
						</ul>
					</li>
					<li <?php echo ($this->uri->segment(1) =="accounting")? 'class="active open"':'';?>>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text">Accounting </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li <?php echo ($this->uri->segment(1) =="accounting" && $this->uri->segment(2) =="expense_categories" ) ? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>accounting/expense_categories">
									<i class="icon-double-angle-right"></i>
									Expense Categories
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="accounting" && $this->uri->segment(2) =="expenses" ) ? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>accounting/expenses">
									<i class="icon-double-angle-right"></i>
									Expenses
								</a>
							</li>
						 	<li <?php echo ($this->uri->segment(1) =="accounting" && $this->uri->segment(2) =="payments") ? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>accounting/payments" class="dropdown-toggle">
									<i class=" icon-certificate"></i>
									<span class="menu-text">Payments</span>
								</a>
								 
							</li>
						</ul>
					</li>
					<li <?php echo ($this->uri->segment(1) =="website" || $this->uri->segment(1) =="noticeboard")? 'class="active open"':'';?>>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text">Config Website </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						<ul class="submenu">
							<li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="links" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>website/links">
									<i class="icon-double-angle-right"></i>
									Links
								</a>
							</li>
                            <li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="slider" )? 'class="active"':'';?>>
                                <a href="<?php echo base_url(); ?>website/slider">
                                    <i class="icon-double-angle-right"></i>
                                    Home Page Slider
                                </a>
                            </li>
							<li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="emailconfig" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>website/emailconfig">
									<i class="icon-double-angle-right"></i>
									Contact email
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="aboutus" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>website/aboutus">
									<i class="icon-double-angle-right"></i>
									About us
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="principal" )? 'class="active"':'';?>>
								<a href="<?php echo base_url(); ?>website/principal ">
									<i class="icon-double-angle-right"></i>
									Word From Principal
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="noticeboard")? 'class="active"':'';?>>
								<a href="<?php echo base_url();?>noticeboard/index">
									<i class="icon-bullhorn"></i>
									<span class="menu-text"> News/Notice </span>
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="employee" && $this->uri->segment(2) =="makecommittee" )? 'class="active"':'';?>>
								<a href="<?php echo base_url();?>employee/makecommittee">
									<i class="icon-bullhorn"></i>
									<span class="menu-text">Committee Members</span>
								</a>
							</li>
							<li <?php echo ($this->uri->segment(1) =="website" && $this->uri->segment(2) =="social" )? 'class="active"':'';?>>
								<a href="<?php echo base_url();?>website/social">
									<i class="icon-facebook"></i>
									<span class="menu-text">Social</span>
								</a>
							</li>
						</ul>
					</li>
					
					
					<li <?php echo ($this->uri->segment(1) =="setting") ? 'class="active"':'';?> >
						<a href="<?php echo base_url(); ?>setting/index">
							<i class="icon-cogs"></i>
							<span class="menu-text"> Setting </span>
						</a>
					</li>
					 
					  
						</ul>
					</li>
					
				</ul><!--/.nav-list-->

				<div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="icon-home home-icon"></i>
							<a href="<?php echo base_url(); ?>">Home</a>

							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						</li>

						<li>
							<a href="<?php echo base_url().$this->uri->segment(1); ?>"><?php echo ucwords($this->uri->segment(1)); ?></a>
						<?php if($this->uri->segment(2)):?>
							<span class="divider">
								<i class="icon-angle-right arrow-icon"></i>
							</span>
						<?php endif; ?>	
						</li>
					
						<li class="active"><?php echo $this->uri->segment(2);?></li>
						
					</ul><!--.breadcrumb-->

					<div class="nav-search" id="nav-search">
						<form class="form-search" />
							<span class="input-icon">
								<input type="text" placeholder="Search ..." class="input-small nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="icon-search nav-search-icon"></i>
							</span>
						</form>
					</div><!--#nav-search-->
				</div>