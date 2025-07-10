/*-------------------------------------------------
       ローディング背景
-------------------------------------------------*/
/*
$(window).on('load', function () {
  //=====ここからローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる
  $("#splash").delay(3000).fadeOut('slow', function () { //ローディングエリア（splashエリア）を1.5秒でフェードアウトする記述

    $('body').addClass('appear'); //フェードアウト後bodyにappearクラス付与
  });
  window.scrollTo(0, 0);
  //=====ここまでローディングエリア（splashエリア）を1.5秒でフェードアウトした後に動かしたいJSをまとめる

  //=====ここから背景が伸びた後に動かしたいJSをまとめたい場合は
  //$('.splashbg').on('animationend', function () {
  //この中に動かしたいJSを記載
  //});
  //=====ここまで背景が伸びた後に動かしたいJSをまとめる

});
*/

//loading　一回のみ
$(function () {
  var webStorage = function () {
    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
      $(".load").removeClass('onetime');
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
      $(".load").addClass('onetime'); // loadingアニメーションを表示
    }
  }
  webStorage();
});




function topicsCnt() {
  $(".topics").each(function () {
    var num = $(this).find('.topics__atc').length;
    if (num >= 4) {
      $('#hide__btn').addClass('active');
    } else {
      $('#hide__btn').removeClass('active');
    }
  });
  return false;
}
$(window).on('load', function () {
  topicsCnt();
});






$(function () {


  /*============================
  	ハンバーガー
  ============================*/
  $('.hd__hamburger').click(function () {
    $('.g-nav__sp').toggleClass('active');
    $('.g-nav__bg').toggleClass('active');
    $('.hd__gnav--sp').toggleClass('active');
    $(this).toggleClass('active');
    $('html').toggleClass('active');


    l //モーダルを開いた時のスクロール位置を保持
    var scrollPosition;
    //iOS（iPadOSを含む）かどうかのUA判定
    var ua = window.navigator.userAgent.toLowerCase();
    var isiOS = ua.indexOf('iphone') > -1 || ua.indexOf('ipad') > -1 || ua.indexOf('macintosh') > -1 && 'ontouchend' in document;

    //bodyのスクロール固定
    function bodyFixedOn() {
      if (isiOS) {
        // iOSの場合
        scrollPosition = $(window).scrollTop();
        $('html.active').css('position', 'fixed');
        $('html.active').css('top', '-' + scrollPosition + 'px');
      } else {
        // それ以外
        $('html.active').css('overflow', 'hidden');
      }
    }

    //bodyのスクロール固定を解除
    function bodyFixedOff() {
      if (isiOS) {
        // iOSの場合
        $('html.active').css('position', '');
        $('html.active').css('top', '');
        $(window).scrollTop(scrollPosition);
      } else {
        // それ以外
        $('html.active').css('overflow', '');
      }
    }
    bodyFixedOn();
    bodyFixedOff();

  });
  $('.g-nav__sp li a,.hd__entry a').click(function () {
    $('.g-nav__bg,html,.hd__hamburger').removeClass('active');
  });

  /*============================
   	slick
   ============================*/
  /* slick01 メインビジュアル */
  var $slide = $(".slick01")
    .slick({
      dots: true,
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      speed: 2000,
      autoplaySpeed: 4000,
      autoplay: true,
      pauseOnFocus: false,
      pauseOnHover: false,
      pauseOnDotsHover: false
    })
    .on({
      beforeChange: function (event, slick, currentSlide, nextSlide) {
        $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
        $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
      },
      afterChange: function () {
        $(".preve-slide", this).removeClass("preve-slide slide-animation");
      }
    });
  $slide.find(".slick-slide").eq(0).addClass("slide-animation");

  /* slick02 works */
  $('.slick02').slick({
    dots: false,
    arrows: true,
    prevArrow: '<img src="../img/top/slick_arw_l.png" class="slide-arrow prev-arrow">',
    nextArrow: '<img src="../img/top/slick_arw_r.png" class="slide-arrow next-arrow">',
    infinite: true,
    variableWidth: true,
    centerMode: true,
    centerPadding: "20%",
    draggable: true,
    focusOnSelect: true,
    slidesToScroll: 1,
    // slidesToShow: 4,
    // responsive: [{
    //   breakpoint: 1024, //767px以下のサイズに適用
    //   settings: {
    //     slidesToShow: 3
    //   }
    // }]
  });


  /*============================
  	スクロールアニメーション
  ============================*/
  function stretchAnime() {
    $('.stretch_border').each(function () {
      var elemPos = $(this).offset().top + 300; //要素より200px下の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();

      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('active'); //画面内に入ったら .active を追加
      }
    });

  }
  //画像をスクロールで発動
  $(window).scroll(function () {
    stretchAnime();
  });


  //スクロールでヘッターパーツの色を変える
  // $(function(){
  //     var imgHeight = $('.fv').outerHeight(); //画像の高さを取得。これがイベント発火位置になる。
  //     var header = $('.hd__menu'); //ヘッダーコンテンツ

  //     $(window).on('load scroll', function(){
  //        if ($(window).scrollTop() < imgHeight) {
  //          //メインビジュアル内にいるので、クラスを外す。
  //          header.removeClass('headerColor-default');
  //        }else {
  //          //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
  //          header.addClass('headerColor-default');
  //        }
  //     });
  //   });

  //ハンバーガークリック時に色を白に
  //   $(".hd__hamburger").click(function(){
  //     if ($(".hd__humburger").hasClass('headerColor-default')){
  //       $(".hd__menu").removeClass("headerColor-default");
  //     }
  //     $(".hd__menu").toggleClass("headerColor-default");
  // });


  /*============================
  	スクロールで出現するheader
  ============================*/
  function HeaderFixed() {
    var headerscroll = $(window).scrollTop();
    if (headerscroll >= 70) { //上から70pxスクロールしたら
      $('header,.fixed__btn').addClass('active');
    } else {
      $('header,.fixed__btn').removeClass('active');
    }
  }
  $(window).scroll(function () {
    HeaderFixed();
  });

  /*============================
  	page-top
  ============================*/
  //page-top 途中から出現
  /*
  function PageTopAnime() {
    var scroll = $(window).scrollTop();
    if (scroll >= 200) { //上から200pxスクロールしたら
      $('#page-top').addClass('active');
    } else {
      $('#page-top').removeClass('active');
    }
  }
  $(window).scroll(function () {
    PageTopAnime();
  });

  //page-top スムーススクロール

  $('#page-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 500);
    return false;
  });

*/
  /*============================
  	背景アニメ
  ============================*/
  // 動きのきっかけの起点となるアニメーションの名前を定義
  function BgFadeAnime() {

    // 背景色が伸びて出現（右から左）
    $('.bgLRextendTrigger').each(function () { //bgRLextendTriggerというクラス名が
      var elemPos = $(this).offset().top - 50; //要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('bgLRextend'); // 画面内に入ったらbgRLextendというクラス名を追記
      }
    });
    // 文字列を囲う子要素
    $('.bgappearTrigger').each(function () { //bgappearTriggerというクラス名が
      var elemPos = $(this).offset().top - 200; //要素より、50px上の
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll >= elemPos - windowHeight) {
        $(this).addClass('bgappear'); // 画面内に入ったらbgappearというクラス名を追記
      }
    });
  }

  // 画面をスクロールをしたら動かしたい場合の記述
  $(window).scroll(function () {
    BgFadeAnime(); /* アニメーション用の関数を呼ぶ*/
  }); // ここまで画面をスクロールをしたら動かしたい場合の記述

  // 画面が読み込まれたらすぐに動かしたい場合の記述
  $(window).on('load', function () {
    BgFadeAnime();
  });

  /*-------------------------------------------------
     //ページ内リンク スムーススクロール
  -------------------------------------------------*/

  $('.page-link a[href*="#"]').click(function () { //全てのページ内リンクに適用させたい場合はa[href*="#"]のみでもOK
    var elmHash = $(this).attr('href'); //ページ内リンクのHTMLタグhrefから、リンクされているエリアidの値を取得
    var pos = $(elmHash).offset().top; //idの上部の距離を取得
    $('body,html').animate({
      scrollTop: pos
    }, 500); //取得した位置にスクロール。500の数値が大きくなるほどゆっくりスクロール
    return false;
  });

  /*============================
  	タブメニュー
  ============================*/
  //contents02 タブメニュー
  function GethashID01(hashIDName01) {
    if (hashIDName01) {
      //タブ設定
      $('.con02__tab').find('a').each(function () { //タブ内のaタグ全てを取得
        var idName01 = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
        if (idName01 == hashIDName01) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
          var parentElm01 = $(this).parent(); //タブ内のaタグの親要素（li）を取得
          $('.con02__tab').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
          $(parentElm01).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
          //表示させるエリア設定
          $(".con02__tb").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
          $(hashIDName01).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
        }
      });
    }
  }

  //タブをクリックしたら
  $('.con02__tab a').on('click', function () {
    var idName01 = $(this).attr('href'); //タブ内のリンク名を取得	
    GethashID01(idName01); //設定したタブの読み込みと
    return false; //aタグを無効にする
  });


  //contents03 タブメニュー
  function GethashID(hashIDName) {
    if (hashIDName) {
      //タブ設定
      $('.con03__tab').find('a').each(function () { //タブ内のaタグ全てを取得
        var idName = $(this).attr('href'); //タブ内のaタグのリンク名（例）#lunchの値を取得	
        if (idName == hashIDName) { //リンク元の指定されたURLのハッシュタグ（例）http://example.com/#lunch←この#の値とタブ内のリンク名（例）#lunchが同じかをチェック
          var parentElm = $(this).parent(); //タブ内のaタグの親要素（li）を取得
          $('.con03__tab').removeClass("active"); //タブ内のliについているactiveクラスを取り除き
          $(parentElm).addClass("active"); //リンク元の指定されたURLのハッシュタグとタブ内のリンク名が同じであれば、liにactiveクラスを追加
          //表示させるエリア設定
          $(".tab-item").removeClass("is-active"); //もともとついているis-activeクラスを取り除き
          $(hashIDName).addClass("is-active"); //表示させたいエリアのタブリンク名をクリックしたら、表示エリアにis-activeクラスを追加	
        }
      });
    }
  }

  //タブをクリックしたら
  $('.con03__tab a').on('click', function () {
    var idName = $(this).attr('href'); //タブ内のリンク名を取得	
    GethashID(idName); //設定したタブの読み込みと
    return false; //aタグを無効にする
  });


  // 上記の動きをページが読み込まれたらすぐに動かす
  // $(window).on('load', function () {
  //   $('.contents03__tabwrap li:first-of-type').addClass("active"); //最初のliにactiveクラスを追加
  //   $('.tab-item:first-of-type').addClass("is-active"); //最初の.areaにis-activeクラスを追加
  //   var hashName = location.hash; //リンク元の指定されたURLのハッシュタグを取得
  //   GethashID(hashName); //設定したタブの読み込み
  // });

  /*============================
	アコーディオン
  ============================*/
  //アコーディオンをクリックした時の動作
  // $('.ac__btn').on('click', function() {//タイトル要素をクリックしたら
  // 	$('.ac__area').slideUp(500);//クラス名.boxがついたすべてのアコーディオンを閉じる

  // 	var findElm = $(this).next(".ac__area");//タイトル直後のアコーディオンを行うエリアを取得

  // 	if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
  // 		$(this).removeClass('close');//クラス名を除去    
  // 	}else{//それ以外は
  // 		$('.close').removeClass('close'); //クラス名closeを全て除去した後
  // 		$(this).addClass('close');//クリックしたタイトルにクラス名closeを付与し
  // 		$(findElm).slideDown(500);//アコーディオンを開く
  // 	}
  // });
  //アコーディオンをクリックした時の動作
  $('.ac__btn').on('click', function () { //タイトル要素をクリックしたら
    var findElm = $(this).next(".ac__area"); //直後のアコーディオンを行うエリアを取得し
    $(findElm).slideToggle(); //アコーディオンの上下動作

    if ($(this).hasClass('close')) { //タイトル要素にクラス名closeがあれば
      $(this).removeClass('close'); //クラス名を除去し
    } else { //それ以外は
      $(this).addClass('close'); //クラス名closeを付与
    }
  });

  if (window.matchMedia("(max-width: 767px)").matches) {
    /* ウィンドウサイズが 768px以下の場合に有効にしたい処理*/
    $('.ac__btn--sp').on('click', function () { //タイトル要素をクリックしたら
      var findElm = $(this).next(".ac__area--sp"); //直後のアコーディオンを行うエリアを取得し
      $(findElm).slideToggle(); //アコーディオンの上下動作

      if ($(findElm).hasClass('open')) { //タイトル要素にクラス名closeがあれば
        $(findElm).removeClass('open'); //クラス名を除去し
      } else { //それ以外は
        $(findElm).addClass('open'); //クラス名closeを付与
      }

      if ($(this).hasClass('close')) { //タイトル要素にクラス名closeがあれば
        $(this).removeClass('close'); //クラス名を除去し
      } else { //それ以外は
        $(this).addClass('close'); //クラス名closeを付与
      }
    });
  }

  /*============================
	form セレクトタグ 色を薄く
  ============================*/
  $(function () {
    $('select').on('change', function () {
      if ($(this).val() == 'placeholder') {
        $(this).css('color', '#ccc')
      } else {
        $(this).css('color', '#fff')
      }
    });
  });

  /*============================
  	カテゴリ ソート
    ============================*/


  var $filters = $('.filter[data-filter]'),
    $boxes = $('.topics__atc[data-category]');

  $filters.on('click', function () {
    //e.preventDefault();
    var $this = $(this);
    $filters.removeClass('active');
    $this.addClass('active');

    var $filterColor = $this.attr('data-filter');

    if ($filterColor == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.addClass('is-animated').fadeIn();
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.filter('[data-category = "' + $filterColor + '"]')
            .addClass('is-animated').fadeIn();
        });
    }

  });



  /*
    promise.then(function () {
      ActiveTopicsCnt();

    });
    */
  /*
    $('.filter').click(function () {
      var $activeArt = $('.topics__atc.is-animated').length;
      if ($activeArt >= 4) {
        $('#hide__btn').addClass('active');
      } else {
        $('#hide__btn').removeClass('active');
      }
    });
    */

  //フィルター sp用
  $('.topics__select.sp').change(function () {
    // 選択した値を取得
    var $select_val = $('.topics__select.sp option:selected').val();

    if ($select_val == 'all') {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.addClass('is-animated').fadeIn();
        });
    } else {
      $boxes.removeClass('is-animated')
        .fadeOut().promise().done(function () {
          $boxes.filter('[data-category = "' + $select_val + '"]')
            .addClass('is-animated').fadeIn();
        });
    }
    /*
        $('.topics__flex').each(function () {
          var $activeArt = $('.is-animated').length;
          if ($activeArt >= 4) {
            $('#hide__btn').addClass('active');
          } else {
            $('#hide__btn').removeClass('active');
          }
        });
    */
  });



});

$(function () {
 //var $TopicsHight = $('.topics__flex').clientHeight();
 var TopicsHight = 0;
 TopicsHight = $('.topics__flex').outerHeight(true);
 function ActiveTopicsHight() {

    $('#hide__btn').removeClass('active');

    if (TopicsHight >= 1000) {
      $('#hide__btn').addClass('active');
    } else {
      $('#hide__btn').removeClass('active');
    }

  }
  $('.filter').click(function () {
    $('#hide__btn').removeClass('active');
  });

  $(window).scroll(function () {
    ActiveTopicsHight();
  });


});
/*
$(function () {
  function ActiveTopicsCnt() {
    
    $(".topics__flex").each(function () {
      var $activeNum = 0;
      var $activeNum = $(this).find('.is-animated').length;
      if ($activeNum >= 4) {
        $('#hide__btn').addClass('active');
      } else {
        $('#hide__btn').removeClass('active');
      }
    });
    return false;
  }

  $(document).on("click", '.filter', function () {
    ActiveTopicsCnt();

  });


});
*/