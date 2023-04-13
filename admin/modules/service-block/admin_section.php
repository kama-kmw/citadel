<div class="admin-page" id="service-block">
   <h2 class="h2 mb20">Блок с услугами</h2>
   <form method="POST" action="/admin/modules/service-block/add.php" class="admin-form mb20">

      <div class="flex mb10">
         <input id="icon_input" name="icon" style="display: none;">

         <label class="admin-label w-33 mr20">
            <p class="admin-label__text">Заголовок</p>
            <input type="text" name="title" class="admin-input">
         </label>
         
         <label class="admin-label">
            <p class="admin-label__text">Иконка</p>
            <?php include '../../includes/icon_list.php' ?>
            <!-- <div class="fa-icon">
               <i class="fas fa-heart"></i>
               <i class="fas fa-flask"></i>
               <i class="fas fa-notes-medical"></i>
               <i class="fas fa-tablets"></i>
               <i class="fas fa-tooth"></i>
               <i class="fas fa-syringe"></i>
               <i class="fas fa-suitcase-medical"></i>
               <i class="fas fa-staff-snake"></i>
               <i class="fas fa-heart-pulse"></i>
               <i class="fas fa-heart-circle-xmark"></i>
               <i class="fas fa-heart-circle-plus"></i>
               <i class="fas fa-heart-circle-minus"></i>
               <i class="fas fa-heart-circle-exclamation"></i>
               <i class="fas fa-heart-circle-check"></i>
               <i class="fas fa-heart-circle-bolt"></i>
               <i class="fas fa-eye-dropper"></i>
               <i class="fas fa-dna"></i>
               <i class="fas fa-disease"></i>
               <i class="fas fa-capsules"></i>
               <i class="fas fa-user-md"></i>
               <i class="far fa-hospital"></i>
               <i class="fas fa-award"></i>
               <i class="fas fa-house"></i>
               <i class="fas fa-user"></i>
               <i class="fas fa-phone"></i>
               <i class="fas fa-bars"></i>
               <i class="fas fa-envelope"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-location-dot"></i>
               <i class="fas fa-arrow-right"></i>
               <i class="fas fa-circle-xmark"></i>
               <i class="fas fa-camera-retro"></i>
               <i class="fas fa-cloud"></i>
               <i class="fas fa-comment"></i>
               <i class="fas fa-truck-fast"></i>
               <i class="fas fa-pen-nib"></i>
               <i class="fas fa-arrow-up"></i>
               <i class="fas fa-calendar-days"></i>
               <i class="fas fa-paperclip"></i>
               <i class="fas fa-shield-halved"></i>
               <i class="fas fa-file"></i>
               <i class="fas fa-bell"></i>
               <i class="fas fa-cart-shopping"></i>
               <i class="fas fa-clipboard"></i>
               <i class="fas fa-circle-info"></i>
               <i class="fas fa-alarm-clock"></i>
               <i class="fas fa-bolt"></i>
               <i class="fas fa-car"></i>
               <i class="fas fa-mug-hot"></i>
               <i class="fas fa-rocket-launch"></i>
            </div> -->
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea mb10"></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список услуг</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-150 mr20">Заголовок</span>
         <span class="d-ib w-100 mr20">Иконка</span>
         <span class="d-ib">Описание</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `service_block` ORDER BY `id`');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative fa-icon">
            <span class="span-id" style="display: none;" >' . $catalog_item["id"] . '</span>

            <div><div class="span-title w-150 mr20">' . $catalog_item["title"] . '</div></div>
            <div><div class="span-icon w-100 mr20"><i class="' . $catalog_item["icon"] . '"></i></div></div>
            <span class="span-desc">' . $catalog_item["description"] . '</span>
            <div class="reform">
               <img class="edit-service-block" src="/assets/img/icons/edit-icon.png">
               <img class="del-service-block" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/service-block/popup_edit_service-block.php';
?>
<script src="/admin/modules/service-block/change_icon.js"></script>
<script src="/admin/modules/service-block/delete.js"></script>
<script src="/admin/modules/service-block/edit.js"></script>