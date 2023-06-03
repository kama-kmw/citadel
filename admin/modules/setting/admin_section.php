<div class="admin-page" id="password">

    <h2 class="h2 mb20">Сменить пароль</h2>

    <form action="" class="admin-form mb30">
        <div class="w-300 mb10">
            <label>
                <input required id="password_current" class="admin-input" autocomplete="off" placeholder="Старый пароль">
            </label>
        </div>
        <div class="w-300 mb10">
            <label>
                <input required id="password_new" class="admin-input" autocomplete="off" placeholder="Новый пароль">
            </label>
        </div>
        <div class="w-300 mb10">
            <label>
                <input required id="password_new_2" class="admin-input" autocomplete="off" placeholder="Повторить новый пароль">
            </label>
        </div>

        <input type="submit" value="Сохранить" id="password_submit" class="admin-submit mb10">
        <div id="notify" class="t-red"></div>
    </form>

</div>
<?php
// include "modules/setting/exit_popup.php";
?>
<script src="/admin/modules/setting/change_password.js"></script>