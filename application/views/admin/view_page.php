<?php
if(!$this->session->userdata('id')) {
    redirect(base_url().'admin');
}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Page Section</h1>
	</div>
</section>

<section class="content" style="min-height:auto;margin-bottom: -30px;">
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
		</div>
	</div>
</section>


<section class="content">

    <div class="row">
        <div class="col-md-12">
                            
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">Home</a></li>
                        <li><a href="#tab_2" data-toggle="tab">About</a></li>
                        <li><a href="#tab_4" data-toggle="tab">FAQ</a></li>
                        <li><a href="#tab_5" data-toggle="tab">Service</a></li>
                        <li><a href="#tab_7" data-toggle="tab">Testimonial</a></li>
                        <li><a href="#tab_8" data-toggle="tab">News</a></li>
                        <li><a href="#tab_16" data-toggle="tab">Event</a></li>
                        <li><a href="#tab_9" data-toggle="tab">Contact</a></li>
                        <li><a href="#tab_10" data-toggle="tab">Search</a></li>
                        <li><a href="#tab_11" data-toggle="tab">Terms</a></li>
                        <li><a href="#tab_12" data-toggle="tab">Privacy</a></li>
                        <li><a href="#tab_14" data-toggle="tab">Team</a></li>
                        <li><a href="#tab_15" data-toggle="tab">Portfolio</a></li>

                    </ul>
                    <div class="tab-content">
                        
                        <div class="tab-pane active" id="tab_1">

                            <h3 class="sec_title">Meta Items</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="title" class="form-control" value="<?php echo $page_home['title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_keyword" style="height:60px;"><?php echo $page_home['meta_keyword']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-6">
                                        <textarea class="form-control" name="meta_description" style="height:60px;"><?php echo $page_home['meta_description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home">Update</button>
                                    </div>
                                </div>                 
                            <?php echo form_close(); ?>

                            <h3 class="sec_title">Welcome Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_welcome_title" class="form-control" value="<?php echo $page_home['home_welcome_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_welcome_subtitle" class="form-control" value="<?php echo $page_home['home_welcome_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Text </label>
                                    <div class="col-sm-6">
                                        <textarea name="home_welcome_text" class="form-control editor_short" cols="30" rows="10"><?php echo $page_home['home_welcome_text']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Video </label>
                                    <div class="col-sm-6">
                                        <textarea name="home_welcome_video" class="form-control" cols="30" rows="10" style="height:100px;"><?php echo $page_home['home_welcome_video']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 1 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar1_text" class="form-control" value="<?php echo $page_home['home_welcome_pbar1_text']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 1 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar1_value" class="form-control" value="<?php echo $page_home['home_welcome_pbar1_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 2 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar2_text" class="form-control" value="<?php echo $page_home['home_welcome_pbar2_text']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 2 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar2_value" class="form-control" value="<?php echo $page_home['home_welcome_pbar2_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 3 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar3_text" class="form-control" value="<?php echo $page_home['home_welcome_pbar3_text']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 3 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar3_value" class="form-control" value="<?php echo $page_home['home_welcome_pbar3_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 4 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar4_text" class="form-control" value="<?php echo $page_home['home_welcome_pbar4_text']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 4 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar4_value" class="form-control" value="<?php echo $page_home['home_welcome_pbar4_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Progress Bar 5 - Text </label>
                                    <div class="col-sm-4">
                                        <input type="text" name="home_welcome_pbar5_text" class="form-control" value="<?php echo $page_home['home_welcome_pbar5_text']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Progress Bar 5 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_welcome_pbar5_value" class="form-control" value="<?php echo $page_home['home_welcome_pbar5_value']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_welcome_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_welcome_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_welcome_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_welcome">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            
                            <h3 class="sec_title">Welcome Section (Video Background)</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Video Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_welcome_video_bg']; ?>" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Video Background </label>
                                    <div class="col-sm-6" style="padding-top:5px;">
                                        <input type="file" name="home_welcome_video_bg">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_welcome_video_bg">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Why Choose Us Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_why_choose_title" class="form-control" value="<?php echo $page_home['home_why_choose_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_why_choose_subtitle" class="form-control" value="<?php echo $page_home['home_why_choose_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_why_choose_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_why_choose_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_why_choose_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_why_choose">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Feature Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_feature_title" class="form-control" value="<?php echo $page_home['home_feature_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_feature_subtitle" class="form-control" value="<?php echo $page_home['home_feature_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_feature_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_feature_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_feature_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_feature">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Service Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_service_title" class="form-control" value="<?php echo $page_home['home_service_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_service_subtitle" class="form-control" value="<?php echo $page_home['home_service_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_service_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_service_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_service_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_service">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                            <h3 class="sec_title">Counter Information Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 1 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_title" class="form-control" value="<?php echo $page_home['counter_1_title']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 1 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_value" class="form-control" value="<?php echo $page_home['counter_1_value']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 1 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_1_icon" class="form-control" value="<?php echo $page_home['counter_1_icon']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 2 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_title" class="form-control" value="<?php echo $page_home['counter_2_title']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 2 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_value" class="form-control" value="<?php echo $page_home['counter_2_value']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 2 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_2_icon" class="form-control" value="<?php echo $page_home['counter_2_icon']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 3 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_title" class="form-control" value="<?php echo $page_home['counter_3_title']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 3 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_value" class="form-control" value="<?php echo $page_home['counter_3_value']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 3 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_3_icon" class="form-control" value="<?php echo $page_home['counter_3_icon']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Item 4 - Title </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_title" class="form-control" value="<?php echo $page_home['counter_4_title']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 4 - Value </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_value" class="form-control" value="<?php echo $page_home['counter_4_value']; ?>">
                                    </div>
                                    <label for="" class="col-sm-2 control-label">Item 4 - Icon </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="counter_4_icon" class="form-control" value="<?php echo $page_home['counter_4_icon']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="counter_status" class="form-control select2" style="width:auto;">
                                            <option value="Show" <?php if($page_home['counter_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                            <option value="Hide" <?php if($page_home['counter_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_counter_text">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                            <h3 class="sec_title">Counter Photo Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Counter Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['counter_photo']; ?>" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Counter Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="counter_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_counter_photo">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Portfolio Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_portfolio_title" class="form-control" value="<?php echo $page_home['home_portfolio_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_portfolio_subtitle" class="form-control" value="<?php echo $page_home['home_portfolio_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_portfolio_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_portfolio_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_portfolio_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_portfolio">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Booking Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Booking Form Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_booking_form_title" class="form-control" value="<?php echo $page_home['home_booking_form_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Booking FAQ Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_booking_faq_title" class="form-control" value="<?php echo $page_home['home_booking_faq_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_booking_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_booking_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_booking_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_booking">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Booking Photo Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Booking Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_booking_photo']; ?>" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Booking Background</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="home_booking_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_booking_photo">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>



                            <h3 class="sec_title">Team Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_team_title" class="form-control" value="<?php echo $page_home['home_team_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_team_subtitle" class="form-control" value="<?php echo $page_home['home_team_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_team_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_team_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_team_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_team">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Pricing Table Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_ptable_title" class="form-control" value="<?php echo $page_home['home_ptable_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_ptable_subtitle" class="form-control" value="<?php echo $page_home['home_ptable_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_ptable_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_ptable_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_ptable_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_pricing_table">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Testimonial Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_testimonial_title" class="form-control" value="<?php echo $page_home['home_testimonial_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_testimonial_subtitle" class="form-control" value="<?php echo $page_home['home_testimonial_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_testimonial_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_testimonial_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_testimonial_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_testimonial">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>

                            <h3 class="sec_title">Testimonial Photo Section</h3>
                            <?php echo form_open_multipart(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Existing Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_testimonial_photo']; ?>" class="existing-photo" style="height:180px;">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">New Photo</label>
                                    <div class="col-sm-6" style="padding-top:6px;">
                                        <input type="file" name="home_testimonial_photo">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_testimonial_photo">Update</button>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                            <h3 class="sec_title">Blog Section</h3>
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Title </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_title" class="form-control" value="<?php echo $page_home['home_blog_title']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">SubTitle </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="home_blog_subtitle" class="form-control" value="<?php echo $page_home['home_blog_subtitle']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">How many item to show? </label>
                                    <div class="col-sm-2">
                                        <input type="text" name="home_blog_item" class="form-control" value="<?php echo $page_home['home_blog_item']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Show on Home? </label>
                                    <div class="col-sm-2">
                                        <select name="home_blog_status" class="form-control select2" style="width:auto;">
                                        <option value="Show" <?php if($page_home['home_blog_status'] == 'Show') {echo 'selected';} ?>>Show</option>
                                        <option value="Hide" <?php if($page_home['home_blog_status'] == 'Hide') {echo 'selected';} ?>>Hide</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_home_blog">Update</button>
                                    </select>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>


                        </div>

                        <div class="tab-pane" id="tab_2">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="about_heading" class="form-control" value="<?php echo $page_about['about_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">About Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="about_content" class="form-control" cols="30" rows="10" id="editor1"><?php echo $page_about['about_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_about" class="form-control" value="<?php echo $page_about['mt_about']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_about" style="height:60px;"><?php echo $page_about['mk_about']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_about" style="height:60px;"><?php echo $page_about['md_about']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_about">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>
                        


                        <div class="tab-pane" id="tab_4">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">FAQ Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="faq_heading" class="form-control" value="<?php echo $page_faq['faq_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_faq" class="form-control" value="<?php echo $page_faq['mt_faq']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_faq" style="height:60px;"><?php echo $page_faq['mk_faq']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_faq" style="height:60px;"><?php echo $page_faq['md_faq']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>



                        <div class="tab-pane" id="tab_5">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Service Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="service_heading" class="form-control" value="<?php echo $page_service['service_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_service" class="form-control" value="<?php echo $page_service['mt_service']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_service" style="height:60px;"><?php echo $page_service['mk_service']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_service" style="height:60px;"><?php echo $page_service['md_service']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>



                        <div class="tab-pane" id="tab_7">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Testimonial Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="testimonial_heading" class="form-control" value="<?php echo $page_testimonial['testimonial_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_testimonial" class="form-control" value="<?php echo $page_testimonial['mt_testimonial']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_testimonial" style="height:60px;"><?php echo $page_testimonial['mk_testimonial']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_testimonial" style="height:60px;"><?php echo $page_testimonial['md_testimonial']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>



                        <div class="tab-pane" id="tab_8">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">News Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="news_heading" class="form-control" value="<?php echo $page_news['news_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_news" class="form-control" value="<?php echo $page_news['mt_news']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_news" style="height:60px;"><?php echo $page_news['mk_news']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_news" style="height:60px;"><?php echo $page_news['md_news']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_news">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>



                        <div class="tab-pane" id="tab_16">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Event Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="event_heading" class="form-control" value="<?php echo $page_event['event_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_event" class="form-control" value="<?php echo $page_event['mt_event']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_event" style="height:60px;"><?php echo $page_event['mk_event']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_event" style="height:60px;"><?php echo $page_event['md_event']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_event">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>


                        <div class="tab-pane" id="tab_9">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="contact_heading" class="form-control" value="<?php echo $page_contact['contact_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Address </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_address" style="height:60px;"><?php echo $page_contact['contact_address']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Email </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_email" style="height:60px;"><?php echo $page_contact['contact_email']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Phone </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_phone" style="height:60px;"><?php echo $page_contact['contact_phone']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Contact Map (iframe Code) </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="contact_map" style="height:120px;"><?php echo $page_contact['contact_map']; ?></textarea>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_contact" class="form-control" value="<?php echo $page_contact['mt_contact']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_contact" style="height:60px;"><?php echo $page_contact['mk_contact']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_contact" style="height:60px;"><?php echo $page_contact['md_contact']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_contact">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>


                        <div class="tab-pane" id="tab_10">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Search Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="search_heading" class="form-control" value="<?php echo $page_search['search_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_search" class="form-control" value="<?php echo $page_search['mt_search']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_search" style="height:60px;"><?php echo $page_search['mk_search']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_search" style="height:60px;"><?php echo $page_search['md_search']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_search">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>
                        



                        <div class="tab-pane" id="tab_11">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="term_heading" class="form-control" value="<?php echo $page_term['term_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Term & Condition Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="term_content" class="form-control" cols="30" rows="10" id="editor2"><?php echo $page_term['term_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_term" class="form-control" value="<?php echo $page_term['mt_term']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_term" style="height:60px;"><?php echo $page_term['mk_term']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_term" style="height:60px;"><?php echo $page_term['md_term']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_term">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>


                        <div class="tab-pane" id="tab_12">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="privacy_heading" class="form-control" value="<?php echo $page_privacy['privacy_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Privacy Policy Content </label>
                                    <div class="col-sm-9">
                                        <textarea name="privacy_content" class="form-control" cols="30" rows="10" id="editor3"><?php echo $page_privacy['privacy_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_privacy" class="form-control" value="<?php echo $page_privacy['mt_privacy']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_privacy" style="height:60px;"><?php echo $page_privacy['mk_privacy']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_privacy" style="height:60px;"><?php echo $page_privacy['md_privacy']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_privacy">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>





                        <div class="tab-pane" id="tab_14">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Team Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="team_heading" class="form-control" value="<?php echo $page_team['team_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_team" class="form-control" value="<?php echo $page_team['mt_team']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_team" style="height:60px;"><?php echo $page_team['mk_team']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_team" style="height:60px;"><?php echo $page_team['md_team']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_team">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>




                        <div class="tab-pane" id="tab_15">
                            <?php echo form_open(base_url().'admin/page/update',array('class' => 'form-horizontal')); ?>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Portfolio Heading </label>
                                    <div class="col-sm-6">
                                        <input type="text" name="portfolio_heading" class="form-control" value="<?php echo $page_portfolio['portfolio_heading']; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Title </label>
                                    <div class="col-sm-9">
                                        <input type="text" name="mt_portfolio" class="form-control" value="<?php echo $page_portfolio['mt_portfolio']; ?>">
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Keyword </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="mk_portfolio" style="height:60px;"><?php echo $page_portfolio['mk_portfolio']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label">Meta Description </label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="md_portfolio" style="height:60px;"><?php echo $page_portfolio['md_portfolio']; ?></textarea>
                                    </div>
                                </div>  
                                <div class="form-group">
                                    <label for="" class="col-sm-2 control-label"></label>
                                    <div class="col-sm-6">
                                        <button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
                                    </div>
                                </div>                              
                            <?php echo form_close(); ?>
                        </div>





                    </div>
                </div>

                
        </div>
    </div>

</section>