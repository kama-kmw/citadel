<div class="admin-page" id="grid">
   <h2 class="h2 mb20">Плитки</h2>
   <form method="POST" action="/admin/modules/grid/add.php" class="admin-form mb20">

      <div class="flex mb10">
         <input id="icon_input" name="icon" style="display: none;">

         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Количество</p>
            <input type="text" name="count" class="admin-input">
         </label>
         
         <label class="admin-label">
            <p class="admin-label__text">Иконка</p>
            <?php include '../../includes/icon_list.php' ?>
         </label>
      </div>

      <label class="admin-label mb10">
         <p class="admin-label__text">Описание</p>
         <input type="text" name="description" class="admin-input">
      </label>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список плиток</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-150 mr20">Количество</span>
         <span class="d-ib w-100 mr20">Иконка</span>
         <span class="d-ib">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `grid` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative fa-icon">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>

            <div><div class="span-title w-150 mr20">' . $catalog_item["count"] . '</div></div>
            <div><div class="span-icon w-100 mr20"><i class="' . $catalog_item["icon"] . '"></i></div></div>
            <span class="span-desc">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-grid" src="/assets/img/icons/edit-icon.png">
               <img class="del-grid" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/grid/popup_edit_grid.php';
?>
<script src="/admin/modules/grid/change_icon.js"></script>
<script src="/admin/modules/grid/delete.js"></script>
<script src="/admin/modules/grid/edit.js"></script>