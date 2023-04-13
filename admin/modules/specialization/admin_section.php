<div class="admin-page" id="specialization">
   <h2 class="h2 mb20">Специализация</h2>
   <form method="POST" action="/admin/modules/specialization/add.php" class="admin-form mb20" enctype="multipart/form-data">
      <div class="flex mb10">
         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Заголовок</p>
            <input type="text" name="title" class="admin-input">
         </label>

         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Подзаголовок</p>
            <input type="text" name="subtitle" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Фото</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
         </label>
      </div>

      <label class="admin-label mb10">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea"></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список специализаий</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-150 mr20">Заголовок</span>
         <span class="d-ib w-200 mr20">Подзаголовок</span>
         <span class="d-ib ">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `specialization` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative fa-icon">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>

            <div><div class="span-title w-150 mr20">' . $catalog_item["title"] . '</div></div>
            <div><div class="span-subtitle w-200 mr20">' . $catalog_item["subtitle"] . '</div></div>
            <span class="span-desc">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-specialization" src="/assets/img/icons/edit-icon.png">
               <img class="del-specialization" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/specialization/popup_edit_specialization.php';
?>
<script src="/admin/modules/specialization/change_icon.js"></script>
<script src="/admin/modules/specialization/delete.js"></script>
<script src="/admin/modules/specialization/edit.js"></script>