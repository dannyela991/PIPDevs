// EVENTO SCROLL HEADER
(function () {
  var menu = document.getElementById('top-page');
  window.addEventListener('scroll', function () {
      if (window.scrollY > 0) menu.classList.add('header-fixo');
      else menu.classList.remove('header-fixo');
  });
})();
// END EVENT SCROLL HEADER

// NAV RESPONSIVE
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var dropdown = document.getElementsByClassName("dropbtn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}

// SEARCH FULLSCREEN
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}
function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}

// FULLBANNER
$(function () {
  $('.carrossel-banner').slick({
    infinite: true,    
    autoplay: true,
    autoplaySpeed: 3500,

    prevArrow: $('#prev-fullbanner'),
    nextArrow: $('#next-fullbanner'),
  })
})


// CARROSSEL LOGOS
$(function () {

  $('.carrossel-logos').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-link-logos'),
      nextArrow: $('#next-link-logos'),

      responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})

// FILTER CATEGORY
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// CARROSSEL MIDIAS
$(function () {

  $('.carrossel-midia').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,  
      prevArrow: $('#prev-midia'),
      nextArrow: $('#next-midia'),

      responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})
// CARROSSEL PODCAST
$(function () {

  $('.carrossel-podcast').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-podcast'),
      nextArrow: $('#next-podcast'),

      responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})


// CARROSSEL further
$(function () {

  $('.carrossel-further').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 1,    
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $('#prev-further'),
      nextArrow: $('#next-further'),

      responsive: [
          {
            breakpoint: 769,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
  })
})

// MODAL MIDIA
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}