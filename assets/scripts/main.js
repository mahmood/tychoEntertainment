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

  // Scroll down event with [learn more] button
  $(function() {
  	$('a.learnMoreBtn').on('click', function(e) {
      var el = $('.hero').height();
      $("html, body").animate({
        scrollTop:  el
      }, 500, 'swing');
  		// $('html, body').animate({
      //   scrollTop: $(el).offset().top
      // }, 500, 'linear');
  		e.preventDefault();
  	});
  });

  //hide form after send
  $(".wpcf7").on('wpcf7:mailsent', function(event){
    $('.popup-inner__box').hide();
    $('.popup-inner__success').show();
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
  // toggle sticky menu when scroll more than header height
  $(function () {
    var el = $('.hero').height();
    var $window = $(window);
    var fixedHeader = $('.sticky__header');
    $window.on('scroll', function() {
      var scrollTop = $window.scrollTop();
      fixedHeader.toggleClass('fixedHeader', scrollTop >= el);
    });
  });
});
