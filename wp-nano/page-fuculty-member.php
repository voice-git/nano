<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl tf-xy">
      <span class="font-en">FACULTY MEMBER</span>
      <span>教員紹介</span>
    </h2>
    <p class="page__mv pc"><img src="<?php echo get_template_directory_uri(); ?>/img/fuculty/mv_fuculty.jpg" alt="教員紹介 メインビジュアル"></p>
    <p class="page__mv sp"><img src="<?php echo get_template_directory_uri(); ?>/img/fuculty/mv_fuculty_sp.jpg" alt="教員紹介 メインビジュアル"></p>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main class="bg_border">
    <?php if(have_rows('教員紹介')){ while (have_rows('教員紹介')): the_row(); ?>
    <section class="pgm-rp" id="pgm-rp">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en"><?php the_sub_field('コース・分類'); ?></span><?php the_sub_field('コース・分類 _日本語'); ?></h2>
        <div class="faculty__flex flex flexwrap">
	      <?php if(have_rows('教員')){ while (have_rows('教員')): the_row(); ?>
          <article class="faculty__item item01">
            <figure class="faculty__img"><img src="<?php if(get_sub_field('教員画像')){ the_sub_field('教員画像'); }else{echo get_template_directory_uri().'/img/fuculty/faculty_img_blank.jpg';} ?>" alt="<?php the_sub_field('名前'); ?>"></figure>
            <h3 class="faculty__h3">
	          <?php if(get_sub_field('肩書き')){ ?>
              <p class="top-position"><?php the_sub_field('肩書き'); ?></p>
              <?php } ?>
	          <?php if(get_sub_field('名前')){ ?>
              <span class="name"><?php the_sub_field('名前'); ?></span>
              <?php } ?>
	          <?php if(get_sub_field('name')){ ?>
              <span class="name-en"><?php the_sub_field('name'); ?></span>
              <?php } ?>
	          <?php if(get_sub_field('役職')){ ?>
              <span class="position"><?php the_sub_field('役職'); ?></span>
              <?php } ?>
            </h3>
            <?php if(get_sub_field('担当科目')){ ?>
            <p class="faculty__ctg"><?php the_sub_field('担当科目'); ?></p>
            <?php } ?>
            <?php if(get_sub_field('研究室サイトurl')){ ?>
            <p class="faculty__link01"><a href="<?php the_sub_field('研究室サイトurl'); ?>" target="_blank" rel="noopener noreferrer">研究室サイト</a></p>
            <?php } ?>
            <?php if(get_sub_field('研究者情報url')){ ?>
            <p class="faculty__link02 color-wh"><a href="<?php the_sub_field('研究者情報url'); ?>" target="_blank" rel="noopener noreferrer">研究者情報</a></p>
            <?php } ?>
          </article>
          <?php endwhile; } ?>
        </div>
      </div>
    </section>
    <?php endwhile; } ?>
  </main>

<?php get_footer(); ?>