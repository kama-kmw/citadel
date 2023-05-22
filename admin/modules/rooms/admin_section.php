<div class="admin-page" id="rooms">
   <h2 class="h2 mb20">Добавить номер</h2>
   <form method="POST" action="/admin/modules/rooms/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex mb10">
         <label class="admin-label mr20 w-200">
            <p class="admin-label__text">Заголовок</p>
            <input id="title" name="title" class="admin-input" value="">
         </label>
         <label class="admin-label w-200 mr20">
            <p class="admin-label__text">Цена</p>
            <input id="price" name="price" class="admin-input" value="">
         </label>
         <label class="admin-label">
            <p class="admin-label__text">Фото на главной</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" id="photo" name="photo" class="admin-input-photo">
         </label>
      </div>

      <label class="admin-label mb20">
         <p class="admin-label__text">Описание</p>
         <textarea id="description" name="description" class="admin-textarea mb10"></textarea>
      </label>

      <h4 class="mb10">Слайдер</h4>
      <div class="flex">
         <input type="file" name="photo" class="d-none" id="input_photo">
         <span class="admin-submit mb10" id="btn_add_photo">Добавить фото</span>
      </div>
      <div class="galery__section mb20">
         <div class="galery__block">
            <img src="/img/slider/s-35907.jpeg" class="galery__img" name="img">
            <img class="del-icon" src="/img/icons/del-red-icon.png">
         </div>
      </div>

      <h4 class="mb10">Характеристики номера</h4>
      <div class="flex mb10">
         <label class="admin-label mr20 w-200">
            <input id="prop_inp" name="" class="admin-input" value="" placeholder="Свойство">
         </label>
         <label class="admin-label w-200 mr20">
            <input id="desc_inp" name="" class="admin-input" value="" placeholder="Значение">
         </label>
         <label class="admin-label w-200">
            <span class="admin-submit" id="prop_btn">Добавить</span>
         </label>
      </div>
      <div class="property__section" id="property__section">
         <!-- <div class="flex property__item">
            <div class="admin-label mr20 w-200" id="prop">sdfd</div>
            <div class="admin-label mr20 w-200" id="desc">sdfsd</div>
            <div class="admin-label t-red">Удалить</div>
         </div> -->
      </div>
      <input type="submit" value="Добавить номер" class="admin-submit mt20" id="send_data">
   </form>

   <form method="POST" action="/admin/modules/rooms/add_new_room.php" class="admin-form mb20" enctype="multipart/form-data">
      <div class="flex">
         <input type="file" name="photo[]" class="mr20" id="input_photo" multiple>
         <input type="submit" value="Добавить номер" class="admin-submit">
      </div>
   </form>


   <h2 class="h2 mb20" id="product-list">Список номеров</h2>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-150 mr20">Номер</span>
         <span class="d-ib w-80 mr20">Цена</span>
         <span class="d-ib">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `room` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative fa-icon">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>
            <div class="span-props" style="display: none;">' . $catalog_item["props"] . '</div>

            <div class="span-title w-150 mr20">' . $catalog_item["title"] . '</div>
            <div class="span-price w-80 mr20">' . $catalog_item["price"] . '</div>
            <span class="span-desc">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-icon" src="/img/icons/edit-icon.png">
               <img class="del-service" src="/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>

</div>


<?php
include '../../modules/rooms/popup_edit.php';
?>
<script src="/admin/modules/rooms/add_photo.js"></script>
<script src="/admin/modules/rooms/del_photo.js"></script>
<script src="/admin/modules/rooms/add_props.js"></script>
<script src="/admin/modules/rooms/del_props.js"></script>
<script src="/admin/modules/rooms/send.js"></script>
<script src="/admin/modules/rooms/del_room.js"></script>
<script src="/admin/modules/rooms/edit_room.js"></script>