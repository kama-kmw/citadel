<!DOCTYPE html>
<html lang="ru">
<?php
include 'admin/connect.php';

$id = $_GET['id'];
$catalog_list = mysqli_query($connection, "SELECT * FROM `room` where id = $id ");
$catalog_item = mysqli_fetch_assoc($catalog_list);
$head_title = 'Отель Цитадель. Номер ' . $catalog_item['title'];
$page_title = $catalog_item['title'];
$price = $catalog_item['price'];
$desc = $catalog_item['description'];
$order   = array("\r\n", "\n", "\r");
$replace = '</p><p>';
$desc = str_replace($order, $replace, $desc);
$props = json_decode($catalog_item["props"]);

$slider = $catalog_item['slider'];



include_once 'includes/head.php';
?>

<body>

  <!-- Nav -->
  <?php include 'includes/nav.php'; ?>

  <!-- Header -->
  <?php include 'includes/header.php'; ?>

  <!-- Breadcrumb Section Begin -->
  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <h2><?php echo $page_title; ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Room Details Section Begin -->
  <section class="room-details-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="room-details-item">

            <!-- <img src="img/room/room-details.jpg" alt=""> -->
            <div class="hero-slider owl-carousel hero-slider-rooms mb30" id="<?php echo $slider; ?>">
              <!-- <div class="hs-item set-bg" data-setbg="img/room/Стандарт01.JPG"></div>
              <div class="hs-item set-bg" data-setbg="img/room/Стандарт02.JPG"></div>
              <div class="hs-item set-bg" data-setbg="img/room/Стандарт03.JPG"></div>
              <div class="hs-item set-bg" data-setbg="img/room/Стандарт04.JPG"></div> -->
            </div>
            <div class="rd-text">
              <div class="rd-title">
                <h3><?php echo $page_title; ?></h3>
                <div class="rdt-right">
                  <!-- <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div> -->
                  <a href="#">Позвонить</a>
                </div>
              </div>
              <h2><?php echo $price; ?><span>/ночь</span></h2>
              <table>
                <tbody>
                  <?php
                  for ($i = 0; $i < count($props); $i++) {
                    echo '
                    <tr>
                      <td class="r-o">' . $props[$i]->prop . ':</td>
                      <td>' . $props[$i]->desc . '</td>
                    </tr>';
                  }
                  ?>
                </tbody>
              </table>
              <p class="f-para"><?php echo $desc; ?></p>
            </div>
          </div>
          <!-- <div class="rd-reviews">
                        <h4>Reviews</h4>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-1.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                        <div class="review-item">
                            <div class="ri-pic">
                                <img src="img/room/avatar/avatar-2.jpg" alt="">
                            </div>
                            <div class="ri-text">
                                <span>27 Aug 2019</span>
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <h5>Brandon Kelley</h5>
                                <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                    magnam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="review-add">
                        <h4>Add Review</h4>
                        <form action="#" class="ra-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Name*">
                                </div>
                                <div class="col-lg-6">
                                    <input type="text" placeholder="Email*">
                                </div>
                                <div class="col-lg-12">
                                    <div>
                                        <h5>You Rating:</h5>
                                        <div class="rating">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                    </div>
                                    <textarea placeholder="Your Review"></textarea>
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </form>
                    </div> -->
        </div>
        <div class="col-lg-4">
          <div class="room-booking">
            <h3>Заполните</h3>
            <form action="#">
              <div class="check-date">
                <label for="date-in">Въезд:</label>
                <input type="text" class="date-input" id="date-in">
                <i class="icon_calendar"></i>
              </div>
              <div class="check-date">
                <label for="date-out">Выезд:</label>
                <input type="text" class="date-input" id="date-out">
                <i class="icon_calendar"></i>
              </div>
              <div class="select-option">
                <!-- <label for="guest">Гости:</label> -->
                <!-- <select id="guest">
                                    <option value="">3 Adults</option>
                                </select> -->

                <!-- <select id="guest">
                                    <option value="">3 Adults</option>
                                </select> -->
              </div>
              <div class="select-option">
                <label for="room">Номера:</label>
                <select id="room" disabled>
                  <option value=""><?php echo $page_title; ?></option>
                </select>
              </div>
              <button type="submit">Забронировать</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Room Details Section End -->

  <!-- Footer Section Begin -->
  <?php include 'includes/footer.php'; ?>

  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch"><i class="icon_close"></i></div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here.....">
      </form>
    </div>
  </div>
  <!-- Search model end -->

  <!-- Js Plugins -->
  <script src="js/render_slider.js"></script>
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