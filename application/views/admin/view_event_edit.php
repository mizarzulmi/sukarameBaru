<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Event</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/event" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>

<section class="content">

	<div class="row">
		<div class="col-md-12">

			<?php
			if($this->session->flashdata('error')) {
				?>
				<div class="callout callout-danger">
					<p><?php echo $this->session->flashdata('error'); ?></p>
				</div>
				<?php
			}
			if($this->session->flashdata('success')) {
				?>
				<div class="callout callout-success">
					<p><?php echo $this->session->flashdata('success'); ?></p>
				</div>
				<?php
			}
			?>

			<?php echo form_open_multipart(base_url().'admin/event/edit/'.$event['event_id'],array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Title <span>*</span></label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="event_title" value="<?php echo $event['event_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Short Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_content_short" style="height:80px;"><?php echo $event['event_content_short']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Content <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control editor" name="event_content"><?php echo $event['event_content']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Start Date <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_start_date" value="<?php echo $event['event_start_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event End Date <span>*</span></label>
							<div class="col-sm-2">
								<input type="text" class="form-control datepicker" name="event_end_date" value="<?php echo $event['event_end_date']; ?>">(Format: yy-mm-dd)
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Location <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_location" style="height:100px;"><?php echo $event['event_location']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Event Map <span>*</span></label>
							<div class="col-sm-9">
								<textarea class="form-control" name="event_map" style="height:100px;"><?php echo $event['event_map']; ?></textarea>
							</div>
						</div>
				        <h3 class="seo-info">Photo and Banner</h3>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing Featured Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($event['photo'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $event['photo']; ?>" alt="<?php echo $event['event_title']; ?>" class="existing-photo" style="width:140px;"><?php
				            	}
				            	?>
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Change Featured Photo</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="photo">
				            </div>
				        </div>
				        <div class="form-group">
				            <label for="" class="col-sm-2 control-label">Existing Banner</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				            	<?php
				            	if($event['banner'] == '') {
				            		echo 'No photo found';
				            	} else {
				            		?><img src="<?php echo base_url(); ?>public/uploads/<?php echo $event['banner']; ?>" alt="<?php echo $event['event_title']; ?>" class="existing-photo" style="width:300px;"><?php
				            	}
				            	?>
				            </div>
				        </div>
						<div class="form-group">
				            <label for="" class="col-sm-2 control-label">Change Banner</label>
				            <div class="col-sm-6" style="padding-top:6px;">
				                <input type="file" name="banner">
				            </div>
				        </div>
						<h3 class="seo-info">SEO Information</h3>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Title </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_title" value="<?php echo $event['meta_title']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Keywords </label>
							<div class="col-sm-9">
								<input type="text" class="form-control" name="meta_keyword" value="<?php echo $event['meta_keyword']; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Meta Description </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="meta_description" style="height:200px;"><?php echo $event['meta_description']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>