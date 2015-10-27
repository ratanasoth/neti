<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Customer List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('customer/newcustomer'); ?>" class="btn btn-success btn-xs pull-right">+ Add New</a>
    </div>
</div>
<div>&nbsp;</div>
<div class="row">
    <?php foreach ($list_customer->result() as $row):?>
    <div class="row-fluid">
        <div class="col-sm-2">
            <a href="<?php echo $row->url;?>" target="_blank">
                <h3 class="text-uppercase text-primary text-center"><?php echo $row->customername; ?></h3>
                <img src="<?php echo base_url() . $row->partimg . $row->img; ?>" class="img-thumbnail" width="100%" height="100%">
            </a>
            <br/>
            <br/>
            <a href="<?php echo base_url("customer/delete_customer/".$row->customerid);?>" class="pull-right btn btn-xs btn-danger" onclick="return confirm('Are you sure want to delete it?');"><i class="glyphicon glyphicon-trash"></i>&nbsp;Delete</a>
        </div>
    </div>
    <?php endforeach;?>
</div>