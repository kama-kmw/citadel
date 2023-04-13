<div class="popup-container" id="popup-edit-faq">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Редактировать вопрос</h2>
         <img src="/assets/img/icons/close-icon.png" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/faq/update.php" class="admin-form">

         <input name="id" id="id" class="admin-input" style="display: none;">

         <label class="admin-label mb10 min-w-300">
            <p class="admin-label__text">Вопрос<sup>*</sup></p>
            <input id="question" required name="question" class="admin-input">
         </label>

         <label class="admin-label mb10">
            <p class="admin-label__text">Отзыв<sup>*</sup></p>
            <textarea name="answer" id="answer" class="admin-textarea" required></textarea>
         </label>

         <input type="submit" value="Обновить" class="admin-submit mt20">
      </form>
   </div>
</div>