(function () {
  const form = document.querySelector('#mailing-form');
  const room_select = form.querySelector('#room');
  const date_in_input = form.querySelector('#date-in');
  const date_out_input = form.querySelector('#date-out');
  const fio_input = form.querySelector('#fio');
  const phone_input = form.querySelector('#phone');
  const mail_input = form.querySelector('#mail');
  const submit = form.querySelector('#submit-btn');

  submit.addEventListener('click', mailing);

  function mailing(e) {
    e.preventDefault();


    const url = '/modules/mailing.php';
    const form_data = new FormData();
    form_data.append('room', room_select.input);
    form_data.append('date_in', date_in_input.value);
    form_data.append('date_out', date_out_input.value);
    form_data.append('fio', fio_input.value);
    form_data.append('phone', phone_input.value);
    form_data.append('mail', mail_input.input);

    fetch(url, {
      method: 'POST',
      body: form_data,
    })
      .then((res) => {
        alert('Сообщение отправлено');
        // console.log(res.text());
        form.reset();
      })
      .catch((error) => {
        alert('При бронировании произошла ошибка');
        console.log(error);
      });
  }
})();
