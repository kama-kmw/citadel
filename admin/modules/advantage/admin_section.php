<div class="admin-page" id="advantage">
   <h2 class="h2 mb20">Преимущества</h2>
   <form method="POST" action="/admin/modules/advantage/add.php" class="admin-form mb20">

      <div class="flex mb10">
         <input id="icon_input" name="icon" style="display: none;">

         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Иконка</p>
            <?php include '../../includes/icon_list.php' ?>
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <form method="POST" action="/admin/modules/advantage/update_photo.php" class="admin-form mb20" enctype="multipart/form-data">

      <label class="admin-label">
         <p class="admin-label__text">Фото раздела</p>
         <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
         <input type="file" name="photo" class="admin-input-photo">
      </label>

      <input type="submit" value="Обновить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20" id="product-list">Список преимуществ</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-100 mr20">Иконка</span>
         <span class="d-ib">Заголовок</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `advantage` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative fa-icon">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>
            <div><div class="span-icon w-100 mr20"><i class="' . $catalog_item["icon"] . '"></i></div></div>
            <div><div class="span-title w-150 mr20">' . $catalog_item["title"] . '</div></div>
            
            <div class="reform">
               <img class="edit-advantage" src="/assets/img/icons/edit-icon.png">
               <img class="del-advantage" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/advantage/popup_edit_advantage.php';
?>
<script src="/admin/modules/advantage/change_icon.js"></script>
<script src="/admin/modules/advantage/delete.js"></script>
<script src="/admin/modules/advantage/edit.js"></script>