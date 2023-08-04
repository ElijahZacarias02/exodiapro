<section class="section live-match" id="live" aria-label="live match" style="margin-top:150px;">
    <div class="container">

        <h2 class="h2 section-title">
            <span class="span">Profile</span>
        </h2>



        <?php foreach ($get_talents as $get_talents_rows) { ?>

            <center>
                <img src="<?php echo base_url('public/assets/images/'); ?><?php echo $get_talents_rows->Image ?>"
                    loading="lazy" alt="Live Match Video" class="img-cover-profile">
            </center>

            <!-- Social Media Icons -->
            <div class="member-social-links">
                <?php foreach ($group_social as $rows) { ?>
                    <a href="<?php echo $rows->Link ?>"><i class="<?php echo $rows->Icon ?>"></i></a>
                <?php } ?>

            </div>


            <p class="section-text">
                <?php echo $get_talents_rows->Description ?>
            </p>
        <?php } ?>



    </div>

</section>

<section class="team-section">
    <div class="container">

        <h2 class="h2 section-title">
            <span class="span">Members</span>
        </h2>


        <!--team------------------------>
        <section id="team">
            <!--heading---->



            <!--team-container---------->
            <div class="team-box-container">
                <?php foreach ($member_details as $rows) {

                    $firsteach = reset($rows);
                    $firstdetails = $firsteach->Image;
                    $name = $firsteach->Name;
                    ?>

                    <!--member-box-1--->
                <div class="team-box-container">
                    <!--member-box-1--->
                    <div class="member-box member-1">
                        <!--img---->
                            <div class="member-img">
                                <!--front-img-->
                                <img src="<?php echo base_url('public/assets/images/'); ?><?php echo $firstdetails ?>">
                                <!--hover-img-->
                                <img src="assets/images/yume/WEB RHED CU.jpg" class="hover-img">
                            </div>
                            <!--text----->
                        <div class="member-name">
                            <h3>
                                <?= $name ?>
                            </h3>


                            <div class="member-social-links">

                                <?php foreach ($rows as $secondeach) { ?>


                                <a href="<?php echo $secondeach->Link ?>"><i
                                        class="<?php echo $secondeach->Icon ?>"></i></a>
                                <?php } ?>
                            </div>

                            <div class="parent-container">
                                <div class="view-work-btn">
                                    <a href="<?php echo ('member_profile'); ?>?Id=<?php echo $secondeach->Id ?>"
                                        class="view-work-btn">View Profile</a>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                <?php } ?>

            </div>
        </section>


    </div>
</section>



<div