<div class="admin-page" id="feedback">
   <h2 class="h2 mb20">Отзывы</h2>
   <form method="POST" action="/admin/modules/feedback/add.php" class="admin-form mb20">

      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Имя<sup>*</sup></p>
            <input type="text" required name="name" class="admin-input">
         </label>

         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Ссылка<sup>*</sup></p>
            <input type="text" required name="link" class="admin-input">
         </label>

         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Название социальной сети<sup>*</sup></p>
            <input type="text" id="network" required name="network" class="admin-input">
         </label>

      </div>

      <label class="admin-label mb10">
         <p class="admin-label__text">Отзыв<sup>*</sup></p>
         <textarea name="feedback" class="admin-textarea" required></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20" id="product-list">Список отзывов</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="span-id">ID</span>
         <span class="d-ib w-200">Имя</span>
         <span class="d-ib w-200">Соц. сеть</span>
         <span class="">Отзыв</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `feedback` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" >' . $catalog_item["id"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-network d-ib w-200"> ' . $catalog_item["network"] . '</span>
            <span class="span-feedback">' . $catalog_item["feedback"] . '</span>
            <span class="span-link" style="display: none;">' . $catalog_item["link"] . '</span>
            <div class="reform">
               <img class="edit-feedback" src="/assets/img/icons/edit-icon.png">
               <img class="del-feedback" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/feedback/popup_edit_feedback.php';
?>
<script src="/admin/modules/feedback/delete.js"></script>
<script src="/admin/modules/feedback/edit.js"></script>