<?php
/*
Template Name: eng-curriculum
*/
get_header('english'); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl tf-xy">
      <span class="font-en">CURRICULUM</span>
    </h2>
    <p class="page__mv pc"><img src="<?php echo get_template_directory_uri(); ?>/img/curriculum/mv_curriculum.jpg" alt="CURRICULUM MAIN IMAGE"></p>
    <p class="page__mv sp"><img src="<?php echo get_template_directory_uri(); ?>/img/curriculum/mv_curriculum_sp.jpg" alt="CURRICULUM MAIN IMAGE"></p>
  </div>
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
        <h2 class="page__sec--ttl"><span class="font-en">SCHEDULE</span></h2>
        <?php if(get_field('カリキュラムスケジュール')){ ?>
        <figure class="schedule__img"><img src="<?php the_field('カリキュラムスケジュール'); ?>" alt="SCHEDULE"></figure>
        <?php } ?>
        <h3 class="schedule__h3">The subjects in Expert Courses for obtaining high level of expertise</h3>
        <?php if(have_rows('各専門科目')){ while (have_rows('各専門科目')): the_row(); ?> 
        <article class="schedule__atc atc01">
          <div class="schedule__flex flex jc-between">
            <figure class="schedule__atc--img"><img src="<?php the_sub_field('担当教授画像'); ?>" alt="<?php the_sub_field('担当教授'); ?>"></figure>
            <div class="schedule__right">
              <div class="flex jc-between">
                <h4 class="schedule__h4"><?php the_sub_field('コース'); ?><span><?php the_sub_field('専門科目'); ?></span></h4>
                <h5 class="schedule__h5"><?php the_sub_field('担当教授肩書き'); ?><br><?php the_sub_field('担当教授'); ?></h5>
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

  </main>

<?php get_footer('english'); ?>