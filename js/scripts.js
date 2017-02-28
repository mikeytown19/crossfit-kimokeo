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

        carousel();
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


var myIndex = 0;


function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");


    for (i = 0; i < x.length; i++) {


        x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {
        myIndex = 1
    }
    x[myIndex - 1].style.display = "block";
    setTimeout(carousel, 100000); // Change image every 2 seconds
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
