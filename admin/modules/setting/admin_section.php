<div class="admin-page" id="password">

    <h2 class="h2 mb20">Сменить пароль</h2>

    <form method="POST" action="/admin/modules/setting/password_update.php" class="admin-form mb30" enctype="multipart/form-data">

        <label class="admin-label flex__jc-sb mb20">
            <div class="w-33">
                <p class="admin-label__text">Текущий пароль<sup>*</sup></p>
                <input type="password" required name="password_current" class="admin-input" autocomplete="off">
            </div>
            <div class="w-33">
                <p class="admin-label__text">Новый пароль<sup>*</sup></p>
                <input type="password" required name="password_new" class="admin-input" autocomplete="off">
            </div>
            <div class="w-33">
                <p class="admin-label__text">Повторите новый пароль<sup>*</sup></p>
                <input type="password" required name="password_new_2" class="admin-input" autocomplete="off">
            </div>
        </label>

        <input type="submit" value="Сменить" class="admin-submit">
    </form>

</div> 
<?php 
include "modules/setting/exit_popup.php";
?>
<script src="/admin/modules/setting/exit_popup.js"></script>