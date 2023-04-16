<?php
include '../../modules/slider/get.php';
?>
<div class="admin-page" id="slider">
   <h2 class="h2 mb20">Баннер</h2>
   <form method="POST" action="/admin/modules/slider/add.php" class="admin-form mb20">

      <div class="mb10">
         <label class="admin-label">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" class="admin-input" value="<?php echo $banner['title'] ?>">
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea mb10"><?php echo $banner['description'] ?></textarea>
      </label>

      <input type="submit" value="Изменить" class="admin-submit">
   </form>

   <h3 class="h2 mb20" id="product-list">Список слайдов</h3>
   <form method="POST" action="/admin/modules/slider/add_photo.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex">
         <label class="admin-label">
            <p class="admin-label__text">Фото<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>
   <div class="galery__section slider__section">
          
      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `slider` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="galery__block">
            <img src="/img/slider/'.$catalog_item['photo'].'" class="galery__img">
            <img class="del-icon" src="/img/icons/del-red-icon.png">
            <span class="gal-photo-id" style="display: none;">'.$catalog_item['id'].'</span>  
         </div>
         ';
      }
      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/slider/popup_edit_slide.php';
?>
<script src="/admin/modules/slider/delete.js"></script>
<script src="/admin/modules/slider/edit.js"></script>