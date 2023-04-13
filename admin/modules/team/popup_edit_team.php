<div class="popup-container" id="popup-edit-team">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать категорию</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/team/update.php" class="admin-form" enctype="multipart/form-data">

         <input type="text" id="id" name="id" style="display: none;">
         <div class="flex mb10">
            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Имя<sup>*</sup></p>
               <input id="title" required name="name" class="admin-input">
            </label>

            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Должность<sup>*</sup></p>
               <input id="status" required name="status" class="admin-input">
            </label>

            <label class="admin-label">
               <p class="admin-label__text">Фото<sup>*</sup></p>
               <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred />
               <input type="file" name="photo" class="admin-input-photo" requred>
            </label>
         </div>

         <input type="submit" value="Добавить" class="admin-submit">
      </form>
   </div>
</div>