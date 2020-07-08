<?php
if(!$this->session->userdata('id')) {
	redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Subscriber</h1>
	</div>
	<div class="content-header-right">
		<a href="<?php echo base_url(); ?>admin/subscriber/delete_pending" class="btn btn-primary btn-sm" onClick="return confirm('Are you sure?');">Remove Pending Subscribers</a>
		<a href="<?php echo base_url(); ?>admin/subscriber/export_csv" class="btn btn-primary btn-sm" onClick="return confirm('Are you sure?');">Export as CSV</a>
		<a href="<?php echo base_url(); ?>admin/subscriber/send_email" class="btn btn-primary btn-sm">Send Email to Subscribers</a>
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

			<div class="box box-info">        
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					    <th>SL</th>
					    <th>Subscriber Email</th>
					    <th>Action</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$i=0;
					foreach ($active_subscribers as $row) {
						$i++;
						?>
						<tr>
					        <td><?php echo $i; ?></td>
					        <td><?php echo $row['subs_email']; ?></td>
					        <td>
					            <a href="<?php echo base_url(); ?>admin/subscriber/delete/<?php echo $row['subs_id']; ?>" class="btn btn-danger btn-xs" onClick="return confirm('Are you sure?');">Delete</a>  
					        </td>
					    </tr>
						<?php
					}
					?>
					</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>