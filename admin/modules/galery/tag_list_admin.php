<?php 
    $tag_list = mysqli_query($connection, 'SELECT * FROM `tag` ORDER BY `id`');
    while ( $tag_item = mysqli_fetch_assoc($tag_list) ) {
        echo '<option>'.$tag_item["name"].'</option>';  
    }
?>