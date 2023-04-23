<section class="testimonial-section spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Отзывы</span>
          <h2>Что говорят о нас?</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="testimonial-slider owl-carousel">
          <?php
          $catalog_list = mysqli_query($connection, 'SELECT * FROM `feedback` where moder = 1 ORDER BY `id` DESC');
          while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
            echo '
            <div class="ts-item">
              <p>' . $catalog_item["feedback"] . '</p>
              <div class="ti-author">
                <h5>' . $catalog_item["name"] . ' - ' . $catalog_item["town"] . '</h5>
              </div>
              <p>' . $catalog_item["date"] . '</p>
            </div>';
          }

          ?>
        </div>
      </div>

    </div>
    <div class="btn" id="feedback-btn">Оставить отзыв</div>
  </div>
</section>
<div class="popup-container" id="feedback-popup">
  <div class="popup mw500">
    <div class="flex__jc-sb mb20">
      <h2 class="h2">Добавить отзыв</h2>
      <img src="/img/icons/close-icon.png" class="close-popup">
    </div>
    <div class="row contact-form">
      <div class="col-lg-6">
        <input id="name-fb" placeholder="Имя*" required>
      </div>
      <div class="col-lg-6">
        <input id="town-fb" placeholder="Ваш город">
      </div>
      <div class="col-lg-12">
        <textarea id="feedback-fb" placeholder="Отзыв"></textarea>
      </div>
      <div class="col-lg-12">
        <div class="btn" id="send-btn">Отправить</div>
      </div>
    </div>
  </div>
</div>