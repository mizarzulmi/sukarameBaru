<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_search']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_search['search_heading']; ?> <?php echo $search_string; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Event-Area Start-->
<div class="event-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
                <?php if(!$total): ?>
                <span style="color:red;"><?php echo NO_RESULT_FOUND; ?></span>
                <?php else: ?>
                <?php
                foreach($result as $row) {
                    ?>
                    <div class="event-item">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="event-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>)"></div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="event-body">
                                    <div class="event-header">
                                        <ul>
                                            <li class="event-header-left">
                                                <h4><?php echo $row['news_title']; ?></h4>
                                                <span><i class="fa fa-clock-o"></i> <?php echo NEWS_DATE; ?>:
                                                <?php 
                                                $dt = explode('-',$row['news_date']);
                                                if($dt[1] == '01') {$month = 'January';}
                                                if($dt[1] == '02') {$month = 'February';}
                                                if($dt[1] == '03') {$month = 'March';}
                                                if($dt[1] == '04') {$month = 'April';}
                                                if($dt[1] == '05') {$month = 'May';}
                                                if($dt[1] == '06') {$month = 'June';}
                                                if($dt[1] == '07') {$month = 'July';}
                                                if($dt[1] == '08') {$month = 'August';}
                                                if($dt[1] == '09') {$month = 'September';}
                                                if($dt[1] == '10') {$month = 'October';}
                                                if($dt[1] == '11') {$month = 'November';}
                                                if($dt[1] == '12') {$month = 'December';}
                                                echo $month . ' ' . $dt[2] . ', ' . $dt[0];
                                                ?>
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-content">
                                        <p>
                                            <?php echo $row['news_content_short']; ?>
                                        </p>
                                        <div class="button-df">
                                            <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php endif; ?>
            </div>
        </div>
        <!--Pagination Start-->
        <!-- <div class="row">
            <div class="col-12">
                <div class="pagination">
                    <ul class="page-numbers">
                        <li><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </div> -->
        <!--Pagination End-->
    </div>
</div>
<!--Event-Area End