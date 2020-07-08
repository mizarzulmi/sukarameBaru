<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_portfolio']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $portfolio['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Portfolio-Details Start-->
<div class="portfolio-details pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="portfolio-carousel owl-carousel">

                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" class="magnific">
                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $portfolio['photo']; ?>" alt="Project Photo">
                    </a>

                    <?php
                    if(!empty($portfolio_photo)) {
                        foreach ($portfolio_photo as $row) {
                            ?>
                            <a href="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" class="magnific">
                                <img src="<?php echo base_url(); ?>public/uploads/portfolio_photos/<?php echo $row['photo']; ?>" alt="Project Photo">
                            </a>
                            <?php
                        }
                    }
                    ?>
                </div>
                <div class="portfolio-details-text">
                    <h3><?php echo PROJECT_OVERVIEW; ?></h3>
                    <?php echo $portfolio['content']; ?>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="portfolio-sidebar">
                    <div class="portfolio-details headstyle">
                        <h4><?php echo $setting['sidebar_portfolio_heading_project_detail']; ?></h4>
                        <ul>
                            <li><span><?php echo CLIENT_NAME; ?>:</span><br><?php echo $portfolio['client_name']; ?></li>
                            <li><span><?php echo CLIENT_COMPANY_NAME; ?>:<br></span><?php echo $portfolio['client_company']; ?></li>
                            <li><span><?php echo PROJECT_START_DATE; ?>:<br></span><?php echo $portfolio['start_date']; ?></li>
                            <li><span><?php echo PROJECT_END_DATE; ?>:<br></span><?php echo $portfolio['end_date']; ?></li>
                            <li><span><?php echo CLIENT_COMMENT; ?>:<br></span><?php echo $portfolio['client_comment']; ?></li>
                        </ul>
                    </div>
                    <div class="portfolio-form headstyle mt-30">
                        <h4><?php echo $setting['sidebar_portfolio_heading_quick_contact']; ?></h4>
                        <?php
                        if($this->session->flashdata('error')) {
                            echo '<div class="error-class">'.$this->session->flashdata('error').'</div>';
                        }
                        if($this->session->flashdata('success')) {
                            echo '<div class="success-class">'.$this->session->flashdata('success').'</div>';
                        }
                        ?>
                        <?php echo form_open(base_url().'portfolio/send_email',array('class' => '')); ?>
                            <div class="form-row">
                                <input type="hidden" name="portfolio" value="<?php echo $portfolio['name']; ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo NAME; ?>" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo EMAIL_ADDRESS; ?>" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="phone" class="form-control" placeholder="<?php echo PHONE_NUMBER; ?>" name="phone">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo MESSAGE; ?>" name="message"></textarea>
                                </div>
                                <div class="form-button">
                                    <button type="submit" class="btn" name="form_portfolio"><?php echo SUBMIT; ?></button>
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Portfolio-Details End-->

<!--Recent Project Start-->
<div class="recent-project bg-area pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="headline">
                    <h2><?php echo RECENT_PORTFOLIO; ?></h2>
                    <h3><?php echo RECENT_PORTFOLIO_SUBTITLE; ?></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="project-carousel owl-carousel">
                    <?php
                    $i=0;
                    foreach ($portfolio_order_by_name as $row) {
                        if($i>10) {
                            break;
                        }
                        ?>
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
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Recent Project End-->