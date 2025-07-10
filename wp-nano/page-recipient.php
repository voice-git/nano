<?php get_header(); ?>

  <main class="bg_border">
    <section class="contents current" id="current">
      <div class="inner">
        <div class="contents02">
          <h3 class="contents__h3">教育研究支援奨励金受給者</h3>
          <p class="contents__txt02"><?php the_field('見出し'); ?><br><br>
          <?php if(have_rows('奨励金受給者リスト')){ while (have_rows('奨励金受給者リスト')): the_row(); ?>
          <?php if(get_sub_field('pdfファイル')){ ?>
	          ・<a href="<?php the_sub_field('pdfファイル'); ?>" target="_blank" class="text-link"><?php the_sub_field('テキスト'); ?></a><br><br class="sp">
          <?php }else{ ?>
	          ・<?php the_sub_field('テキスト'); ?><br><br class="sp">
          <?php } ?>
          <?php endwhile; } ?>
          </p>
        </div>
        <p class="link__btn font-en"><a href="/support/">BACK</a></p>
      </div>
    </section>

  </main>

<?php get_footer(); ?>