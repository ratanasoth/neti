<div class='row'>
    <div class="col-sm-6">
        <div class="table-caption">
            User List
        </div>
        
    </div>
    <div class="col-sm-6">
            <a href="<?php echo base_url('user/newuser'); ?>" class="btn btn-success btn-xs pull-right">+ Add New</a>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class='tbl'>
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>User Name</th>
                    <th>Type</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody
                <?php foreach($users as $user){ ?>
                <tr>
                    <td><?php echo $user->userid; ?></td>
                    <td><?php echo $user->firstname; ?></td>
                    <td><?php echo $user->lastname; ?></td>
                    <td><?php echo $user->gender; ?></td>
                    <td><?php echo $user->email; ?></td>
                    <td><?php echo $user->username; ?></td>
                    <td><?php echo $user->type; ?></td>
                    <td>
                        <a href='<?php echo base_url('user/delete/'.$user->userid);?>' title="Delete" onclick="return confirm('Do you want to delete it?')"><i class="glyphicon glyphicon-remove text-danger"></i></a>
                        &nbsp;&nbsp;
                        <a href="#" title='Edit'><i class="glyphicon glyphicon-edit"></i></a>
                    </td>
                </tr>
                <?php } ?>
        </table>
    </div>
</div>