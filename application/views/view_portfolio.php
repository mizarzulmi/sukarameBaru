<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_portfolio']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_portfolio['portfolio_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Project Start-->
<div class="portfolio-area project-page pt_90 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="portfolio-menu">
                    <ul id="filtrnav">
                        <li class="filtr filtr-active" data-filter="all"><?php echo ALL; ?></li>
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
<!--Project End