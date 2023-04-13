<div class="popup-container" id="popup-edit-doctor">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать специализацию</h2>
         <img src="/assets/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/doctor/update.php" class="admin-form mb20" enctype="multipart/form-data">
         <input id="id" name="id" style="display: none;">
         <div class="flex mb10">
            <label class="admin-label w-33 mr20">
               <p class="admin-label__text">Заголовок</p>
               <input name="name" id="name" class="admin-input">
            </label>

            <label class="admin-label w-33 mr20">
               <p class="admin-label__text">Подзаголовок</p>
               <input name="member" id="member" class="admin-input">
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