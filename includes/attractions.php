<section class="blog-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <span>немного о городе</span>
              <h2>Наши достоприме<wbr/>чательности</h2>
            </div>
          </div>
        </div>

        <div class="row">
        <?php
        $catalog_list = mysqli_query($connection, 'SELECT * FROM `attraction` ORDER BY `id`');

        while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
          echo '
          <div class="col-lg-4">
            <div class="blog-item set-bg" data-setbg="img/attraction/' . $catalog_item["photo"] . '">
              <div class="bi-text">
                <h4><a>' . $catalog_item["name"] . '</a></h4>
                <div class="b-time">' . $catalog_item["description"] . '</div>
              </div>
            </div>
          </div>
          ';
        }
        ?>
          
        </div>
      </div>
    </section>