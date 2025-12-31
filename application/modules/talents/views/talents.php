    <main>
        <article>
            <div class="section-wrapper">
                <section class="section latest-game" aria-label="latest game">
                    <div class="container">
                        <h2 class="h2 section-title">
                            <span class="span">TALENTS</span>
                        </h2>
                        <div class="grid-container">

                            <?php foreach($get_talents as $rows){?>
                            <a href="<?php echo('talent_profile');?>?Id=<?php echo $rows->Id?>" class="grid-item">
                                <div class="latest-game-card">
                                    <figure class="card-banner img-holder">
                                        <div class="image-container">
                                            <img src="<?php echo base_url('public/assets/images/');?><?php echo $rows->Image?>"
                                                loading="lazy" alt="Yumeshou" class="img-cover">
                                        </div>
                                        <div class="card-content">
                                        <h3 class="h3">
                                            <span class="card-title"><?php echo $rows->Name?></span>
                                        </h3>
                                    </div>
                                    </figure>
              
                                </div>
                            </a>


                            <?php }?>

                            <div class="latest-game-card">
                                <figure class="card-banner img-holder">
                                    <div class="image-container">
                                        <img src="<?php echo base_url('public/assets/images/coming_soon.jpg');?>"
                                            loading="lazy" alt="Yumeshou" class="img-cover">
                                    </div>
                                </figure>
                                <div class="card-content">
                                    <h3 class="h3">
                                        <span class="card-title"></span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>










        </article>
    </main>