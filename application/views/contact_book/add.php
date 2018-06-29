<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Contact Book Add</h3>
            </div>
            <?php echo form_open('contact_book/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="No_Telp" class="control-label"><span class="text-danger">*</span>No Telp</label>
						<div class="form-group">
							<input type="text" name="No_Telp" value="<?php echo $this->input->post('No_Telp'); ?>" class="form-control" id="No_Telp" />
							<span class="text-danger"><?php echo form_error('No_Telp');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="Address" class="control-label"><span class="text-danger">*</span>Address</label>
						<div class="form-group">
							<textarea name="Address" class="form-control" id="Address"><?php echo $this->input->post('Address'); ?></textarea>
							<span class="text-danger"><?php echo form_error('Address');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>