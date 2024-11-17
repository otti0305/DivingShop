
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  $('.js-hamburger').on('click' , function() {
    if($('.js-hamburger').hasClass('is-open')) {
      $('.js-hamburger').removeClass('is-open');
      // $('.js-sp-nav').fadeOut(300);
      $('.js-sp-nav').removeClass('is-open');
    } else {
      $('.js-hamburger').addClass('is-open');
      // $('.js-sp-nav').fadeIn(300);
      $('.js-sp-nav').addClass('is-open');
    }
  });

  const swiper = new Swiper('.js-mv-swiper', {
    loop: true,
    autoplay: {
      delay: 3000,
    },
    pagination: {
      el: '.swiper-pagination',
    },
  });
});

const swiper = new Swiper('.js-campaign-swiper', {
  loop: true,
  autoplay: {
      delay: 3000,
  },

  centeredSlidesBounds: true,

  slidesPerView: 1.27,
  spaceBetween: 34,

  breakpoints: {
    768: {
      slidesPerView: 3.5,
      spaceBetween: 40,
    }
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

//アニメーション
var box = $('.box'),
    speed = 700;

box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    color.on('inview', function(){
        if(counter == 0){
      $(this).delay(200).animate({'width':'100%'},speed,function(){
                   image.css('opacity','1');
                   $(this).css({'left':'0' , 'right':'auto'});
                   $(this).animate({'width':'0%'},speed);
                })
            counter = 1;
          }
     });
});

// トップへ戻る
$(document).ready(function () {
  $(".page-top").hide()
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 100) {
      $(".page-top").fadeIn("fast")
    } else {
      $(".page-top").fadeOut("fast")
    }
    const scrollHeight = $(document).height()
    const scrollPosition = $(window).height() + $(window).scrollTop()
    const footHeight = $("footer").innerHeight()
    if (scrollHeight - scrollPosition <= footHeight) {
      $(".page-top").css({
        position: "absolute",
        bottom: footHeight + 15,
      })
    } else {
      $(".page-top").css({
        position: "fixed",
        bottom: "15px",
      })
    }
  })
  $(".page-top").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      400,
    )
    return false
  })
})


