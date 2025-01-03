
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる
  $('.js-hamburger').on('click' , function() {
    if($('.js-hamburger').hasClass('is-open')) {
      $('.js-hamburger').removeClass('is-open');
      // $('.js-sp-nav').fadeOut(300);
      $('.js-sp-nav').removeClass('is-open');
      $('.js-header').removeClass('is-active');
    } else {
      $('.js-hamburger').addClass('is-open');
      // $('.js-sp-nav').fadeIn(300);
      $('.js-sp-nav').addClass('is-open');
      $('.js-header').addClass('is-active');
    }
  });

  const mv_swiper = new Swiper('.js-mv-swiper', {
    loop: true,
    effect: "fade",
    speed: 2000,
    allowTouchMove: false,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
  });

  const campaign_swiper = new Swiper('.js-campaign-swiper', {
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 3000,
    },
    slidesPerView: "auto",
    spaceBetween: 24,
    breakpoints: {
      768: {
        spaceBetween: 40,
      }
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

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

//ドロワー時背景固定
$(function () {
  // ハンバーガーメニューボタンがクリックされたときのイベントハンドラを設定
  $(".js-hamburger").click(function () {

    // 現在のbodyタグのoverflowスタイルを確認
    if ($("body").css("overflow") === "hidden") {

      // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
      $("body").css({ height: "", overflow: "" });

    } else {

      // そうでなければ、bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
      $("body").css({ height: "100%", overflow: "hidden" });

    }
  });
});



