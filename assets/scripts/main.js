$(document).ready(function(){
  var isIE = /*@cc_on!@*/false || !!document.documentMode;
  var $IeAlert = $('.IE-alert');
  if(isIE === true) {
    if(localStorage.getItem('dismiss') == 'true') {
      $IeAlert.hide();
    } else {
      $IeAlert.show();
    }
  }
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
  //show form after successful 
  $('#closeButton').on('click', function(event){
    $('.popup-inner__success').hide();
    $('.popup-inner__box').show();    
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
    arrows: true,
    prevArrow:'<button type="button" class="slick-prev"><i class="icon-chevron-left"></i></button>',
    nextArrow:'<button type="button" class="slick-next"><i class="icon-chevron-right"></i></button>',
    pauseOnHover: false,
    pauseOnFocus: false,
    responsive: [
      {
        breakpoint: 1191,
        settings: {
          centerMode: true,
          centerPadding: '0px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 1080,
        settings: {
          centerMode: true,
          centerPadding: '330px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 1050,
        settings: {
          centerMode: true,
          centerPadding: '300px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 980,
        settings: {
          centerMode: true,
          centerPadding: '280px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 930,
        settings: {
          centerMode: true,
          centerPadding: '260px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 900,
        settings: {
          centerMode: true,
          centerPadding: '240px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 870,
        settings: {
          centerMode: true,
          centerPadding: '220px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 850,
        settings: {
          centerMode: true,
          centerPadding: '200px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 790,
        settings: {
          centerMode: true,
          centerPadding: '180px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: '170px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 660,
        settings: {
          centerMode: true,
          centerPadding: '150px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 620,
        settings: {
          centerMode: true,
          centerPadding: '130px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 580,
        settings: {
          centerMode: true,
          centerPadding: '110px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 540,
        settings: {
          centerMode: true,
          centerPadding: '90px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 490,
        settings: {
          centerMode: true,
          centerPadding: '70px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 460,
        settings: {
          centerMode: true,
          centerPadding: '50px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 390,
        settings: {
          centerMode: true,
          centerPadding: '30px',
          slidesToShow: 1
        }
      },
      {
        breakpoint: 340,
        settings: {
          centerMode: true,
          centerPadding: '20px',
          slidesToShow: 1
        }
      }
    ]
  });
  $(function () {
    var $toggleBtn = $('.IE-alert_toggleBtn');
    var $IeAlert = $('.IE-alert');
    $toggleBtn.on('click', function(e) {
      localStorage.setItem('dismiss', true);
      $IeAlert.hide();
      e.preventDefault();
    });
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
