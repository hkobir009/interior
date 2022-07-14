$(function(){
  $(".typed").typed({
    strings: ["House.", "Apartment.", "Plaza."],
    // Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
    stringsElement: null,
    // typing speed
    typeSpeed: 30,
    // time before typing starts
    startDelay: 1200,
    // backspacing speed
    backSpeed: 20,
    // time before backspacing
    backDelay: 500,
    fadeOut: false,
    fadeOutClass: 'typed-fade-out',
    fadeOutDelay: 500,
    // loop
    loop: true,
    // false = infinite
    loopCount: Infinity,
    // show cursor
    showCursor: false,
    // character for cursor
    cursorChar: "|",
    // attribute to type (null == text)
    attr: null,
    // either html or text
    contentType: 'html',
    // call when done callback function
    callback: function() {},
    // starting callback function before each string
    preStringTyped: function() {},
    //callback for every typed string
    onStringTyped: function() {},
    // callback for reset
    resetCallback: function() {}
   });
});


$('.carousel1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true,
    navText: ['<i class="fa-solid fa-arrow-left-long"></i>', '<i class="fa-solid fa-arrow-right-long"></i>'],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});
$('.customers-carousel').owlCarousel({
  loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    nav:false,
    dots: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
$('.carousel2').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:10000,
    autoplayHoverPause:true,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:6
        }
    }
});
$(".icon").lightcase();
$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('#toTopBtn').fadeIn();
  } else {
    $('#toTopBtn').fadeOut();
  }
});

$('#toTopBtn').click(function() {
  $("html, body").animate({
    scrollTop: 0
  }, 1000);
  return false;
});
document.getElementById('openBtn').onclick = function changeContent() {
  openSearch();
}
function openSearch() {
   document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
   document.getElementById("myOverlay").style.display = "none";
}
            
document.addEventListener("DOMContentLoaded", function(){
         
   window.addEventListener('scroll', function() {
      
   if (window.scrollY > 200) {
     document.getElementById('navbar_top').classList.add('fixed-top');
     document.getElementById('navbar_top').classList.remove('unsticky');
     // add padding top to show content behind navbar
     navbar_height = document.querySelector('.navbar').offsetHeight;
     document.body.style.paddingTop = navbar_height + 'px';
   } else {
     document.getElementById('navbar_top').classList.remove('fixed-top');
     document.getElementById('navbar_top').classList.add('unsticky');
      // remove padding top from body
     document.body.style.paddingTop = '0';
   } 
   });
});