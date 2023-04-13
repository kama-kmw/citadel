<div class="popup-container" id="popup-edit-advantage">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать преимущесто</h2>
         <img src="/assets/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/advantage/update.php" class="admin-form">

         <input id="id" name="id" style="display: none;">
         <label class="admin-label mb10">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" id="title" class="admin-input">
         </label>

         <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>