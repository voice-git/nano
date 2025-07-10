<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl">
      <span class="font-en">TOPICS</span>
      <span>トピックス</span>
    </h2>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main class="bg_border">

    <section class="detail" id="topics-detail">
      <div class="inner">
        <div class="flex">
          <p class="topics__date font-en"><?php the_time('Y.m.d'); ?></p>
          <?php $cat = get_the_category(); ?>
          <p class="topics__ctg <?php get_class_name_by_category($cat[0]->slug); ?>"><?php echo $cat[0]->name; ?></p>
        </div>
        <h3 class="detail__h3"><?php the_title(); ?></h3>
        <p class="detail__txt">
            <?php the_content(); ?>
        </p>
        <div class="detail__btnwrap flex jc-between align-items">
          <p class="btn__prev font-en">
              <span class="font-ex"><?php previous_post_link( '%link', '&lt;' ); ?></span>
              <span class="pc"><?php previous_post_link( '%link', 'PREV' ); ?></span>
          </p>
          <p class="link__btn font-en"><a href="/topics/">BACK</a></p>
          <p class="btn__next font-en">
              <span class="pc"><?php next_post_link( '%link', 'NEXT' ); ?></span>
              <span class="font-ex"><?php next_post_link( '%link', '&gt;' ); ?></span>
          </p>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>