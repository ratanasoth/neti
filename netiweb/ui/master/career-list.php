<?php 
$name ="";
$des = "";
$id ="";
if($career->num_rows()>0){
    $name = $career->row()->title;
    $des = $career->row()->description;
    $id = $career->row()->careerid;
}
?>
<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Career Title: <?php echo $name;?>
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url("career/edit_career/".$id); ?>" 
               class="btn btn-success btn-sm pull-right"><i class="glyphicon glyphicon-edit"></i>Edit</a>
    </div>
</div>
<div>&nbsp;</div>
<div class="row">
    <div class="col-sm-12">
        <?php echo $des;?>
    </div>
</div>