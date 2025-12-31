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

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

window.addEventListener("scroll", function () {
  if (window.scrollY >= 200) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
});

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

  $(".close-preview").click(function () {
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


const images = Array.from(document.querySelectorAll('.gallery-grid img'));
    const modal = document.querySelector('.modal');

    const closeBtn = document.querySelector('.close-btn');


  images.forEach(image => {
      image.addEventListener('click', () => {
        modal.classList.add('active');
        const img = document.createElement('img');
        img.src = image.src;
        if (modal.children[1]) {
          modal.removeChild(modal.children[1]);
        }
        modal.appendChild(img);

        // Add a class to the modal to indicate that an image is shown
        modal.classList.add('image-active');
      });
    });

    window.addEventListener('click', (e) => {
      if (e.target === modal && modal.classList.contains('image-active')) {
        modal.classList.remove('active');
        modal.classList.remove('image-active');
      }
    });

    closeBtn.addEventListener('click', () => {
      modal.classList.remove('active');
      modal.classList.remove('image-active');
    });
  </script>