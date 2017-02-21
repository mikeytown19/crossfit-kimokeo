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
function updateUI(){
  $.each($('.week').hide(), (a,b) => {
    var elemClassArr = b.className.split(' ');
    elemClassArr.forEach((c, d) => {
        if (c === currentDay) {
            $('.' + c).removeClass('hidden').show();
        }
    })

  });
}

function mobileDate(data){
  console.log(data)
  var clickedDate = data.id;
  currentDay = data.id;
  updateUI();
}
(function($, root, undefined) {
    $(function() {
        'use strict';
        // DOM ready, take it away
        $('.flexslider').flexslider({
            animation: "fade",
            slideshow: true,
        });

          updateUI();
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
