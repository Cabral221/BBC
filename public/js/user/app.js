$(function () {
    $(document).scroll(function () {
      var $nav = $(".fixed-top");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
  });

$('#bg-header').backstretch([
    "images/bg-header.jpg",
    "images/bg-header2.jpg",
    "images/bg-header2.jpg"
], {duration: 3000, fade: 750});



console.log($('.fixed-topr'));

// $(document).ready(function() {
//     'use strict';
//     $('#bg-header').backstretch([
//         "{{ asset('images/bg-header.jpg')}}",
//         "{{ asset('user/assets/img/bg/bg2.jpg')}}",
//         "{{ asset('user/assets/img/bg/bg3.jpg')}}"
//     ], {
//         duration: 8000,
//         fade: 500
//     })
// });
