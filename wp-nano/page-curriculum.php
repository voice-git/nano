<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl tf-xy">
      <span class="font-en">CURRICULUM</span>
      <span>カリキュラム</span>
    </h2>
    <p class="page__mv pc"><img src="<?php echo get_template_directory_uri(); ?>/img/curriculum/mv_curriculum.jpg" alt="カリキュラム メインビジュアル"></p>
    <p class="page__mv sp"><img src="<?php echo get_template_directory_uri(); ?>/img/curriculum/mv_curriculum_sp.jpg" alt="カリキュラム メインビジュアル"></p>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main class="bg_border">

    <section class="contents" id="contents">
      <div class="inner">
        <p class="contents__lead">
	        <?php the_field('カリキュラム本文'); ?>
        </p>
        <div class="contents__flex flex jc-between">
	      <?php $group01 = get_field('必修科目01');if($group01){ ?>
          <article class="contents__atc atc01">
            <h3 class="contents__h3"><?php echo $group01['必修科目01タイトル']; ?></h3>
            <p class="contents__txt">
                <?php echo $group01['必修科目01内容']; ?>
            </p>
          </article>
          <?php } ?>
	      <?php $group02 = get_field('必修科目02');if($group02){ ?> 
          <article class="contents__atc atc02">
            <h3 class="contents__h3"><?php echo $group02['必修科目02タイトル']; ?></h3>
            <p class="contents__txt">
                <?php echo $group02['必修科目02内容']; ?>
            </p>
          </article>
          <?php } ?>
        </div>
      </div>
    </section>

    <section class="schedule" id="schedule">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en">SCHEDULE</span>カリキュラムスケジュール</h2>
        <?php if(get_field('カリキュラムスケジュール')){ ?>
        <figure class="schedule__img"><img src="<?php the_field('カリキュラムスケジュール'); ?>" alt="カリキュラムスケジュール"></figure>
        <?php } ?>
        <h3 class="schedule__h3" style="line-height: 1.5;">高度な専門性を養う<br class="spbr">各コースの開講科目<br class="spbr">（専門コース課程）</h3>
        <?php if(have_rows('各専門科目')){ while (have_rows('各専門科目')): the_row(); ?> 
        <article class="schedule__atc atc01">
          <div class="schedule__flex flex jc-between">
            <figure class="schedule__atc--img"><img src="<?php the_sub_field('担当教授画像'); ?>" alt="<?php the_sub_field('担当教授'); ?>"></figure>
            <div class="schedule__right">
              <div class="flex jc-between">
                <h4 class="schedule__h4"><?php the_sub_field('コース'); ?><span><?php the_sub_field('専門科目'); ?></span></h4>
                <h5 class="schedule__h5"><?php the_sub_field('担当教授肩書き'); ?><span><?php the_sub_field('担当教授'); ?></span></h5>
              </div>
              <p class="schedule__txt">
                <?php the_sub_field('内容'); ?>
              </p>

            </div>
          </div>
        </article>
        <?php endwhile; } ?>
      </div>
    </section>

    <section class="classes" id="classes">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en">CLASSES</span>授業科目</h2>
        <dl class="classes__dl">
          <?php if(have_rows('授業科目')){ while (have_rows('授業科目')): the_row(); ?>
          <dt class="classes__dt ac__btn"><?php the_sub_field('分類タイトル'); ?></dt>
          <dd class="classes__dd ac__area">
            <?php if(have_rows('授業科目field')){ while (have_rows('授業科目field')): the_row(); ?>
            <span class="dd__ttl"><?php the_sub_field('授業科目'); ?></span><?php $radiofiled = get_sub_field('必修科目・選択科目');
	            if($radiofiled == '必修科目'){echo '<span class="class__ctg ctg01">必修</span>';}
	            elseif($radiofiled == '選択科目'){echo '<span class="class__ctg ctg03">選択</span>';}
	            else{echo '<span class="class__ctg ctg02">選択必修</span>';} ?> <?php if(get_sub_field('注釈')){ the_sub_field('注釈'); } ?>
            <span class="dd__txt"><?php the_sub_field('科目内容'); ?></span>
            <?php endwhile; } ?>
          <!-- 注釈 -->
            <span class="dd__txt"><?php the_sub_field('注釈説明'); ?></span>
          </dd>
          <?php endwhile; } ?>
        </dl>
      </div>
    </section>

  </main>

<?php get_footer(); ?>