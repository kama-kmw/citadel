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

    <!-- TL Search Form Section Begin -->
    <div id="block-search">
        <div id="tl-search-form" class="tl-container">
            <noindex><a href="https://www.travelline.ru/products/tl-hotel/" rel="nofollow" target="_blank">TravelLine</a></noindex>
        </div>
    </div>

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Контакты</h2>
                        <p>Не стесняйтесь звонить, ответим на все интересующие Вас вопросы</p>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="c-o">Адрес:</td>
                                    <td>г. Дербент, ул. Мира, д. 1</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Телефон:</td>
                                    <td><a href="tel:<?php echo $r1_social['phoneValide'] ?>"><?php echo $r1_social['phone']; ?></a></td>
                                </tr>
                                <tr>
                                    <td class="c-o">Телефон:</td>
                                    <td><a href="tel:<?php echo $r1_social['phone2Valide'] ?>"><?php echo $r1_social['phone2']; ?></a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="map">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/11007/derbent/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Дербент</a><a href="https://yandex.ru/maps/11007/derbent/house/ulitsa_mira_1/YEEYdA9kS0UDQFpofXx0dXxlYw==/?ll=48.284204%2C42.054068&utm_medium=mapframe&utm_source=maps&z=16.75" style="color:#eee;font-size:12px;position:absolute;top:14px;">Улица Мира, 1 — Яндекс Карты</a><iframe src="https://yandex.ru/map-widget/v1/?ll=48.284204%2C42.054068&mode=search&ol=geo&ouri=ymapsbm1%3A%2F%2Fgeo%3Fdata%3DCgo0MDU2MTg0MDg4ElvQoNC-0YHRgdC40Y8sINCg0LXRgdC_0YPQsdC70LjQutCwINCU0LDQs9C10YHRgtCw0L0sINCU0LXRgNCx0LXQvdGCLCDRg9C70LjRhtCwINCc0LjRgNCwLCAxIgoNByNBQhVdNyhC&z=16.75" height="400" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

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