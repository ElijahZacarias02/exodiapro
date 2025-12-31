<section class="section live-match" id="live" aria-label="live match" style="margin-top: 150px;">
    <div class="container">
        <h2 class="h2 section-title">
            <span class="span">Profile</span>
        </h2>

        <?php foreach ($get_talents as $get_talents_rows) { ?>
        <div class="talent-profile-section">
            <img src="<?php echo base_url('public/assets/images/') . $get_talents_rows->Image ?>" 
                alt="New Image" class="talent-profile-image">
            <div class="talent-profile-card card-goal">
                <center>
                    <h1>YUME☆SHOU</h1>
                </center>
                <div class="member-social-links">
                    <?php foreach ($group_social as $rows) { ?>
                    <a href="<?php echo $rows->Link ?>"><i class="<?php echo $rows->Icon ?>"></i></a>
                    <?php } ?>
                </div>
                <div class="talent-description">
                    <?php echo $get_talents_rows->Description ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</section>

<section class="team-section">
    <div class="container">
        <h2 class="h2 section-title">
            <span class="span">Members</span>
        </h2>

        <section id="team">
            <div class="team-box-container">
                <?php foreach ($member_details as $rows) { 
                    $firsteach = reset($rows);
                    $firstdetails = $firsteach->Image;
                    $name = $firsteach->Name;
                ?>

                <div class="team-box-container">
                    <div class="member-box member-1">
                        <div class="member-img">
                            <img src="<?php echo base_url('public/assets/images/member_profile/') . $firstdetails ?>">
                        </div>
                        <div class="member-name">
                            <h3><?php echo $name ?></h3>
                            <div class="member-social-links">
                                <?php foreach ($rows as $secondeach) { ?>
                                <a href="<?php echo $secondeach->Link ?>"><i
                                        class="<?php echo $secondeach->Icon ?>"></i></a>
                                <?php } ?>
                            </div>

                            <div class="parent-container">
                                <div class="view-work-btn">
                                    <a href="<?php echo base_url('talent_profile/artist?TalentID=' . $secondeach->TalentID . '&ArtistID=' . $secondeach->ArtistID); ?>"
                                        class="view-work-btn">View Profile</a>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <?php } ?>

                <div class="team-box-container">
                    <div class="member-box member-1">
                        <div class="member-img">
                            <img src="<?php echo base_url('public/assets/images/coming_soon.jpg');?>">
                        </div>
                        <div class="member-name">
                            <h3>COMING SOON</h3>
                            <div class="member-social-links" style="opacity:0;">
                                <a href="https://www.facebook.com/yomi.yumeshou"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/yomi.yumeshou"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.twitter.com/yomi_yumeshou"><i class="fab fa-x-twitter"></i></a>
                                <a href="https://www.tiktok.com/@yomi.yumeshou"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                            <div class="parent-container">
                                <div class="view-work-btn">
                                    <a href="#" class="view-work-btn">COMING SOON</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="team-box-container">
                    <div class="member-box member-1">
                        <div class="member-img">
                            <img src="<?php echo base_url('public/assets/images/coming_soon.jpg');?>">
                        </div>
                        <div class="member-name">
                            <h3>COMING SOON</h3>
                            <div class="member-social-links" style="opacity:0;">
                                <a href="https://www.facebook.com/yomi.yumeshou"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://www.instagram.com/yomi.yumeshou"><i class="fab fa-instagram"></i></a>
                                <a href="https://www.twitter.com/yomi_yumeshou"><i class="fab fa-x-twitter"></i></a>
                                <a href="https://www.tiktok.com/@yomi.yumeshou"><i class="fa-brands fa-tiktok"></i></a>
                            </div>
                            <div class="parent-container">
                                <div class="view-work-btn">
                                    <a href="#" class="view-work-btn">COMING SOON</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>