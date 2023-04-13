<?php
$tag = $_GET['tag'];
if(!$tag) $tag = 'Все';
?>
<div class="tag__section">
    <a <?php if($tag != 'Все') echo 'href="galery.php?tag=Все"';?>><div class="tag__item <?php if($tag == 'Все') echo 'active';?>">Все</div></a>
    <?php
    $tag_list = mysqli_query($connection, 'SELECT * FROM `tag` ORDER BY `id`');
    while ($tag_item = mysqli_fetch_assoc($tag_list)) {
        $href = 'href="galery.php?tag='.$tag_item["name"].'"';
        $active = '';
        if($tag == $tag_item["name"]) {
            $href = '';
            $active = 'active';
        }

        echo '
            <a '.$href.'><div class="tag__item '.$active.'">'.$tag_item["name"].'</div></a>
        ';
    }
    ?>
</div>