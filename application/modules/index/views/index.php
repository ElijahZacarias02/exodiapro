<main>
    <article>
        <section class="section hero" id="home" aria-label="home">
            <div class="container">
                <div class="hero-content">
                    <!-- <p class="hero-subtitle">Exodia</p> -->

                    <h1 class="h1 hero-title">
                        Producing <span class="span">Unstoppable</span> Idols
                    </h1>

                    <!-- <p class="hero-text">another aaa</p> -->
                    <div class="tube-link sixteen-nine-btn"
                        vidUrl="https://www.youtube.com/embed/SFqvk3y__Tk?autoplay=1">
                        <button class="btn skewBg">Watch Video</button>
                    </div>
                </div>

                <figure class="hero-banner img-holder" style="--width: 700; --height: 700">
                    <img src="<?php echo base_url('public/assets/images/Logo_White-01.png');?>" width="700" height="700"
                        alt="hero banner" class="w-100" />
                </figure>
            </div>
        </section>

        <div class="modal-vid">
            <div class="movie-box">
                <div class="wide-screen">
                    <div class="vid-holder">
                        <div class="close-preview" vidUrl="#">Close</div>
                        <img class="sixteen-nine" src="https://s3.amazonaws.com/imglibs/16x9_bg.png" />

                        <video id="myVideo" class="myVideo hide" src="" controls></video>
                        <iframe class="youTube hide" src="" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </article>
</main>
