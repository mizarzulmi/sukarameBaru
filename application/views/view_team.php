<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_team']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $page_team['team_heading']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Team Start-->
<div class="team-page pt_60 pb_90">
    <div class="container">
        <div class="row">

            <?php
            foreach ($team_members as $row) {
                ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-item">
                        <div class="team-photo">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="Team Member">
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
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
<!--Team End-->