<div class="admin-page" id="attraction">
   <h2 class="h2 mb20">Достопримечательности</h2>
   <form method="POST" action="/admin/modules/attraction/add.php" class="admin-form mb20" enctype="multipart/form-data">
      <div class="flex mb10">
         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Название</p>
            <input name="name" class="admin-input">
         </label>

         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Описание</p>
            <input name="description" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Фото</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список достопримечательностей</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-200 mr20">Название</span>
         <span class="d-ib">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `attraction` ORDER BY `id`');

      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>

            <div><div class="span-title w-200 mr20">' . $catalog_item["name"] . '</div></div>
            <div><div class="span-member">' . $catalog_item["description"] . '</div></div>
            <div class="reform">
               <img class="edit-attraction" src="/img/icons/edit-icon.png">
               <img class="del-attraction" src="/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/attraction/popup_edit_attraction.php';
?>
<script src="/admin/modules/attraction/delete.js"></script>
<script src="/admin/modules/attraction/edit.js"></script>