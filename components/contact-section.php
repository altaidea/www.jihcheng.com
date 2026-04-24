    <div class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 inner-block">
            <article>
              <?php
                $consultation = [
                  'zh' => '我們的團隊致力於為您提供專業諮詢與客製化建議。',
                  'cn' => '我们的团队致力于为您提供专业咨询与客製化建议。',
                  'ko' => '저희 팀은 귀하에게 전문적인 상담과 맞춤형 추천을 제공하기 위해 최선을 다하고 있습니다.',
                  'en' => 'Our team is dedicated to providing you with professional consultations and customized recommendations.'
                ];
              ?>
              <p><?= $consultation[$lang] ?? $consultation['en']; ?></p>
            </article>
          </div>
          <div class="col-lg-4 inner-block">
            <a href="contact.php"><div class="more-btn contact-btn"><span><?= $langStrings['contact_title'] ?? 'Contact' ?></span></div></a>
          </div>
        </div>
      </div>
    </div>