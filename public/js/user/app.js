// gestion du barre de menu
$(function () {
  
  $(document).scroll(function () {
    var $nav = $(".fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());

    var $classList = $('.fixed-top .mt-3 li.nav-item a');

    $.each($classList, function(index, item) {
      if($(document).scrollTop() > $nav.height()){
        if(!item.classList.contains('active')){

          item.classList.add('text-dark');

        }
      }else{
        item.classList.remove('text-dark');
        // item.classLis
      }
    });
  });

});


$('#bg-header').backstretch([
  "images/bg-header.jpg",
  "images/bg-header2.jpg",
  "images/bg-header2.jpg"
], {duration: 3000, fade: 750});

$('#answerOne').collapse('show').height('auto');
// $('.panel').collapse('show').height('auto');
// $('.panel').collapse('show').height('auto');
