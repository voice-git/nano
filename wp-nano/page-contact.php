<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl">
      <span class="font-en">CONTACT</span>
      <span>お問い合わせ</span>
    </h2>
  </div>
  <main class="bg_border">
    <section class="contact" id="contact">
      <div class="inner">
        <p class="form__txt">下記の項目をご入力の上、送信ボタンを押してください。*は必須記入項目です。</p>
        <div id="contactForm">
        <?php echo do_shortcode('[mwform_formkey key="46"]'); ?>
        </div>
        <p class="form__txt02">メールでのお問い合わせも受け付けております。</p>
        <p class="form__info">
          〒920-1192 石川県金沢市角間町<br>
          金沢大学 学務部 卓越大学院推進室<br>
          e-mail：wise-ku@adm.kanazawa-u.ac.jp</p>
      </div>
    </section>
    <section id="faq" class="faq">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en">FAQ</span>よくある質問</h2>
        <div class="faqwrap">
          <?php if(have_rows('faq')): ?>
            <?php while(have_rows('faq')): the_row(); ?>
              <h3 class="faq__h3 ac__btn"><?php the_sub_field('faqカテゴリー'); ?></h3>
              <div class="faq__contents ac__area">
                <dl class="faq__dl">
                  <?php if(have_rows('faq項目')): ?>
                    <?php while(have_rows('faq項目')): the_row(); ?>
                      <dt class="faq__dt"><?php the_sub_field('質問'); ?></dt>
                      <dd class="faq__dd"><?php the_sub_field('答え'); ?></dd>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </dl>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>