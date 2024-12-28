const states = {
  USA: ["California", "Texas", "Florida"],
  CAN: ["Ontario", "Quebec", "British Columbia"],
  GBR: ["England", "Scotland", "Wales"],
  AUS: ["New South Wales", "Victoria", "Queensland"],
};

const cities = {
  California: ["Los Angeles", "San Francisco", "San Diego"],
  Texas: ["Houston", "Dallas", "Austin"],
  Florida: ["Miami", "Orlando", "Tampa"],
  Ontario: ["Toronto", "Ottawa", "Hamilton"],
  Quebec: ["Montreal", "Quebec City", "Laval"],
  "British Columbia": ["Vancouver", "Victoria", "Burnaby"],
  England: ["London", "Birmingham", "Manchester"],
  Scotland: ["Edinburgh", "Glasgow", "Aberdeen"],
  Wales: ["Cardiff", "Swansea", "Newport"],
  "New South Wales": ["Sydney", "Newcastle", "Wollongong"],
  Victoria: ["Melbourne", "Geelong", "Ballarat"],
  Queensland: ["Brisbane", "Gold Coast", "Cairns"],
};

function updateStates() {
  const countrySelect = document.getElementById("country");
  const stateSelect = document.getElementById("state");
  const stateContainer = document.getElementById("state-container");
  const cityContainer = document.getElementById("city-container");
  const citySelect = document.getElementById("city");

  stateSelect.innerHTML =
    '<option value="" disabled selected>Select a state</option>';
  citySelect.innerHTML =
    '<option value="" disabled selected>Select a city</option>';
  cityContainer.style.display = "none";

  if (countrySelect.value) {
    const selectedCountry = countrySelect.value;
    states[selectedCountry].forEach((state) => {
      stateSelect.innerHTML += `<option value="${state}">${state}</option>`;
    });
    stateContainer.style.display = "block";
  } else {
    stateContainer.style.display = "none";
  }
}

function updateCities() {
  const stateSelect = document.getElementById("state");
  const citySelect = document.getElementById("city");
  const cityContainer = document.getElementById("city-container");

  citySelect.innerHTML =
    '<option value="" disabled selected>Select a city</option>';

  if (stateSelect.value) {
    const selectedState = stateSelect.value;
    cities[selectedState].forEach((city) => {
      citySelect.innerHTML += `<option value="${city}">${city}</option>`;
    });
    cityContainer.style.display = "block";
  } else {
    cityContainer.style.display = "none";
  }
}
const cmData = [
  [37, 22.8, 43.3],
  [37.8, 23.2, 45.7],
  [38.6, 23.6, 48],
  [39.4, 24, 50.4],
  [40.2, 24.4, 52.8],
  [40.9, 24.8, 55.1],
];

const inData = cmData.map((row) =>
  row.map((value) => (value / 2.54).toFixed(1))
);

function changeUnits(unit) {
  const tableRows = document.querySelectorAll("#sizeTable tbody tr");
  tableRows.forEach((row, index) => {
    const cells = row.querySelectorAll("td");
    const data = unit === "cm" ? cmData[index] : inData[index];
    cells[1].textContent = data[0];
    cells[2].textContent = data[1];
    cells[3].textContent = data[2];
  });

  document
    .querySelectorAll(".tab")
    .forEach((tab) => tab.classList.remove("active"));
  const activeTab =
    unit === "cm"
      ? document.querySelector(".tab:nth-child(1)")
      : document.querySelector(".tab:nth-child(2)");
  activeTab.classList.add("active");
}
  var para = document.querySelectorAll('p')
  para.forEach(element => {
    element.classList.add('hover-target')
  });
  
$(document).ready(() => {
  $(".view_tab2").fadeOut();
  $(".view_tab3").fadeOut();
  $(".view_tab1").fadeIn();
  $(".main_popup").hide();
  $(".search_pop").hide();
  $(".shahenPopup").hide();
  $(".confCopon_popup").hide();
  $(".payIstilamPopup").hide();
  $(".paymentSecurityPopup").hide();
  $(".loginPopup").hide();
  $(".verify_popup").hide();
  $(".phoneNumber_popup").hide();
  $(".confirm_popup").hide();
  $(".password_popup").hide();
  $(".personalInformation_popup").hide();
  $(".deleteAccount_popup").hide();
  $(".resalePopup").hide();
  $('.AllFilters_popup').hide();
  $(".loader").hide();
  $(".showForm").hide();
  $(".sizeForm_").hide();
  $('.plus-btn').click(function() {
    plus($(this));
  });
  
  $('.minus-btn').click(function() {
    minus($(this));
  });
  
  var count = 1;
  $('.count_prod_inp').val(count);
  
  function plus(btn) {
    count++;
    $('.count_prod_inp').val(count);
    btn.siblings('.minus-btn').prop('disabled', false);
  }
  
  function minus(btn) {
    if (count > 1) {
      count--;
      $('.count_prod_inp').val(count);
    }
    if (count <= 1) {
      btn.prop('disabled', true);
    }
  }
  
   // التعامل مع الـ Popups
   const popups = [
    ".main_popup", ".loginPopup", ".shahenPopup", ".payIstilamPopup", 
    ".paymentSecurityPopup", ".verify_popup", ".phoneNumber_popup",
    ".confirm_popup", ".personalInformation_popup", ".deleteAccount_popup",
    ".resalePopup", ".AllFilters_popup", '.password_popup','.confCopon_popup'
  ];

  popups.forEach(popup => {
    $(popup).click(() => $(popup).fadeOut());
  });
  const popupButtons = [
    { button: ".categoriesBtn", popup: ".main_popup" },
    { button: ".loginpopupBtn", popup: ".loginPopup" },
    { button: ".phoneNumber_btn", popup: ".phoneNumber_popup" },
    { button: ".password_btn", popup: ".password_popup" },
    { button: ".personalInformation_btn", popup: ".personalInformation_popup" },
    { button: ".verify_btn", popup: ".verify_popup" },
    { button: ".confirm_btn", popup: ".confirm_popup" },
    { button: ".deleteAccount_btn", popup: ".deleteAccount_popup" },
    { button: ".shahenPopupBtn", popup: ".shahenPopup" },
    { button: ".payIstilamPopupBtn", popup: ".payIstilamPopup" },
    { button: ".resalePopupBtn", popup: ".resalePopup" },
    { button: ".paymentSecurityPopupBtn", popup: ".paymentSecurityPopup" },
    { button: ".tatbeeq_btn", popup: ".confCopon_popup" }
  ];
  
  popupButtons.forEach(({ button, popup }) => {
    $(button).click(() => {
      $(popup).fadeIn();
    });
  });
  
  const popupSelectors = [
    ".passwordPopup",
    ".popcard",
    ".phoneNumberPopup",
    ".verifyPopup",
    ".deleteAccountPopup",
    ".confirmPopup",
    ".categoriesPopup",
    ".personalInformationPopup",
    ".confCoponPopup",
  ];
  
  popupSelectors.forEach(selector => {
    $(selector).click((event) => {
      event.stopPropagation();
    });
  });
  $(".btn_two").click(() => {
    if ($(".btn_two").hasClass("active")) {
    } else {
      $(".btn_two").addClass("active");
      $(".btn_one").removeClass("active");
      $(".btn_three").removeClass("active");
    }
    $(".view_tab1").fadeOut();
    $(".view_tab3").fadeOut();
    $(".view_tab2").fadeIn();
  });
  $('.option_').click(()=>{
    document.querySelectorAll('.inputCheckbox').forEach(element => {
      $(element).toggleClass('hidden')
    });
    $('.par').toggleClass('hidden')
  })
  $(".btn_one").click(() => {
    if ($(".btn_one").hasClass("active")) {
    } else {
      $(".btn_one").addClass("active");
      $(".btn_two").removeClass("active");
      $(".btn_three").removeClass("active");
    }
    $(".view_tab2").fadeOut();
    $(".view_tab3").fadeOut();
    $(".view_tab1").fadeIn();
  });
  $(".btn_three").click(() => {
    if ($(".btn_three").hasClass("active")) {
    } else {
      $(".btn_three").addClass("active");
      $(".btn_two").removeClass("active");
      $(".btn_one").removeClass("active");
    }
    $(".view_tab2").fadeOut();
    $(".view_tab1").fadeOut();
    $(".view_tab3").fadeIn();
  });
  $('.AllFiltersPopup').css({
    transform: "translate(-320px, 0)"
});
  $('.AllFilters_btn').click(()=>{
    $('.AllFilters_popup').fadeIn();
    $('.AllFiltersPopup').css({
      transform: "translate(0, 0)"
  });
  })
  $('.AllFiltersPopup_closeBtn').click(() => {
    $('.AllFiltersPopup').css({
        transform: "translate(-320px, 0)"
    });
    $('.AllFilters_popup').fadeOut(1000);
});


  // search popup
  $(".search_pop").click(() => {
    $(".search_pop").hide();
  });

  $(".searchBtn").click(() => {
    $(".search_pop").fadeIn();
  });

  $(".searchPopup").click((event) => {
    event.stopPropagation();
  });
  $(".show_dBtn").click(() => {
    $(".showForm").show();
    $(".form_card").hide();
  });

  // إخفاء محتوى كل الفئات
  $(".accordion-content").hide();
  $(".main-accordion-content").show();

  // التعامل مع الاكورديون الرئيسي
  $(".main-accordion-header").on("click", function () {
    const mainAccordionContent = $(this).next(".main-accordion-content");
    const toggleIcon = $(this).find(".toggle-icon");

    if (mainAccordionContent.is(":visible")) {
      mainAccordionContent.slideUp();
      toggleIcon.text("+");
    } else {
      mainAccordionContent.slideDown();
      toggleIcon.text("-");
    }
  });
  if ($(".personalINFO_btn").prop("disabled", true)) {
      $('.personalINFO_btn').css('opacity' , '0.5')
  }
  $('#personalInfo').on("change", function () {
    if ($(this).is(":checked")) {
      $(".personalINFO_btn").prop("disabled", false);
    $('.personalINFO_btn').css('opacity' , '1')
    }
  });

  // التعامل مع + عند الضغط على الفئات
  $(".show-items-btn").on("click", function () {
    const content = $(this).parent().next(".accordion-content"); // تعديل هذا السطر

    if (content.is(":visible")) {
      content.slideUp();
      $(this).text("+");
    } else {
      content.slideDown();
      $(this).text("-");
    }
  });

  // التعامل مع زر عرض المزيد
  $(".show-more-btn").on("click", function () {
    $(".hidden-categories").slideDown();
    $(this).hide(); // إخفاء زر عرض المزيد بعد الضغط عليه
  });
  var top_sec = document.querySelectorAll(".card_img, .card_video");
  var top_show_img = document.querySelector(".top_show");
  var top_show_video = document.querySelector("video.top_show");
  
  Array.from(top_sec).forEach((elements) => {
      elements.addEventListener("click", function (eo) {
          if (elements.tagName === 'IMG') {
              top_show_img.src = elements.src; // إذا كانت الصورة
              top_show_img.style.display = 'block'; // عرض الصورة
              top_show_video.style.display = 'none'; // إخفاء الفيديو
          } else if (elements.tagName === 'VIDEO') {
              top_show_video.src = elements.src; // إذا كان الفيديو
              top_show_video.style.display = 'block'; // عرض الفيديو
              top_show_img.style.display = 'none'; // إخفاء الصورة
          }
      });
  });
  
  
  $(".r_t").each(function () {
    $(this).on("click", function () {
      $(".r_t").removeClass("active_");
      $(this).addClass("active_");
    });
  });
  $(".showsizeForm_btn").click(() => {
    $(".sizeForm_").fadeIn();
  });
  // checkbox
  $('.radio-input').change(function() {
    const label = $(this).closest('label');
    if (this.checked) {
        label.addClass('checked'); 
    } else {
        label.removeClass('checked'); 
    }
});
// radio
$('.radio-input').change(function() {
  $('.radio-label').removeClass('checked');
  
  const label = $(this).closest('label');
  label.addClass('checked');
});
  wow = new WOW({
    animateClass: "animated",
    offset: 100,
    callback: function (box) {
      console.log("WOW: animating <" + box.tagName.toLowerCase() + ">");
    },
  });
  
  wow.init();
    document
      .getElementsByTagName("body")[0]
      .addEventListener("mousemove", function (n) {
        (t.style.left = n.clientX + "px"),
          (t.style.top = n.clientY + "px"),
          (e.style.left = n.clientX + "px"),
          (e.style.top = n.clientY + "px"),
          (i.style.left = n.clientX + "px"),
          (i.style.top = n.clientY + "px");
      });
    var t = document.getElementById("cursor"),
      e = document.getElementById("cursor2"),
      i = document.getElementById("cursor3");

    function n(t) {
      e.classList.add("hover"), i.classList.add("hover");
    }

    function s(t) {
      e.classList.remove("hover"), i.classList.remove("hover");
    }
    s();
    for (
      var r = document.querySelectorAll(".hover-target"), a = r.length - 1;
      a >= 0;
      a--
    ) {
      o(r[a]);
    }

    function o(t) {
      t.addEventListener("mouseover", n), t.addEventListener("mouseout", s);
    }

});
// var timeEl = document.querySelector('.time');
// var endTime = new Date();
// endTime.setHours(endTime.getHours() + 24); 
// setInterval(() => {
//   var now = new Date();
//   var remainingTime = endTime - now; 
//   var hours = Math.floor((remainingTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
//   var minutes = Math.floor((remainingTime % (1000 * 60 * 60)) / (1000 * 60));
//   var seconds = Math.floor((remainingTime % (1000 * 60)) / 1000);
//   var allTime = `${hours}:${minutes}:${seconds}`;
//   timeEl.textContent = allTime;
//   if (remainingTime < 0) {
//     clearInterval(); 
//     timeEl.textContent = "انتهى الوقت!";
//   }
// }, 1000);