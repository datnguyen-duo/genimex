import $ from "jquery/src/jquery";

import ScrollTrigger from "gsap/ScrollTrigger";
import gsap from "gsap";
gsap.registerPlugin(ScrollTrigger);

import "../src/styles/style.scss";
import "../src/scripts/modules/header.js";
import "../src/scripts/templates/front-page.js";
import "../src/scripts/templates/faq.js";
import "../src/scripts/templates/contact.js";
import "../src/scripts/home.js";
import "../src/scripts/templates/work.js";
import "../src/scripts/singleExpertise.js";
import "./scripts/modules/select";

import {
  Swiper,
  Autoplay,
  EffectFade,
  Pagination,
  Navigation,
  Thumbs,
} from "swiper";
Swiper.use([Autoplay, EffectFade, Pagination, Navigation, Thumbs]);

if ($(".template-expertise-page-container").length) {
  // gsap.set('.second-section .slider.first', {y: -($('.slider.first').height() - $('.second-section-holder').height())})
  // var firstSlider = gsap.timeline({
  //   scrollTrigger: {
  //     trigger:'.second-section',
  //     pin:true,
  //     scrub:true
  //   }
  // }).to('.second-section .slider.first', { y: ($('.slider.first').height() - $('.second-section-holder').height()) / 2})

  // var secondSlider = gsap.timeline({
  //     scrollTrigger: {
  //       trigger:'.second-section',
  //       pin:true,
  //       scrub:true
  //     }
  // }).to('.second-section .slider.second', { y: -($('.slider.second').height() - $('.second-section-holder').height())})

  var altMarquee = document.querySelectorAll(
    ".second-section-holder .left > div"
  );

  altMarquee.forEach((vmarquee, index) => {
    if (window.innerWidth > 1023) {
      var h = vmarquee.querySelector(".inner:first-of-type").clientHeight;

      var slides = vmarquee.querySelectorAll(
        ".inner:first-of-type .image-holder-wrap"
      ).length;

      if (index < 1) {
        var distance = h;
      } else {
        var distance = h * -1;
      }

      var dur = slides * 7;

      gsap.to(vmarquee, {
        duration: dur,
        ease: "none",
        y: -distance,
        modifiers: {
          x: gsap.utils.unitize((x) => parseFloat(x) % h),
        },
        repeat: -1,
      });
    } else {
      var w = vmarquee.querySelector(".inner:first-of-type").clientWidth;

      if (index < 1) {
        distance = w;
      } else {
        distance = w * -1;
      }

      gsap.to(vmarquee, {
        duration: dur,
        ease: "none",
        x: -distance,
        modifiers: {
          x: gsap.utils.unitize((x) => parseFloat(x) % w),
        },
        repeat: -1,
      });
    }
  });

  var figure = $(".expertise-list .single-expertise");
  var vid = figure.find("video");

  [].forEach.call(figure, function (item, index) {
    item.addEventListener("mouseover", hoverVideo.bind(item, index), false);
    item.addEventListener("mouseout", hideVideo.bind(item, index), false);
  });

  function hoverVideo(index, e) {
    vid[index].play();
    vid[index].muted = true;
  }

  function hideVideo(index, e) {
    vid[index].pause();
  }
}

$(window).resize(function () {
  ScrollTrigger.refresh();
});

// First we get the viewport height and we multiple it by 1% to get a value for a vh unit
let vh = window.innerHeight * 0.01;
// Then we set the value in the --vh custom property to the root of the document
document.documentElement.style.setProperty("--vh", `${vh}px`);

// We listen to the resize event
window.addEventListener("resize", () => {
  // We execute the same script as before
  let vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

var workSwiper = new Swiper(".work-swiper", {
  speed: 750,
  loop: true,
  spaceBetween: 24,
  centeredSlides: true,
  watchSlidesProgress: true,
  watchOverflow: true,
  navigation: {
    nextEl: ".work-swiper-button-next",
    prevEl: ".work-swiper-button-prev",
  },
  pagination: {
    el: ".work-swiper-pagination",
    type: "progressbar",
  },
  breakpoints: {
    // when window width is >= 320px
    250: {
      spaceBetween: 10,
      slidesPerView: 1.5,
    },
    // when window width is >= 640px
    770: {
      spaceBetween: 24,
      slidesPerView: 2,
    },
  },
});

const categorySwiper = document.querySelectorAll(".categories-swiper");
for (let i = 0; i < categorySwiper.length; i++) {
  categorySwiper[i].classList.add("swiper-container-" + i);

  var slider = new Swiper(".swiper-container-" + i, {
    watchOverflow: true,
    loop: true,
    breakpoints: {
      // when window width is >= 320px
      250: {
        slidesPerView: 1.2,
        spaceBetween: 15,
      },
      // when window width is >= 480px
      480: {
        slidesPerView: 2.2,
        spaceBetween: 20,
      },
      770: {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: false,
      },
    },
  });
}

var paginationSwiper = new Swiper(".pagination-swiper", {
  watchOverflow: true,
  spaceBetween: 10,
  breakpoints: {
    // when window width is >= 320px
    250: {
      slidesPerView: 3,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 4,
    },

    770: {
      slidesPerView: 6,
    },
  },
});

var similarPostsSwiper = new Swiper(".similar-posts-swiper", {
  watchOverflow: true,
  loop: true,
  breakpoints: {
    // when window width is >= 320px
    250: {
      loop: true,
      slidesPerView: 1.2,
      spaceBetween: 15,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2.2,
      spaceBetween: 20,
    },

    770: {
      slidesPerView: 3,
      spaceBetween: 20,
      loop: false,
    },
  },
});

var workFiltersSwiper = new Swiper(".work-filters-swiper", {
  freeMode: true,
  slidesPerView: "auto",
  // watchOverflow: true,
  pagination: {
    el: ".work-swiper-pagination",
    type: "progressbar",
  },
});

var historySwiper = new Swiper(".history-swiper", {
  speed: 750,
  slidesPerView: 3,
  autoHeight: true,
  watchSlidesProgress: true,
  watchOverflow: true,
  pagination: {
    el: ".history-swiper-pagination",
    type: "progressbar",
  },
  navigation: {
    nextEl: ".history-swiper-button-next",
    prevEl: ".history-swiper-button-prev",
  },
  breakpoints: {
    // when window width is >= 320px
    250: {
      slidesPerView: 1,
      spaceBetween: 10,
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    // when window width is >= 640px
    770: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

var testimonialsSwiper = new Swiper(".testimonials-swiper", {
  speed: 750,
  spaceBetween: 100,
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  navigation: {
    nextEl: ".testimonials-swiper-button-next",
    prevEl: ".testimonials-swiper-button-prev",
  },
});

var singleExpertiseSwiper = new Swiper(".swiper-single-expertise", {
  speed: 750,
  spaceBetween: 100,
  loop: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  navigation: {
    nextEl: ".single-expertise-swiper-button-next",
    prevEl: ".single-expertise-swiper-button-prev",
  },
  on: {
    slideChange: function () {
      if (window.innerWidth > 768) {
        setTimeout(function () {
          $(".counter .current-slide").text(
            singleExpertiseSwiper.realIndex + 1
          );

          $(".single-accordion").each(function (index) {
            if ($(this).data("index") != singleExpertiseSwiper.realIndex) {
              $(this).removeClass("active");
            } else {
              $(this).addClass("active");
            }
          });
        }, 50);
      }
    },
  },
});

$(document).ready(function () {
  if (
    $("body").hasClass("expretises-template-default") &&
    window.innerWidth < 800
  ) {
    $(".single-accordion:first").trigger("click");
  }
});

$(".single-accordion").on("click", function () {
  if (window.innerWidth > 768) {
    const currentIndex = $(this).data("index");

    $(".single-accordion").each(function (index) {
      singleExpertiseSwiper.slideToLoop(currentIndex);
    });
  } else {
    $(".single-accordion").removeClass("active");
    $(".accordion-description").slideUp();
    $(this).addClass("active").find(".accordion-description").slideDown();
  }
});

var blogSwiperthumb = new Swiper(".featured-blogs-swiper-thumb", {
  loop: true,
  speed: 750,
  spaceBetween: 100,
  slidesPerView: 1,
  watchSlidesProgress: true,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
});

var blogSwiper = new Swiper(".featured-blogs-swiper", {
  loop: true,
  speed: 750,
  slidesPerView: 1,
  effect: "fade",
  fadeEffect: {
    crossFade: true,
  },
  navigation: {
    nextEl: ".blogs-swiper-button-next",
    prevEl: ".blogs-swiper-button-prev",
  },
  thumbs: {
    swiper: blogSwiperthumb,
  },
  on: {
    slideChange: function () {
      setTimeout(function () {
        $(".counter .current-slide").text(blogSwiper.realIndex + 1);

        if (blogSwiper.realIndex == 0) {
          $(".featured-blog-posts").css("background-color", "#1B4E4E");
        } else if (blogSwiper.realIndex == 2) {
          $(".featured-blog-posts").css("background-color", "#E9B140");
        } else {
          $(".featured-blog-posts").css("background-color", "#43BFAD");
        }
      }, 100);
    },
  },
});

// var logosSwiper = new Swiper(".logos-swiper", {
//   speed: 5000,
//   loop: true,
//   freeMode: true,
//   // spaceBetween: 100,
//   // slidesPerView: 7,
//   centeredSlides: true,
//   allowTouchMove: false,
//   mousewheelControl: true,
//   keyboardControl: true,
//   autoplay: {
//     delay: 1,
//     disableOnInteraction: false,
//   },
//   breakpoints: {
//     // when window width is >= 320px
//     250: {
//       slidesPerView: "auto",
//       spaceBetween: 0,
//     },
//     // when window width is >= 480px
//     480: {
//       slidesPerView: 3,
//       //   spaceBetween: 30
//     },
//     // when window width is >= 640px
//     770: {
//       slidesPerView: 7,
//       //   spaceBetween: 40
//     },
//   },
// });
gsap.utils.toArray(".marquee").forEach((el) => {
  var container = el.querySelector(".marquee__container"),
    marquee = el.querySelector(".marquee__inner"),
    w = marquee.scrollWidth,
    x = Math.round(window.innerWidth / w + 1),
    dur = Math.round((w / window.innerWidth) * 20);

  var clone = marquee.cloneNode(true);
  container.appendChild(clone);

  gsap.to(container, {
    duration: dur,
    ease: "none",
    x: "-=" + w,
    modifiers: {
      x: gsap.utils.unitize((x) => parseFloat(x)),
    },
    repeat: -1,
  });
});
if (window.innerWidth > 768) {
  $(".animate").each(function (index) {
    ScrollTrigger.create({
      trigger: this,
      onEnter: function () {
        $(".animate").eq(index).addClass("in-view");
      },
      start: "top 85%",
      end: "center 85%",
    });
  });
} else {
  $(".animate").each(function (index) {
    ScrollTrigger.create({
      trigger: this,
      onEnter: function () {
        $(".animate").eq(index).addClass("in-view");
      },
      start: "top 65%",
      end: "center 65%",
    });
  });
}

document.addEventListener(
  "DOMContentLoaded",
  function () {
    //HERO ANIMATION
    var heroAnimation = gsap.timeline({
      onComplete: function () {},
    });

    let heroVideo = $(".hero-video");
    let heroContent = $(".section-hero .section-content");
    let header = $("header");

    heroAnimation.to(heroVideo, { opacity: 1, duration: 0.7 });
    heroAnimation.to(heroContent, { opacity: 1, duration: 0.4, delay: 0.5 });
    heroAnimation.to(header, { opacity: 1, duration: 0.4, delay: 0.5 });

    //email signature
    function copyToClip(str) {
      function listener(e) {
        e.clipboardData.setData("text/html", str);
        e.clipboardData.setData("text/plain", str);
        e.preventDefault();
      }
      document.addEventListener("copy", listener);
      document.execCommand("copy");
      document.removeEventListener("copy", listener);
    }

    var copyBtn = document.querySelector(".ctc"),
      copyBtnNLI = document.querySelector(".ctc_no-linkedin"),
      copyBtnSmallNLI = document.querySelector(".ctc__small--no-linkedin"),
      signature = document.getElementById("signature"),
      signatureNLI = document.getElementById("signature_no-linkedin"),
      signatureSmallNLI = document.getElementById(
        "small-signature_no-linkedin"
      );

    if (copyBtn && copyBtnSmallNLI) {
      copyBtn.addEventListener("click", function () {
        copyToClip(signature.outerHTML);
      });

      copyBtnNLI.addEventListener("click", function () {
        copyToClip(signatureNLI.outerHTML);
      });

      copyBtnSmallNLI.addEventListener("click", function () {
        copyToClip(signatureSmallNLI.outerHTML);
      });
    }
  },
  false
);
