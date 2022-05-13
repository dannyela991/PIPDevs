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
  
  // CARROSSEL BUSSINESS
  $(function () {
  
    $('.carrossel-bussiness').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1, 
        dots: true,     
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
  
        responsive: [
          {
            breakpoint: 1140,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
    })
  })
  // CARROSSEL ECOSYSTEM
  $(function () {
  
    $('.carrossel-ecosystem').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,  
        dots: true,  
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
  
        responsive: [
            {
              breakpoint: 1140,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
    })
  })
  // CARROSSEL SPONSONRS
  $(function () {
  
    $('.carrossel-sponsors').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,    
        autoplay: true,
        autoplaySpeed: 2000,
        vertical: true,
        prevArrow: $('#prev-sponsors'),
        nextArrow: $('#next-sponsors'),
  
        responsive: [
            {
              breakpoint: 1140,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                vertical: false,
              }
            },
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              }
            }
          ]
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
        slidesToShow: 2,
        slidesToScroll: 1,  
        prevArrow: $('#prev-podcast'),
        nextArrow: $('#next-podcast'),
  
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
  // CARROSSEL travel
  $(function () {
  
    $('.carrossel-travel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,  
        prevArrow: $('#prev-travel'),
        nextArrow: $('#next-travel'),
  
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


  //REPONSIVE IFRAME
  $(".content-post iframe").wrap("<div class='container-iframe'></div>");
  $(".content-post iframe").addClass("responsive-iframe");
  
  //REPONSIVE IMG
  $(".content-post img").wrap("<div class='container-img'></div>");
  $(".content-post img").addClass("responsive-img");

//MASK PHONE
$("#tel-phone").mask("(00) 00000-0000");
$("#tel-fixed").mask("(00) 0000-0000");

// TAB MY ACCOUNT
function openPage(pageName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
// END TAB MY ACCOUNT

