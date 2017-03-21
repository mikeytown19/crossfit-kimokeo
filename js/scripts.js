var currentDay = '';
var day = new Date();
var weekday = new Array(7);
weekday[0] = "sunday";
weekday[1] = "monday";
weekday[2] = "tuesday";
weekday[3] = "wednesday";
weekday[4] = "thursday";
weekday[5] = "friday";
weekday[6] = "saturday";
currentDay = weekday[day.getDay()];

function updateUI() {
    $.each($('.week').hide(), (a, b) => {
        var elemClassArr = b.className.split(' ');

        elemClassArr.forEach((c, d) => {

            if (c === currentDay) {

                $('.' + c).removeClass('hidden').show();
                $('#' + c).addClass("red");
            }
        })

    });
}


function mobileDate(data) {
    // $.each($('.mobile-weekday-circle'), function(i, v) {
    //
    //     $(v).removeClass("red");
    // });
    $('.mobile-weekday-circle').removeClass('red');

    var clickedDate = data.id;
    currentDay = data.id;


    if (!$(data).hasClass("red")) {
        $(data).addClass("red");
    } else {
        $(data).removeClass("red");
    }

    updateUI();
}
(function($, root, undefined) {
    $(function() {



        'use strict';
        // DOM ready, take it away


        $(window).on('wheel', function(e) {

          $('.nav-container').removeClass('nav-color');
        	var delta = e.originalEvent.deltaY;

        	// if (delta > 0) $('body').text('down');
        	// else $('body').text('up');


        });

        // carousel();
        updateUI();



        // Add smooth scrolling to all links
$(".sub-nav").on('click', function(event) {

  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;
    console.log(this);
    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top-100
    }, 1400, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  } // End if
});



    })

})(jQuery, this);

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/* Set the width of the side navigation to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}


var myIndex = 0;


// function carousel() {
//     var i;
//     var x = document.getElementsByClassName("mySlides");
//
//
//     for (i = 0; i < x.length; i++) {
//
//
//         x[i].style.display = "none";
//     }
//     myIndex++;
//     if (myIndex > x.length) {
//         myIndex = 1
//     }
//     x[myIndex - 1].style.display = "block";
//     setTimeout(carousel, 50000); // Change image every 2 seconds
// }

// function mobileDate(){
//   var day = new Date();
//   var weekday = new Array(7);
//   weekday[0] = "sunday";
//   weekday[1] = "monday";
//   weekday[2] = "tuesday";
//   weekday[3] = "wednesday";
//   weekday[4] = "thursday";
//   weekday[5] = "friday";
//   weekday[6] = "saturday";
//   var currentDay = weekday[day.getDay()];
// var x = document.getElementsByClassName("mobile-weekday-circle");
//
//
// console.log(x);var clickedDate=''

// }
// mobileDate()

window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 28) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 17);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
// Hide the extra content initially, using JS so that if JS is disabled, no problemo.
