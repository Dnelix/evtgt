<?php require('includes/dynamic.php'); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?= $pagetitle; ?></title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/revolution-slider.css" rel="stylesheet">
<link href="css/owl.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- SEO -->
<meta name="title" content="<?=$metatitle;?>">
<meta name="description" content="<?=$metadesc;?>">
<meta name="keywords" content="<?=$pgz;?>, Event, Gates, eventgate, bulksms, IV, invitations, plan, planner, manager">
<meta name="copyright" content="&copy;2019 - Dnelix Enterprise">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header -->
    <header class="main-header style-two">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	
                <!-- Top Left -->
                <div class="top-left pull-right clearfix">
                	<div class="email pull-left"><a href="mailto:info@eventgates.ng"><span class="f-icon flaticon-email145"></span> info@eventgates.ng</a></div>
                    <div class="phone pull-left"><a href="#"><span class="f-icon flaticon-phone325"></span> (+234) 81-6537-0642</a></div>
                </div>
                
            </div>
        </div>
        
        <!-- Search Box -->
        <div class="search-box toggle-box">
        	<div class="auto-container clearfix">
                
                <!-- Search Form -->
                <div class="search-form">
                	<form method="post" action="#">
                        <div class="form-group">
							<input type="search" name="search" value="" placeholder="Search">
                            <button class="search-submit" type="submit"><span class="f-icon flaticon-magnifying-glass16"></span></button>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
        
        <!-- Header Lower -->
        <div class="header-lower">
        	<div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo"><a href="home"><img src="images/logo/logo-evgt.png" alt="Event Gates" title="Event Gates"></a></div>
                
                <!--Right Container-->
                <div class="right-cont clearfix">
                	<div class="search-btn">
                    	<div class="f-icon flaticon-magnifying47"></div>
                        <span class="curve"></span>
                    </div>
                    
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->      
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">                                                                                              
                            <ul class="nav navbar-nav navbar-right">
                                <li class="<?= $pgz=='home' ? 'current':''; ?>"><a href="home">Home</a></li>
                                <li class="<?= $pgz=='events' ? 'current':''; ?>"><a href="events">Events</a></li>
                                <li class="<?= $pgz=='about' ? 'current':''; ?>"><a href="about">About</a></li>
                                <li class="<?= $pgz=='blog' ? 'current':''; ?>"><a href="#">Blog</a></li>
                                <li class="<?= $pgz=='contact' ? 'current':''; ?>"><a href="contact">Contact Us</a></li>
                                <li class="dropdown current"><a href="backstage/">Login to Account</a>
                                    <!--ul class="submenu">
                                        <li><a href="services.html">Style One</a></li>
                                        <li><a href="services-2.html">Style Two</a></li>
                                    </ul-->
                                </li>
                            </ul>
                            <div class="clearfix"></div>
        
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>
                
            </div>
            
        </div>
        
        
    </header>
    <!--End Main Header -->