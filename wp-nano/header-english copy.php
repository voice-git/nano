<!DOCTYPE HTML>
<html lang="en">

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

  <?php if ( is_page('en') ): ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/top.css" media="all">
  <?php elseif ( is_page(array('analytics','current-students','links')) ): ?>
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
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/topics.css" media="all">
  <?php endif; ?>

  <link rel="icon" href="/img/cmn/favicon.ico" type="image/vnd.microsoft.icon">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/cmn/apple-touch-icon.png">

  <!-- wow -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css" media="all">

  <!-- adobe font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&family=Shippori+Mincho:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- english-->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/english.css" media="all">

  <?php wp_head(); ?>
</head>

<!-- bodyタグ -->
<?php if ( is_page('en') ): ?>
<body class="index__page wow fadeIn ps-r" data-wow-delay=".3s">
<?php elseif ( is_page(array('analytics')) ): ?>
<body class="privacy__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('complete')) ): ?>
<body class="sent__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('confirm')) ): ?>
<body class="confirm__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('contact')) ): ?>
<body class="contact__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('current-students')) ): ?>
<body class="current__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('curriculum')) ): ?>
<body class="curriculum__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('fuculty-member')) ): ?>
<body class="fuculty__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('links')) ): ?>
<body class="link__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('message')) ): ?>
<body class="message__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('support')) ): ?>
<body class="support__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_page(array('topics')) ): ?>
<body class="topics__page wow fadeIn" data-wow-delay=".3s">
<?php elseif ( is_single() ): ?>
<body class="topics-detail__page wow fadeIn" data-wow-delay=".3s">
<?php endif; ?>

<!-- headerタグ -->
<?php if ( is_page('en') ): ?>
  <header id="index__hd" class="index__hd tf-x fadeIn load">
<?php elseif ( is_page(array('analytics','curriculum','contact','confirm','complete','current-students','fuculty-member','links', 'message','support','topics')) || is_single() ): ?>
  <header id="page__hd" class="index__hd tf-x appear__hd">
<?php endif; ?>

    <div class="hd__flex flex jc-between align-items">
      <div class="hd__left">
        <h1 class="hd__logo"><a href="/en/"><img src="<?php echo get_template_directory_uri(); ?>/img/en/cmn/logo_hd.png" alt="金沢大学｜卓越大学院｜プログラム推進室"></a></h1>
      </div>
      <div class="hd__right pc flex jc-end">
        <nav class="g-nav__pc">
          <ul class="g-nav__pc--ul flex jc-end">
            <li class="g-nav__li"><a href="/en/curriculum/">CURRICULUM</a></li>
            <li class="g-nav__li"><a href="/en/fuculty-member/">FACULTY MEMBER</a></li>
            <li class="g-nav__li"><a href="/en/support/">SUPPORT</a></li>
            <li class="g-nav__li"><a href="/en/support/#recruitment">RECRUITMENT</a></li>
          </ul>
        </nav>
        <p class="hd__en pc font-en"><a href="/">日本語</a></p>
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
              <li class="g-nav__li"><a href="/en/curriculum/">CURRICULUM</a></li>
              <li class="g-nav__li"><a href="/en/fuculty-member/">FACULTY MEMBER</a></li>
              <li class="g-nav__li"><a href="/en/support/">SUPPORT</a></li>
              <li class="g-nav__li"><a href="/en/support/#recuruitment">RECRUITMENT</a></li>
            </ul>
          </nav>
          <div class="g-nav__bg--flex flex jc-center">
            <p class="g-nav__bg--btn english__btn font-en"><a href="/">日本語</a></p>
          </div>
        </div>
      </div>
    </div>
  </header>
