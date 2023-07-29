<?php
include 'admin/connect.php';
include 'admin/modules/social/get.php';
?>
<footer class="footer-section">
  <div class="container">
    <div class="footer-text">
      <div class="row">
        <div class="col-lg-4">
          <div class="ft-about">
            <div class="logo">
              <h2 class='footer__logo'>Отель Цитадель</h2>
            </div>
            <p>
              Наше расположение приятно удивит Вас<br>Мы находимся в самом сердце Дербента, откуда в шаговой доступности Крепость Нарын-Кала, Магалы, базары, а также самый большой мультимединый фонтан в России.
            </p>
            <div class="fa-social">
              <a href="<?php echo $r1_social['waValide']; ?>" target="_blank"><i class="fa fa-whatsapp"></i></a>
              <a href="<?php echo $r1_social['insta']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
              <a href="mailto:<?php echo $r1_social['mail']; ?>" target="_blank"><i class="fa fa-envelope-o"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 offset-lg-1">
          <div class="ft-contact">
            <h6>Контакты</h6>
            <ul>
              <li><a href="tel:<?php echo $r1_social['phoneValide'] ?>"><?php echo $r1_social['phone']; ?></a></li>
              <li><a href="tel:<?php echo $r1_social['phone2Valide'] ?>"><?php echo $r1_social['phone2']; ?></a></li>
              <li>ул. Мира, д. 1</li>
              <li>г. Дербент</li>
            </ul>
          </div>
        </div>

        <div class="col-lg-3 offset-lg-1">
          <div class="ft-contact">
            <h6>Услуги</h6>
            <ul>
              <li>Парковка</li>
              <li>Столовая</li>
              <li>Обслуживание в номерах</li>
              <li>Смена белья</li>
              <li>Круглосуточное обслуживание</li>
              <li>Подача в номер</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="copyright-option">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/about.php">О нас</a></li>
            <li><a href="/rooms.php">Номера</a></li>
            <li><a href="/contact.php">Контакты</a></li>
          </ul>
        </div>
        <div class="col-lg-5">
          <div class="co-text">
            <p>

              Все права защищены ©2023 | Сайт создан на
              <a href="https://art-cod.ru" target="_blank" class='copyright__link'>Art-Cod.ru</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>