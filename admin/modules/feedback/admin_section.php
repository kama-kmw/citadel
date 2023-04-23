<div class="admin-page" id="feedback">
   <h2 class="h2 mb20">Отзывы</h2>

   <h3 class="h2 mb20" id="product-list">Отзывы на модерации</h3>
   <div class="max-h-600 mb20">
      <div class="aside__block relative">
         <span class="d-ib w-200">Дата</span>
         <span class="d-ib w-200">Имя</span>
         <span class="d-ib w-200">Город</span>
         <span class="">Отзыв</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `feedback` where moder = 0 ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;">' . $catalog_item["id"] . '</span>
            <span class="span-date d-ib w-200" >' . $catalog_item["date"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-town d-ib w-200">' . $catalog_item["town"] . '</span>
            <span class="span-feedback">' . $catalog_item["feedback"] . '</span>
            <span class="span-feedback" style="display: none;">' . $catalog_item["feedback"] . '</span>
            <div class="reform">
               <img class="edit-feedback-moder" src="/img/icons/edit-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
   <h3 class="h2 mb20" id="product-list">Список отзывов</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
      <span class="d-ib w-200">Дата</span>
         <span class="d-ib w-200">Имя</span>
         <span class="d-ib w-200">Город</span>
         <span class="">Отзыв</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `feedback` where moder = 1 ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;">' . $catalog_item["id"] . '</span>
            <span class="span-date d-ib w-200" >' . $catalog_item["date"] . '</span>
            <span class="span-name d-ib w-200">' . $catalog_item["name"] . '</span>
            <span class="span-town d-ib w-200">' . $catalog_item["town"] . '</span>
            <span class="span-feedback">' . $catalog_item["feedback"] . '</span>
            <span class="span-feedback" style="display: none;">' . $catalog_item["feedback"] . '</span>
            <div class="reform">
               <img class="edit-feedback" src="/img/icons/edit-icon.png">
               <img class="del-feedback" src="/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/feedback/popup_edit_feedback.php';
include '../../modules/feedback/popup_edit_feedback_moder.php';
?>
<script src="/admin/modules/feedback/delete.js"></script>
<script src="/admin/modules/feedback/edit.js"></script>
<script src="/admin/modules/feedback/edit_moder.js"></script>