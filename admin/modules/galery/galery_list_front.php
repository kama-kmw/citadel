<?php
// переменная $tag создается выше в секции с тегами в файле admin/modules/galerytag_list_front.php
// поэтому нет нужды ее создавать еще раз

?>

<div class="selection">
    <div class="selection__section">
        <?php
        $galery_list = mysqli_query($connection, 'SELECT * FROM `galery` ORDER BY `id`');
        while ($galery_item = mysqli_fetch_assoc($galery_list)) {
            if($tag == 'Все' || $tag == $galery_item["tag"]) {
                echo '
                    <div class="selection__block">
                        <img src="/assets/img/galery/' . $galery_item["photo"] . '" class="selection__block-img">
                    </div>
                ';
            } 
        }
        ?>
    </div>
</div>