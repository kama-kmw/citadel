<div class="popup-container" id="popup-edit-attraction">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать достопримечательность</h2>
         <img src="/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/attraction/update.php" class="admin-form mb20" enctype="multipart/form-data">
         <input id="id" name="id" style="display: none;">
         <div class="flex mb10">
            <label class="admin-label w-33 mr20">
               <p class="admin-label__text">Название</p>
               <input name="name" id="name" class="admin-input">
            </label>

            <label class="admin-label w-33 mr20">
               <p class="admin-label__text">Описание</p>
               <input name="description" id="description" class="admin-input">
            </label>

            <label class="admin-label">
               <p class="admin-label__text">Фото</p>
               <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
               <input type="file" name="photo" class="admin-input-photo">
            </label>
         </div>

         <input type="submit" value="Обновить" class="admin-submit">
      </form>
   </div>
</div>