
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  $('.js-hamburger').on('click' , function() {
    if($('.js-hamburger').hasClass('is-open')) {
      $('.js-hamburger').removeClass('is-open');
      $('.js-sp-nav').fadeOut(300);
    } else {
      $('.js-hamburger').addClass('is-open');
      $('.js-sp-nav').fadeIn(300);
    }
  });

  const swiper = new Swiper('.js-mv-swiper', {
    loop: true,

    // autoplay: {
    //   delay: 2500,
    // },

    pagination: {
      el: '.swiper-pagination',
    },
  });

});

const swiper = new Swiper('.js-campaign-swiper', {
  loop: true,

  // autoplay: {
  //     delay: 2500,
  // },

  slidesPerView: 1.27,
  spaceBetween: 24,

  breakpoints: {
    768: {
      slidesPerView: 3.3,
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

//.boxの付いた全ての要素に対して下記の処理を行う
box.each(function(){
    $(this).append('<div class="color"></div>')
    var color = $(this).find($('.color')),
    image = $(this).find('img');
    var counter = 0;

    image.css('opacity','0');
    color.css('width','0%');
    //inviewを使って背景色が画面に現れたら処理をする
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


