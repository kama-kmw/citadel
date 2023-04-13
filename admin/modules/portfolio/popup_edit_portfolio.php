<div class="popup-container" id="popup-edit-portfolio">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать категорию</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/portfolio/update.php" class="admin-form" enctype="multipart/form-data">

         <input id="id" name="id" style="display: none;">
         <div class="flex mb10">
            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Название<sup>*</sup></p>
               <input required name="name" class="admin-input" id="title">
            </label>

            <label class="admin-label">
               <p class="admin-label__text">Фото<sup>*</sup></p>
               <input type="hidden" name="MAX_FILE_SIZE" value="3000000" requred />
               <input type="file" name="photo" class="admin-input-photo" requred>
            </label>
         </div>

         <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>