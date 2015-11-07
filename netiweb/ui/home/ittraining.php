<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>IT Education and Training</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <strong class="text-success">IT Professional Training Courses at Net I Training</strong><br/>
        <br/>
        <p class="text-justify">
            As more and more organizations around the world lay emphasis on the role of IT, 
            requirement of professionals with sound technical knowledge is in demand. 
            Net i company range of courses equip a professional computer courses, 
            with well-known local and international certification to work 
            efficiently with/in IT. Whether it is handling IT productivity 
            tools or doing complex network configuration, NIIT short terms 
            courses prepare the person for that required niche. </p>
    </div>
</div>
<div class="row box">
    <div class="col-sm-4">
        <h4 class="text-info"><u>We offer</u></h4>
        <ul class="training-program">
            <li><strong class="text-success">Microsoft Training Program</strong></li>
            <li><strong class="text-success">RedHat Enterprise Linux</strong></li>
            <li><strong class="text-success">Oracle Database</strong></li>
            <li><strong class="text-success">CISCO</strong></li>
            <li><strong class="text-success">Sun Solaris</strong></li>
        </ul>
        <br/>
        <p class="text-danger text-justify">
            Net I has won award of being the best 
            IT professional training center which presented by IDG in 2011.
        </p>
    </div>
    <div class="col-sm-4">
         <img src="<?php echo base_url('assets/images/award.png'); ?>" alt="IT Training Program" class="img-responsive"/>
        
    </div>
    <div class="col-sm-4">
        <img src="<?php echo base_url('assets/images/ittraining.png'); ?>" alt="IT Training Program" class="img-responsive"/>
    </div>
</div>
<div class="row box">
    <div class="col-sm-12">
        <h4 class="text-info"><u>Authorized Testing Center</u></h4>
        <div>&nbsp;</div>
        <div class="col-sm-3">
            <img src="<?php echo base_url('assets/images/prometric.jpg');?>" alt="Pearson Vue" class="img-responsive" />
            
        </div>
        <div class="col-sm-2">
            <img src="<?php echo base_url('assets/images/pearsonvue.jpg'); ?>" alt="Pearson Vue" height="100" class="img-responsive"/>
        </div>
    </div>
</div>
<!-- Slider Section -->
<div class='row'>
    <div class='col-sm-12'>
        <ul id='partners'>
            <li><a href="#">
                    <img src="<?php echo base_url('assets/images/training/cisco.jpg'); ?>" alt="CISCO" />
            </a></li>
             <li><a href="#">
                    <img src="<?php echo base_url('assets/images/training/microsoft.gif'); ?>" alt="CISCO" />
            </a></li> 
            <li><a href="#">
                    <img src="<?php echo base_url('assets/images/training/redhat.png'); ?>" alt="CISCO" />
            </a></li> 
            <li><a href="#">
                    <img src="<?php echo base_url('assets/images/training/oracle.jpg'); ?>" alt="CISCO" />
            </a></li>
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