<div class="admin-page" id="video-instruction">
   <h2 class="h2 mb20">Видео инструкции</h2>
   <form method="POST" action="/admin/modules/video-instruction/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Название<sup>*</sup></p>
            <input type="text" required name="name" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Видео<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" requred/>
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание<sup>*</sup></p>
         <input type="text" required name="description" class="admin-input">
      </label>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20">Список видео</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="span-id">ID</span>
         <span class="d-ib w-200">Название</span>
         <span class="span-category">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `video-instruction` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" >' . $catalog_item["id"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-desc">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-video" src="/assets/img/icons/edit-icon.png">
               <img class="del-video" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/video-instruction/popup_edit_catalog.php';
?>
<script src="/admin/modules/video-instruction/delete.js"></script>
<script src="/admin/modules/video-instruction/edit.js"></script>