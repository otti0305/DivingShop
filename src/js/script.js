
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

// アコーディオン
$('.accordion__header').click(function() {
  $(this).next().slideToggle();
  $(this).toggleClass('is-active');
})

// モーダル
$(".sub-gallery__img img").click(function() {
  $(".modal").html($(this).prop("outerHTML"));
  $(".modal").fadeIn(300);
  $("body,html").css("overflow-y","hidden");
  return false;
});

$(".modal").click(function() {
  $(".modal").fadeOut(300);
  $("body,html").css("overflow-y","visible");
  return false;
});


// インフォメーション
document.addEventListener("DOMContentLoaded", function () {
  const buttons = document.querySelectorAll(".sub-information-tab__item");
  const contents = document.querySelectorAll(".sub-information-card");

  // タブをアクティブにする関数
  function activateTab(tabId) {
      buttons.forEach(btn => btn.classList.remove("is-active"));
      contents.forEach(content => content.classList.remove("is-active"));

      const activeButton = document.querySelector(`.sub-information-tab__item[data-tab="${tabId}"]`);
      const activeContent = document.getElementById(tabId);

      if (activeButton && activeContent) {
          activeButton.classList.add("is-active");
          activeContent.classList.add("is-active");
      }
  }

  // すべてのタブボタンにクリックイベントを追加
  buttons.forEach(button => {
      button.addEventListener("click", function () {
          const tabId = this.getAttribute("data-tab");
          activateTab(tabId);
          history.pushState(null, "", `?tab=${tabId}`); // URLを更新
      });
  });

  // URLのクエリパラメーターからタブを取得
  const params = new URLSearchParams(window.location.search);
  const defaultTab = "tab1"; // デフォルトのタブ
  const tabFromUrl = params.get("tab") || defaultTab;

  activateTab(tabFromUrl); // 初期表示のタブを設定
});


// アーカイブ
$('.archive__year').click(function() {
  // $('.archive__months').toggle();
  $(this).next().slideToggle();
  $(this).toggleClass('is-open');
});

// コンタクトフォーム
$('.js-submit').on("click", function() {
  $('form').find('.invalid').removeClass('invalid');// 初期化
  $('input[required]:invalid,textarea[required]:invalid').each(function(){// 項目が空だったらエラー表示をする
    // document.myForm.action="/contact-error.html";
    $(this).addClass('invalid');
    $('.form__alert').addClass('is-active');
    $(this).next().addClass('invalid');
  });

  if($('.invalid').length == 0){// 未入力がない時
    $('form').submit();
    // console.log('送信しました');
  }else{// 未入力がある時
    // console.log('未入力があります');
    // document.myForm.action="/contact-error.html";

  }
  return false;// submitの送信中止用
});
