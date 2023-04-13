<div class="form__wrapper">
  <form class="form form_small" action="index.php" method="POST">
    <div>
      <label class="form__label">
        <span class="form__label-span">Логин</span>
        <input type="text" class="form__input" name="login" value="<?php echo @$data['login']; ?>">
      </label>
      <label class="form__label">
        <span class="form__label-span">Пароль</span>
        <input type="password" class="form__input" name="password" value="<?php echo @$data['password']; ?>">
      </label>
      <button type="submit" class="form__button" name="do_login">Войти</button>
      <div class="notify"><?php echo array_shift($notify); ?></div>
    </div>
  </form>
</div>