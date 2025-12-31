  <section class="section latest-game" aria-label="latest game">
      <div class="container">
          <h2 class="h2 section-title">
              <span class="span">SPONSORS</span>
          </h2>


          <div
              style="background-color: rgba(255, 255, 255, 1); padding: 10px; white-space: normal !important; border-radius: 5px; text-align: justify;">
              <span style="color: black; display: inline;">
                  When working with us, you're in good hands. Our sponsors are the pillars of our success. Their support
                  drives our
                  mission forward, and we're grateful for their partnership. Do you want to be part of our journey? <a
                      href="<?php echo('contact_us');?>"
                      style="color: blue; text-decoration: underline; display: inline;">Click
                      here to join
                      us</a>.
              </span>
          </div>

          <div class="grid-container">

              <?php foreach($get_sponsors as $rows){?>
              <a href="<?php echo $rows->Link?>" target="_blank" class="grid-item">
                  <div class="latest-game-card">
                      <figure class="card-banner img-holder">
                          <div class="image-container">
                              <img src="<?php echo base_url('public/assets/images/sponsors/');?><?php echo $rows->Image?>"
                                  loading="lazy" alt="<?php echo $rows->Alt?>" class="img-cover">
                          </div>
                      </figure>

                  </div>
              </a>
              <?php }?>
          </div>
      </div>
  </section>