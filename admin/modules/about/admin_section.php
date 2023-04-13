<?php
include '../../modules/about/get.php';
?>
<div class="admin-page" id="about">
   <h2 class="h2 mb20">О нас</h2>
   <form method="POST" action="/admin/modules/about/update.php" class="admin-form mb20" enctype="multipart/form-data">

      <label class="admin-label mb10">
         <p class="admin-label__text">Заголовок</p>
         <input type="text" name="title" class="admin-input" value="<?php echo $title_about;?>">
      </label>

      <label class="admin-label mb10">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" class="admin-textarea" required><?php echo $desc_about;?></textarea>
      </label>

      <label class="admin-label">
         <p class="admin-label__text">Фото</p>
         <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
         <input type="file" name="photo" class="admin-input-photo">
      </label>

      <input type="submit" value="Обновить" class="admin-submit mt20">
   </form>
</div>