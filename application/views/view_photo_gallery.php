<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_photo_gallery']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_photo_gallery['photo_gallery_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Gallery Start-->
<div class="gallery-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <?php
            foreach ($photo_gallery as $row) {
                ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="gallery-group">
                        <div class="gallery-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>)">
                            <div class="gallery-bg"></div>
                            <div class="gallery-table">
                                <div class="gallery-icon">
                                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" class="magnific"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Gallery End-->