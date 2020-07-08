<!--Banner Start-->
<div class="banner-slider" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_team']; ?>)">
    <div class="bg"></div>
    <div class="bannder-table">
        <div class="banner-text">
            <h1><?php echo $member['name']; ?></h1>
        </div>
    </div>
</div>
<!--Banner End-->

<!--Team Start-->
<div class="team-detail pt_60 pb_90">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="team-detail-photo">
                    <img src="<?php echo base_url(); ?>public/uploads/<?php echo $member['photo']; ?>" alt="Team Photo">
                </div>
                <div class="team-info headstyle">
                    <h4><?php echo CONTACT; ?></h4>
                    <ul>
                        <?php if($member['email'] != ''): ?>
                            <li><span><i class="fa fa-envelope"></i></span><?php echo $member['email']; ?></li>
                        <?php endif; ?>
                        <?php if($member['phone'] != ''): ?>
                            <li><span><i class="fa fa-phone"></i></span><?php echo $member['phone']; ?></li> 
                        <?php endif; ?>
                        <?php if($member['website'] != ''): ?>
                            <li><span><i class="fa fa-globe"></i></span><?php echo $member['website']; ?></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="team-detail-text">
                    <h4><?php echo $member['name']; ?></h4>
                    <span><?php echo $member['designation']; ?></span>
                    <p>
                        <?php echo $member['detail']; ?>
                    </p>
                    <ul>
                        <?php if($member['facebook'] != ''): ?>
                            <li><a href="<?php echo $member['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['twitter'] != ''): ?>
                            <li><a href="<?php echo $member['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['linkedin'] != ''): ?>
                            <li><a href="<?php echo $member['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['youtube'] != ''): ?>
                            <li><a href="<?php echo $member['youtube']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['google_plus'] != ''): ?>
                            <li><a href="<?php echo $member['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['instagram'] != ''): ?>
                            <li><a href="<?php echo $member['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <?php endif; ?>
                        <?php if($member['flickr'] != ''): ?>
                            <li><a href="<?php echo $member['flickr']; ?>" target="_blank"><i class="fa fa-flickr"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Team End-->