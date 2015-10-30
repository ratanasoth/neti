<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Careers
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("career/addcareer"); ?>" 
               class="btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-plus-sign"></i>Add New</a>
    </div>
</div>
<div>&nbsp;</div>
<div class="row">
    <?php foreach ($career->result() as $rows):?>
        <div class="col-sm-12">
            <div class="col-sm-5">
                <h5 class="text-info">Career Id : <?php echo $rows->careerid;?></h5>
                <h5 class="text-info">Position Name : <a href="<?php echo base_url("career/view_career/".$rows->careerid);?>"><?php echo $rows->position;?></a></h5>
            </div>
            <div class="col-sm-2">
                <h5>&nbsp;</h5>
                <a href="<?php echo base_url("career/edit_career/".$rows->careerid);?>" class="btn-xs btn-primary" onclick="return confirm('Are you sure want to edit?');" title="Edit"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;
                <a href="<?php echo base_url("career/delete_careerr/".$rows->careerid);?>" class="btn-xs btn-danger" onclick="return confirm('Are you sure want to delete?');" title="Delete"><i class="glyphicon glyphicon-trash"></i></a>
            </div>
        </div>
        <br/>
        <br/>
    <?php endforeach;?>
</div>