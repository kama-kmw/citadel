<div class="admin-page" id="galery">
   <h2 class="h2 mb20">Теги</h2>
   <form method="POST" action="/admin/modules/tag/add.php" class="admin-form mb20">

      <div class="flex">
         <label class="admin-label mr20">
            <p class="admin-label__text">Название<sup>*</sup></p>
            <input required name="name" class="admin-input">
         </label>

         <input type="submit" value="Добавить" class="admin-submit mt20">
      </div>
   </form>

   <h3 class="h2 mb20" id="product-list">Список тегов</h3>
   <div class="tag__section">
      <?php
      $tag_list = mysqli_query($connection, 'SELECT * FROM `tag` ORDER BY `id`');
      while ($tag_item = mysqli_fetch_assoc($tag_list)) {

         echo '
            <a>
               <div class="tag__item">' . $tag_item["name"] . '
                  <span class="tag-id" style="display:none;">' . $tag_item["id"] . '</span>
                  <img class="del-tag del-icon" src="/assets/img/icons/del-red-icon.png">
               </div>
            </a>
         ';
      }
      ?>
   </div>
   
</div>
<script src="/admin/modules/tag/delete.js"></script>