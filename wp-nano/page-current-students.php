<?php get_header(); ?>

  <main class="bg_border">
    <section class="contents current" id="current">
      <div class="inner">
        <div class="contents01">
          <h3 class="contents__h3">在学生の方へ</h3>
          <h4 class="contents__h4"><?php the_field('メイン見出し'); ?></h4>
          <p class="contents__txt"><?php the_field('メインテキスト'); ?></p>
          <p class="contents__caution"><?php the_field('メイン注釈'); ?></p>
        </div>

        <div class="contents02">
	        <?php if(have_rows('サブテキスト')){ while (have_rows('サブテキスト')): the_row(); ?>
	        <p class="contents__txt02"><?php the_sub_field('テキスト'); ?></p>
	        <?php endwhile; } ?>
          <p class="contents__caution"><?php the_field('サブ注釈'); ?></p>
        </div>
        <p class="link__btn font-en"><a href="/">TOP</a></p>
      </div>
    </section>

  </main>

<?php get_footer(); ?>