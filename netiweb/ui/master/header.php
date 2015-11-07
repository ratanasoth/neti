<!DOCTYPE html>
<html>
    <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />    
             <!-- Start CSS and JavaScript Link Section  -->
            <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" />
            <link href="<?php echo base_url('assets/css/custom.css');?>" rel="stylesheet" />
            <script src="<?php echo base_url('assets/js/jquery-1.9.1.js');?>"></script>
            <script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
            <!-- End of CSS and JavaScript Link Section -->
        <title>
            <?php echo $title;?>
        </title>
            <style>
                html,body{margin: 0; padding: 0;}
                div.container-fluid{
                    background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat-x;
                }
                ul#nav1>li>a,ul#nav2>li>a
                {
                    color: #FFF;
                }
                ul#nav1>li>a:focus,ul#nav2>li>a:focus{
                 color: #036;   
                }
               
            </style>
    </head>
    <body>
       <nav class="navbar navbar-default">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <a class="navbar-brand" href="<?php echo base_url('admin'); ?>" style="color:#FFF">Admin</a>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav" id="nav1">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-home"></i> Home<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url("slideshow");?>">&raquo; Slideshow</a></li>
                            <li><a href="<?php echo base_url("service");?>">&raquo; Services</a></li>
                            <li><a href="<?php echo base_url("welcome");?>">&raquo; Welcome</a></li>
                            <li><a href="<?php echo base_url("news");?>">&raquo; News</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url('menu'); ?>"><i class="glyphicon glyphicon-list"></i> Menu</a></li>
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-file"></i> Main Pages <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="<?php echo base_url("about");?>">&raquo; About Us</a></li>
                      <li><a href="#">&raquo; Contact Us</a></li>
                      <li><a href="<?php echo base_url('career'); ?>">&raquo; Career</a></li>
                      <li><a href="#">&raquo; Our Services</a>
						
					  </li>
                      <li><a href="<?php echo base_url("partner");?>">&raquo; Partners</a></li>
                      <li><a href="<?php echo base_url("customer");?>">&raquo; Customers</a></li>
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url('page'); ?>"><i class="glyphicon glyphicon-file"></i> Other Pages</a></li>
                  <li><a href="<?php echo base_url('user'); ?>"><i class="glyphicon glyphicon-user"></i> Users</a></li>
                </ul>
               <!-- right menu bar for user profile -->
                <ul class="nav navbar-nav navbar-right" id="nav2">
                 
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Profile <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('user/newuser'); ?>">&raquo; New User</a></li>
                      <li><a href="#">&raquo; Change Profile</a></li>
                      <li><a href="#">&raquo; Change Password</a></li>
                      <li role="separator" class="divider"></li>
                      <li><a href="<?php echo base_url('admin/logout') ;?>">&raquo; Logout</a></li>
                    </ul>
                  </li>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
    
        <div class="container" style="margin-top: 27px; margin-bottom: 36px;">
            