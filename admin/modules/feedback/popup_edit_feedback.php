<div class="popup-container" id="popup-edit-feedback">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать категорию</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/feedback/update.php" class="admin-form">
      
         <input name="id" id="id" class="admin-input" style="display: none;">
         <div class="flex mb10">
            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Имя<sup>*</sup></p>
               <input id="title" type="text" required name="name" class="admin-input">
            </label>

            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Ссылка<sup>*</sup></p>
               <input type="text" id="link" required name="link" class="admin-input">
            </label>

            <label class="admin-label mr20 min-w-300">
               <p class="admin-label__text">Название социальной сети<sup>*</sup></p>
               <input type="text" id="network" required name="network" class="admin-input">
            </label>

         </div>

         <label class="admin-label mb10">
            <p class="admin-label__text">Отзыв<sup>*</sup></p>
            <textarea name="feedback" id="feedback" class="admin-textarea" required></textarea>
         </label>

         <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>