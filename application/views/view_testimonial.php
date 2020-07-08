<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_testimonial']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_testimonial['testimonial_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Testimonial-Two Start-->
<div class="testimonial-area testimonial-grid pt_60 pb_90">
    <div class="container">
        <div class="row">
            <?php
            foreach ($testimonials as $row) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-item mt_30">
                        <div class="testimonial-photo">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="">
                        </div>
                        <div class="testimonial-name">
                            <h4><?php echo $row['name']; ?></h4>
                            <p><?php echo $row['designation']; ?></p>
                        </div>
                        <div class="testimonial-description">
                            <p>
                                <?php echo nl2br($row['comment']); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Testimonial-Two End-->