<div class="admin-page" id="slider">
   <h2 class="h2 mb20">Баннер</h2>
   <form method="POST" action="/admin/modules/slider/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="mb10">
         <label class="admin-label">
            <p class="admin-label__text">Заголовок</p>
            <input type="text" name="title" class="admin-input">
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea mb10"></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список слайдов</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-150 mr20">Фото</span>
         <span class="d-ib w-300 mr20">Заголовок</span>
         <span class="d-ib w-200">Текст на кнопке</span>
         
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `slider` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>
            <span class="span-desc" style="display: none;" >' . $catalog_item["description"] . '</span>

            <span class="span-photo w-150 mr20"><img src="/assets/img/slide/' . $catalog_item["photo"] . '"></span>
            <span class="span-title w-300 mr20">' . $catalog_item["title"] . '</span>
            <span class="span-btn-text w-200">' . $catalog_item["btn-text"] . '</span>
            <div class="reform">
               <img class="edit-slide" src="/assets/img/icons/edit-icon.png">
               <img class="del-slide" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/slider/popup_edit_slide.php';
?>
<script src="/admin/modules/slider/delete.js"></script>
<script src="/admin/modules/slider/edit.js"></script>