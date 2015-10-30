<div class="row">
    <div class="col-sm-12">
        <h3 class="text-primary"><b>Our Customers</b></h3><hr class="hr"/>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <ul class="customer-list">
        <?php foreach($customers as $customer){ ?>
            <li>
                <a href="<?php echo $customer->url; ?>">
                    <img src="<?php echo base_url('assets/images/customer/'.$customer->img); ?>" alt="Our partner" width="170" />
                </a>
            </li>
        <?php } ?>
        </ul>
    </div>
</div>
<script>
    $(function(){
        $("#customer").css('background','#428bca');
    });
</script>