<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Edit Category</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/category" class="btn btn-primary btn-sm">View All</a>
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

	        <?php echo form_open_multipart(base_url().'admin/category/edit/'.$category['category_id'],array('class' => 'form-horizontal')); ?>

	        <div class="box box-info">

	            <div class="box-body">
	                <div class="form-group">
	                    <label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
	                    <div class="col-sm-4">
	                        <input type="text" class="form-control" name="category_name" value="<?php echo $category['category_name']; ?>">
	                    </div>
	                </div>
	                <div class="form-group">
						<label for="" class="col-sm-2 control-label">Existing Banner</label>
						<div class="col-sm-9" style="padding-top:5px">
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $category['category_banner']; ?>" alt="Slider Photo" style="width:180px;">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Banner </label>
						<div class="col-sm-6" style="padding-top:5px">
							<input type="file" name="banner">(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
	                <div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Title </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="meta_title" value="<?php echo $category['meta_title']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Keywords </label>
						<div class="col-sm-9">
							<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $category['meta_keyword']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Description </label>
						<div class="col-sm-9">
							<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $category['meta_description']; ?></textarea>
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