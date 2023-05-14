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
      <div class="galery__section">
         <div class="galery__block">
            <img src="/img/slider/s-35907.jpeg" class="galery__img">
            <img class="del-icon" src="/img/icons/del-red-icon.png">
         </div>
      </div>
      <!-- <input type="submit" value="Добавить номер" class="admin-submit mt20"> -->
   </form>

</div>


<!-- <?php
// include 'modules/product/del_product_popup.php';
// include '../../modules/slider/popup_edit_slide.php';
?> -->
<script src="/admin/modules/rooms/add_photo.js"></script>
<!-- <script src="/admin/modules/slider/delete.js"></script>
<script src="/admin/modules/slider/edit.js"></script> -->