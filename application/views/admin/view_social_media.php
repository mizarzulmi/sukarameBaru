<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Social Media</h1>
	</div>
</section>

<?php						
foreach ($social as $row) {
	if($row['social_name'] == 'Facebook') {
		$facebook = $row['social_url'];
	}
	if($row['social_name'] == 'Twitter') {
		$twitter = $row['social_url'];
	}
	if($row['social_name'] == 'LinkedIn') {
		$linkedin = $row['social_url'];
	}
	if($row['social_name'] == 'Google Plus') {
		$googleplus = $row['social_url'];
	}
	if($row['social_name'] == 'Pinterest') {
		$pinterest = $row['social_url'];
	}
	if($row['social_name'] == 'YouTube') {
		$youtube = $row['social_url'];
	}
	if($row['social_name'] == 'Instagram') {
		$instagram = $row['social_url'];
	}
	if($row['social_name'] == 'Tumblr') {
		$tumblr = $row['social_url'];
	}
	if($row['social_name'] == 'Flickr') {
		$flickr = $row['social_url'];
	}
	if($row['social_name'] == 'Reddit') {
		$reddit = $row['social_url'];
	}
	if($row['social_name'] == 'Snapchat') {
		$snapchat = $row['social_url'];
	}
	if($row['social_name'] == 'WhatsApp') {
		$whatsapp = $row['social_url'];
	}
	if($row['social_name'] == 'Quora') {
		$quora = $row['social_url'];
	}
	if($row['social_name'] == 'StumbleUpon') {
		$stumbleupon = $row['social_url'];
	}
	if($row['social_name'] == 'Delicious') {
		$delicious = $row['social_url'];
	}
	if($row['social_name'] == 'Digg') {
		$digg = $row['social_url'];
	}
}
?>

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
			<?php echo form_open_multipart(base_url().'admin/social_media',array('class' => 'form-horizontal')); ?>
				<div class="box box-info">
					<div class="box-body">						
						<p style="padding-bottom: 20px;">If you do not want to show a social media in your front end page, just leave the input field blank.</p>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="facebook" value="<?php echo $facebook; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="twitter" value="<?php echo $twitter; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">LinkedIn </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="linkedin" value="<?php echo $linkedin; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Google Plus </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="googleplus" value="<?php echo $googleplus; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Pinterest </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="pinterest" value="<?php echo $pinterest; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">YouTube </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="youtube" value="<?php echo $youtube; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Tumblr </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="tumblr" value="<?php echo $tumblr; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Flickr </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="flickr" value="<?php echo $flickr; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Reddit </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="reddit" value="<?php echo $reddit; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Snapchat </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="snapchat" value="<?php echo $snapchat; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">WhatsApp </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="whatsapp" value="<?php echo $whatsapp; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Quora </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="quora" value="<?php echo $quora; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">StumbleUpon </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="stumbleupon" value="<?php echo $stumbleupon; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Delicious </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="delicious" value="<?php echo $delicious; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Digg </label>
							<div class="col-sm-6">
								<input type="text" class="form-control" name="digg" value="<?php echo $digg; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			<?php echo form_close(); ?>
		</div>
	</div>

</section>