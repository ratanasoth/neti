<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Slide show for Home Page -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo base_url('assets/photo/slide1.png'); ?>" alt="" width="1200">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets/photo/slide2.png'); ?>" alt="" width="1200">
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url('assets/photo/slide3.png'); ?>" alt="" width="1200">
      <div class="carousel-caption">

      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- End of slide show section -->
<!-- Start welcome section -->
<h3 class="text-primary">Welcome</h3>
<blockquote class="text-justify">
    Net I Solutions was established in 2003, 
    its founding was based on the understanding that 
    most management issues in industries could be resolved 
    through the effective use of information technology.
</blockquote>
<!-- End of welcome section -->
<!-- Start of services section -->
<div class="row" style="background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat;">
    <div class="col-sm-12">
        <h4 class="text-white" style="padding: 3px;">Our Services</h4>
    </div>
</div>
<!-- Start thumbnail section -->
<br/>
 <div class="row">
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/thumb/th1.png'); ?>" alt="IT Solutions">
      <div class="caption">
          <h4 class="text-primary">IT System Integration</h4>
          <p class="text-justify">
            Net I Solutions employs young energetic and dynamic software and hardware 
            engineers to provide our valuable customers with speediest and most reliable 
            solutions and follow-up services.
        </p>
        <p><a href="#" class="btn btn-primary btn-xs" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/thumb/th3.png'); ?>" alt="IT Solutions">
      <div class="caption">
          <h4 class="text-primary">IT Education and Training</h4>
          <p class="text-justify">
            As more and more organizations around the world lay emphasis on the role of IT, 
            requirement of professionals with sound technical knowledge is in demand. 
            Net i company range of courses ...
        </p>
        <p><a href="#" class="btn btn-info btn-xs" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/thumb/th4.jpg'); ?>" alt="IT Solutions">
      <div class="caption">
          <h4 class="text-primary">Software Development</h4>
          <p class="text-justify">
            Software Development is one of our best services. We guarantee to provide 
            high quality, scalable and secure software packages to our customers for managing 
            their businesses.
            
        </p>
        <p><a href="#" class="btn btn-success btn-xs" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="<?php echo base_url('assets/thumb/th2.jpg'); ?>" alt="IT Solutions">
      <div class="caption">
          <h4 class="text-primary">Mobile Site Services</h4>
          <p class="text-justify">
            We aim to be the preferred partner in the field of telecommunication project 
            implementation in Cambodia. Our aim also to export our workforces in telecom 
            turn-key solutions in ...
        </p>
        <p><a href="#" class="btn btn-danger btn-xs" role="button">Read More</a></p>
      </div>
    </div>
  </div>
</div>
<!-- End of thumbnail section -->
<!-- Start of what news section -->
<div class="row" style="background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat;">
    <div class="col-sm-12">
        <h4 class="text-white" style="padding: 3px;">What's News</h4>
    </div>
</div>
<br/>
<div class="row">
    <div class="col-sm-12">
        <p class="text-primary"><strong>Award Winning 2011</strong></p>
        <p class="text-justify">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Duis vitae aliquam massa. Nunc dapibus a tortor sit amet laoreet. 
            Sed sit amet sem ut libero fermentum laoreet vitae in mauris. 
            Maecenas nec mi eu est lacinia elementum nec non elit. 
            Nulla fermentum consequat nulla nec suscipit. 
            Maecenas ac enim et ligula porta maximus. Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit. Proin leo quam, dignissim ut ullamcorper a, 
            luctus in ipsum. Curabitur mattis, purus vel efficitur fringilla, odio urna lobortis magna, 
            at viverra ex urna eget nisi.
        </p>
        <p class="text-primary"><strong>ICT Seminar 2015</strong></p>
        <p class="text-justify">
            Pellentesque accumsan nisl dui, eu pellentesque lacus sollicitudin in. 
            Vestibulum vel ultricies magna. In hac habitasse platea dictumst. 
            Vivamus at pharetra tellus. Suspendisse ultrices nunc at luctus facilisis. 
            Donec at congue sem. Cras nisi nulla, vulputate ac neque non, 
            luctus vulputate arcu. Nam turpis sapien, elementum vel lacinia eu, fringilla 
            scelerisque tellus. Sed urna orci, pharetra quis orci ut, posuere euismod nunc. 
            Nunc pulvinar velit urna, vitae sollicitudin eros pretium in. 
            Pellentesque varius neque neque, sit amet elementum leo convallis id. 
            Nunc eu auctor erat, quis pulvinar ligula.
        </p>
    </div>
</div>
<!-- End of what is news section -->
<!-- Start of our partners section -->
<div class="row" style="background: url(<?php echo base_url('assets/images/bg.png'); ?>) repeat;">
    <div class="col-sm-12">
        <h4 class="text-white" style="padding: 3px;">Our Partners</h4>
    </div>
</div>
<br/>
<div class='row'>
    <div class='col-sm-12'>
        <ul id='partners'>
            <li><img src="<?php echo base_url('assets/images/partner/microsoft.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/android.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/facebook.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/line.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/skype.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/drive.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/chat.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/whatsapp.png') ; ?>" /></li>
            <li><img src="<?php echo base_url('assets/images/partner/photoshop.png') ; ?>" /></li>
        </ul>
    </div>
</div>

<!-- End of partners section -->
<!-- Include flexi script -->
<script src="<?php echo base_url('assets/flexi/js/jquery.flexisel.js'); ?>"></script>
<script>
    $(window).load(function() {
        $("#partners").flexisel({
            visibleItems: 6,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,            
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: { 
                portrait: { 
                    changePoint:480,
                    visibleItems: 1
                }, 
                landscape: { 
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: { 
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<!-- End of Flexi script -->