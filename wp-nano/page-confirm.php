<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl">
      <span class="font-en">CONTACT</span>
      <span>お問い合わせ</span>
    </h2>
  </div>
  <main class="bg_border">
    <section class="contact confirm" id="contact">
      <div class="inner">
        <p class="form__txt">入力内容をご確認いただき、<br class="spbr">お間違いがなければ、送信してください。</p>
        <div id="contactForm">
        <?php echo do_shortcode('[mwform_formkey key="46"]'); ?>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>