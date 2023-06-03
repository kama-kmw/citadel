<?php
include 'admin/connect.php';
include 'admin/modules/social/get.php';
$catalog_list = mysqli_query($connection, 'SELECT * FROM `room` ORDER BY `id`');
?>
<header class="header-section">
  <div class="top-nav">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <ul class="tn-left">
            <li><a href="tel:<?php echo $r1_social['phoneValide'] ?>"><i class="fa fa-phone"></i><?php echo $r1_social['phone']; ?></a></li>
            <li><a href="tel:<?php echo $r1_social['phone2Valide'] ?>"><i class="fa fa-phone"></i><?php echo $r1_social['phone2']; ?></a></li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="tn-right">
            <div class="top-social">
              <a href="<?php echo $r1_social['waValide']; ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
              <a href="<?php echo $r1_social['insta']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
            </div>
            <!-- <a href="#" class="bk-btn">Booking Now</a> -->
            <!-- <div class="language-option">
                  <img src="img/flag.jpg" alt="" />
                  <span>EN <i class="fa fa-angle-down"></i></span>
                  <div class="flag-dropdown">
                    <ul>
                      <li><a href="#">Zi</a></li>
                      <li><a href="#">Fr</a></li>
                    </ul>
                  </div>
                </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="menu-item">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="logo">
            <a href="/">
              <img src="img/logo.png" /> <span>Hotel-Citadel</span>
            </a>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="nav-menu">
            <nav class="mainmenu">
              <ul>
                <li class="active"><a href="/">Главная</a></li>
                <li><a href="/about.php">О нас</a></li>

                <li>
                  <a href="/rooms.php">Номера</a>
                  <ul class="dropdown">
                    <?php 
                    while ($catalog_item = mysqli_fetch_assoc($catalog_list)) {
                      echo '<li><a href="/room.php?id='.$catalog_item['id'].'">'.$catalog_item['title'].'</a></li>';
                    }
                    ?>
                    <!-- <li><a href="/room1.php">Стандарт+</a></li>
                    <li><a href="/room2.php">Джуниор дабл</a></li>
                    <li><a href="/room3.php">Джуниор твин</a></li>
                    <li><a href="/room4.php">Люкс</a></li> -->
                  </ul>
                </li>
                <!-- <li><a href="./blog.html">News</a></li> -->
                <li><a href="/contact.php">Контакты</a></li>
              </ul>
            </nav>
            <!-- <div class="nav-right search-switch">
                  <i class="icon_search"></i>
                </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</header>