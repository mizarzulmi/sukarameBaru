<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_pricing']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_pricing['pricing_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Price-Table Start-->
<div class="price-area price-page pt_60 pb_90">
    <div class="container">
        <div class="row">
            <?php
            foreach ($pricing as $row) {
                ?>
                <div class="offset-md-2 col-md-8 offset-md-2 offset-lg-0 col-lg-4 offset-lg-0 offset-lg-0">
                    <div class="price-item">
                        <div class="price-header">
                            <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                            <h3><?php echo $row['title']; ?></h3>
                            <h2><?php echo $row['price']; ?></h2>
                            <p><?php echo $row['subtitle']; ?></p>
                        </div>
                        <div class="price-body">
                            <?php echo $row['text']; ?>
                        </div>
                        <div class="price-footer">
                            <div class="button-df">
                                <a href="<?php echo $row['button_url']; ?>"><?php echo $row['button_text']; ?> <i class="fa fa-chevron-circle-right"></i></a>
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
<!--Price-Table End-->