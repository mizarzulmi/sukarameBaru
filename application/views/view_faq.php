<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_faq']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_faq['faq_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--FAQ Start-->
<div class="faq-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="faq-group headstyle mt-30">
                    <div id="accordion">
                        <?php
                        $i=0;
                        foreach ($faqs as $row) {
                            $i++;
                            ?>
                            <div class="faq-item card">
                                <div class="faq-header" id="heading<?php echo $i; ?>">
                                    <button class="faq-button <?php if($i!=1) {echo 'collapsed';} ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><i class="fa fa-caret-right"></i><?php echo $row['faq_title']; ?></button>
                                </div>

                                <div id="collapse<?php echo $i; ?>" class="collapse <?php if($i==1) {echo 'show';} ?>" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                    <div class="faq-body">
                                        <?php echo $row['faq_content']; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--FAQ End-->