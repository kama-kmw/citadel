<!DOCTYPE html>
<html lang="ru">
<?php include_once 'includes/head.php'; ?>

<body>
  <!-- Page Preloder -->
  <!-- <div id="preloder">
      <div class="loader"></div>
    </div> -->

  <!-- Offcanvas Menu Section Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="canvas-open">
    <i class="icon_menu"></i>
  </div>
  <div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
      <i class="icon_close"></i>
    </div>
    <!-- <div class="search-icon search-switch">
        <i class="icon_search"></i>
      </div> -->
    <div class="header-configure-area">
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
      <a href="tel:89659287777" class="bk-btn">Позвонить</a>
    </div>
    <nav class="mainmenu mobile-menu">
      <ul>
        <li class="active"><a href="index.php">Главная</a></li>
        <li><a href="rooms-details.php">О нас</a></li>
        <li><a href="about.php">Номера</a>
          <ul class="dropdown">
            <li><a href="#">Deluxe Room</a></li>
            <li><a href="#">Family Room</a></li>
            <li><a href="#">Premium Room</a></li>
          </ul>
        </li>
        <li>
          <a href="contact.php">Контакты</a>
        </li>
      </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="top-social">
      <a href="#"><i class="fa fa-whatsapp"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
    <ul class="top-widget">
      <li><a href="tel:89659287777"><i class="fa fa-phone"></i> +7 (965) 928-77-77</a></li>
      <li><a href="tel:89285433344"><i class="fa fa-phone"></i> +7 (928) 543-33-44</a></li>
    </ul>
  </div>
  <!-- Offcanvas Menu Section End -->

  <!-- Header Section Begin -->
  <?php include 'includes/header.php'; ?>
  <!-- Header End -->

  <?php include 'includes/hero.php'; ?>

  <!-- Hero Section Begin -->
  <?php include 'includes/hp-room.php'; ?>
  <!-- Hero Section End -->
  <?php include 'includes/services.php'; ?>
  <!-- About Us Section Begin -->
  <?php include 'includes/testimonial.php'; ?>
  <!-- Blog Section Begin -->
  <?php include 'includes/blog.php'; ?>
  <!-- Blog Section End -->

  <!-- Footer Section Begin -->
  <?php include 'includes/footer.php'; ?>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here....." />
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>