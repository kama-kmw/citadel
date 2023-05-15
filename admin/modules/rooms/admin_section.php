<div class="admin-page" id="rooms">
   <h2 class="h2 mb20">Добавить номер</h2>
   <form method="POST" action="/admin/modules/rooms/add.php" class="admin-form mb20">

      <div class="flex mb10">
         <label class="admin-label mr20 w-200">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" class="admin-input" value="">
         </label>
         <label class="admin-label w-200 mr20">
            <p class="admin-label__text">Цена</p>
            <input name="price" class="admin-input" value="">
         </label>
         <label class="admin-label">
            <p class="admin-label__text">Фото на главной</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
         </label>
      </div>

      <label class="admin-label mb20">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea mb10"></textarea>
      </label>

      <h4 class="mb10">Слайдер</h4>
      <div class="flex">
         <input type="file" name="photo" class="d-none" id="input_photo">
         <span class="admin-submit mb10" id="btn_add_photo">Добавить фото</span>
      </div>
      <div class="galery__section mb20">
         <!-- <div class="galery__block">
            <img src="/img/slider/s-35907.jpeg" class="galery__img">
            <img class="del-icon" src="/img/icons/del-red-icon.png">
         </div> -->
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
      <div class="property__section">
         <!-- <div class="flex property__item">
            <div class="admin-label mr20 w-200">sdfd</div>
            <div class="admin-label mr20 w-200">sdfsd</div>
            <div class="admin-label t-red">Удалить</div>
         </div> -->
      </div>
      <!-- <input type="submit" value="Добавить номер" class="admin-submit mt20"> -->
   </form>

</div>


<?php
// include 'modules/product/del_product_popup.php';
// include '../../modules/slider/popup_edit_slide.php';
?>
<script src="/admin/modules/rooms/add_photo.js"></script>
<script src="/admin/modules/rooms/del_photo.js"></script>
<script src="/admin/modules/rooms/add_props.js"></script>
<script src="/admin/modules/rooms/del_props.js"></script>
<!-- <script src="/admin/modules/slider/edit.js"></script> -->