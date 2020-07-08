<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Facebook Comment Setup</h1>
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

			<?php echo form_open(base_url().'admin/comment',array('class' => 'form-horizontal')); ?>

				<div class="box box-info">
					<div class="box-body">
						
						<p style="padding-bottom: 20px;">Go to the facebook developer section (<a href="https://developers.facebook.com/docs/plugins/comments/">https://developers.facebook.com/docs/plugins/comments/</a>) to get your comment codes.</p>

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Code to use after the opening &lt;body&gt; tag </label>
							<div class="col-sm-9">
								<textarea class="form-control" name="code_body" style="height:300px;"><?php echo $comment['code_body']; ?></textarea>
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