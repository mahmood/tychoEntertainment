$(document).ready(function(){
  // Request Service popup function
  $(function() {
    // Open the popup
    $('[data-popup-open]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-open');
      $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
      e.preventDefault();
    });

    // Close the popup
    $('[data-popup-close]').on('click', function(e)  {
      var targeted_popup_class = jQuery(this).attr('data-popup-close');
      $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
      e.preventDefault();
    });
  });
  $('#reqServices').submit(function(e) {
    $('.popup-inner__box').hide();
    $('.popup-inner__success').show();
    e.preventDefault();
  });
  $('.stafing__items').slick({
    centerMode: true,
    infinite: true,
    // fade: true,
    easing: 'linear',
    slidesToScroll: 1,
    centerPadding: '60px',
    slidesToShow: 3,
    autoplay: true,
    draggable: false,
    swipeToSlide: false,
    arrows: false,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
  $(function () {
    var $hamburger = $(".hamburger");
    var $toggleNav = $('.toggleNav__trigger');
    $hamburger.on("click", function(e) {
      $hamburger.toggleClass("is-active");
      $toggleNav.slideToggle();
    });
  });
  //
  // $(function () {
  //   var el = $('.intro').height();
  //   var $window = $(window);
  //   var fixedHeader = $('.second--header');
  //   $window.on('scroll', function() {
  //     var scrollTop = $window.scrollTop();
  //     fixedHeader.toggleClass('fixedHeader', scrollTop >= el);
  //   });
  // });
});
