<div class="popup-container" id="popup-edit-service">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать сервис</h2>
         <img src="/assets/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/service/update.php" class="admin-form">

         <input id="id" name="id" style="display: none;">
         <input id="icon_input" name="icon" style="display: none;">

         <label class="admin-label mb10">
            <p class="admin-label__text">Заголовок</p>
            <input name="title" class="admin-input">
         </label>

         <label class="admin-label mb10">
            <p class="admin-label__text">Иконка</p>
            <?php include '../../includes/icon_list.php' ?>
         </label>


         <label class="admin-label mb10">
            <p class="admin-label__text">Описание</p>
            <input name="description" class="admin-input">
         </label>

      <input type="submit" value="Добавить" class="admin-submit">
      </form>
   </div>
</div>