<section class="services-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <span>Сервис</span>
          <h2>Наши услуги</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `service` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
        echo '
            <div class="col-lg-4 col-sm-6">
              <div class="service-item">
                <i class="' . $catalog_item["icon"] . '"></i>
                <h4>' . $catalog_item["title"] . '</h4>
                <p>' . $catalog_item["description"] . '</p>
              </div>
            </div>';
      }
      ?>
    </div>
  </div>
</section>