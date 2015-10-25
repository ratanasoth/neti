<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            Page List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('page/newpage'); ?>" class="btn btn-success btn-xs pull-right">+ Add New</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class='tbl'>
            <thead>
                <tr>
                    <th>Page Id</th>
                    <th>Page Title</th>
                    <th>Page URL</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($pages as $page){ ?>
                <tr>
                    <td><?php echo $page->pageid; ?></td>
                    <td><?php echo $page->title; ?></td>
                    <td><?php echo $page->url; ?></td>
                    <td>
                         <a href='<?php echo base_url('page/delete/'.$page->pageid);?>' title="Delete" onclick="return confirm('Do you want to delete it?')"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url('page/editpage/'.$page->pageid); ?>" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>   
        </table>
    </div>
</div>