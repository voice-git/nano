  <p class="js-pagetop font-en sponly" id="page-top">
    <a href="#top"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/pagetop.png" alt="pagetop"></a>
  </p>
  <footer class="ps-r">

    <div class="inner">
      <ul class="ft__nav flex jc-between">
        <li class="ft-nav__li"><a href="/message/">メッセージ</a></li>
        <li class="ft-nav__li"><a href="/curriculum/">カリキュラム</a></li>
        <li class="ft-nav__li"><a href="/fuculty-member/">教員紹介</a></li>
        <li class="ft-nav__li"><a href="/support/#recruitment">学生募集</a></li>
        <li class="ft-nav__li"><a href="/support/">学生支援</a></li>
        <li class="ft-nav__li"><a href="/topics/">トピックス</a></li>
        <li class="ft-nav__li"><a href="/contact/#faq">FAQ</a></li>
        <li class="ft-nav__li"><a href="/current-students/">在学生の方へ</a></li>
        <li class="ft-nav__li"><a href="/links/">リンク</a></li>
      </ul>
      <p class="ft__privacy"><a href="/analytics/">Google Analyticsの利用について</a><br class="sponly"><span class="pc"> ｜ </span><a href="https://www.kanazawa-u.ac.jp/university/management/security" target="_blank">プライバシーポリシー<img src="<?php echo get_template_directory_uri(); ?>/img/cmn/ico_link.png" alt="リンク"></a></p>
      <h2 class="ft__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/img/cmn/logo_ft.png" alt="金沢大学｜卓越大学院｜プログラム推進室" loading="lazy"></a></h2>
    </div>
    <!--<p class="ft__copyright">本Webサイトは，ウェブアクセシビリティJIS X 8341-3:2016の適合レベルAAに準拠しています。</p>-->
    <p class="ft__copyright font-en"><small>Copyright &copy; 2022 Kanazawa University. All Rights Reserved.</small></p>

  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.5.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script>
  <script>
    var rellax = new Rellax('.js-rellax');
  </script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <?php if ( is_page('contact') ): ?>
  <!-- form validation -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/validationEngine/jquery.validationEngine.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/validationEngine/jquery.validationEngine-ja.js"></script>
  <script>
    $(function () {
      //<form>タグのidを指定
      $("#contactForm").validationEngine(
        'attach', {
          promptPosition: "bottomLeft" //エラーメッセージ位置の指定
        }
      );
    });
  </script>
  <!-- 郵便番号検索 -->
  <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
  <?php endif; ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>

<?php wp_footer(); ?>
</body>
</html>