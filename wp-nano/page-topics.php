<?php get_header(); ?>

  <div class="mv ps-r">
    <h2 class="page__ttl">
      <span class="font-en">TOPICS</span>
      <span>トピックス</span>
    </h2>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main class="bg_border">

    <section class="topics" id="topics">
      <div class="inner">
        <div class="topics__nav">
          <ul class="topics__ul flex jc-between pc">
            <li class="topics__li filter active" data-filter="all">全て</li>
            <li class="topics__li filter" data-filter="news">ニュース</li>
            <li class="topics__li filter" data-filter="event">イベント情報</li>
            <li class="topics__li filter" data-filter="activity">活動報告</li>
            <li class="topics__li filter" data-filter="works">学生の活動</li>
            <li class="topics__li filter" data-filter="publicity">広報・刊行物</li>
            <li class="topics__li filter" data-filter="test">入試情報</li>
          </ul>
          <label for="category" class="sp">
            <select class="topics__select flex jc-between sp filter" name="category" id="category">
              <option value="all">全て</option>
              <option value="news">ニュース</option>
              <option value="event">イベント情報</option>
              <option value="activity">活動報告</option>
              <option value="works">学生の活動</option>
              <option value="publicity">広報・刊行物</option>
              <option value="test">入試情報</option>
            </select>
          </label>
        </div>

        <div class="topics__flex flex flexwrap">
            <?php echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="18" transition_container="false" button_label="MORE"]'); ?>
            <?php /*
            $args = array(
                'posts_per_page' => -1,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <article class="topics__atc" data-category="<?php $cat1 = get_the_category(); echo $cat1[0]->slug; ?>">
                <figure class="topics__img"><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="トピックス"></a></figure>
                <div class="topics__txtwrap">
                <a href="<?php the_permalink(); ?>">
                    <div class="flex jc-between">
                    <p class="topics__date font-en"><?php the_time('Y.m.d'); ?></p>
                    <?php $cat2 = get_the_category(); ?>
                    <p class="topics__ctg <?php get_class_name_by_category($cat2[0]->slug); ?>"><?php echo $cat2[0]->name; ?></p>
                    </div>
                    <h3 class="topics__h3"><?php the_title(); ?></h3>
                </a>
                </div>
            </article>
            <?php endwhile; endif; */ ?>
        </div>
      </div>
      <!-- あとで無限スクロールにする -->
      <!-- <p class="link__btn font-en hide__btn" id="hide__btn"><a href="#">MORE</a></p> -->
      <?php /* echo do_shortcode('[ajax_load_more post_type="post" posts_per_page="18"]'); */ ?>
    </section>

  </main>

<?php get_footer(); ?>