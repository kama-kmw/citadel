<div class="admin-page" id="faq">
   <h2 class="h2 mb20">Вопросы</h2>
   <form method="POST" action="/admin/modules/faq/add.php" class="admin-form mb20">

      <label class="admin-label mb10 min-w-300">
         <p class="admin-label__text">Вопрос</p>
         <input name="question" class="admin-input">
      </label>

      <label class="admin-label mb10">
         <p class="admin-label__text">Ответ</p>
         <textarea name="answer" class="admin-textarea"></textarea>
      </label>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20" id="product-list">Список вопросов</h3>
   <div class="max-h-600">
      <div class="aside__block relative">
         <span class="d-ib w-300 mr20">Вопрос</span>
         <span class="d-ib">Ответ</span>
      </div>

      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `faq` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="aside__block relative">
            <span class="span-id" style="display: none;">' . $catalog_item["id"] . '</span>
            <span class="span-question d-ib w-300 mr20">' . $catalog_item["question"] . '</span>
            <span class="span-answer d-ib">' . $catalog_item["answer"] . '</span>
            <div class="reform">
               <img class="edit-faq" src="/assets/img/icons/edit-icon.png">
               <img class="del-faq" src="/assets/img/icons/del-icon.png">
            </div>
         </div>';
      }

      ?>
   </div>
</div>


<?php
// include 'modules/product/del_product_popup.php';
include '../../modules/faq/popup_edit_faq.php';
?>
<script src="/admin/modules/faq/delete.js"></script>
<script src="/admin/modules/faq/edit.js"></script>