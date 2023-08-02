<section class="section live-match" id="live" aria-label="live match" style="margin-top:150px;">
        <div class="container">

            <h2 class="h2 section-title">
                <span class="span">Profile</span>
            </h2>



			<?php foreach($get_talents as $rows){?> 

				<center>
				<img src="<?php echo base_url('public/assets/images/');?><?php echo $rows->Image?>" loading="lazy" alt="Live Match Video"
                    class="img-cover-profile">
					</center>
	
                                <!-- Social Media Icons -->
                                <div class="member-social-links">

                                    <a href="https://www.facebook.com/YumeShouOfficial"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/yumeshou.official"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.twitter.com/YumeshouOFC"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.tiktok.com/@yumeshou.official"><i class="fa-brands fa-tiktok"></i></a>
                                </div>
            <p class="section-text">
			<?php echo $rows->Description?>
            </p>
			<?php }?> 

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
				<?php foreach($get_talents_profile as $rows){?> 
                    <!--member-box-1--->
                    <div class="team-box-container">
                        <!--member-box-1--->
                        <div class="member-box member-1">
                            <!--img---->
                            <div class="member-img">
                                <!--front-img-->
                                <img src="<?php echo base_url('public/assets/images/');?><?php echo $rows->Image?>">
                                <!--hover-img-->
                                <img src="assets/images/yume/WEB RHED CU.jpg" class="hover-img">
                            </div>
                            <!--text----->
                            <div class="member-name">
                                <h3><?php echo $rows->Name ?></h3>
                   

                                <div class="member-social-links">

                                    <a href="https://www.facebook.com/rhed.yumeshou"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/rhed.yumeshou"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.twitter.com/rhed_yumeshou"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.tiktok.com/@rhed.yumeshou"><i class="fa-brands fa-tiktok"></i></a>
                                </div>

                                <div class="parent-container">
                                    <div class="view-work-btn">
                                        <a href="<?php echo('talents_profile');?>?Id=<?php echo $rows->Id?>" class="view-work-btn">View Profile</a>
                                    </div>
                                </div>

                            </div>

                        </div>



                    </div>
					<?php }?> 

                </div>
            </section>


        </div>
    </section>
