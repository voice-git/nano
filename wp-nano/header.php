<!DOCTYPE HTML>
<html lang="ja">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no" />
  <meta name="description" content="金沢大学｜卓越大学院｜プログラム推進室の公式サイトです。">
  <meta name="keywords" content="金沢,大学,卓越,大学院,プログラム,推進室">
  <meta name="format-detection" content="telephone=no">
  <meta property="og:title" content="金沢大学｜卓越大学院｜プログラム推進室" />
  <meta property="og:url" content="" />
  <meta property="og:description" content="金沢大学｜卓越大学院｜プログラム推進室の公式サイトです。" />
  <meta property="og:image" content="" />
  <meta property="og:type" content="website" />
  <title>金沢大学｜卓越大学院｜プログラム推進室</title>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick/slick.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick/slick-theme.css" media="all">
  <?php if ( is_page(array('contact')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/validationEngine.jquery.css" media="all">
  <?php endif; ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/cmn.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css" media="all">

  <?php if ( is_front_page() ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/top.css?v3" media="all">
  <?php elseif ( is_page(array('analytics','current-students','links','recipient')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/other.css" media="all">
  <?php elseif ( is_page(array('contact','confirm','complete')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" media="all">
  <?php elseif ( is_page(array('curriculum')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/curriculum.css" media="all">
  <?php elseif ( is_page(array('fuculty-member')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fuculty.css" media="all">
  <?php elseif ( is_page(array('message')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/message.css" media="all">
  <?php elseif ( is_page(array('support')) ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/support.css" media="all">
  <?php elseif ( is_page(array('topics')) || is_single() ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/topics.css?0727" media="all">
  <?php endif; ?>

  <link rel="icon" href="/img/cmn/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/cmn/apple-touch-icon.png">

  <!-- wow -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" media="all">

  <!-- adobe font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&family=Shippori+Mincho:wght@400;500;600&display=swap" rel="stylesheet">

<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js',
'ga');
ga('create', 'UA-11241466-1', 'auto');
ga('send', 'pageview');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async
src="https://www.googletagmanager.com/gtag/js?id=UA-154932835-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-154932835-1');
</script>

  <?php wp_head(); ?>
</head>

<!-- bodyタグ -->
<?php if ( is_front_page() ): ?>
<body class="index__page wow fadeIn ps-r" data-wow-delay=".3s">
<?php elseif ( is_page(array('analytics')) ): ?>
<body class="privacy__page">
<?php elseif ( is_page(array('complete')) ): ?>
<body class="sent__page">
<?php elseif ( is_page(array('confirm')) ): ?>
<body class="confirm__page">
<?php elseif ( is_page(array('contact')) ): ?>
<body class="contact__page">
<?php elseif ( is_page(array('current-students','recipient')) ): ?>
<body class="current__page">
<?php elseif ( is_page(array('curriculum')) ): ?>
<body class="curriculum__page">
<?php elseif ( is_page(array('fuculty-member')) ): ?>
<body class="fuculty__page">
<?php elseif ( is_page(array('links')) ): ?>
<body class="link__page">
<?php elseif ( is_page(array('message')) ): ?>
<body class="message__page">
<?php elseif ( is_page(array('support')) ): ?>
<body class="support__page">
<?php elseif ( is_page(array('topics')) ): ?>
<body class="topics__page">
<?php elseif ( is_single() ): ?>
<body class="topics-detail__page">
<?php endif; ?>

<!-- headerタグ -->
<?php if ( is_front_page() ): ?>
  <header id="index__hd" class="index__hd tf-x fadeIn load">
<?php elseif ( is_page(array('analytics','curriculum','contact','confirm','complete','current-students','fuculty-member','links', 'message','support','topics','recipient')) || is_single() ): ?>
  <header id="page__hd" class="index__hd tf-x appear__hd">
<?php endif; ?>

    <div class="hd__flex flex jc-between align-items">
      <div class="hd__left">
        <h1 class="hd__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_hd.png" alt="金沢大学｜卓越大学院｜プログラム推進室"></a></h1>
      </div>
      <div class="hd__right pc flex jc-end">
        <nav class="g-nav__pc">
          <ul class="g-nav__pc--ul flex jc-end">
            <li class="g-nav__li"><a href="/message/">メッセージ</a></li>
            <li class="g-nav__li"><a href="/curriculum/">カリキュラム</a></li>
            <li class="g-nav__li"><a href="/fuculty-member/">教員紹介</a></li>
            <li class="g-nav__li"><a href="/support/#recruitment">学生募集</a></li>
            <li class="g-nav__li"><a href="/support/">学生支援</a></li>
            <li class="g-nav__li"><a href="/topics/">トピックス</a></li>
            <li class="g-nav__li"><a href="/contact/#faq">FAQ</a></li>
          </ul>
        </nav>
        <p class="hd__en pc font-en"><a href="/en/<?php switch_lang($post->post_name); ?>">ENGLISH</a></p>
      </div>
      <div class="hd__right sp">
        <div class="hd__gnav--sp header__menu">
          <div class="hd__hamburger ps-r headerColor-default">
            <span class="hd__hamburger--top ps-a"></span>
            <!-- <span class="hd__hamburger--middle ps-a"></span> -->
            <span class="hd__hamburger--bottom ps-a"></span>
            <span class="hd__hamburger--top02 ps-a"></span>
            <span class="hd__hamburger--bottom02 ps-a"></span>
          </div>
          <!-- <p class="header__menu--txt"><span class="close">Menu</span><span class="open">Close</span></p> -->
        </div>
        <div class="g-nav__bg">
          <nav class="g-nav__sp">
            <ul class="g-nav__sp-ul">
              <li class="g-nav__li"><a href="/message/">メッセージ</a></li>
              <li class="g-nav__li"><a href="/curriculum/">カリキュラム</a></li>
              <li class="g-nav__li"><a href="/fuculty-member/">教員紹介</a></li>
              <li class="g-nav__li"><a href="/support/#recuruitment">学生募集</a></li>
              <li class="g-nav__li"><a href="/support/">学生支援</a></li>
              <li class="g-nav__li"><a href="/topics/">トピックス</a></li>
              <li class="g-nav__li"><a href="/contact/#faq">FAQ</a></li>
              <li class="g-nav__li"><a href="/current-students/">在学生の方へ</a></li>
              <li class="g-nav__li"><a href="/links/">リンク</a></li>
            </ul>
          </nav>
          <div class="g-nav__bg--flex flex jc-center">
            <p class="g-nav__bg--btn contact__btn"><a href="/contact/">お問い合わせ</a></p>
            <p class="g-nav__bg--btn english__btn font-en"><a href="/en/<?php switch_lang($post->post_name); ?>">ENGLISH</a></p>
          </div>
        </div>
      </div>
    </div>
  </header>
