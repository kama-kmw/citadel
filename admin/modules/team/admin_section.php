<div class="admin-page" id="team">
   <h2 class="h2 mb20">Команда</h2>
   <form method="POST" action="/admin/modules/team/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Имя<sup>*</sup></p>
            <input required name="name" class="admin-input">
         </label>

         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Должность<sup>*</sup></p>
            <input required name="status" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Фото<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred />
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список продукции</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="span-id">ID</span>
         <span class="d-ib w-200">Имя</span>
         <span class="">Должность</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `team` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" >' . $catalog_item["id"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-status">' . $catalog_item["status"] . '</span>
            <div class="reform">
               <img class="edit-team" src="/assets/img/icons/edit-icon.png">
               <img class="del-team" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }
      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/team/popup_edit_team.php';
?>
<script src="/admin/modules/team/delete.js"></script>
<script src="/admin/modules/team/edit.js"></script>