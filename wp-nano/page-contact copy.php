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
        <!-- <form method="post" action="./confirm.html" name="form" id="contactForm"> -->
          <!-- <table class="tbl-form">
            <tr>
              <th class="required">お名前<span class="input__must">*</span></th>
            </tr>
            <tr>
              <td><input type="text" name="name" value="" class="input-text validate[required]"></td>
            </tr>
            <tr>
              <th class="required">メールアドレス<span class="input__must">*</span></th>
            </tr>
            <tr>
              <td><input id="email" type="email" name="email" class="input-text validate[required,custom[email]]" value="">
              </td>
            </tr>
            <tr>
              <th class="required">メールアドレス(確認)<span class="input__must">*</span></th>
            </tr>
            <tr>
              <td><input type="email" name="email" class="input-text validate[required,equals[email]]" value="">
              </td>
            </tr>
            <tr>
              <th>所属</th>
            </tr>
            <tr>
              <td><input type="text" name="belonging" class="input-text" value="">
              </td>
            </tr>
            <tr>
              <th>学年</th>
            </tr>
            <tr>
              <td><input type="text" name="grade" class="input-text" value="">
              </td>
            </tr>
            <tr class="form__com">
              <th class="comment">お問い合わせ内容<span class="input__must">*</span></th>
            </tr>
            <tr>
              <td class="comment"><textarea name="comment" class="textarea validate[required]"></textarea>
              </td>
            </tr>
          </table>
          <p class="form__privacy"><input class="input__check validate[required]" type="checkbox" name="privacy" value=""><a href="/analytics/" target="_blank">プライバシーポリシー</a>に同意する</p>
          <div class="form_submit_btn flex jc-center">
            <input type="submit" name="submit" value="SEND" class="input-button submit__btn link__btn font-en">
            <input type="hidden" name="action" value="confirm">
          </div> -->
        <!-- </form> -->
        </div>
        <p class="form__txt02">メールでのお問い合わせも受け付けております。</p>
        <p class="form__info">
          〒920-1192 石川県金沢市角間町<br>
          金沢大学 卓越大学院プログラム推進室<br>
          e-mail：wise-ku@adm.kanazawa-u.ac.jp</p>
      </div>
    </section>
    <section id="faq" class="faq">
      <div class="inner">
        <h2 class="page__sec--ttl"><span class="font-en">FAQ</span>よくある質問</h2>
        <div class="faqwrap">
          <h3 class="faq__h3 ac__btn">履修対象者</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q 卓越大学院プログラムを履修するには、どの研究科に入学すれば良いですか。</dt>
              <dd class="faq__dd">本プログラムを履修できるのは、自然科学研究科、医薬保健学総合研究科、先進予防医学研究科、新学術創成研究科の4研究科に在籍する者で、全ての専攻が対象です。</dd>
              <dt class="faq__dt">Q 博士後期課程に進学する希望はないのですが、卓越大学院プログラムの履修はできますか？</dt>
              <dd class="faq__dd">卓越大学院プログラムは、５年一貫型（医学博士課程及び薬学博士課程は４年）の博士学位プログラムです。博士後期課程への進学を希望している者のみが履修できます。</dd>
            </dl>
          </div>
          <h3 class="faq__h3 ac__btn">学位・資格</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q 取得できる学位は何ですか？</dt>
              <dd class="faq__dd">履修者が所属する研究科が授与する学位が授与されます。また、プログラムを修了した者の学位記には、「ナノ精密医学・理工学卓越大学院プログラム修了」と付記されます。</dd>
              <dt class="faq__dt">Q プログラム修了によって得られる資格は何ですか？</dt>
              <dd class="faq__dd">本プログラムの修了者には、博士の学位に加えて、ナノプローブ顕微鏡の使用資格者として、”NanoLSI アソシエイト”の称号を授与します。</dd>
            </dl>
          </div>

          <h3 class="faq__h3 ac__btn">カリキュラム</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q 修了要件について教えてください。</dt>
              <dd class="faq__dd">本プログラムの修了要件は、プログラムが指定する科目の単位を修得し、かつ学生が所属する研究科の博士論文審査と最終試験に合格することです。博士の学位を取得するために、所属する研究科が定める修了要件を満たす必要があります。</dd>
              <dt class="faq__dt">Q カリキュラムスケジュールを教えてください。</dt>
              <dd class="faq__dd">1年目（5年制博士課程は1、2年目）は「プログラム基礎課程」とし、プログラムを履修する上で基礎となる共通科目を履修します。本課程の最後に、Nano-Qualifying Examination (N-QE)を筆記・面談試験により実施し、ナノ医学・ナノ理工学における基礎的知識を修得しているかを評価します。<br>
                2年目（5年制博士課程は3年目）以降は「専門コース課程」とし、専門4コース課程の中から一つを選択し、専門科目を履修します。また、医薬保健学系を主に専攻する学生は理工学系の科目、理工学系を主に専攻する学生は医学系の科目を履修します。</dd>
            </dl>
          </div>

          <h3 class="faq__h3 ac__btn">経済支援</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q 入学料と授業料は免除されますか？</dt>
              <dd class="faq__dd">本プログラム履修者全員の入学料と授業料は全額免除します。</dd>
              <dt class="faq__dt">Q 奨励金は受給できますか？</dt>
              <dd class="faq__dd">成績優秀者に対し、給付型奨励金を支給します。奨励金の支給は、毎年審査により決定します。なお、博士後期課程・博士課程の奨励金については、所得税法上の雑所得となるため、確定申告を行う必要があり、また、家計負担者の扶養や健康保険組合の扶養から外れる場合があります。詳細は税務署や健康保険組合等にお問い合わせください。</dd>
              <dt class="faq__dt">Q 入学料・授業料・奨学金以外の経済支援はありますか？</dt>
              <dd class="faq__dd">インターンシップ・留学等海外派遣に対し旅費の一部を支援する予定です。なお、支給額は予算額に応じて変更することがあります。<br>
                また、プログラム学生は、博士前期課程からプログラム担当者の研究プロジェクト等に研究補助者（RA:リサーチアシスタント）として雇用された場合、給与が支給されます。</dd>
            </dl>
          </div>

          <h3 class="faq__h3 ac__btn">修了後の進路</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q 修了後の進路は？</dt>
              <dd class="faq__dd">本プログラムの修了者は、各所にある研究シーズを社会実装する能力を鍛えることで、アカデミアや企業などへのキャリアパスが見込めます。例えば、大学などの研究機関に就職した場合、最先端のナノ計測学の知識を持ち、技術に強いナノ精密医学研究者や、医学に強いナノ精密技術者など、様々な分野での研究に活躍できる人材として期待されます。また、民間企業に就職した場合も、前述の技術に強いナノ精密医学研究者や、医学に強いナノ精密技術者として研究開発等の業務にあたれるほか、本学が所有する最新のナノ計測機器を使用する許可を持つ”NanoLSI アソシエイト”として、大学と企業を結ぶHub的人材として活躍することができます。</dd>
            </dl>
          </div>

          <h3 class="faq__h3 ac__btn">その他</h3>
          <div class="faq__contents ac__area">
            <dl class="faq__dl">
              <dt class="faq__dt">Q ナノ精密医学・理工学卓越大学院プログラムの情報を知るのはどうしたらいいですか？</dt>
              <dd class="faq__dd">ナノ精密医学・理工学卓越大学院プログラムの情報はWebサイトで発信しています。<br>
                また、本Webサイト「学生募集」ページ下部の「最新情報を受け取る」のバナーから登録することにより、イベントや学生募集の開始などの情報を受けとることができます。</dd>
            </dl>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php get_footer(); ?>