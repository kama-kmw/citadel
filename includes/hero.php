<?php
include 'admin/modules/slider/get.php';
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';
$banner_desc = str_replace($order, $replace, $banner['description']);
?>

<section class="hero-section mb100">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="hero-text">
          <h1><?php echo $banner['title'] ?></h1>
          <p><?php echo $banner_desc ?></p>
          <!-- <a href="#" class="primary-btn">подробнее</a> -->
        </div>
      </div>
      <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
        <!--
        <div class="booking-form">
          <h3>Бронирование номеров</h3>
          <form action="#">
            <div class="check-date">
              <label for="date-in">Заезд:</label>
              <input type="text" class="date-input" id="date-in" />
              <i class="icon_calendar"></i>
            </div>
            <div class="check-date">
              <label for="date-out">Выезд:</label>
              <input type="text" class="date-input" id="date-out" />
              <i class="icon_calendar"></i>
            </div> -->
            <!-- <div class="select-option">
                  <label for="guest">Guests:</label>
                  <select id="guest">
                    <option value="">2 Adults</option>
                    <option value="">3 Adults</option>
                  </select>
                </div> -->
        <!--
            <div class="select-option">
              <label for="room">Номера:</label>
              <select id="room">
                <option value="">Номера</option>
                <option value="">Стандарт +</option>
                <option value="">Джуниор Дабл</option>
                <option value="">Джуниор Твин</option>
                <option value="">Люкс</option>
              </select>
            </div>
            <button type="submit">Найти номер</button>
          </form>
        </div> -->
        <div id="block-search-main">
          <div id="tl-search-form" class="tl-container">
            <noindex><a href="https://www.travelline.ru/products/tl-hotel/" rel="nofollow" target="_blank">TravelLine</a></noindex>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-slider owl-carousel">
    <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `slider` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="hs-item set-bg" data-setbg="img/slider/'.$catalog_item['photo'].'"></div>
         ';
      }
      ?>
  </div>
</section>