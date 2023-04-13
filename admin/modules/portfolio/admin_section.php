<div class="admin-page" id="portfolio">
   <h2 class="h2 mb20">Портфолио</h2>
   <form method="POST" action="/admin/modules/portfolio/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Название<sup>*</sup></p>
            <input type="text" required name="name" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Фото<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred />
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20" id="product-list">Список портфолио</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="span-id">ID</span>
         <span class="d-ib">Имя</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `portfolio` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" >' . $catalog_item["id"] . '</span>
            <span class="span-name d-ib">' . $catalog_item["name"] . '</span>
            <div class="reform">
               <img class="edit-portfolio" src="/assets/img/icons/edit-icon.png">
               <img class="del-portfolio" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/portfolio/popup_edit_portfolio.php';
?>
<script src="/admin/modules/portfolio/delete.js"></script>
<script src="/admin/modules/portfolio/edit.js"></script>