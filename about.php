<!DOCTYPE html>
<html lang="ru">
<?php
$head_title = 'Об отеле Цитадель';
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
                        <h2>О нас</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Добро пожаловать в Отель Цитадель</h2>
                            <p>Уютный отель в центре Дербента, предлагает отличное расположение и современные удобства.</p>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> 20% Off On Accommodation.</li>
                            <li><i class="icon_check"></i> Complimentary Daily Breakfast</li>
                            <li><i class="icon_check"></i> 3 Pcs Laundry Per Day</li>
                            <li><i class="icon_check"></i> Free Wifi.</li>
                            <li><i class="icon_check"></i> Discount 20% On F&B</li>
                        </ul>
                    </div> -->
                </div>
            </div>
            
        </div>
    </section>

    <!-- Services -->
    <?php include 'includes/services.php'; ?>

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Откройте для себя наш отель и услуги</h2>
                        <p>Мы рады гостям и жителям города</p>
                        <!-- <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="img/play.png" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Attractions -->
    <?php include 'includes/attractions.php'; ?>

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

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