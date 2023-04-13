<div class="popup-container" id="popup-edit-slide">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать категорию</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/slider/update.php" class="admin-form" enctype="multipart/form-data">

      <input type="text" id="id" name="id" style="display: none;">
      <div class="flex__jc-sb mb10">
         <label class="admin-label w-33">
            <p class="admin-label__text">Заголовок</p>
            <input type="text" name="title" id="title" class="admin-input">
         </label>

         <label class="admin-label w-33">
            <p class="admin-label__text">Текст на кнопке</p>
            <input name="btn-text" id="btn_text" class="admin-input">
         </label>

         <label class="admin-label w-33">
            <p class="admin-label__text">Фото (желат. 1920*1152)</p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred/>
            <input type="file" name="photo" class="admin-input-photo" requred>
         </label>
      </div>

      <label class="admin-label">
         <p class="admin-label__text">Описание</p>
         <textarea name="description" id="description" class="admin-textarea mb10"></textarea>
      </label>

      <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>