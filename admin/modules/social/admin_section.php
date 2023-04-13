<?php
include '../../modules/social/get.php';
?>
<div class="admin-page" id="password">

    <h2 class="h2 mb20">Соц. ссылки</h2>

    <form method="POST" action="/admin/modules/social/update.php" class="admin-form mb30">

        <label class="admin-label flex__jc-sb mb20">
            <div class="w-33">
                <p class="admin-label__text">Телефон<sup>*</sup></p>
                <input required name="tel" class="admin-input" value="<?php echo $r1_social['tel'] ?>" autocomplete="off">
            </div>
            <div class="w-33">
                <p class="admin-label__text">Ватсап<sup>*</sup></p>
                <input name="wa" class="admin-input" value="<?php echo $r1_social['wa'] ?>" autocomplete="off">
            </div>
            <div class="w-33">
                <p class="admin-label__text">E-mail<sup>*</sup></p>
                <input name="mail" class="admin-input" value="<?php echo $r1_social['mail'] ?>" autocomplete="off">
            </div>
        </label>

        <input type="submit" value="Сменить" class="admin-submit">
    </form>

</div> 
<?php 
include "modules/setting/exit_popup.php";
?>
<script src="/admin/modules/setting/exit_popup.js"></script>