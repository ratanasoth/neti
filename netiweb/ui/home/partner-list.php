<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Our Partners</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class="partner">
            <?php foreach($partners as $partner){ ?>
            <li>
                <a href="<?php echo $partner->url;?>">
                    <img src="<?php echo base_url('assets/images/partner/'.$partner->img);?>" alt="partner" width="90" />
                </a>
            </li>
            <?php } ?>
        </ul>
         <ul class="partner">
            <?php foreach($partners as $partner){ ?>
            <li>
                <a href="<?php echo $partner->url;?>">
                    <img src="<?php echo base_url('assets/images/partner/'.$partner->img);?>" alt="partner" width="90" />
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>
<script>
    $(function(){
        $("#partner").css('background','#428bca');
    });
</script>
