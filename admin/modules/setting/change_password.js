(function () {
  const password_current = document.querySelector('#password_current');
  const password_new = document.querySelector('#password_new');
  const password_new_2 = document.querySelector('#password_new_2');
  const notify = document.querySelector('#notify');
  const submit = document.querySelector('#password_submit');

  submit.addEventListener('click', change_password);

  function change_password(e) {
    e.preventDefault();
    if (!validate()) return;
    send_password();
  }
  function validate() {
    if (password_current.value == '') {
      notify.textContent = 'Введите текущий пароль';
      password_current.focus();
      return false;
    }
    if (password_new.value == '') {
      notify.textContent = 'Введите новый пароль';
      password_new.focus();
      return false;
    }
    if (password_new_2.value == '') {
      notify.textContent = 'Введите новый пароль еще раз';
      password_new_2.focus();
      return false;
    }
    if (password_new_2.value !== password_new.value) {
      notify.textContent = 'Новые пароли не совпадают';
      return false;
    }
    notify.textContent = '';
    return true;
  }
  function send_password() {
   
    const url = '/admin/modules/setting/password_update.php';
    const form_data = new FormData();
    form_data.append('password_current', password_current.value);
    form_data.append('password_new', password_new.value);

    fetch(url, {
      method: 'POST',
      body: form_data,
    }).then(res => res.text())
      .then((res) => {
        password_current.value = '';
        password_new.value = '';
        password_new_2.value = '';
        notify.textContent = res;
      })
      .catch((error) => {
        alert('При загрузке произошла ошибка');
        console.log(error);
      });
  }
})();
