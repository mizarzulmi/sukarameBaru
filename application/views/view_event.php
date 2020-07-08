<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_event']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_event['event_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Event-Area Start-->
<div class="event-area pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <?php
                foreach($event_fetched as $row) {
                    ?>
                    <div class="event-item">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="event-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>)"></div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="event-body">
                                    <div class="event-header">
                                        <ul>
                                            <li class="event-header-left">
                                                <h4><?php echo $row->event_title; ?></h4>
                                                <span><i class="fa fa-clock-o"></i> <?php echo START_DATE; ?>: 
                                                <?php 
                                                $dt = explode('-',$row->event_start_date);
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
                                                <span><i class="fa fa-clock-o"></i> <?php echo END_DATE; ?>: 
                                                <?php 
                                                $dt = explode('-',$row->event_end_date);
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
                                            <li class="event-header-left">
                                                <span><i class="fa fa-map-marker"></i> <?php echo ADDRESS ?>: <?php echo nl2br($row->event_location); ?></span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="event-content">
                                        <p>
                                            <?php echo $row->event_content_short; ?>
                                        </p>
                                        <div class="button-df">
                                            <a href="<?php echo base_url(); ?>event/view/<?php echo $row->event_id; ?>"><?php echo READ_MORE; ?> <i class="fa fa-chevron-circle-right"></i></a>
                                        </div>
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
        <div class="row">
            <div class="col-md-12" style="margin-top:30px;text-align: center;">
                <?php echo $links; ?>
            </div>
        </div>
    </div>
</div>
<!--Event-Area End