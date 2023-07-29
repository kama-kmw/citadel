<?php
include '../../modules/social/get.php';
?>
<div class="admin-page" id="social">

    <h2 class="h2 mb20">Соц. ссылки</h2>

    <h4 class="mb10">Телефоны</h4>
    <div class="flex mb10">
        <label class="admin-label mr20 w-300">
            <input id="phone_inp" class="admin-input" placeholder="Номер" value="<?php echo $r1_social['phone'] ?>">
        </label>
        <label class="admin-label w-300">
            <input id="phone2_inp" class="admin-input" placeholder="Номер"  value="<?php echo $r1_social['phone2'] ?>">
        </label>
    </div>
    
    <div class="flex mb10">
        <label class="admin-label mr20 w-300">
        <h4 class="mb10">Ватсап</h4>
            <input id="wa_inp" class="admin-input" placeholder="Номер"  value="<?php echo $r1_social['wa'] ?>">
        </label>
        <label class="admin-label mr20 w-300">
        <h4 class="mb10">Инстаграм</h4>
            <input id="insta_inp" class="admin-input" placeholder="Ссылка" value="<?php echo $r1_social['insta'] ?>">
        </label>
    </div>

    <div class="flex mb10">
        <label class="admin-label mr20 w-300">
        <h4 class="mb10">E-mail</h4>
            <input id="mail_inp" class="admin-input" placeholder="E-mail"  value="<?php echo $r1_social['mail'] ?>">
        </label>
    </div>
    
    <div class="flex mb10">
        <label class="admin-label w-200">
            <span class="admin-submit" id="send_btn">Изменить</span>
        </label>
    </div>

</div>
<script src="/admin/modules/social/update.js"></script>