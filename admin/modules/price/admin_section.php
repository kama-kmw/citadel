<div class="admin-page" id="price">
   <h2 class="h2 mb20">Новая услуга</h2>
   <form method="POST" action="/admin/modules/price/add.php" class="admin-form mb20">

      <div class="flex__jc-sb mb10">
         <label class="admin-label w-48">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" class="admin-input">
         </label>

         <label class="admin-label w-48">
            <p class="admin-label__text">Цена</p>
            <input name="price" class="admin-input">
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea mb10"></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="price-list">Список услуг</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-300 mr20">Заголовок</span>
         <span class="d-ib w-200">Цена</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `price` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>
            <span class="span-desc" style="display: none;" >' . $catalog_item["description"] . '</span>

            <span class="span-title w-300 mr20">' . $catalog_item["title"] . '</span>
            <span class="span-price w-200">' . $catalog_item["price"] . '</span>
            <div class="reform">
               <img class="edit-price" src="/assets/img/icons/edit-icon.png">
               <img class="del-price" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
include '../../modules/price/popup_edit_slide.php';
?>
<script src="/admin/modules/price/delete.js"></script>
<script src="/admin/modules/price/edit.js"></script>