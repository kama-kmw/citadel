<div class="admin-page" id="about">
   <h2 class="h2 mb20">О компании</h2>
   <form method="POST" action="/admin/modules/about-page/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Название<sup>*</sup></p>
            <input required name="name" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Фото<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred />
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <label class="admin-label mb10">
         <p class="admin-label__text">Описание<sup>*</sup></p>
         <textarea name="description" class="admin-textarea" required></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit ">
   </form>

   <h3 class="h2 mb20" id="product-list">Список продукции</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="span-id">ID</span>
         <span class="d-ib w-200">Имя</span>
         <span class="">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `about-page` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id d-ib" >' . $catalog_item["id"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-desc d-ib">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-about" src="/assets/img/icons/edit-icon.png">
               <img class="del-about" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/about-page/popup_edit_about.php';
?>
<script src="/admin/modules/about-page/delete.js"></script>
<script src="/admin/modules/about-page/edit.js"></script>