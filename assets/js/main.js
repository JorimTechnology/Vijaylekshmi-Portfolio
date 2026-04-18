/*--------------------------
    Project Name: Medcity
    Version: 1.0
    Author: 7oorof
    Relase Date: April 2021
---------------------------*/
/*---------------------------
      Table of Contents
    --------------------
    01- Pre Loading
    02- Mobile Menu
    03- Sticky Navbar
    04- Scroll Top Button
    05- Close Topbar
    06- Set Background-img to section 
    07- Add active class to accordions
    08- Contact Form validation
    09- Slick Carousel
    10- Popup Video
    11- Progress bars
    12- NiceSelect Plugin
    13- Range Slider
     
 ----------------------------*/

$(function () {
  ("use strict");

  // Global variables
  var $win = $(window);

  /*==========  Pre Loading   ==========*/
  setTimeout(function () {
    $(".preloader").remove();
  }, 2000);

  /*==========   Mobile Menu   ==========*/
  $(".navbar-toggler").on("click", function () {
    $(".navbar-collapse").addClass("menu-opened");
  });

  $(".close-mobile-menu").on("click", function (e) {
    $(".navbar-collapse").removeClass("menu-opened");
  });

  /*==========   Sticky Navbar   ==========*/
  $win.on("scroll", function () {
    if ($win.width() >= 992) {
      var $stickyNavbar = $(".sticky-navbar"),
        $secondaryNavbar = $(".secondary-nav");
      if ($win.scrollTop() > 200) {
        $stickyNavbar.addClass("is-sticky");
      } else {
        $stickyNavbar.removeClass("is-sticky");
      }
      if ($secondaryNavbar.length) {
        if ($win.scrollTop() > $secondaryNavbar.offset().top - 200) {
          $secondaryNavbar.addClass("secondary-nav-sticky");
        } else {
          $secondaryNavbar.removeClass("secondary-nav-sticky");
        }
      }
    }
  });
  // Scroll To Section when Clicking on The Link
  $(".secondary-nav-internal-navigation .nav__link").on("click", function (e) {
    e.preventDefault();
    $("html, body").animate(
      {
        scrollTop: $("#" + $(this).data("scroll")).offset().top - 200,
      },
      1000
    );
  });

  // Add  active class when The Scroll Reaching the Section
  $(window).on("scroll", function () {
    $("section").each(function () {
      if ($(window).scrollTop() > $(this).offset().top - 200) {
        var sectionID = $(this).attr("id");
        $(".secondary-nav-internal-navigation .nav__link").removeClass(
          "active"
        );
        $(
          '.secondary-nav-internal-navigation .nav__link[data-scroll="' +
            sectionID +
            '"]'
        ).addClass("active");
      }
    });
  });

  /*==========   Scroll Top Button   ==========*/
  var $scrollTopBtn = $("#scrollTopBtn");
  // Show Scroll Top Button
  $win.on("scroll", function () {
    if ($(this).scrollTop() > 700) {
      $scrollTopBtn.addClass("actived");
    } else {
      $scrollTopBtn.removeClass("actived");
    }
  });
  // Animate Body after Clicking on Scroll Top Button
  $scrollTopBtn.on("click", function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      500
    );
  });

  /*==========   Close Topbar   ==========*/
  $(".topbar__close").on("click", function (e) {
    e.preventDefault();
    $(this).closest(".topbar").fadeOut();
  });

  /*==========   Set Background-img to section   ==========*/
  $(".bg-img").each(function () {
    var imgSrc = $(this).children("img").attr("src");
    $(this)
      .parent()
      .css({
        "background-image": "url(" + imgSrc + ")",
        "background-size": "cover",
        "background-position": "center",
      });
    $(this).parent().addClass("bg-img");
    if ($(this).hasClass("background-size-auto")) {
      $(this).parent().addClass("background-size-auto");
    }
    $(this).remove();
  });

  /*==========   Add active class to accordions   ==========*/
  $(".accordion__header").on("click", function () {
    $(this).parent(".accordion-item").toggleClass("opened");
    $(this).parent(".accordion-item").siblings().removeClass("opened");
  });
  $(".accordion__title").on("click", function (e) {
    e.preventDefault();
  });

  /*==========  Open and Close Popup   ==========*/
  // open Mini Popup
  function openMiniPopup(popupTriggerBtn, popup, cssClass) {
    $(popupTriggerBtn).on("click", function (e) {
      e.preventDefault();
      $(this).toggleClass(cssClass);
      $(popup).toggleClass(cssClass);
    });
  }
  // open Popup
  function openPopup(popupTriggerBtn, popup, addedClass, removedClass) {
    $(popupTriggerBtn).on("click", function (e) {
      e.preventDefault();
      $(popup).toggleClass(addedClass, removedClass).removeClass(removedClass);
    });
  }
  // Close Popup
  function closePopup(closeBtn, popup, addedClass, removedClass) {
    $(closeBtn).on("click", function () {
      $(popup).removeClass(addedClass).addClass(removedClass);
    });
  }
  // close popup when clicking on an other place on the Document
  function closePopupFromOutside(
    popup,
    stopPropogationElement,
    popupTriggerBtn,
    removedClass,
    addedClass
  ) {
    $(document).on("mouseup", function (e) {
      if (
        !$(stopPropogationElement).is(e.target) &&
        !$(popupTriggerBtn).is(e.target) &&
        $(stopPropogationElement).has(e.target).length === 0 &&
        $(popup).has(e.target).length === 0
      ) {
        $(popup).removeClass(removedClass).addClass(addedClass);
      }
    });
  }
  openMiniPopup(
    ".miniPopup-emergency-trigger",
    "#miniPopup-emergency",
    "active"
  ); // Open miniPopup-emergency
  openMiniPopup(
    "#miniPopup-departments-trigger-icon",
    "#miniPopup-departments",
    "active"
  ); // Open miniPopup-emergency

  openPopup(".action__btn-search", ".search-popup", "active", "inActive"); // Open sidenav popup
  closePopup(".search-popup__close", ".search-popup", "active", "inActive"); // Close sidenav popup
  openPopup(".action__btn-burgerMenu", ".burger-menu", "active", "inActive"); // Open sidenav popup
  closePopup(".burger-menu__close", ".burger-menu", "active", "inActive"); // Close sidenav popup
  openPopup(".action__btn-cart", ".cart-popup", "active", "inActive"); // Open Search popup
  closePopupFromOutside(
    ".burger-menu",
    ".burger-menu__content",
    ".action__btn-burgerMenu",
    "active",
    "inActive"
  ); // close popup when clicking on an other place on the Document

  openPopup(".open-login-popup", "#login-popup", "active", "inActive"); // Open sidenav popup
  closePopupFromOutside(
    "#login-popup",
    ".login-popup-wrapper",
    ".open-login-popup",
    "active",
    "inActive"
  ); // close popup when clicking on an other place on the Document

  openPopup(".open-register-popup", "#register-popup", "active", "inActive"); // Open sidenav popup
  closePopupFromOutside(
    "#register-popup",
    ".login-popup-wrapper",
    ".open-register-popup",
    "active",
    "inActive"
  ); // close popup when clicking on an other place on the Document

  // Close topbar
  $("#close-topbar").on("click", function () {
    $("#header-topbar").fadeOut();
  });

  /*==========   Increase and Decrease Input Value   ==========*/
  // Increase Value
  $(".increase-qty").on("click", function () {
    var $qty = $(this).parent().find(".qty-input");
    var currentVal = parseInt($qty.val());
    if (!isNaN(currentVal)) {
      $qty.val(currentVal + 1);
    }
  });
  // Decrease Value
  $(".decrease-qty").on("click", function () {
    var $qty = $(this).parent().find(".qty-input");
    var currentVal = parseInt($qty.val());
    if (!isNaN(currentVal) && currentVal > 1) {
      $qty.val(currentVal - 1);
    }
  });

  /*==========   Progress bars  ==========*/
  if ($(".animated-Progressbars").length > 0) {
    $(window).on("scroll", function () {
      var skillsOffset = $(".animated-Progressbars").offset().top - 160,
        skillsHight = $(this).outerHeight(),
        winScrollTop = $(window).scrollTop();
      if (
        winScrollTop > skillsOffset - 1 &&
        winScrollTop < skillsOffset + skillsHight - 1
      ) {
        $(".progress-bar").each(function () {
          $(this).width($(this).attr("aria-valuenow") + "%");
        });
        $(".progress__percentage").each(function () {
          $(this).text(
            $(this).parent(".progress-bar").attr("aria-valuenow") + "%"
          );
        });
      }
    });
  }

  /*==========  Contact Form validation  ==========*/
  var contactForm = $("#contactForm"),
    contactResult = $(".contact-result");
  contactForm.validate({
    debug: false,
    submitHandler: function (contactForm) {
      $(contactResult, contactForm).html("Please Wait...");
      $.ajax({
        type: "POST",
        url: "assets/php/contact.php",
        data: $(contactForm).serialize(),
        timeout: 20000,
        success: function (msg) {
          $(contactResult, contactForm)
            .html(
              '<div class="alert alert-success" role="alert"><strong>Thank you. We will contact you shortly.</strong></div>'
            )
            .delay(3000)
            .fadeOut(2000);
        },
        error: $(".thanks").show(),
      });
      return false;
    },
  });

  /*==========   Slick Carousel ==========*/
  $(".slick-carousel").slick({
    prevArrow:
      "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
    nextArrow:
      "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>",
  });

  $(".slider-with-navs").slick({
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    pauseOnFocus: false,
    fade: false,
    dots: true,
    asNavFor: ".slider-nav",
  });

  $(".slider-nav").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: ".slider-with-navs",
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    infinite: false,
  });

  /*==========  Popup Video  ==========*/
  $(".popup-video").magnificPopup({
    mainClass: "mfp-fade",
    removalDelay: 0,
    preloader: false,
    fixedContentPos: false,
    type: "iframe",
    iframe: {
      markup:
        '<div class="mfp-iframe-scaler">' +
        '<div class="mfp-close"></div>' +
        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
        "</div>",
      patterns: {
        youtube: {
          index: "youtube.com/",
          id: "v=",
          src: "//www.youtube.com/embed/%id%?autoplay=1",
        },
      },
      srcAction: "iframe_src",
    },
  });
  $(".popup-gallery-item").magnificPopup({
    type: "image",
    tLoading: "Loading image #%curr%...",
    mainClass: "mfp-img-mobile",
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1],
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
    },
  });

  /*==========  NiceSelect Plugin  ==========*/
  // $("select").niceSelect();

  /*==========   Range Slider  ==========*/
  var $rangeSlider = $("#rangeSlider"),
    $rangeSliderResult = $("#rangeSliderResult");
  $rangeSlider.slider({
    range: true,
    min: 0,
    max: 300,
    values: [50, 200],
    slide: function (event, ui) {
      $rangeSliderResult.val("$" + ui.values[0] + " - $" + ui.values[1]);
    },
  });
  $rangeSliderResult.val(
    "$" +
      $rangeSlider.slider("values", 0) +
      " - $" +
      $rangeSlider.slider("values", 1)
  );

  /*==========  image zoomsl Plugin  ==========*/
  // [Zoom Effect on Hovering] Find it in shop-single-product.html
  $(".zoomin").imagezoomsl();
});
//  ======================Justin Rajadurai's Scripts================================
// inspiring stories slider nav display none for 700 px screen

// $(document).ready(function () {
//   if ($(window).width() < 700) {
//     $("#menu2").addClass("mednone");
//   } else {
//     $("#menu2").removeClass("mednone");
//   }
// });
// -------------------Media Queries Under 700 px----------------------------
$(document).ready(function () {
  if ($(window).width() < 700) {
    $("#btext").css({ "font-size": "33px" });
  } else {
    $("#btext").css({ "font-size": "45px" });
  }
});
// ==================================================
$(document).ready(function () {
  var css = $("#test");
  if ($(window).width() < 700) {
    $("#test").ready(function () {
      css.remove();
    });
  } else {
    console.log("not removed");
  }
});
// ===================================================
$(document).ready(function () {
  if ($(window).width() < 700) {
    $(".about-bp-img").css({ "margin-top": "0px", "margin-bottom": "50px" });
    console.log("success");
  } else {
    console.log("you are failure");
  }
});
// ====================== footer about imge media Qry===============================
$(document).ready(function () {
  var css = $("#footer-widget-about");
  if ($(window).width() < 700) {
    $("#test").ready(function () {
      css.css("width", "360px");
    });
  } else {
    console.log("not removed");
  }
});
// -===========================
$(document).ready(function () {
  if ($(window).width() < 850) {
    $(".taable").css("color", "red");
  }
});
// ---------------------------------
$(document).ready(function () {
  if ($(window).width() < 850) {
    // $(".about-layout1").css({ "padding-top": "1px " });
    $(".about-layout1").attr("style", "padding-top: 1px !important");
  }
});
// --------------------------------------

$(document).ready(function () {
  if ($(window).width() < 850) {
    $(".abt-bp").attr("style", "margin-top: 1px !important");
  }
});
// ______________________________________________________________
$(document).ready(function () {
  if ($(window).width() < 850) {
    $("#quick").removeClass("text-center");
  }
});
// ---------------------------------------
// Contactus form success message remove after 5 sec
setTimeout(function () {
  $(".success").removeClass("success").addClass("dnone");
}, 6000);
setTimeout(function () {
  $(".failed").removeClass("failed").addClass("dnone");
}, 6000);
//-------------------------------
// Appointment_____________________------------------
// Map your choices to your option value
var lookup = {
  CARDIOLOGY: ["Dr. A. Ashok Kumar, M.D.,D.M.,", " Dr. M. Saravanan, MD., DM."],
  DERMATOLOGY: ["Dr. K. Manoharan, M.B.B.S.,MD.,D.D."],
  DIABETOLOGY: ["Dr. S.S. Balamurugan, M.D.,D.M."],
  "DENTAL SURGEON": ["Dr. B. Sujatha, B.D.S.,", "Dr. A. Hinduja, B.D.S.,"],
  "GENERAL/BARIATRIC/METABOLIC/ LAPAROSCOPIC & SURGICAL GASTROENTEROLOGIST": [
    "Dr. T. Perungo, M.B.B.S.M.S MRCS (Edin) M. Ch(SGE),FMBS(OSSI).,",
  ],
  "GENERAL PHYSICIAN": [
    "Dr. S. Sabitha, M.B.B.S.,M.D.,",
    "Dr. Balaji Thenrajan, MB.B.S.,M.D.",
  ],
  GYNAECOLOGY: [
    "Dr. S. Suseela, M.B.B.S.,D.G.O.,",
    "Dr. Ejilarassy Prasanna, M.B.B.S, D.G.O.",
  ],
  "MEDICAL GASTROENTEROLOGY": ["Dr. T.K. Anand, M.D.,D.M."],
  "MEDICAL AND RADIATION": ["Dr. R. Durgaprasad, M.B.B.S., M.D., Med,Onco"],
  NEPHROLOGY: ["Dr. S. Krishnakumar, M.D.,DM."],
  NEUROLOGY: [
    "Dr. Arul Muthukumaraswamy, M.B.B.S.,D.N.B.,M.Ch, (Neuro Surgery),",
    "Dr. S. Selvin, MD,DM. (Neuro), FINR.",
  ],
  ORTHOPAEDICS: [
    "Dr. S. Siva Saravanan, M.S.Ortho,D.Ortho.,",
    "Dr. L. Bharath, M.B.B.S.,D.Ortho.,M.S (Ortho),M.R.C.S(Edin).,",
    "Dr. S. Kabilan, M.B.B.S.,MD.Ortho., FISAKOS (Trauma)",
  ],
  PAEDIATRICS: [
    "Dr. S. Sathish Kumar, M.B.B.S.,M.D..(Paed)",
    "Dr. M. Sathyamoorthy, M.B.B.S. M.D. (Paed)",
    "Dr. G. Sangeetha, M.B.B.S. MD.(Paed),",
  ],
  "PAEDIATRIC UROLOGIST": ["Dr. M. Raghul, M.B.B.S, MS, DNB, FMAS, M.Ch.,"],
  "PLASTIC SURGEON": ["Dr. R. Saravanan, M.S.,M.Ch."],
  PSYCHIATRIST: [
    "Dr. S. Aravindan, M.B.B.S.,DPM.,",
    "Dr. B. Divya, M.B.B.S, M.D.",
  ],
  PULMONOLOGY: ["Dr. Y. Rowhit, M.B.B.S,MD."],
  RADIOLOGY: ["Dr. G. Vijayalakshmi, MD,DMRD,", "Dr. A. Veena, M.B.B.S.,M.Sc"],
  UROLOGY: [
    "Dr. G. Shivasankar, M.S.,M.Ch, FRCS,",
    "Dr. K. Vethachalam, M.S.,M.Ch.",
  ],
  RHEUMATOLOGY: ["Dr. C. Saranya, M.B.B.S., (Gen med) M.D., DMC"],
  "SURGICAL ONCOLOGY": ["Dr. V. Balasubramanian, M.S., MRCS.M.Ch."],
  "ANDROLOGY/SEXUAL MEDICINE": ["Dr. G. Ramesh, M.S.,M.Ch."],
  "GENERAL / VASCULAR": ["Dr. S. sathya Narayanan. M.S.,M.Ch."],
  "VASCULAR & ENDOVASCULAR": ["Dr. R. Jayakrishnan, M.S, MRCS (Edin),M.Ch., "],
  "E.N.T SURGEON": ["Dr. K. Sanjay Kumar, M.S.,D.L.O."],
};

// When an option is changed, search the above for matching choices
$("#options").on("change", function () {
  // Set selected option as variable
  var selectValue = $(this).val();

  // Empty the target field
  $("#choices").empty();

  // For each chocie in the selected option
  for (i = 0; i < lookup[selectValue].length; i++) {
    // Output choice in the target field
    $("#choices").append(
      "<option value='" +
        lookup[selectValue][i] +
        "'>" +
        lookup[selectValue][i] +
        "</option>"
    );
  }
});
// Appointment doctor and clinic selection is ended

// --------------------------------------------

$(document).ready(function () {
  $("#contact-date").datepicker({
    dateFormat: "yy-mm-dd",
    maxDate: "+1m +10d",
    minDate: 0,
  });
});
// --------------------Appointment name only on text validation----------------------------
const nameInput = document.getElementById("contact-name");

nameInput.addEventListener("input", (event) => {
  const regex = /^[a-zA-Z\s]*$/; // Regular expression to match only letters and spaces
  const input = event.target.value;

  if (!regex.test(input)) {
    // If input contains numbers or other characters, remove them
    event.target.value = input.replace(/[^a-zA-Z\s]/g, "");
  }
});
//
