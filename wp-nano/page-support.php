<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl tf-xy">
      <span class="font-en">SUPPORT</span>
      <span>学生支援</span>
    </h2>
    <p class="page__mv pc"><img src="<?php echo get_template_directory_uri(); ?>/img/support/mv_support.jpg" alt="学生支援 メインビジュアル"></p>
    <p class="page__mv sp"><img src="<?php echo get_template_directory_uri(); ?>/img/support/mv_support_sp.jpg" alt="学生支援 メインビジュアル"></p>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main class="bg_border">

    <section class="support" id="support">
      <div class="inner">
	    <?php if(have_rows('学生支援')){ while (have_rows('学生支援')): the_row(); ?>
        <div class="sp__contents">
	      <?php if(get_sub_field('学生支援項目_見出し')){ ?>
          <h3 class="support__h3"><?php the_sub_field('学生支援項目_見出し'); ?></h3>
          <?php } ?>
	      <?php if(get_sub_field('学生支援項目_内容')){ ?>
          <p class="support__txt">
              <?php the_sub_field('学生支援項目_内容'); ?>
          </p>
          <?php } ?>
          <?php if(get_sub_field('学生支援項目_表')){ ?>
          <p class="tbl__swipe sp"><img src="<?php echo get_template_directory_uri(); ?>/img/support/ico_swipe.png" alt="スワイプ">スワイプしてご覧いただけます</p>
          <div class="tbl__scroll">
          <?php the_sub_field('学生支援項目_表'); ?>
          </div>
          <?php } ?>
          <?php if(get_sub_field('学生支援項目_注釈')){ ?>
          <p class="support__txt02">
              <?php the_sub_field('学生支援項目_注釈'); ?>
            </p>
            <?php } ?>
        </div>
        <?php endwhile; } ?>
      </div>
    </section>

    <section class="recruitment" id="recruitment">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en">RECRUITMENT</span>学生募集</h2>
        <?php $group01 = get_field('学生募集');if($group01){ ?>
        <p class="recruit__txt">
	      <?php echo $group01['学生募集内容']; ?>
        </p>
        
        <?php $fields = (get_field('学生募集')['pdfダウンロードボタン']);
	        if ($fields): foreach ($fields as $field) : ?>
        <p class="recruit__btn"><a href="<?php echo esc_url($field['pdfファイル']); ?>" target="_blank"><?php echo $field['テキスト']; ?></a></p>
        <?php endforeach;endif; ?>
        <div class="recruit__linkwrap">
	        <?php $fields = (get_field('学生募集')['出願書類データ02']);
		        if ($fields): foreach ($fields as $field) : ?>
		    <p class="recruit__link"><a href="<?php echo esc_url($field['ファイル']); ?>" download><?php echo $field['テキスト']; ?></a></p>
	        <?php endforeach;endif; ?>
        </div>

        <p class="recruit__txt">
          卓越大学院プログラムについてのお知らせを定期配信しています。メール配信を希望される方は以下よりご登録ください。
        </p>
        <p class="recruit__btn"><a href="<?php echo $group01['メール配信登録先url']; ?>" target="_blank">最新情報を受け取る</a></p>
        <?php } ?>
      </div>
    </section>
    
  </main>

<?php get_footer(); ?>