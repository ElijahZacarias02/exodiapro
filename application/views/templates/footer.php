<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="footer-brand">
        <a href="#" class="logo-footer">EXODiA</a>

        <p class="footer-text">EXODiA is a</p>

        <ul class="contact-list">
          <li class="contact-item">
            <div class="contact-icon">
              <ion-icon name="location"></ion-icon>
            </div>

            <address class="item-text">Address: Philippines</address>
          </li>

          <li class="contact-item">
            <div class="contact-icon">
              <ion-icon name="headset"></ion-icon>
            </div>

            <a href="tel:+241245654235" class="item-text">Phone: +63 1245 654 235</a>
          </li>

          <li class="contact-item">
            <div class="contact-icon">
              <ion-icon name="mail-open"></ion-icon>
            </div>

            <a href="mailto:info@exemple.com" class="item-text">Email: exodiapro.com@gmail.com</a>
          </li>
        </ul>
      </div>

      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Talents</p>
        </li>

        <li>
          <a href="#" class="footer-link">YumeShojou</a>
        </li>

      </ul>

      <ul class="footer-list">
        <li>
          <p class="footer-list-title">Need Help?</p>
        </li>

        <li>
          <a href="#" class="footer-link">Contact Us</a>
        </li>
      </ul>

      <div class="footer-wrapper">
        <div class="social-wrapper">
          <p class="footer-list-title">Follow Us</p>

          <ul class="social-list">
            <li>
              <a href="#" class="social-link" style="background-color: #3b5998">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link" style="background-color: #55acee">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link" style="background-color: #ee5595">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link" style="background-color: #ee5555">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container">
      <p class="copyright">
        &copy;
        <script>
          document.write(/\d{4}/.exec(Date())[0]);
        </script>
        EXODiA. All Right Reserved
      </p>
    </div>
  </div>
</footer>

<!-- 
    - #BACK TO TOP
  -->

<a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
  <ion-icon name="caret-up"></ion-icon>
</a>

<!-- 
    - custom js link
  -->

</body>

</html>








<style>
  /*-----------------------------------*\
  #style.css
\*-----------------------------------*/

  /*-----------------------------------*\
  #CUSTOM PROPERTY
\*-----------------------------------*/

  :root {
    /**
   * colors
   */

    --rich-black-fogra-29_95: hsla(222, 18%, 11%, 0.95);
    --raisin-black-1: hsl(0, 0%, 16%);
    --raisin-black-2: hsl(236, 17%, 17%);
    --raisin-black-3: hsl(280, 11%, 11%);
    --raisin-black-4: hsl(280, 8%, 15%);
    --english-violet: hsl(274, 21%, 23%);
    --eerie-black-1: hsl(277, 25%, 10%);
    --eerie-black-2: hsl(280, 7%, 8%);
    --roman-silver: hsl(220, 6%, 59%);
    --quick-silver: hsl(0, 1%, 65%);
    --light-gray-1: hsl(0, 0%, 80%);
    --light-gray-2: hsl(0, 2%, 82%);
    --marigold_75: hsla(42, 99%, 46%, 0.75);
    --xiketic_90: hsla(280, 37%, 8%, 0.9);
    --cultured-2: hsl(0, 0%, 97%);
    --marigold: hsl(42, 99%, 46%);
    --platinum: hsl(0, 0%, 89%);
    --dim-gray: hsl(0, 0%, 42%);
    --white_15: hsla(0, 0%, 100%, 0.15);
    --white_10: hsla(0, 0%, 100%, 0.1);
    --xiketic: hsl(277, 25%, 10%);
    --silver: hsl(0, 0%, 78%);
    --white: hsl(0, 0%, 100%);
    --jet: hsl(236, 13%, 23%);
    --red: #e31b23;
    --bodyColor: #292a2b;
    --borderFormEls: hsl(0, 0%, 10%);
    --bgFormEls: hsl(0, 0%, 14%);
    --bgFormElsFocus: hsl(0, 7%, 20%);

    /**
   * typography
   */

    --ff-oxanium: "Oxanium", cursive;
    --ff-poppins: "Poppins", sans-serif;

    --fs-1: 7rem;
    --fs-2: 4.5rem;
    --fs-3: 3.6rem;
    --fs-4: 2.4rem;
    --fs-5: 2.2rem;
    --fs-6: 2rem;
    --fs-7: 1.6rem;
    --fs-8: 1.5rem;
    --fs-9: 1.4rem;
    --fs-10: 1.3rem;
    --fs-11: 1.2rem;

    --fw-500: 500;
    --fw-600: 600;
    --fw-700: 700;
    --fw-800: 800;

    /**
   * spacing
   */

    --section-padding: 120px;

    /**
   * gradient
   */

    --gradient: radial-gradient(circle, hsl(250, 7%, 17%), hsl(250, 11%, 11%));

    /**
   * box shadow
   */

    --shadow-1: 0px 2px 8px 0px hsla(0, 0%, 0%, 0.2),
      inset 0px 2px 8px 0px hsla(0, 0%, 0%, 0.4);
    --shadow-2: 0px 5px 10px 1px hsla(0, 0%, 0%, 0.4);
    --shadow-3: 0px 5px 10px 1px hsla(219, 98%, 17%, 0.2);
    --shadow-4: 0px 5px 10px 1px hsla(0, 0%, 0%, 0.15);

    /**
   * transition
   */

    --transition: 0.25s ease;
    --cubic-out: cubic-bezier(0.33, 0.85, 0.4, 0.96);
  }

  /*-----------------------------------*\
  #RESET
\*-----------------------------------*/

  *,
  *::before,
  *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  li {
    list-style: none;
  }

  a {
    text-decoration: none;
    color: inherit;
  }

  a,
  img,
  span,
  time,
  input,
  button,
  ion-icon {
    display: block;
  }

  img {
    height: auto;
  }

  input,
  button {
    background: none;
    border: none;
    font: inherit;
  }

  input {
    width: 100%;
  }

  button {
    cursor: pointer;
  }

  ion-icon {
    pointer-events: none;
  }

  address {
    font-style: normal;
  }

  html {
    font-family: var(--ff-poppins);
    font-size: 10px;
    scroll-behavior: smooth;
  }

  body {
    background: url(<?php echo base_url('public/assets/images/bg1.jpeg'); ?>) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    font-size: 1.6rem;
    line-height: 1.5;
    animation: 2s ease-out 0s 1 FadeIn;
  }

  /* body::after {
  background: url(../images/bg2.jpeg) no-repeat center center fixed;
  content: "";
  opacity: 0.8;
  position: fixed;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  z-index: -1;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
} */

  @keyframes FadeIn {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  :focus-visible {
    outline-offset: 4px;
  }

  .loader {
    position: fixed;
    height: 100%;
    width: 100%;
    top: 0;
    left: 0;
    background: #fff url("<?php echo base_url('public/assets/images/loading.gif'); ?>") no-repeat center center;
    z-index: 9999;
    padding-top: 200px;
    background-color: #110f1a;
  }

  /*-----------------------------------*\
  #REUSED STYLE
\*-----------------------------------*/

  .container {
    padding-inline: 15px;
  }

  .section {
    padding-block: var(--section-padding);
  }

  .h1,
  .h2,
  .h3 {
    color: var(--white);
    font-family: var(--ff-oxanium);
    font-weight: var(--fw-800);
    line-height: 1;
  }

  .h1 {
    font-size: var(--fs-2);
    letter-spacing: -3px;
  }

  .h2 {
    font-size: var(--fs-3);
  }

  .h3 {
    font-size: var(--fs-6);
    text-transform: uppercase;
  }

  :is(.h1, .h2, .h3, .card-price) .span {
    display: inline-block;
    color: var(--marigold);
  }

  .btn-watch {
    margin-inline: auto;
    color: var(--eerie-black-1);
    font-size: var(--fs-8);
    text-transform: uppercase;
    font-weight: var(--fw-700);
    min-height: 55px;
    padding-inline: 35px;
  }

  .skewBg {
    position: relative;
    z-index: 1;
  }

  .skewBg::before {
    content: "";
    position: absolute;
    inset: 0;
    transform: skewX(var(--skewX, -16deg));
    background-color: var(--bg, var(--marigold));
    z-index: -1;
  }

  .btn-watch::after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    left: calc(100% + 8px);
    width: 5px;
    transform: skewX(-16deg) translateX(var(--translateX, 0));
    background-color: var(--marigold);
    transition: var(--transition);
  }

  .btn-watch:is(:hover, :focus)::after {
    --translateX: -13px;
  }

  .has-scrollbar {
    display: flex;
    gap: 30px;
    overflow-x: auto;
    padding-block-end: 30px;
    scroll-snap-type: inline mandatory;
  }

  .has-scrollbar::-webkit-scrollbar {
    height: 10px;
  }

  .has-scrollbar::-webkit-scrollbar-track {
    outline: 3px solid var(--marigold);
  }

  .has-scrollbar::-webkit-scrollbar-thumb {
    background-color: var(--marigold);
  }

  .has-scrollbar::-webkit-scrollbar-button {
    width: calc(25% - 40px);
  }

  .section-subtitle,
  .section-title {
    position: relative;
    text-align: center;
    text-transform: uppercase;
  }

  .section-subtitle {
    color: var(--silver);
    font-size: var(--fs-9);
    font-weight: var(--fw-700);
    margin-block-end: 10px;
  }

  .section-title::after {
    content: url("../images/title-underline.png");
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
  }

  .scrollbar-item {
    /* min-width: 100%; */
    scroll-snap-align: start;
  }

  .card-banner {
    background-color: var(--light-gray-1);
  }

  .img-holder {
    aspect-ratio: var(--width) / var(--height);
  }

  .img-cover {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .card-badge {
    min-height: 30px;
    color: var(--eerie-black-1);
    font-size: var(--fs-11);
    font-weight: var(--fw-700);
    text-transform: uppercase;
    max-width: max-content;
    display: grid;
    align-items: center;
    padding-inline: 20px;
  }

  .card-badge::before {
    --skewX: -10deg;
  }

  .w-100 {
    width: 100%;
  }

  .section-text {
    color: var(--color, var(--light-gray-1));
    font-size: var(--fs-8);
    font-weight: var(--fw-500);
    max-width: 65ch;
    margin-inline: auto;
    text-align: center;
    line-height: 1.8;
  }

  /*-----------------------------------*\
  #HEADER
\*-----------------------------------*/

  .header-top,
  .cart-btn,
  .header-bottom::before,
  .navbar-link::before {
    display: none;
  }

  .header {
    position: relative;
    min-height: 1px;
  }

  .header-bottom {
    position: absolute;
    top: calc(100% - 1px);
    left: 0;
    width: 100%;
    background-color: var(--raisin-black-2);
    padding-block: 20px;
    z-index: 4;
  }

  .header-bottom.active {
    position: fixed;
    top: -85px;
    animation: slideIn 0.5s var(--cubic-out) forwards;
  }

  @keyframes slideIn {
    0% {
      transform: translateY(0);
    }

    100% {
      transform: translateY(100%);
    }
  }

  .header-bottom .container {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    color: var(--white);
    /* color:var(--eerie-black-1); */
    font-family: var(--ff-oxanium);
    font-size: 3rem;
    font-weight: var(--fw-800);
  }

  .header-actions {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .nav-toggle-btn {
    color: var(--white);
    font-size: 30px;
    border: 1px solid var(--white);
    padding: 4px;
  }

  .nav-toggle-btn.active .menu,
  .nav-toggle-btn .close {
    display: none;
  }

  .nav-toggle-btn .menu,
  .nav-toggle-btn.active .close {
    display: block;
  }

  .navbar {
    background-color: var(--eerie-black-1);
    color: var(--white);
    position: absolute;
    top: 100%;
    right: 0;
    width: 100%;
    max-width: 350px;
    visibility: hidden;
    max-height: 0;
    transition: 0.25s var(--cubic-out);
    overflow: hidden;
  }

  .navbar,
  .active {
    visibility: visible;
    max-height: 275px;
    transition-duration: 0.5s;
  }

  .navbar-item:not(:last-child) {
    border-block-end: 1px solid var(--white_15);
  }

  .navbar-link {
    padding: 10px 25px;
    transition: var(--transition);
  }

  .navbar-link:is(:hover, :focus) {
    background-color: var(--white_10);
  }

  /*-----------------------------------*\
  #SEARCH BOX
\*-----------------------------------*/

  .search-container {
    background-color: var(--rich-black-fogra-29_95);
    position: fixed;
    inset: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    padding-inline: 40px;
    z-index: 6;
    visibility: hidden;
    opacity: 0;
    transition: var(--transition);
  }

  .search-container.active {
    visibility: visible;
    opacity: 1;
  }

  .search-container .input-wrapper {
    position: relative;
    max-width: 560px;
    width: 100%;
  }

  .search-container .search-field {
    color: var(--white);
    font-size: 2rem;
    padding: 20px;
    padding-inline-end: 60px;
    border-block-end: 3px solid var(--white_10);
    outline: none;
    transition: var(--transition);
  }

  .search-container .search-field:focus {
    border-color: var(--light-gray-2);
  }

  .search-container .search-field::-webkit-search-cancel-button {
    display: none;
  }

  .search-container .search-submit {
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
    font-size: 25px;
    color: var(--marigold);
  }

  .search-container .search-submit ion-icon {
    --ionicon-stroke-width: 70px;
  }

  .search-container .search-close {
    position: fixed;
    inset: 0;
    cursor: default;
    z-index: -1;
  }

  /*-----------------------------------*\
  #HERO
\*-----------------------------------*/

  .hero-banner {
    display: none;
  }

  .hero {
    --section-padding: 60px;
    margin-block-start: 84px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    text-align: center;
    min-height: 100vh;
    display: grid;
    align-items: center;
  }

  .hero-subtitle {
    color: var(--marigold);
    font-size: var(--fs-6);
    font-weight: var(--fw-700);
    text-transform: uppercase;
  }

  .hero-title {
    margin-block: 15px 12px;
  }

  .hero-text {
    color: var(--light-gray-2);
    margin-block-end: 45px;
  }

  /*-----------------------------------*\
  #BRAND
\*-----------------------------------*/

  .brand {
    --section-padding: 60px;
    background-image: var(--gradient);
  }

  .brand .has-scrollbar {
    padding-block-end: 0;
  }

  .brand .has-scrollbar::-webkit-scrollbar {
    display: none;
  }

  .brand-item {
    min-width: calc(50% - 10px);
    scroll-snap-align: start;
  }

  .brand-item>img {
    margin-inline: auto;
  }

  /*-----------------------------------*\
  #LATEST GAME
\*-----------------------------------*/
  .grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    grid-gap: 20px;
    list-style: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    margin-top: 90px;
  }

  .grid-item {
    text-decoration: none;
  }

  .image-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 100%;
    overflow: hidden;
  }

  .image-container img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease-in-out;
  }

  .image-container:hover img {
    transform: scale(1.05);
  }

  .latest-game-card {
    position: relative;
    box-shadow: var(--shadow-2);
  }

  .latest-game-card .card-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: var(--xiketic_90);
    padding: 35px 25px;
  }

  .latest-game-card .card-title {
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-block-end: 12px;
    transition: var(--transition);
  }

  .latest-game-card .card-title:hover {
    color: var(--marigold);
  }

  .latest-game-card .card-price {
    color: var(--silver);
    font-size: var(--fs-10);
    font-weight: var(--fw-600);
  }

  .latest-game-card .card-price .span {
    margin-inline-start: 5px;
  }

  .img-cover {
    max-width: 100%;
    height: auto;
  }

  @media (max-width: 767px) {
    .grid-item .image-container {
      margin-top: 20px;
    }
  }

  /*-----------------------------------*\
  #LIVE MATCH
\*-----------------------------------*/

  .live-match {
    padding-block-start: 0;
    overflow-x: hidden;
  }

  .live-match .section-title {
    margin-block-end: 90px;
  }

  .live-match-banner {
    position: relative;
    background-color: var(--light-gray-1);
    border-radius: 6px;
    overflow: hidden;
    box-shadow: var(--shadow-3);
  }

  .live-match-banner .play-btn {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: var(--marigold);
    font-size: 60px;
  }

  .live-match-player {
    position: relative;
    padding-block-start: var(--section-padding);
  }

  .live-match-player::after {
    content: "LIVE";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -40%);
    font-size: 15rem;
    font-weight: var(--fw-600);
    color: var(--cultured-2);
    z-index: -1;
  }

  .live-match-player .player {
    max-width: max-content;
  }

  .live-match-player .player-2 {
    margin-inline-start: auto;
  }

  .live-match-detail {
    margin-block: 50px;
  }

  .live-match-subtitle {
    background-color: var(--marigold);
    color: var(--white);
    font-size: var(--fs-9);
    text-transform: uppercase;
    font-weight: var(--fw-700);
    letter-spacing: 2px;
    padding: 4px 20px;
    max-width: max-content;
    margin-inline: auto;
    margin-block-end: 30px;
  }

  .live-match-time {
    color: var(--xiketic);
    font-size: var(--fs-1);
    font-weight: var(--fw-700);
    max-width: max-content;
    margin-inline: auto;
    line-height: 1;
  }

  /*-----------------------------------*\
  #FEATURED GAME
\*-----------------------------------*/

  .featured-game {
    background-color: var(--cultured-2);
  }

  .featured-game .section-title {
    color: var(--xiketic);
    margin-block-end: 90px;
  }

  .featured-game .has-scrollbar {
    gap: 0;
  }

  .featured-game-card {
    position: relative;
  }

  .featured-game-card :is(.card-content, .card-content-overlay) {
    position: absolute;
  }

  .featured-game-card .card-content {
    bottom: 0;
    left: 0;
    right: 0;
    padding: 30px 35px;
    transition: var(--transition);
  }

  .featured-game-card .card-content-overlay {
    inset: 0;
    background-color: var(--marigold_75);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: var(--transition);
  }

  .featured-game-card .card-title {
    margin-block-end: 5px;
  }

  .featured-game-card .card-meta {
    color: var(--white);
    font-size: var(--fs-11);
    font-weight: var(--fw-500);
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 4px;
  }

  .featured-game-card .card-content .card-meta {
    color: var(--platinum);
  }

  .featured-game-card .card-content ion-icon {
    color: var(--marigold);
    font-size: 14px;
  }

  .featured-game-card .card-icon {
    margin-block-end: 20px;
  }

  .featured-game-card .card-content-overlay .card-title {
    color: var(--xiketic);
  }

  .featured-game-card .card-content-overlay .span {
    color: var(--white);
  }

  .featured-game-card:is(:hover, :focus-within) .card-content {
    opacity: 0;
  }

  .featured-game-card:is(:hover, :focus-within) .card-content-overlay {
    opacity: 1;
  }

  /*-----------------------------------*\
  #SHOP
\*-----------------------------------*/

  .shop {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
  }

  .shop .section-text {
    margin-block: 50px 60px;
  }

  .shop .has-scrollbar {
    margin-inline: -15px;
    padding-inline: 15px;
    scroll-padding-inline-start: 15px;
  }

  .shop-card {
    box-shadow: var(--shadow-4);
    height: 100%;
  }

  .shop-card .card-content {
    position: relative;
    padding: 25px;
    padding-block-start: 40px;
  }

  .shop-card .card-badge {
    position: absolute;
    top: 0;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .shop-card .h3 {
    font-size: var(--fs-7);
  }

  .shop-card .card-title {
    transition: var(--transition);
    margin-block-end: 10px;
  }

  .shop-card .card-title:is(:hover, :focus) {
    color: var(--marigold);
  }

  .shop-card .card-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: var(--marigold);
  }

  .shop-card .card-price {
    font-family: var(--ff-oxanium);
    font-weight: var(--fw-800);
  }

  .shop-card .card-btn {
    color: inherit;
    font-size: 18px;
    padding: 7px;
    border: 1px solid var(--english-violet);
    border-radius: 4px;
    transition: var(--transition);
  }

  .shop-card .card-btn:is(:hover, :focus) {
    background-color: var(--marigold);
    color: var(--xiketic);
    border-color: var(--marigold);
  }

  /*-----------------------------------*\
  #BLOG
\*-----------------------------------*/

  .blog {
    background-image: var(--gradient);
  }

  .blog .section-title {
    /* color: var(--xiketic);  */
    color: white;
  }

  .blog .section-text {
    /* color: var(--dim-gray); */
    color: white;
    margin-block: 50px 60px;
  }

  .blog-list {
    display: grid;
    gap: 50px;
  }

  .blog-card .card-banner {
    margin-block-end: 30px;
  }

  .blog-card .card-meta-list {
    display: flex;
    align-items: center;
    gap: 20px;
  }

  .blog-card .card-meta-item {
    display: flex;
    align-items: center;
    gap: 5px;
    /* color: var(--quick-silver); */
    color: white;
    font-size: var(--fs-11);
    font-weight: var(--fw-600);
    text-transform: uppercase;
    letter-spacing: 1px;
  }

  .blog-card .card-meta-item ion-icon {
    --ionicon-stroke-width: 50px;
    color: var(--marigold);
  }

  .blog-card .card-meta-item a.item-text {
    transition: var(--transition);
  }

  .blog-card .card-meta-item a.item-text:is(:hover, :focus) {
    color: var(--marigold);
  }

  .blog-card .card-title {
    /* color: var(--raisin-black-1); */
    color: white;
    font-size: var(--fs-5);
    font-family: var(--ff-oxanium);
    font-weight: var(--fw-800);
    text-transform: uppercase;
    line-height: 1.2;
    margin-block: 10px 15px;
    transition: var(--transition);
  }

  .blog-card .card-title:is(:hover, :focus) {
    color: var(--marigold);
  }

  .blog-card .card-text {
    /* color: var(--dim-gray); */
    color: white;
    font-size: var(--fs-8);
    font-weight: var(--fw-500);
    line-height: 1.8;
    margin-block-end: 25px;
  }

  .blog-card .card-link {
    /* color: var(--raisin-black-1); */
    color: white;
    font-size: var(--fs-9);
    font-weight: var(--fw-700);
    text-transform: uppercase;
    display: flex;
    align-items: center;
    gap: 4px;
    transition: var(--transition);
  }

  .blog-card .card-link ion-icon,
  .blog-card .card-link:is(:hover, :focus) {
    color: var(--marigold);
  }

  /*-----------------------------------*\
  #NEWSLETTER
\*-----------------------------------*/

  .newsletter {
    margin-block-end: 80px;
  }

  .newsletter-card {
    background-image: var(--gradient);
    padding: 40px 15px;
    margin-block-start: -55px;
    border-radius: 80px;
  }

  .newsletter .h2 {
    font-size: var(--fs-4);
    text-transform: uppercase;
    text-align: center;
    margin-block-end: 30px;
  }

  .newsletter .input-wrapper {
    max-width: 300px;
    margin-inline: auto;
    margin-block-end: 10px;
  }

  .newsletter .email-field {
    font-size: var(--fs-9);
    color: var(--white);
    font-weight: var(--fw-500);
    padding: 17px 45px;
    padding-inline-end: 20px;
    outline: none;
  }

  .newsletter .input-wrapper ion-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    left: 20px;
    color: var(--marigold);
    --ionicon-stroke-width: 50px;
  }

  .newsletter .input-wrapper::before {
    --bg: var(--raisin-black-4);
    --skewX: -20deg;
  }

  .newsletter-btn {
    font-size: var(--fs-9);
    display: flex;
    align-items: center;
    gap: 5px;
    padding-inline: 20px;
    transition: var(--transition);
  }

  .newsletter-btn::after {
    display: none;
  }

  .newsletter-btn::before {
    --skewX: -20deg;
    transition: var(--transition);
  }

  .newsletter-btn:is(:hover, :focus) {
    color: var(--marigold);
  }

  .newsletter-btn:is(:hover, :focus)::before {
    background-color: var(--white);
  }

  /*-----------------------------------*\
  #FOOTER
\*-----------------------------------*/

  .footer {
    color: var(--roman-silver);
  }

  .footer-top {
    padding-block-end: var(--section-padding);
  }

  .footer-top .container {
    display: grid;
    gap: 50px;
    margin-top: 50px;
  }

  .footer .logo {
    margin-block-end: 35px;
    color: var(--silver);
  }

  .logo-footer {
    /* color:var(--eerie-black-1); */
    font-family: var(--ff-oxanium);
    font-size: 3rem;
    font-weight: var(--fw-800);
  }

  .footer-text,
  .footer .contact-item {
    font-size: var(--fs-8);
    font-weight: var(--fw-500);
    line-height: 1.8;
  }

  .footer-text {
    margin-block-end: 15px;
  }

  .contact-item:not(:last-child) {
    margin-block-end: 10px;
  }

  .contact-item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .contact-icon {
    margin-block-start: 3px;
    font-size: 17px;
  }

  .footer-list-title {
    position: relative;
    color: var(--silver);
    font-family: var(--ff-oxanium);
    text-transform: uppercase;
    font-weight: var(--fw-800);
    padding-block-end: 20px;
    margin-block-end: 35px;
  }

  .footer-list-title::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 3px;
    background-color: var(--marigold);
  }

  .footer-link {
    font-size: var(--fs-9);
    max-width: max-content;
    transition: var(--transition);
    padding-block: 8px;
    font-weight: var(--fw-500);
  }

  .footer-link:is(:hover, :focus) {
    color: var(--marigold);
    transform: translateX(5px);
  }

  .footer .social-wrapper {
    margin-block-end: 50px;
  }

  .footer .social-list {
    display: flex;
    gap: 10px;
  }

  .footer .social-link {
    color: var(--white);
    padding: 10px;
    border-radius: 2px;
  }

  .footer-newsletter {
    position: relative;
  }

  .footer-newsletter .email-field {
    background-color: var(--raisin-black-4);
    padding: 12px 20px;
    padding-inline-end: 60px;
    font-size: var(--fs-9);
    color: var(--white);
  }

  .footer-btn {
    position: absolute;
    top: 0;
    right: 0;
    height: 100%;
    width: 53px;
    background-color: var(--marigold);
    color: var(--xiketic);
    display: grid;
    place-content: center;
  }

  .footer-bottom-img {
    display: none;
  }

  .footer-bottom {
    background-color: var(--eerie-black-2);
    padding-block: 20px;
    text-align: center;
  }

  .copyright {
    font-size: var(--fs-9);
    font-weight: var(--fw-500);
    line-height: 1.8;
  }

  .copyright-link {
    display: inline-block;
    color: var(--marigold);
  }

  /*-----------------------------------*\
  #BACK TO TOP
\*-----------------------------------*/

  .back-top-btn {
    position: fixed;
    bottom: 10px;
    right: 15px;
    background-color: var(--marigold);
    padding: 12px;
    z-index: 4;
    transition: var(--transition);
    opacity: 0;
    visibility: hidden;
  }

  .back-top-btn.active {
    opacity: 1;
    visibility: visible;
    transform: translateY(-10px);
  }

  /*-----------------------------------*\
  #MEDIA QUERIES
\*-----------------------------------*/

  /**
 * responsive for larger than 576px screen
 */

  @media (min-width: 576px) {
    /**
   * REUSED STYLE
   */

    .container {
      max-width: 540px;
      width: 100%;
      margin-inline: auto;
    }

    .h1 {
      --fs-2: 7rem;
    }

    /**
   * HEADER
   */

    .header-actions {
      gap: 40px;
    }

    .cart-btn {
      display: block;
      position: relative;
      color: var(--white);
      font-size: 20px;
    }

    .cart-badge {
      position: absolute;
      top: -6px;
      right: -10px;
      background-color: var(--marigold);
      color: var(--eerie-black-1);
      font-size: var(--fs-11);
      border-radius: 20px;
      padding: 3px 5px;
      line-height: 1;
      font-weight: var(--fw-800);
    }

    /**
   * SEARCH BOX
   */

    .search-container :is(.search-field, .search-submit) {
      font-size: var(--fs-3);
    }

    /**
   * BRAND
   */

    .brand-item {
      min-width: calc(33.33% - 13.33px);
    }

    /**
   * FEATURED GAME 
   */

    .featured-game .scrollbar-item {
      min-width: 50%;
    }

    /**
   * BLOG
   */

    .blog-list {
      grid-template-columns: 75%;
      justify-content: center;
    }

    /**
   * FOOTER
   */

    .footer-top .container {
      grid-template-columns: 1fr 1fr;
    }

    .footer-brand,
    .footer-wrapper {
      grid-column: 1 / 3;
    }
  }

  /**
 * responsive for larger than 768px screen
 */

  @media (min-width: 768px) {
    /**
   * REUSED STYLE
   */

    .container {
      max-width: 720px;
    }

    .scrollbar-item {
      min-width: calc(50% - 15px);
    }

    /**
   * HERO
   */

    .hero-text {
      max-width: 60ch;
      margin-inline: auto;
    }

    /**
   * BRAND
   */

    .brand-item {
      min-width: calc(25% - 15px);
    }

    /**
   * LIVE MATCH
   */

    .live-match-banner .play-btn {
      font-size: 120px;
    }

    .live-match-player::after {
      font-size: 30rem;
    }

    /**
   * BLOG
   */

    .blog-list {
      grid-template-columns: 1fr 1fr;
    }

    /**
   * NEWSLETTER
   */

    .newsletter :is(.input-wrapper, .newsletter-btn) {
      margin: 0;
    }

    .newsletter .input-wrapper {
      max-width: unset;
      width: 100%;
    }

    .newsletter .h2 {
      --fs-4: 2.6rem;
    }

    .newsletter-form {
      display: flex;
      gap: 10px;
      max-width: 500px;
      width: 100%;
      margin-inline: auto;
    }

    /**
   * FOOTER
   */

    .footer-brand,
    .footer-wrapper {
      grid-column: auto;
    }

    .footer-bottom-img {
      display: block;
    }

    .footer-bottom {
      text-align: left;
    }

    .footer-bottom .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
    }

    /**
   * BACK TO TOP
   */

    .back-top-btn {
      bottom: 50px;
      right: 45px;
    }
  }

  /**
 * responsive for larger than 992px screen
 */

  @media (min-width: 992px) {
    /**
   * REUSED STYLE
   */

    .container {
      max-width: 960px;
    }

    :is(.header, .hero, .live-match) .container {
      max-width: unset;
    }

    .scrollbar-item {
      min-width: calc(33.33% - 20px);
    }

    /**
   * HEADER
   */

    .header-top {
      display: block;
      background-image: url("../images/header-top-bg.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center;
      width: 100%;
      padding-block: 20px;
    }

    .header-top .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .countdown-text {
      color: var(--quick-silver);
      font-size: var(--fs-10);
      font-weight: var(--fw-600);
    }

    .countdown-text .span {
      display: inline-block;
      color: var(--xiketic);
      font-size: 1.8rem;
      font-weight: var(--fw-700);
      padding: 10px 20px;
      margin-inline: 5px;
    }

    .header :is(.social-wrapper, .social-list) {
      display: flex;
      align-items: center;
    }

    .header .social-wrapper {
      gap: 15px;
    }

    .header .social-list {
      gap: 10px;
    }

    .social-title {
      color: var(--white);
      font-family: var(--ff-oxanium);
      font-size: var(--fs-8);
      font-weight: var(--fw-700);
    }

    .header .social-link {
      background-color: var(--jet);
      color: var(--marigold);
      font-size: var(--fs-9);
      padding: 8px 10px;
    }

    .header-bottom {
      outline: 1px solid hsla(0, 0%, 0%, 0.2);
    }

    .header-bottom::before {
      display: block;
      top: 0;
      left: -15px;
      right: auto;
      width: 170px;
      --skewX: 16deg;
    }

    .nav-toggle-btn {
      display: none;
    }

    .navbar,
    .navbar.active {
      all: unset;
      margin-inline: auto 15px;
    }

    .navbar-list {
      display: flex;
    }

    .navbar-item:not(:last-child) {
      border-block-end: none;
    }

    .navbar-link {
      color: var(--white);
      font-family: var(--ff-oxanium);
      font-size: var(--fs-11);
      text-transform: uppercase;
      font-weight: var(--fw-700);
      padding: 10px 20px;
    }

    .navbar-link::before {
      display: block;
      opacity: 0;
      transition: var(--transition);
    }

    .navbar-link:is(:hover, :focus) {
      background-color: transparent;
      color: var(--xiketic);
    }

    .navbar-link:is(:hover, :focus)::before {
      opacity: 1;
    }

    /**
   * HERO
   */

    .hero {
      text-align: left;
    }

    .hero-banner {
      display: block;
    }

    .hero .container {
      display: grid;
      grid-template-columns: 1fr 0.9fr;
      align-items: center;
      gap: 50px;
    }

    .btn-watch {
      margin-inline: 0;
    }

    /**
   * BRAND
   */

    .brand-item {
      min-width: calc(20% - 16px);
    }

    /**
   * LATEST GAME
   */

    .latest-game .has-scrollbar {
      padding-block-end: 0;
    }

    /**
   * LIVE MATCH
   */

    .live-match-banner {
      max-width: 700px;
      margin-inline: auto;
    }

    .live-match-player {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      align-items: center;
    }

    .live-match-detail {
      margin-block: 0;
    }

    /**
   * FEATURED GAME
   */

    .featured-game .scrollbar-item {
      min-width: 33.33%;
    }

    /**
   * BLOG
   */

    .blog-list {
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;
    }

    /**
   * NEWSLETTER
   */

    .newsletter-form {
      max-width: 650px;
    }

    /**
   * FOOTER
   */

    .footer .container {
      grid-template-columns: 1fr 0.7fr 0.7fr;
      column-gap: 80px;
    }
  }

  /**
 * responsive for larger than 1200px screen
 */

  @media (min-width: 1200px) {
    /**
   * REUSED STYLE
   */

    .container,
    :is(.header, .hero, .live-match) .container {
      max-width: 1230px;
    }

    .h1 {
      --fs-2: 7.5rem;
    }

    .scrollbar-item {
      min-width: calc(25% - 22.5px);
    }

    /**
   * HEADER
   */

    .header-bottom::before {
      width: 270px;
    }

    .navbar-link {
      font-size: var(--fs-9);
      padding-inline: 25px;
    }

    /**
   * HERO
   */

    .hero .container {
      grid-template-columns: 1fr 1fr;
    }

    /**
   * BRAND
   */

    .brand-item {
      min-width: calc(16.66% - 16.66px);
    }

    /**
   * LIVE MATCH
   */

    .section-wrapper::before {
      height: 72%;
    }

    .live-match-banner {
      max-width: max-content;
    }

    .live-match-player::after {
      font-size: 35rem;
    }

    /**
   * FEATURED GAME
   */

    .featured-game .has-scrollbar {
      padding-block-end: 0;
    }

    .featured-game .scrollbar-item {
      min-width: 25%;
    }

    /**
   * SHOP
   */

    .shop .has-scrollbar {
      padding-block-end: 15px;
    }

    /**
   * NEWSLETTER
   */

    .newsletter-card {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-inline: 70px;
    }

    .newsletter .h2 {
      margin-block-end: 0;
    }

    .newsletter-form {
      margin-inline: 0;
    }

    /**
   * FOOTER
   */

    .footer .container {
      grid-template-columns: 1fr 0.7fr 0.7fr 1fr;
    }
  }

  /* modal with video */

  .modal-vid {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100vh;
    z-index: 999;
    display: none;
  }

  .movie-box {
    top: 0px;
    left: 0px;
    display: table;
    width: 100%;
    height: 100vh;
    background-color: #232323;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    text-align: center;
  }

  .close {
    position: absolute;
    font-weight: 300;
    letter-spacing: 0.125em;
    text-transform: uppercase;
    font-size: 10px;
    right: 0px;
    top: -30px;
    color: #999;
    cursor: pointer;
  }

  .wide-screen {
    display: table-cell;
    text-align: center;
    vertical-align: middle;
  }

  .vid-holder {
    display: inline-block;
    top: 0px;
    left: 0px;
    position: relative;
    margin: 0 auto;
    -webkit-box-shadow: 0 0 10px 0 #000000;
    box-shadow: 0 0 10px 0 #000000;
    border-style: solid;
    border-width: 1px;
    border-color: #333;
  }

  .sixteen-nine {
    max-height: calc(100vh - 122px);
    max-width: calc(100vw - 122px);
    position: relative;
    margin: 0 auto;
    /*transition: all 0.5s;*/
    display: none;
  }

  .show {
    display: block;
  }

  .hide {
    display: none;
  }

  .vid-holder video,
  .vid-holder iframe {
    position: absolute;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: #000;
    background-image: url(https://s3.amazonaws.com/imglibs/video_bg.png);
    background-position: center center;
    background-repeat: no-repeat;
  }

  /* Team */
  #team {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: 50px;
    padding: 20px;
  }

  .team-heading {
    font-size: 2.2rem;
    padding: 10px 20px;
    margin: 20px;
    color: #303030;
    text-transform: uppercase;
    font-weight: 800;
    border-top: 1px solid #535353;
    border-bottom: 1px solid #535353;
    text-align: center;
  }

  .member-box {
    box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
    background-color: #ffffff;
    position: relative;
  }

  .member-img {
    width: 362px;
    height: 542px;
    position: relative;
  }

  .member-img img {
    width: 100%;
    height: 100%;
    object-position: center;
    object-fit: cover;
  }

  .hover-img {
    position: absolute;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 1;
    display: none;
  }

  .member-box:hover .hover-img {
    display: block;
    animation: fade 0.3s;
  }

  @keyframes fade {
    0% {
      opacity: 0;
    }

    100% {
      opacity: 1;
    }
  }

  .member-name {
    width: 100%;
    padding: 20px 10px;
    background-color: #ffffff;
    z-index: 2;
  }

  .member-name h3,
  .member-name h5 {
    color: #1b1b1b;
    margin: 0px;
    letter-spacing: 0.3px;
  }

  .member-name h5 {
    font-weight: 500;
  }

  .member-name h3 {
    text-transform: uppercase;
    font-weight: 800;
  }

  .team-box-container {
    display: flex;

    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
  }

  .member-social-links {
    display: flex;
    justify-content: center;
    /* Center horizontally */
    align-items: center;
    padding-top: 10px;
  }

  .member-social-links a {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.1);
    margin: 5px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: #000000;
  }

  .member-social-links a:hover {
    color: #fff;
    background-color: #181818;
    transition: all ease 0.3s;
  }

  .parent-container {
    display: flex;
    justify-content: center;
    padding-top: 20px;
  }

  .view-work-btn {
    width: 150px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #ffffff;
    background-color: #202020;
  }

  .view-work-btn:hover {
    color: #fff;
    background-color: #0e0e0e;
    transition: all ease 0.3s;
  }

  @media (max-width: 990px) {
    .member-box {
      flex-basis: calc(25% - 20px);
    }
  }

  @media (max-width: 575px) {
    .member-box {
      flex-basis: 50%;
    }
  }

  @media (max-width: 1200px) {
    .member-img {
      width: 306px;
      height: 450px;
    }
  }

  @media (max-width: 990px) {
    .member-img {
      width: 232px;
      height: 335px;
    }
  }

  @media (max-width: 800px) {
    .member-img {
      width: 340px;
      height: 510px;
    }
  }

  @media (max-width: 745px) {
    .member-img {
      width: 340px;
      height: 375px;
    }
  }

  @media (max-width: 575px) {
    .member-img {
      width: 340px;
      height: 355px;
    }

    #team {
      padding: 10px;
    }

    .team-heading {
      font-size: 1.7rem;
    }
  }

  @media (max-width: 450px) {
    .member-img {
      width: 340px;
      height: 500px;
    }
  }

  /* contact us */
  @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

  /* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */

  .container-contact {
    max-width: 800px;
    margin: 0 auto;
    padding: 0 1.5rem;
  }

  /* FORM ELEMENTS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .my-form {
    margin-top: 150px;
    margin-bottom: 150px;
  }

  .my-form h1 {
    margin-bottom: 1.5rem;
    margin-top: 50px;
    color: white;
  }

  .my-form li,
  .my-form .grid>*:not(:last-child) {
    margin-bottom: 1.5rem;
  }

  .my-form select,
  .my-form input,
  .my-form textarea,
  .my-form button {
    width: 100%;
    line-height: 1.5;
    padding: 15px 10px;
    border: 1px solid var(--borderFormEls);
    color: var(--white);
    background: var(--bgFormEls);
    transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
      transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
  }

  .my-form textarea {
    height: 170px;
  }

  .my-form ::placeholder {
    color: inherit;
    /*Fix opacity issue on Firefox*/
    opacity: 1;
  }

  .my-form select:focus,
  .my-form input:focus,
  .my-form textarea:focus,
  .my-form button:enabled:hover,
  .my-form button:focus,
  .my-form input[type="checkbox"]:focus+label {
    background: var(--bgFormElsFocus);
  }

  .my-form select:focus,
  .my-form input:focus,
  .my-form textarea:focus {
    transform: scale(1.02);
  }

  .my-form *:required,
  .my-form select {
    background-repeat: no-repeat;
    background-position: center right 12px;
    background-size: 15px 15px;
  }

  .my-form *:required {
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);
  }

  .my-form *:disabled {
    cursor: default;
    filter: blur(2px);
  }

  /* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  .my-form .required-msg {
    display: none;
    background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg) no-repeat center left / 15px 15px;
    padding-left: 20px;
  }

  .my-form .btn-grid {
    position: relative;
    overflow: hidden;
    transition: filter 0.2s;
  }

  .my-form button {
    font-weight: bold;
  }

  /* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */

  /* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
  @media screen and (min-width: 600px) {
    .my-form .grid {
      display: grid;
      grid-gap: 1.5rem;
    }

    .my-form .grid-2 {
      grid-template-columns: 1fr 1fr;
    }

    .my-form .grid-3 {
      grid-template-columns: auto auto auto;
      align-items: center;
    }

    .my-form .grid>*:not(:last-child) {
      margin-bottom: 0;
    }

    .my-form .required-msg {
      display: block;
    }
  }

  /* gallery */

  .wrapper {
    margin: 100px auto;
    max-width: 1100px;
  }

  .wrapper nav {
    display: flex;
    justify-content: center;
  }

  .wrapper .items {
    display: flex;
    max-width: 720px;
    justify-content: space-between;
  }

  .items span {
    position: relative;
    padding: 7px 25px;
    font-size: 18px;
    font-weight: 500;
    cursor: pointer;
    color: #007bff;
    transition: all 0.3s ease;
  }

  .items span.active {
    color: #fff;
    border-bottom: 1px solid #fff;
    /* Reduce the width of the underline for active state */
  }

  .items span.active::before {
    content: "\2605";
    /* Unicode for a star symbol */
    position: absolute;
    top: -25px;
    /* Adjust this value to control the distance between the star and the text */
    left: 50%;
    transform: translateX(-50%);
    font-size: 24px;
    color: #fff;
  }

  .gallery {
    display: flex;
    flex-wrap: wrap;
    margin-top: 30px;
  }

  .gallery .image {
    width: calc(100% / 4);
    padding: 7px;
    cursor: pointer;
  }

  .gallery .image span {
    display: flex;
    width: 100%;
    overflow: hidden;
  }

  .gallery .image img {
    width: 100%;
    vertical-align: middle;
    transition: all 0.3s ease;
  }

  .gallery .image:hover img {
    transform: scale(1.1);
  }

  .gallery .image.hide {
    display: none;
  }

  .gallery .image.show {
    animation: animate 0.4s ease;
  }

  @keyframes animate {
    0% {
      transform: scale(0.5);
    }

    100% {
      transform: scale(1);
    }
  }

  .preview-box {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0.9);
    background: #fff;
    max-width: 700px;
    width: 100%;
    z-index: 5;
    opacity: 0;
    pointer-events: none;
    border-radius: 3px;
    padding: 0 5px 5px 5px;
    box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
  }

  .preview-box.show {
    opacity: 1;
    pointer-events: auto;
    transform: translate(-50%, -50%) scale(1);
    transition: all 0.3s ease;
  }

  .preview-box .details {
    padding: 13px 15px 13px 10px;
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .details .title {
    display: flex;
    font-size: 18px;
    font-weight: 400;
  }

  .details .title p {
    font-weight: 500;
    margin-left: 5px;
  }

  .details .icon {
    color: #007bff;
    font-style: 22px;
    cursor: pointer;
  }

  .preview-box .image-box {
    width: 100%;
    display: flex;
  }

  .image-box img {
    width: 100%;
    border-radius: 0 0 3px 3px;
  }

  .shadow {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    z-index: 2;
    display: none;
    background: rgba(0, 0, 0, 0.4);
  }

  .shadow.show {
    display: block;
  }

  @media (max-width: 1000px) {
    .gallery .image {
      width: calc(100% / 3);
    }
  }

  @media (max-width: 800px) {
    .gallery .image {
      width: calc(100% / 2);
    }
  }

  @media (max-width: 700px) {
    .wrapper nav .items {
      max-width: 600px;
    }

    nav .items span {
      padding: 7px 15px;
    }
  }

  @media (max-width: 600px) {
    .wrapper {
      margin: 30px auto;
    }

    .wrapper nav .items {
      flex-wrap: wrap;
      justify-content: center;
    }

    nav .items span {
      margin: 5px;
    }

    .gallery .image {
      width: 100%;
    }
  }

  /* about us  */

  .img-cover-profile {
    max-width: 50%;
  }

  .row-team {
    display: flex;
    flex-wrap: wrap;
    padding: 2em 1em;
    text-align: center;
    margin-top: 50px;
  }

  .column-team {
    width: 100%;
    padding: 0.5em 0;
  }

  .card-team {
    box-shadow: 0 0 2.4em rgba(25, 0, 58, 0.1);
    padding: 3.5em 1em;
    border-radius: 0.6em;
    color: #1f003b;
    transition: 0.3s;
    background-color: #ffffff;
  }

  .card-team .img-container {
    width: 8em;
    height: 8em;
    background-color: #a993ff;
    /* padding: 0.5em; */
    border-radius: 50%;
    margin: 0 auto 2em auto;
    overflow: hidden;
  }

  .card-team img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* Add this line to make the image fit within the container */
    border-radius: 50%;
  }

  .card-team h3 {
    font-weight: 500;
  }

  .card-team p {
    font-weight: 300;
    text-transform: uppercase;
    margin: 0.5em 0 2em 0;
    letter-spacing: 2px;
  }

  .icons-team {
    width: 50%;
    min-width: 180px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    cursor: pointer;
  }

  .card-team a {
    text-decoration: none;
    color: inherit;
    font-size: 1.4em;
  }

  .card-team:hover {
    background: linear-gradient(#6045ea, #8567f7);
    color: #ffffff;
  }

  .card-team:hover .img-container {
    transform: scale(1.15);
  }

  @media screen and (min-width: 768px) {
    section-team {
      padding: 1em 7em;
    }
  }

  @media screen and (min-width: 992px) {
    section-team {
      padding: 1em;
    }

    .card-team {
      padding: 5em 1em;
    }

    .column-team {
      flex: 0 0 33.33%;
      max-width: 33.33%;
      padding: 0 1em;
    }
  }

  .vision-mission-section {
    display: flex;
    margin-top: 50px;
    justify-content: space-around;
    align-items: stretch;
    /* Make the cards stretch to have the same height */
    padding: 40px;
  }

  .vision,
  .mission {
    flex-basis: calc(33.33% - 20px);
    /* Adjusted flex-basis to accommodate for gap */
    text-align: center;
    margin: 5px;
    color: black;
  }

  .card-goal {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
  }

  .vision img,
  .mission img {
    max-width: 100%;
    height: auto;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 20px;
  }

  .vision h2,
  .mission h2 {
    color: #007bff;
  }

  /*talent group social*/

  .live-match .member-social-links {
    display: flex;
    justify-content: center;
    /* Center horizontally */
    align-items: center;
    padding-top: 10px;
  }

  .live-match .member-social-links a {
    width: 30px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: white;
    margin: 5px;
    border-radius: 50%;
    font-size: 1.5rem;
    color: #000000;
  }

  .live-match .member-social-links a:hover {
    color: #fff;
    background-color: #181818;
    transition: all ease 0.3s;
  }
</style>


<script>
  "use strict";

  const navbar = document.querySelector("[data-navbar]");
  const navbarLinks = document.querySelectorAll("[data-nav-link]");
  const navbarToggler = document.querySelector("[data-nav-toggler]");

  navbarToggler.addEventListener("click", function () {
    navbar.classList.toggle("active");
    this.classList.toggle("active");
  });

  for (let i = 0; i < navbarLinks.length; i++) {
    navbarLinks[i].addEventListener("click", function () {
      navbar.classList.remove("active");
      navbarToggler.classList.remove("active");
    });
  }

  /**
   * search toggle
   */

  const searchTogglers = document.querySelectorAll("[data-search-toggler]");
  const searchBox = document.querySelector("[data-search-box]");

  for (let i = 0; i < searchTogglers.length; i++) {
    searchTogglers[i].addEventListener("click", function () {
      searchBox.classList.toggle("active");
    });
  }

  /**
   * header
   */



  $(document).ready(function () {
    $(".loader").fadeOut("slow");



    $(".tube-link").click(function () {
      $(".youTube").removeClass("hide");
      $(".youTube").addClass("show");
      $(".myVideo").addClass("hide");
      $(".myVideo").removeClass("show");
      $(".youTube").attr("src", $(this).attr("vidUrl"));
    });

    $(".sixteen-nine-btn").click(function () {
      $(".modal-vid").fadeIn(500);
      $(".vid-holder img").removeClass("show");
      $(".sixteen-nine").addClass("show");
    });

    $(".close").click(function () {
      $(".modal-vid").fadeOut(500);
      /*document.getElementById('myVideo').pause();*/
      $(".youTube, .myVideo").attr("src", "");
    });
  });


  window.document.onkeydown = function (e) {
    if (!e) e = event;
    if (e.keyCode == 27) {
      $(".youTube, .myVideo").attr("src", "");
      $(".modal-vid").fadeOut(500);
      document.getElementById("myVideo").pause();
    }
  };

  //fullscreen image preview function
  //selecting all required elements
  const previewBox = document.querySelector(".preview-box"),
    previewImg = previewBox.querySelector("img"),
    closeIcon = previewBox.querySelector(".icon"),
    shadow = document.querySelector(".shadow");

  function preview(element) {
    //once user click on any image then remove the scroll bar of the body, so user cant scroll up or down
    document.querySelector("body").style.overflow = "hidden";
    let selectedPrevImg = element.querySelector("img").src; //getting user clicked image source link and stored in a variable
    let selectedImgCategory = element.getAttribute("data-name"); //getting user clicked image data-name value
    previewImg.src = selectedPrevImg; //passing the user clicked image source in preview image source

    previewBox.classList.add("show"); //show the preview image box
    shadow.classList.add("show"); //show the light grey background
    closeIcon.onclick = () => {
      //if user click on close icon of preview box
      previewBox.classList.remove("show"); //hide the preview box
      shadow.classList.remove("show"); //hide the light grey background
      document.querySelector("body").style.overflow = "auto"; //show the scroll bar on body
    };
  }


</script>