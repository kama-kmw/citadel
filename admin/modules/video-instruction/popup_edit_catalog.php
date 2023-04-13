<div class="popup-container" id="popup-edit-video">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать видео инструкцию</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/video-instruction/update.php" class="admin-form" enctype="multipart/form-data">

      <input type="text" id="id" name="id" style="display: none;">
      <div class="flex mb10">
         <label class="admin-label mr20 min-w-300">
            <p class="admin-label__text">Название<sup>*</sup></p>
            <input type="text" required name="name" class="admin-input" id="title">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Видео<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="30000000" requred/>
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание<sup>*</sup></p>
         <input type="text" required name="description" class="admin-input" id="description">
      </label>

      <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>