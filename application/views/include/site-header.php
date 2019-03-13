<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo isset($page_title) ? $page_title : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <link href="<?php echo base_url();?>assets/css/site-style.css" rel="stylesheet">

    <!--Font-->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">




    <!-- SCRIPT 
    ============================================================-->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


</head>
<body>
<!--HEADER ROW-->
<div id="header-row">
    <div class="container">
        <div class="row">
            <!--LOGO-->
            <div class="span3">
                <a class="brand" href="<?=site_url('site')?>">
                	<?php if($infos[0]->institute_logo): ?>
                    <img src="<?=base_url()."media/schools/".$infos[0]->institute_logo?>" alt="<?=$infos[0]->institute_name?>"/>
                    <?php else: ?>
                    	<a class="brand" href="<?=site_url('site')?>"><h2 style="margin:0px;"><?=$infos[0]->institute_name?></h2></a>
                    <?php endif;?>
                </a>
            </div>
            <!-- /LOGO -->

            <!-- MAIN NAVIGATION -->
            <div class="span9">
                <div class="navbar pull-right">
                    <div class="navbar-inner">
                        <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
                        <div class="nav-collapse collapse navbar-responsive-collapse">
                            <ul class="nav">
                                <li><a href="<?=site_url('site')?>">Home</a></li>
                                <li><a href="<?=site_url('site/about-us')?>">About Us</a></li>
                                <li class="dropdown">
                                    <a href="<?=site_url('site/current-students')?>" class="dropdown-toggle" data-toggle="dropdown">Students<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?=site_url('site/current-students')?>">Current Students</a></li>
                                        <li><a href="<?=site_url('site/ex-students')?>">Ex Students</a></li>
                                    </ul>

                                </li>
                                <li><a href="<?=site_url('site/teachers')?>">Teachers</a></li>
                                <li><a href="<?=site_url('site/committee-members')?>">Committee Members</a></li>
                                <li><a href="<?=site_url('site/staffs')?>">Staffs</a></li>
                                <li><a href="<?=site_url('site/notices')?>">Notices</a></li>
                                
                                <li><a href="<?=site_url('site/contact')?>">Contact</a></li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <!-- MAIN NAVIGATION -->
        </div>
    </div>
</div>
<!-- /HEADER ROW -->

<div class="container">