<!--Slider Start-->
<div class="slider">
    <div class="slide-carousel slider-one owl-carousel">
        <?php
        foreach ($sliders as $slider) {
            ?>
            <div class="slider-item flex" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $slider['photo']; ?>);">
                <div class="bg-slider"></div>
                <div class="container">
                    <div class="row">
                        <div class="<?php if($slider['position'] == 'Left') {echo 'col-lg-6 col-md-9 col-12';} else {echo 'offset-lg-6 col-lg-6 offset-md-3 col-md-9 col-12';} ?>">
                            <div class="slider-text">

                                <?php if($slider['heading']!=''): ?>
                                <div class="text-animated">
                                    <h1><?php echo $slider['heading']; ?></h1>
                                </div>
                                <?php endif; ?>
                                
                                <?php if($slider['content']!=''): ?>
                                <div class="text-animated">
                                    <p>
                                        <?php echo nl2br($slider['content']); ?>
                                    </p>
                                </div>
                                <?php endif; ?>
                            
                                
                                <?php if( $slider['button1_text'] != '' || $slider['button2_text'] != '' ): ?>
                                <div class="text-animated">
                                    <ul>                                        
                                        <?php if($slider['button1_text'] != ''): ?>
                                        <li><a href="<?php echo $slider['button1_url']; ?>"><?php echo $slider['button1_text']; ?></a></li>
                                        <?php endif; ?>

                                        <?php if($slider['button2_text'] != ''): ?>
                                        <li><a href="<?php echo $slider['button2_url']; ?>"><?php echo $slider['button2_text']; ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>

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
<!--Slider End-->

<!--About Start-->
<?php if($page_home['home_welcome_status'] == 'Show'): ?>
<div class="about-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt_30">
                <div class="about-content">
                    <div class="headline-left">
                        <h2>
                            <span><?php echo $page_home['home_welcome_title']; ?></span> <?php echo $page_home['home_welcome_subtitle']; ?>
                        </h2>
                    </div>
                    <p>
                        <?php echo $page_home['home_welcome_text']; ?>
                    </p>
                    
                    <div class="progress-gallery main-prog">

                        <?php if( $page_home['home_welcome_pbar1_text']!='' && $page_home['home_welcome_pbar1_value']!='' ): ?>
                        <div class="bar-container">
                            <p><?php echo $page_home['home_welcome_pbar1_text']; ?></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="<?php echo $page_home['home_welcome_pbar1_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $page_home['home_welcome_pbar1_value']; ?>%">
                                </div>
                            </div>
                            <div class="percentage-show"><?php echo $page_home['home_welcome_pbar1_value']; ?>%</div>
                        </div>
                        <?php endif; ?>

                        <?php if( $page_home['home_welcome_pbar2_text']!='' && $page_home['home_welcome_pbar2_value']!='' ): ?>
                        <div class="bar-container">
                            <p><?php echo $page_home['home_welcome_pbar2_text']; ?></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="<?php echo $page_home['home_welcome_pbar2_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $page_home['home_welcome_pbar2_value']; ?>%">
                                </div>
                            </div>
                            <div class="percentage-show"><?php echo $page_home['home_welcome_pbar2_value']; ?>%</div>
                        </div>
                        <?php endif; ?>

                        <?php if( $page_home['home_welcome_pbar3_text']!='' && $page_home['home_welcome_pbar3_value']!='' ): ?>
                        <div class="bar-container">
                            <p><?php echo $page_home['home_welcome_pbar3_text']; ?></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="<?php echo $page_home['home_welcome_pbar3_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $page_home['home_welcome_pbar3_value']; ?>%">
                                </div>
                            </div>
                            <div class="percentage-show"><?php echo $page_home['home_welcome_pbar3_value']; ?>%</div>
                        </div>
                        <?php endif; ?>

                        <?php if( $page_home['home_welcome_pbar4_text']!='' && $page_home['home_welcome_pbar4_value']!='' ): ?>
                        <div class="bar-container">
                            <p><?php echo $page_home['home_welcome_pbar4_text']; ?></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="<?php echo $page_home['home_welcome_pbar4_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $page_home['home_welcome_pbar4_value']; ?>%">
                                </div>
                            </div>
                            <div class="percentage-show"><?php echo $page_home['home_welcome_pbar4_value']; ?>%</div>
                        </div>
                        <?php endif; ?>

                        <?php if( $page_home['home_welcome_pbar5_text']!='' && $page_home['home_welcome_pbar5_value']!='' ): ?>
                        <div class="bar-container">
                            <p><?php echo $page_home['home_welcome_pbar5_text']; ?></p>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-custom" role="progressbar" aria-valuenow="<?php echo $page_home['home_welcome_pbar5_value']; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $page_home['home_welcome_pbar5_value']; ?>%">
                                </div>
                            </div>
                            <div class="percentage-show"><?php echo $page_home['home_welcome_pbar5_value']; ?>%</div>
                        </div>
                        <?php endif; ?>


                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt_30">
                <div class="about-tab" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_welcome_video_bg']; ?>)">
                    <div class="video-section">
                        <a class="video-button" href="#" data-toggle="modal" data-target="#myModal"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-Box Start-->
    <div class="video-modal">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-box bg-area">
                        <div class="modal fade in" id="myModal" role="dialog">
                            <div class="modal-dialog hb-style">

                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="download-video">
                                            <div style="position:relative;height:0;padding-bottom:56.21%">
                                               <?php echo $page_home['home_welcome_video']; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-Box End-->
</div>
<?php endif; ?>
<!--About End-->

<!--Choose-Area Start-->
<?php if($page_home['home_why_choose_status'] == 'Show'): ?>
<div class="choose-area pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_why_choose_title']; ?></h2>
                    <h3><?php echo $page_home['home_why_choose_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($why_choose as $row) {
                ?>
                <div class="col-lg-4">
                    <div class="choose-item flex" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
                        <div class="choose-icon">
                            <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                        </div>
                        <div class="choose-text">
                            <h4><?php echo $row['name']; ?></h4>
                            <p>
                                <?php echo nl2br($row['content']); ?>
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
<?php endif; ?>
<!--Choose-Area End-->


<!--Feature-Area Start-->
<?php if($page_home['home_feature_status'] == 'Show'): ?>
<div class="feature-area feature-two bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_feature_title']; ?></h2>
                    <h3><?php echo $page_home['home_feature_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($features as $row) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class="<?php echo $row['icon']; ?>" aria-hidden="true"></i>
                        </div>
                        <div class="feature-text">
                            <h4><?php echo $row['name']; ?></h4>
                            <p>
                                <?php echo nl2br($row['content']); ?>
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
<?php endif; ?>
<!--Feature-Area End-->


<!--Services Start-->
<?php if($page_home['home_service_status'] == 'Show'): ?>
<div class="services-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_service_title']; ?></h2>
                    <h3><?php echo $page_home['home_service_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">

            <?php
            foreach ($services as $row) {
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item effect-item">
                        <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>" class="image-effect">
                            <div class="services-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
                        </a>
                        <div class="services-text">
                            <h3><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                            <p>
                                <?php echo nl2br($row['short_description']); ?>
                            </p>
                            <div class="button-bn">
                                <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
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
<?php endif; ?>
<!--Services End-->


<!--Counter-Area Start-->
<?php if($page_home['counter_status'] == 'Show'): ?>
<div class="counterup-area pt_60 pb_90" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['counter_photo']; ?>)">
    <div class="bg-counterup"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item flex">
                    <i class="<?php echo $page_home['counter_1_icon']; ?>" aria-hidden="true"></i>
                    <h2 class="counter"><?php echo $page_home['counter_1_value']; ?></h2>
                    <h4><?php echo $page_home['counter_1_title']; ?></h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item flex">
                    <i class="<?php echo $page_home['counter_2_icon']; ?>" aria-hidden="true"></i>
                    <h2 class="counter"><?php echo $page_home['counter_2_value']; ?></h2>
                    <h4><?php echo $page_home['counter_2_title']; ?></h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item flex">
                    <i class="<?php echo $page_home['counter_3_icon']; ?>" aria-hidden="true"></i>
                    <h2 class="counter"><?php echo $page_home['counter_3_value']; ?></h2>
                    <h4><?php echo $page_home['counter_3_title']; ?></h4>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="counter-item flex">
                    <i class="<?php echo $page_home['counter_4_icon']; ?>" aria-hidden="true"></i>
                    <h2 class="counter"><?php echo $page_home['counter_4_value']; ?></h2>
                    <h4><?php echo $page_home['counter_4_title']; ?></h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--Counter-Area End-->


<!--Portfolio Start-->
<?php if($page_home['home_portfolio_status'] == 'Show'): ?>
<div class="portfolio-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_portfolio_title']; ?></h2>
                    <h3><?php echo $page_home['home_portfolio_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu">
                    <ul id="filtrnav">
                        <li class="filtr filtr-active" data-filter="all">All</li>
                        <?php
                        foreach ($portfolio_category as $row) {
                            ?>
                            <li class="filtr" data-filter="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row filtr-container">            
            <?php
            foreach ($portfolio as $row) {
                ?>
                <div class="col-lg-4 col-md-6 filtr-item" data-category="<?php echo $row['category_id']; ?>" data-sort="Menu">
                    <div class="portfolio-group">
                        <div class="portfolio-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)">
                            <div class="portfolio-bg"></div>
                            <div class="portfolio-table">
                                <div class="portfolio-icon">
                                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="magnific"><i class="fa fa-search-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-text">
                            <h3><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<?php endif; ?>
<!--Portfolio End-->


<!--Booking-Area Start-->
<?php if($page_home['home_booking_status'] == 'Show'): ?>
<div class="booking-area pt_60 pb_90" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_booking_photo']; ?>)">
    <div class="bg-booking"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="booking-gallery">
                    <div class="headline hl-white hl-left">
                        <h2><?php echo $page_home['home_booking_form_title']; ?></h2>
                    </div>
                    <div class="booking-form pt_30">
                        <form>
                            <div class="form-row row">
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="<?php echo FIRST_NAME; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="<?php echo LAST_NAME; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>">
                                </div>
                                <div class="form-group col-12">
                                    <input type="text" class="form-control" placeholder="<?php echo ADDRESS; ?>">
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" placeholder="<?php echo MESSAGE; ?>"></textarea>
                                </div>

                                <div class="form-button col-12">
                                    <button type="submit" class="btn btn2"><?php echo SUBMIT; ?></button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-area faq-home mt_30">
                    <div class="headline hl-white hl-left">
                        <h2><?php echo $page_home['home_booking_faq_title']; ?></h2>
                    </div>
                    <div class="faq-group pt-30">
                        <div id="accordion">
                            <?php
                            $i=0;
                            foreach($home_faq as $row) {
                                $i++;
                                ?>
                                <div class="faq-item card">
                                    <div class="faq-header" id="heading<?php echo $i; ?>">
                                        <button class="faq-button <?php if($i!=1) {echo 'collapsed';} ?>" data-toggle="collapse" data-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>"><i class="fa fa-caret-right"></i><?php echo $row['faq_title']; ?></button>
                                    </div>

                                    <div id="collapse<?php echo $i; ?>" class="collapse" aria-labelledby="heading<?php echo $i; ?>" data-parent="#accordion">
                                        <div class="faq-body">
                                            <?php echo nl2br($row['faq_content']); ?>
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
</div>
<?php endif; ?>
<!--Booking-Area End-->


<!--Team-Area Start-->
<?php if($page_home['home_team_status'] == 'Show'): ?>
<div class="team-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_team_title']; ?></h2>
                    <h3><?php echo $page_home['home_team_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel owl-carousel">
                    <?php
                    foreach ($team_members as $row) {
                        ?>
                        <div class="team-item">
                            <div class="team-photo">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Team Photo">
                            </div>
                            <div class="team-text">
                                <a href="<?php echo base_url(); ?>team-member/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
                                <p><?php echo $row['designation']; ?></p>
                            </div>
                            <div class="team-social">
                                <ul>
                                    <?php if($row['facebook'] != ''): ?>
                                        <li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['twitter'] != ''): ?>
                                        <li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['linkedin'] != ''): ?>
                                        <li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['youtube'] != ''): ?>
                                        <li><a href="<?php echo $row['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['google_plus'] != ''): ?>
                                        <li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['instagram'] != ''): ?>
                                        <li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if($row['flickr'] != ''): ?>
                                        <li><a href="<?php echo $row['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
                                    <?php endif; ?>
                                </ul>
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
<?php endif; ?>
<!--Team-Area End-->


<!--Price-Table Start-->
<?php if($page_home['home_ptable_status'] == 'Show'): ?>
<div class="price-area bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_ptable_title']; ?></h2>
                    <h3><?php echo $page_home['home_ptable_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            
            <?php
            foreach($pricing_table as $row) {
                ?>
                <div class="offset-md-2 col-md-8 offset-md-2 offset-lg-0 col-lg-4">
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
<?php endif; ?>
<!--Price-Table End-->


<!--Testomonial-Area Start-->
<?php if($page_home['home_testimonial_status'] == 'Show'): ?>
<div class="testimonial-area pt_90 pb_90" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $page_home['home_testimonial_photo']; ?>)">
    <div class="bg-testimonial"></div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline hl-white">
                    <h2><?php echo $page_home['home_testimonial_title']; ?></h2>
                    <h3><?php echo $page_home['home_testimonial_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonial-carousel owl-carousel mt-30">

                    <?php
                    foreach ($testimonials as $row) {
                        ?>
                        <div class="testimonial-item">
                            <div class="testimonial-photo">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Cline Photo">
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
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--Testomonial-Area End-->


<!--Blog-Area Start-->
<?php if($page_home['home_blog_status'] == 'Show'): ?>
<div class="blog-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo $page_home['home_blog_title']; ?></h2>
                    <h3><?php echo $page_home['home_blog_subtitle']; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-carousel owl-carousel">                    
                    <?php
                    $i=0;
                    foreach ($all_news_category as $news) {
                        $i++;
                        if($i > $page_home['home_blog_item']) {
                            break;
                        }
                        $dt = explode('-',$news['news_date']);
                        if($dt[1] == '01') {$month = 'Jan';}
                        if($dt[1] == '02') {$month = 'Feb';}
                        if($dt[1] == '03') {$month = 'Mar';}
                        if($dt[1] == '04') {$month = 'Apr';}
                        if($dt[1] == '05') {$month = 'May';}
                        if($dt[1] == '06') {$month = 'Jun';}
                        if($dt[1] == '07') {$month = 'Jul';}
                        if($dt[1] == '08') {$month = 'Aug';}
                        if($dt[1] == '09') {$month = 'Sep';}
                        if($dt[1] == '10') {$month = 'Oct';}
                        if($dt[1] == '11') {$month = 'Nov';}
                        if($dt[1] == '12') {$month = 'Dec';}
                        $year = $dt[0];
                        $day = $dt[2];
                        ?>
                        <div class="blog-item effect-item">
                            <a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>" class="image-effect">
                                <div class="blog-image" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>)"></div>
                            </a>
                            <div class="blog-text">
                                <h3><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><?php echo $news['news_title']; ?></a></h3>
                                <span><i class="fa fa-calendar-o"></i><?php echo $month.' '.$day.', '.$year; ?></span>
                                <p>
                                    <?php echo $news['news_content_short']; ?>
                                </p>
                            </div>
                            <div class="blog-author">
                                <ul>
                                    <li><a href="<?php echo base_url(); ?>category/<?php echo $news['category_id']; ?>"><i class="fa fa-pencil-square-o"></i><?php echo $news['category_name']; ?></a></li>
                                    <li class="blog-button"><a href="<?php echo base_url(); ?>news/view/<?php echo $news['news_id']; ?>"><i class="fa fa-long-arrow-right"></i></a></li>
                                </ul>
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
<?php endif; ?>
<!--Blog-Area End-->

<!--Brand-Area Start-->
<div class="brand-area bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-carousel owl-carousel">
                    <?php
                    foreach($clients as $row) {
                        ?>
                        <?php if($row['url']!=''): ?>
                            <div class="brand-item"><a href="<?php echo $row['url']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></a></div>
                        <?php else: ?>
                            <div class="brand-item"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>"></div>
                        <?php endif; ?>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Brand-Area End-->