<div class="admin-page" id="galery">
   <h2 class="h2 mb20">Галерея</h2>
   <form method="POST" action="/admin/modules/galery/add.php" class="admin-form mb20" enctype="multipart/form-data">

      <div class="flex">
         <label class="admin-label">
            <p class="admin-label__text">Фото<sup>*</sup></p>
            <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
            <input type="file" name="photo" class="admin-input-photo">
         </label>
      </div>

      <input type="submit" value="Добавить" class="admin-submit mt20">
   </form>

   <h3 class="h2 mb20" id="product-list">Список фото</h3>
   <div class="galery__section">
          
      <?php
      $catalog_list = mysqli_query($connection, 'SELECT * FROM `galery` ORDER BY `id` DESC');
      while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
         echo '
         <div class="galery__block" title="'.$catalog_item['tag'].'">
            <img src="/assets/img/gallery/'.$catalog_item['photo'].'" class="galery__img">
            <img class="del-icon del-gal-photo" src="/assets/img/icons/del-red-icon.png">
            <span class="gal-photo-id" style="display: none;">'.$catalog_item['id'].'</span>  
         </div>
         ';
      }
      ?>
   </div>
</div>
<script src="/admin/modules/galery/delete.js"></script>