<div class="popup-container" id="popup-edit-grid">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать плитку</h2>
         <img src="/assets/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/grid/update.php" class="admin-form">

         <input id="id" name="id" style="display: none;">
         <label class="admin-label mb10">
            <p class="admin-label__text">Количество</p>
            <input name="count" id="count" class="admin-input">
         </label>

         <label class="admin-label">
            <p class="admin-label__text">Описание</p>
            <input name="description" id="description" class="admin-input">
         </label>

         <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>