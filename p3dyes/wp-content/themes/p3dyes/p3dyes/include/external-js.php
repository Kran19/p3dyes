<script src="<?php echo get_template_directory_uri() ?>/bootstrap/js/bootstrap.bundle.min.js"></script>  

<!--HEADER JS-->
<script type="text/javascript">
var lastKnownScrollY = 0;
var currentScrollY = 0;
var ticking = false;
var idOfHeader = 'header';
var eleHeader = null;
const classes = {
  pinned: 'header-pin',
  unpinned: 'header-unpin',
};
function onScroll() {
  currentScrollY = window.pageYOffset;
  if (currentScrollY < lastKnownScrollY) {
    pin();
  } else if (currentScrollY > lastKnownScrollY) {
    unpin();
  }
  lastKnownScrollY = currentScrollY;
}
function pin() {
  if (eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.unpinned);
    eleHeader.classList.add(classes.pinned);
  }
}
function unpin() {
  if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
    eleHeader.classList.remove(classes.pinned);
    eleHeader.classList.add(classes.unpinned);
  }
}
window.onload = function() {
  eleHeader = document.getElementById(idOfHeader);
  document.addEventListener('scroll', onScroll, false);
}
</script>
<!--HEADER JS-->

<!--MENU-->
<script src="<?php echo get_template_directory_uri() ?>/js/script.js" defer></script>
<!--MENU-->

<!-- slick carousel Assets -->
<script type="text/javascript">

 /**slider 1 js **/
 $('.slider1').slick({
   slidesToShow: 3,
   slidesToScroll: 1,
   dots: true,
   autoplay: true,
    speed: 300,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 789,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },   
    {
      breakpoint: 764,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },   
    {
      breakpoint: 599,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 479,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
 });

$('.slider2').slick({
   slidesToShow: 5,
   slidesToScroll: 1,
   dots: true,
   autoplay: true,
    speed: 300,
   responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 789,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },   
    {
      breakpoint: 764,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },   
    {
      breakpoint: 599,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 479,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
 });    
 
</script>    
<!-- slick carousel Assets --> 

<!--BACK TO TOP-->
<script type="text/javascript">
//Get the button
let mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 200 ||
    document.documentElement.scrollTop > 200
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
<!--BACK TO TOP--> 