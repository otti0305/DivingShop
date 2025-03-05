
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

// インフォメーション タブの切り替え
// $(function() {
//   var tabs = $(".sub-information-tab__item");
//   $(".sub-information-tab__item").on("click", function() {
//       $(tabs).removeClass("is-active");
//       $(this).addClass("is-active");
//       const index = tabs.index(this);
//       $(".sub-information-card").removeClass("is-active").eq(index).addClass("is-active");
//   });
  
//   // $(function () {
//     //タブへダイレクトリンクの実装
//     //リンクからハッシュを取得
//     var hash = location.hash;
//     hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
//     // console.log(hash);
    
//     //リンクにハッシュが入っていればtabNameに格納
//     if ($(hash).length) {
//       var tabName = hash.slice(1);
//     } else {
//       var tabName = "tab_panel-1";
//     }
    
//     //コンテンツ非表示・タブを非アクティブ
//     $(".sub-information-tab__item").removeClass("is-active");
//     $(".sub-information-card").removeClass("is-active");
    
//     //何番目のタブかを格納
//     var tabNo = $(".sub-information-card#" + tabName).index();
    
//     //コンテンツ表示
//     $(".sub-information-card").eq(tabNo).addClass("is-active");
    
//     //タブのアクティブ化
//     $(".sub-information-tab__item").eq(tabNo).addClass("is-active");
//   // });
  
  
// });

$(function () {
  //タブの実装
$(".sub-information-tab__item").click(function () {
   var index = $(".sub-information-tab__item").index(this);
   $(".sub-information-tab__item, .sub-information-card").removeClass("is-active");
   $(this).addClass("is-active");
   $(".sub-information-card").eq(index).addClass("is-active");
});
});

document.addEventListener("DOMContentLoaded", function () {
  // URLからパラメータを取得
  const params = new URLSearchParams(window.location.search);
  const tabParam = params.get("sub-information-tab__item"); // "tab" の値を取得

  if (tabParam) {
      // すべてのタブを非アクティブにする
      document.querySelectorAll(".sub-information-tab__item").forEach(tab => tab.classList.remove("is-active"));

      // 指定されたタブをアクティブにする
      const activeTab = document.getElementById(`sub-information-tab__item-${tabParam}`);
      if (activeTab) {
          activeTab.classList.add("is-active");
      }
  }
});

// document.addEventListener("DOMContentLoaded", function () {
//   // URLパラメータから「page」の値を取得する関数
//   function getParameterByName(name) {
//     const params = new URLSearchParams(window.location.search);
//     return params.get(name);
//   }

//   const pageParam = getParameterByName("page"); // "page" の値を取得
//   const items = document.querySelectorAll("nav ul li"); // 全ての <li> を取得

//   items.forEach(item => {
//     // data-id の値を取得し、URLパラメータと比較
//     if (item.dataset.id === pageParam) {
//       item.classList.add("is-active"); // 一致する要素に `current` クラスを付与
//     } else {
//       item.classList.remove("is-active"); // 他の要素から `current` クラスを削除
//     }
//   });
// });


// $(function () {
//   //タブへダイレクトリンクの実装
//   //リンクからハッシュを取得
//   var hash = location.hash;
//   hash = (hash.match(/^#tab_panel-\d+$/) || [])[0];
//   //リンクにハッシュが入っていればtabnameに格納
//   if ($(hash).length) {
//       var tabname = hash.slice(1);
//   } else {
//       var tabname = "tab_panel-1";
//   }
//   //コンテンツ非表示・タブを非アクティブ
//   $(".sub-information-tab__item").removeClass("is-active");
//   $(".sub-information-card").removeClass("is-active");
//   //何番目のタブかを格納
//   var tabno = $(".sub-information-card#" + tabname).index();
//   //コンテンツ表示
//   $(".sub-information-card").eq(tabno).addClass("is-active");
//   //タブのアクティブ化
//   $(".sub-information-tab__item").eq(tabno).addClass("is-active");
// });

// $(function() {
//   //リンクからハッシュを取得
//   var hash = location.hash;
//   hash = (hash.match(/^#tab\d+$/) || [])[0];
 
//   //リンクにハッシュが入っていればtabnameに格納
//   if($(hash).length){
//     var tabname = hash.slice(1) ;
//   } else{
//     var tabname = "tab_panel-1";
//   }
 
//   //コンテンツ非表示&amp;タブを非アクティブ
//   $('.sub-information-card').hide();
//   $('.sub-information-tab__item').removeClass('is-active');
 
//   //何番目のタブかを格納
//   var tabno = $('.sub-information-card#' + tabname).index();
 
//   //コンテンツ表示
//   $('.sub-information-card').eq(tabno).fadeIn();
 
//   //タブのアクティブ化
//   $('.sub-information-tab__item').eq(tabno).addClass('is-active');
// });




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
