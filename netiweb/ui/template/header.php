<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Start Website Information Section-->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Net I, Net I Solutions, Net I Software Solutions, Net I Network Solutions, Mobile Site Solutions">
        <meta name="keywords" content="Net I, Solutions, Network, Mobile Site, Camera Security, Server, Windows, Linux, Mail Server">
        <meta name="author" content="Net I Solutions , Develop by HENG Vongkol">
        <title><?php $title; ?></title>
        <!-- End of Information Section -->
        <!-- Start CSS and JavaScript Link Section  -->
        <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" />
	<link href="<?php echo base_url('assets/flexi/css/style.css');?>" rel="stylesheet" />
	<script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
        <!-- End of CSS and JavaScript Link Section -->
       
            <style>
                html,body{margin: 0; padding: 0;}
                nav.ch{
                    background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat-x;
                    border: none;
                    border-radius: 0;
                }
                ul#nav1>li>a,ul#nav2>li>a
                {
                    color: #BCF;
                }
                ul#nav1>li>a:hover
                {

                    background: #428bca;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #036;   
                }
               
            </style>
    </head>
    <!-- Start body section -->
    <body>
        <nav class="navbar ch">
            <div class="container" id="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="glyphicon glyphicon-align-justify text-white"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#FFF">
                      <img align="left" src="<?php echo base_url('assets/images/neti-logo.png'); ?>" width="45" height="45" style="margin-top:-13px;" />
                     
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right" id="nav1">
                  <li><a href="<?php echo base_url(); ?>">Home</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Our Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">&raquo; IT Solutions</a></li>
                      <li><a href="#">&raquo; IT Training</a></li>
                      <li><a href="#">&raquo; Software Development</a></li>
                      <li><a href="#">&raquo; Mobile Site Services</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url('partner/partnerlist'); ?>">Our Partners</a></li>
                  <li><a href="#">Customers</a></li>
                  <li><a href="<?php echo base_url('career/openjob'); ?>">Career</a></li>
                  <li><a href="<?php echo base_url('aboutus'); ?>">About Us</a></li>
                  <li><a href="<?php echo base_url('contactus'); ?>">Contact Us</a></li>
                </ul>
               
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        <div class="social-button" id="social">
            <ul class="social-icon">
                <li><a href="#">
                        <img src="<?php echo base_url('assets/images/facebook.png');?>" width="36"/>
                </a></li>
                 <li><a href="#">
                        <img src="<?php echo base_url('assets/images/gplus.png');?>" width="36"/>
                </a></li>
                 <li><a href="#">
                        <img src="<?php echo base_url('assets/images/linkedin.png');?>" width="36"/>
                </a></li>
            </ul>
        </div>
        <div class="container" style="margin-top: 27px; margin-bottom: 36px;">
        