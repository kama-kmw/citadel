<div class="popup-container" id="popup-edit-feedback-moder">
   <div class="popup">
      <div class="jc-sb mb20">
         <h2 class="h2">Принять отзыв?</h2>
         <img src="/img/icons/close-icon.png" alt="" class="close-popup">
      </div>

      <form method="POST" action="/admin/modules/feedback/update_moder.php" class="admin-form">

         <input name="id" id="id" class="admin-input" style="display: none;">
         <div class="flex__jc-sb mb10">
            <label class="admin-label w-33">
               <p class="admin-label__text">Дата</p>
               <input id="date" required name="date" class="admin-input">
            </label>

            <label class="admin-label w-33">
               <p class="admin-label__text">Имя</p>
               <input id="title" type="text" required name="name" class="admin-input">
            </label>

            <label class="admin-label w-33">
               <p class="admin-label__text">Город</p>
               <input id="town" required name="town" class="admin-input">
            </label>
         </div>

         <label class="admin-label mb10">
            <p class="admin-label__text">Отзыв<sup>*</sup></p>
            <textarea name="feedback" id="feedback" class="admin-textarea" required></textarea>
         </label>
         <div class="">
            <input type="submit" value="Принять" class="admin-submit mt20">
            <input type="submit" value="Удалить" class="admin-submit_del js-feedback_moder_del">
         </div>
      </form>
   </div>
</div>