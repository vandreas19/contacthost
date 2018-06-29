<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Contact Book Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('contact_book/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Contactbook</th>
						<th>No Telp</th>
						<th>User Id</th>
						<th>Address</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($contact_book as $c){ ?>
                    <tr>
						<td><?php echo $c['id_contactbook']; ?></td>
						<td><?php echo $c['No_Telp']; ?></td>
						<td><?php echo $c['user_id']; ?></td>
						<td><?php echo $c['Address']; ?></td>
						<td>
                            <a href="<?php echo site_url('contact_book/edit/'.$c['id_contactbook']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('contact_book/remove/'.$c['id_contactbook']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
