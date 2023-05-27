<section class="hp-room-section mb100" id="rooms">
  <div class="container-fluid">
    <div class="hp-room-items">
      <div class="row">
        <?php
        $catalog_list = mysqli_query($connection, 'SELECT * FROM `room` ORDER BY `id`');
        while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
          $props = json_decode($catalog_item["props"]);
          echo '
          <div class="col-lg-3 col-md-6 mb-3">
            <div class="hp-room-item set-bg" data-setbg="/img/room/'.$catalog_item["photo"].'">
              <div class="hr-text">
                <h3>'.$catalog_item["title"].'</h3>
                <h2>'.$catalog_item["price"].'<span>/ночь</span></h2>
                <table>
                  <tbody>';
                  for($i=0; $i<count($props); $i++) {
                    
                    echo '<tr>
                      <td class="r-o">'.$props[$i]->prop.':</td>
                      <td>'.$props[$i]->desc.'</td>
                    </tr>';
                  }
                    echo '
                  </tbody>
                </table>
                <a href="/room.php?id='.$catalog_item["id"].'" class="primary-btn">Подробнее</a>
              </div>
            </div>
          </div>';
        }

        ?>
        <!-- <div class="col-lg-3 col-md-6">
          <div class="hp-room-item set-bg" data-setbg="/img/room/room-b1.jpg">
            <div class="hr-text">
              <h3>Люкс</h3>
              <h2>от 8 500₽<span>/ночь</span></h2>
              <table>
                <tbody>
                  <tr>
                    <td class="r-o">Площадь:</td>
                    <td>35-50 кв</td>
                  </tr>
                  <tr>
                    <td class="r-o">Вместимость:</td>
                    <td>до 6 чел.</td>
                  </tr>
                  <tr>
                    <td class="r-o">Номера:</td>
                    <td>6 номеров</td>
                  </tr>
                  <tr>
                    <td class="r-o">Включено:</td>
                    <td>Wifi, Кондер, Смарт ТВ, Холодильник, ...</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="primary-btn">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="hp-room-item set-bg" data-setbg="/img/room/room-b2.jpg">
            <div class="hr-text">
              <h3>Джуниор Твин</h3>
              <h2>от 7 500₽<span>/ночь</span></h2>
              <table>
                <tbody>
                  <tr>
                    <td class="r-o">Площадь:</td>
                    <td>30-33 кв</td>
                  </tr>
                  <tr>
                    <td class="r-o">Вместимость:</td>
                    <td>до 4 чел.</td>
                  </tr>
                  <tr>
                    <td class="r-o">Номера:</td>
                    <td>5 номеров</td>
                  </tr>
                  <tr>
                    <td class="r-o">Включено:</td>
                    <td>Wifi, Кондер, Смарт ТВ, Холодильник, ...</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="primary-btn">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="hp-room-item set-bg" data-setbg="/img/room/room-b3.jpg">
            <div class="hr-text">
              <h3>Джуниор Дабл</h3>
              <h2>от 7 500₽<span>/ночь</span></h2>
              <table>
                <tbody>
                  <tr>
                    <td class="r-o">Площадь:</td>
                    <td>30-33 кв</td>
                  </tr>
                  <tr>
                    <td class="r-o">Вместимость:</td>
                    <td>до 4 чел.</td>
                  </tr>
                  <tr>
                    <td class="r-o">Номера:</td>
                    <td>1 номер</td>
                  </tr>
                  <tr>
                    <td class="r-o">Включено:</td>
                    <td>Wifi, Кондер, Смарт ТВ, Холодильник, ...</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="primary-btn">Подробнее</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="hp-room-item set-bg" data-setbg="/img/room/room-b1.jpg">
            <div class="hr-text">
              <h3>Стандарт +</h3>
              <h2>от 7 500₽<span>/ночь</span></h2>
              <table>
                <tbody>
                  <tr>
                    <td class="r-o">Площадь:</td>
                    <td>24-26 кв</td>
                  </tr>
                  <tr>
                    <td class="r-o">Вместимость:</td>
                    <td>до 4 чел.</td>
                  </tr>
                  <tr>
                    <td class="r-o">Номера:</td>
                    <td>5 номеров</td>
                  </tr>
                  <tr>
                    <td class="r-o">Включено:</td>
                    <td>Wifi, Кондер, Смарт ТВ, Холодильник, ...</td>
                  </tr>
                </tbody>
              </table>
              <a href="#" class="primary-btn">Подробнее</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>