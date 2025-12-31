<main>
    <article>
        <section class="section latest-game" aria-label="latest game">
            <div class="container">
                <h2 class="h2 section-title">
                    <span class="span">Profile</span>
                </h2>


                <div class="talent-profile-section">
                    <?php foreach ($get_talents_profile as $get_talents_rows) { ?>
                    <img src="<?php echo base_url('public/assets/images/member_profile/') . $get_talents_rows->Image ?>"
                        loading="lazy" alt="New Image" class="talent-profile-image">

                    <div class="talent-profile-card card-goal">
                        <center>
                            <h1><?php echo $get_talents_rows->Name ?></h1>
                        </center>
                        <div class="member-social-links">

                            <?php foreach ($member_social as $member_social_rows) { ?>
                            <a href="<?php echo $member_social_rows->Link ?>"><i
                                    class="<?php echo $member_social_rows->Icon ?>"></i></a>
                            <?php } ?>
                        </div>

                        <div class="talent-description">
                            <p> <?php echo $get_talents_rows->Description ?></p>
                        </div>


                    </div>
                </div>

                <?php } ?>
                <h2 class="h2 section-title" style="margin-top: 50px" ;>
                    <span class="span">GALLERY</span>

                </h2>

                <div class="modal">
                    <button class="close-btn">X</button>
                </div>
                <section class="gallery-main">
                    <div class="gallery-grid">
                        <?php foreach ($get_gallery as $gallery_row) { ?>
                        <img src="<?php echo base_url('public/assets/images/member_profile/') . $gallery_row->Image ?>">
                        <?php } ?>
                    </div>
                </section>



                <h2 class="h2 section-title" style="margin-top: 50px">
                    <span class="span">Socials</span>
                </h2>

                <div class="iframes-container">
                    <?php foreach ($member_social as $widget_row) { ?>
                    <div class="iframe-wrapper">
                        <?php echo $widget_row->Widget ?>

                    </div>
                    <?php } ?>
                </div>


            </div>

            <a class="back" href="<?php echo base_url('talent_profile?Id=1');?>"><button class="btn skewBg">Back to list</button></a>

        </section>

    </article>
</main>