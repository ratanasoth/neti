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
        <title><?php echo $title; ?></title>
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
                    color: #EEF;
                }
                ul#nav1>li>a:hover
                {
                    background: #428bca;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #FFF;   
                 background: #428bca;
                }
                ul.sub-menu li a:hover{
                    background: #afd9ee;
                }
                ul#partners li a{
                    display: inline-block !important;
                    height: 120px; 
                    vertical-align: middle !important;
                    line-height:120px;
                }
                @media (max-width:480px){
                    ul#nav1{
                        background: #EEF !important;
                    }
                    ul#nav1>li>a{
                        color: #036;
                    }
                    ul#nav1>li>a:hover,ul#nav1>li>a:focus{
                        color: #FFF;
                    }
                }
            </style>
    </head>
    <!-- Start body section -->
    <body>
        <nav class="navbar ch" style="position: fixed;z-index: 9999;top:0;left:0;width:100%">
            <div class="container" id="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="glyphicon glyphicon-align-justify text-white"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo base_url(); ?>" style="color:#FFF">
                      <img align="left" src="<?php echo base_url('assets/images/neti-logo.png'); ?>" width="45" height="45" style="margin-top:-13px;" />
                      <span class="logo-text">&nbsp;&nbsp;Net I Solutions Co., Ltd</span>
                  </a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right" id="nav1">
                    <!-- Loop through all main menu -->
                    <?php foreach($menus as $menu){ ?>
                    <!-- if each main menu has no sub menu, print out as normal -->
                        <?php if($MyClass->isContainSub($menu->id)=='no'){ ?>
                    <li id="menu<?php echo $menu->id; ?>"><a href="<?php echo $menu->url; ?>"><?php echo $menu->name; ?></a></li>
                        <?php } else { ?>
                    <!-- if the main menu has sub menu -->
                        <li id="menu<?php echo $menu->id; ?>"><a href="<?php echo $menu->url; ?>" 
                                                                 class="dropdown-toggle" data-toggle="dropdown" 
                                                                 role="button" aria-haspopup="true" aria-expanded="false">
                                                                     <?php echo $menu->name; ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu sub-menu">                                                 
                         <?php foreach($subs as $sub){ ?>
                            <?php if($sub->parentid == $menu->id){ ?>
                             <li><a href="<?php echo $sub->url; ?>">&raquo; <?php echo $sub->name; ?></a></li>   
                            <?php } ?>
                       <?php } ?>
                          </ul>
                        </li>   
                        <?php } ?>
                      
                    <?php } ?>
                </ul>
              
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
        <div class="container" style="margin-top: 63px; margin-bottom: 36px;">
         