<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_contact']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_contact['contact_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Contact Start-->
<div class="contact-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo ADDRESS; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_address']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo PHONE_NUMBER; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_phone']); ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-item flex">
                    <div class="contact-icon">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="contact-text">
                        <h4><?php echo EMAIL_ADDRESS; ?></h4>
                        <p>
                            <?php echo nl2br($page_contact['contact_email']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="contact-form headstyle pt_90">
                    <h4><?php echo CONTACT_FORM; ?></h4>
                    <?php
                    if($this->session->flashdata('error')) {
                        echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                    }
                    if($this->session->flashdata('success')) {
                        echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                    }
                    ?>
                    <?php echo form_open(base_url().'contact/send_email',array('class' => '')); ?>
                        <div class="form-row row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="<?php echo NAME; ?>" name="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="phone" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" placeholder="<?php echo SUBJECT; ?>" name="subject" required>
                            </div>
                            <div class="form-group col-12">
                                <textarea class="form-control" placeholder="<?php echo MESSAGE; ?>" name="message" required></textarea>
                            </div>
                            <div class="form-group col-12">
                                <button type="submit" class="btn" name="form_contact"><?php echo SEND_MESSAGE; ?></button>
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Contact End-->

<!--Map Start-->
<div class="map-area">
    <?php echo $page_contact['contact_map']; ?>
</div>
<!--Map End-->