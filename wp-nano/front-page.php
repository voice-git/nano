<?php get_header(); ?>

  <div class="fv ps-r">
    <div class="fv__copywrap ps-r tf-xy">
      <h2 class="fv__copy pc load fadeIn"><img class="wow fadeInUp" data-wow-duration="3s" src="<?php echo get_template_directory_uri(); ?>/img/top/fv_copy_txt.png" alt="変化に応じる人になるか。or 変化を起こす人になるか。"></h2>
      <h2 class="fv__copy sponly load fadeIn"><img class="wow fadeInUp" data-wow-duration="3s" src="<?php echo get_template_directory_uri(); ?>/img/top/fv_copy_sp_txt.png" alt="変化に応じる人になるか。or 変化を起こす人になるか。"></h2>
      <span class="loading__line03 ps-a tf-xy load"></span>
      <span class="loading__line04 ps-a tf-xy load"></span>
    </div>
    <span class="loading__line01 ps-a tf-xy load"></span>
    <span class="loading__line02 ps-a tf-xy load"></span>
    <!-- <span class="fv__line01 ps-a tf-xy"></span>
    <span class="fv__line02 ps-a tf-xy"></span> -->
    <!-- <figure class="fv__img pc"><img alt="メインビジュアル01" src="<?php echo get_template_directory_uri(); ?>/img/top/fv01.jpg"></figure>
    <figure class="fv__img sp"><img alt="メインビジュアル01" src="<?php echo get_template_directory_uri(); ?>/img/top/fv01_sp.jpg"></figure> -->
    <p class="fv__scroll sp font-en"><span class="ps-r">scroll</span></p>
  </div>
  <p class="fixed__btn"><a href="/contact/"><span class="font-en">CONTACT</span>お問い合わせ</a></p>
  <main>
    <section class="topics ps-r" id="topics">
      <div class="inner__large ps-r">
        <div class="topics__flex flex jc-between">
          <div class="topics__left">
            <h2 class="topics__ttl"><span class="font-en">TOPICS</span>トピックス</h2>
          </div>
          <div class="topics__right">
            <dl class="topics__dl">
            <?php
            if (is_mobile()) {
                $count = 2;
            } else {
                $count = 5;
            }
            $args = array(
                'posts_per_page' => $count,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_type' => 'post',
                'post_status' => 'publish'
            );
            $the_query = new WP_Query($args);
            if ( $the_query->have_posts() ) :
                while ( $the_query->have_posts() ) : $the_query->the_post();
            ?>
            <dt class="topics__dt"><span class="font-en"><?php the_time('Y.m.d'); ?></span><span class="topics__ctg"><?php $cat = get_the_category(); echo $cat[0]->name; ?></span></dt>
            <dd class="topics__dd"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
            <?php endwhile; endif ?>
            </dl>
          </div>
        </div>
        <p class="topics__btn font-en"><a href="/topics/">MORE</a></p>
      </div>
    </section>

    <section id="greeting" class="greeting ps-r">
      <div class="inner__large">
        <h2 class="greeting__copy"><img class="wow fadeInUp" data-wow-duration="3s" src="<?php echo get_template_directory_uri(); ?>/img/top/greeting_copy.png" alt="あなたが起こすかもしれない変化を、人類が待っている。" loading="lazy"></h2>
        <p class="greeting__txt pc">
          変化に対応する、といえば聞こえはいい。<br class="sp"><br class="sp">でも、変化を起動する、という選択肢もあります。<br><br>

          いま、世界が求めているのは、“変化を起こす側に立つあなた”かもしれません。<br><br>

          世界が…人類…が、という表現は大げさに感じるでしょうか？そんなことはないです。<br><br>

          あなたは、さまざまな社会課題に直面する人々を救うかもしれない。<br><br>

          世界最高水準の教育・研究力を結集した環境で得た知見を抱えて、<br><br>

          人類の健康基盤構築のためのイノベーションを起こす人になるかもしれない。<br><br>

          金沢大学はそう予感しています。ここから巣立つ人材が、<br class="sp"><br class="sp">人類待望の“変化”を起こすと信じています。
        </p>
        <p class="greeting__txt sp">
          変化に対応する、といえば聞こえはいい。<br>
          でも、変化を起動する、という選択肢もあります。<br>
          いま、世界が求めているのは、<br>
          “変化を起こす側に立つあなた”かもしれません。<br>
          世界が…人類…が、という表現は大げさに感じる<br>
          でしょうか？そんなことはないです。<br>
          あなたは、さまざまな社会課題に<br>
          直面する人々を救うかもしれない。<br>
          世界最高水準の教育・研究力を<br>
          結集した環境で得た知見を抱えて、<br>
          人類の健康基盤構築のための<br>
          イノベーションを起こす人になるかもしれない。<br>
          金沢大学はそう予感しています。<br>
          ここから巣立つ人材が、<br>
          人類待望の“変化”を起こすと信じています。
        </p>
        <h2 class="greeting__logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top/greeting_logo.png" alt="金沢大学ナノ精密医学・理工学 卓越大学院プログラム" loading="lazy"></h2>
      </div>
    </section>

    <section id="program" class="program ps-r">
      <div class="inner__large">
        <div class="program__flex flex jc-between">
          <div class="program__left">
            <h2 class="section__ttl"><span class="font-en">PROGRAM</span>プログラム</h2>
            <p class="program__txt">
              2015年にアメリカから”Precision <br class="spbr">Medicine”が提案され、世界的な注目を集めています。これは、最先端技術を用いた遺伝子解析により、患者個人レベルでの最適な治療を目指すもので、「精密医学」と和訳されています。しかし、遺伝子解析のみでは不十分であり、未だ多くの疾患が克服できていません。<br>
              金沢大学は、ナノプローブ顕微鏡という強みを活かし、「ナノを制御する装置・材料の開発による革新的予防・診断・治療法を創出」するための教育と研究を分野横断的かつ体系的に実践する拠点を先駆けて形成し、疾患の普遍的な原因解明を目指すとともに、個別化医療にも応用する「ナノ精密医学・ナノ精密理工学」という新たな知の創造と活用を主導し、社会にイノベーションをもたらす人材を世界に輩出します。<br>
              本プログラムは、人類社会の課題である「がん、生活習慣病、脳神経病、微小粒子に起因する疾患、ナノ材料に起因する疾患」の5つにターゲットを絞り、ナノレベルでの理解・制御による革新的予防・診断・治療法の創出を担う「技術に強いナノ精密医学プロフェッショナル・医学に強いナノ精密理工学プロフェッショナル」を育成します。
            </p>
            <figure class="program__img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/program_img.png" alt="革新的予防・診断・治療法の創出"></figure>
            <dl class="program__dl">
              <dt class="program__dt ac__btn">養成する人材像</dt>
              <dd class="program__dd ac__area">
                <span class="txt01">本プログラムでは、ナノ計測に関する「高度な専門性」を有し、様々な生命現象をナノレベルで捉える「俯瞰力」とナノ精密医学・理工学における新たなイノベーションを創出する「独創力」を備え、更に、その成果を社会へと展開する「社会実装力」を備えた卓越した博士人材「知のプロフェッショナル」を養成します。</span>
                <span class="txt02">① 医薬保健学、理工学といった既存の枠を超え活躍する医学と理工学のマルチディシプリン的人材<br>
                  ② 「予防・診断・治療」の各段階において現場を熟知しているスペシャリスト<br>
                  ③ 多様なバックグランドを持つグループの中心で Hub 的役割を担う知のプロフェッショナル</span>
                <span class="txt03">
                  この3つの資質を兼ね備えた<br>
                  ・「技術に強いナノ精密医学プロフェッショナル」<br>
                  ・「医学に強いナノ精密理工学プロフェッショナル」<br>
                  を育成します。
                </span>
                <span class="txt-bold">求める学生像</span>
                <span class="txt04">本プログラムの履修者は、大学院自然科学研究科、大学院医薬保健学総合研究科、大学院先進予防医学研究科、大学院新学術創成研究科の４研究科の入学者の中から広く募集し、以下のような意欲と適性をもつ学生を求めます。</span>
                <span class="txt05">①ナノサイエンス、ナノテクノロジーに強い関心と学修意欲を持ち、理学、工学、医学、医科学、薬学、創薬科学、保健学、融合科学、ナノ科学又は学術に関連する分野の基礎学力を備えた人材。<br>
                  ② 幅広い視野と創造性、豊かな人間性・社会性、高度な倫理観を備えて、健康課題解決への意欲を持つ人材。<br>
                  ③ 最新の知見・技術の動向に関心を持ち、イノベーションや新ビジネスによって社会を変えたい、社会に貢献したいという意欲を持つ人材。<br>
                  ④ 国や地域、社会や制度等、個別の専門分野といった既存の枠組にとらわれず、異文化や他者に寛容な姿勢と優れたコミュニケーション能力を有し、専門が異なる分野にも多角的・論理的思考力を持って異分野交流活動に取り組むことができる人材。
                </span>
              </dd>
              <dt class="program__dt ac__btn">修了要件</dt>
              <dd class="program__dd ac__area">
                所属する研究科が定める修了に必要な要件を満たし、かつ本プログラム所定の単位を修得した者に、本学学位規程に規定する博士の学位を授与し、それぞれの学位記に本プログラムの修了を付記します。<br><br>

                学位記に付記する名称：ナノ精密医学・理工学卓越大学院プログラム修了<br><br>

                また、修了者には、NanoLSI に設置する共用の最先端ナノ計測機器の使用資格者として、”NanoLSI アソシエイト”の称号を付与します。</dd>
            </dl>
          </div>
          <div class="program__right pc">
            <figure class="program__img"><img src="<?php echo get_template_directory_uri(); ?>/img/top/program_img.png" alt="革新的予防・診断・治療法の創出"></figure>
          </div>
        </div>
      </div>
    </section>

    <section class="message" id="message">
      <div class="inner__large ps-r">
        <div class="message__txtwrap">
          <h2 class="section__ttl"><span class="font-en">MESSAGE</span>メッセージ</h2>
          <p class="message_txt">
            未踏領域を切り拓く<br>
            イノベーション人材の養成、<br>
            そして現代、未来の課題克服へ。
          </p>
          <p class="link__btn font-en"><a href="/message/">MORE</a></p>
        </div>
      </div>
      <div class="message__img pc ps-a"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_message02.png" alt="メッセージ"></div>
      <div class="message__img sponly"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_message_sp.png" alt="メッセージ" loading="lazy"></div>
    </section>

    <section class="link__area" id="link__area">

      <div class="link__item link__curriculum ps-r">
        <a class="link__all" href="/curriculum/">
          <div class="link__txtwrap ps-a">
            <h2 class="section__ttl"><span class="font-en">CURRICULUM</span>カリキュラム</h2>
            <p class="link__btn font-en">MORE</p>
          </div>
          <!-- <figure class="link__img pc"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_curriclum.png" alt="カリキュラム" loading="lazy"></a></figure> -->
        </a>
      </div>
      <div class="link__item link__facility ps-r">
        <a class="link__all" href="/fuculty-member/">
          <div class="link__txtwrap ps-a">
            <h2 class="section__ttl"><span class="font-en">FACULTY MEMBER</span>教員紹介</h2>
            <p class="link__btn font-en">MORE</p>
          </div>
        </a>

        <!-- <figure class="link__img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_facility.png" alt="教員紹介" loading="lazy"></figure>
        <figure class="link__img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_fucility_sp.png" alt="教員紹介" loading="lazy"></figure> -->
      </div>
      <div class="link__item link__support ps-r">
        <a class="link__all" href="/support/">
          <div class="link__txtwrap ps-a">
            <h2 class="section__ttl"><span class="font-en">SUPPORT</span>学生支援</h2>
            <p class="link__btn font-en">MORE</p>
          </div>
        </a>

        <!-- <figure class="link__img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_support.png" alt="学生支援" loading="lazy"></figure>
        <figure class="link__img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_support_sp.png" alt="学生支援" loading="lazy"></figure> -->
      </div>
      <div class="link__item link__recruit ps-r">
        <a class="link__all" href="/support/#recruitment">
          <div class="link__txtwrap ps-a">
            <h2 class="section__ttl"><span class="font-en">RECRUITMENT</span>学生募集</h2>
            <p class="link__btn font-en">MORE</p>
          </div>
        </a>

        <!-- <figure class="link__img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_recruit.png" alt="学生募集" loading="lazy"></figure>
        <figure class="link__img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_recruit_sp.png" alt="学生募集" loading="lazy"></figure> -->
      </div>
      <div class="link__item link__topics ps-r">
        <a class="link__all" href="/topics/">
          <div class="link__txtwrap ps-a">
            <h2 class="section__ttl"><span class="font-en">TOPICS</span>トピックス</h2>
            <p class="link__btn font-en">MORE</p>
          </div>
        </a>

        <!-- <figure class="link__img pc"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_topics.png" alt="教員紹介" loading="lazy"></figure>
        <figure class="link__img sp"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_topics_sp.png" alt="教員紹介" loading="lazy"></figure> -->
      </div>
      <!-- <span class="link__area--line01"></span>
      <span class="link__area--line02"></span> -->

    </section>

    <section class="contact" id="contact">
      <div class="inner__large">
        <h2 class="section__ttl"><span class="font-en">CONTACT</span>お問い合わせ</h2>
        <div class="contact__bg ps-r">
          <h3 class="contact__img pc"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_contact.png" alt="あなたが起こすかもしれない変化を、人類がまっている。" loading="lazy"></a></h3>
          <h3 class="contact__img sp"><a href="/contact/"><img src="<?php echo get_template_directory_uri(); ?>/img/top/bg_contact_sp.png" alt="あなたが起こすかもしれない変化を、人類がまっている。" loading="lazy"></a></h3>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>