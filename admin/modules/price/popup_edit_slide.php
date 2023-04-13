<div class="popup-container" id="popup-edit-price">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать услугу</h2>
         <img src="/assets/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/price/update.php" class="admin-form">

      <input type="text" id="id" name="id" style="display: none;">
      <div class="flex__jc-sb mb10">
         <label class="admin-label w-48">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" id="title" class="admin-input">
         </label>

         <label class="admin-label w-48">
            <p class="admin-label__text">Цена</p>
            <input name="price" id="price" class="admin-input">
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