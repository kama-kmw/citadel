(function () {
  // console.log('surha test');

  const popup = document.querySelector('#feedback-popup');
  const btn = document.querySelector('#feedback-btn');
  const send_btn = document.querySelector('#send-btn');
  const close_btn = document.querySelector('.close-popup');
	const inp_name = popup.querySelector('#name-fb');
	const inp_town = popup.querySelector('#town-fb');
	// const inp_estimation = popup.querySelector('#estimation-fb');
	const inp_feedback = popup.querySelector('#feedback-fb');

  btn.addEventListener('click', show_popup);
  close_btn.addEventListener('click', close_popup);

  function show_popup() {
    popup.style.display = 'flex';
  }
  function close_popup() {
    popup.style.display = 'none';
  }
  function get_date() {
    let now = new Date();
    let year = now.getFullYear();
    let month = now.getMonth() + 1;
    let day = now.getDate();
    let date = day+' / '+month+' / '+year+' г';

    return date;
  }

  send_btn.addEventListener('click', function (e) {
    // e.preventDefault();

    const formData = new FormData();
    formData.append('name', inp_name.value);
    formData.append('town', inp_town.value);
    // formData.append('estimation', inp_estimation.value);
    formData.append('feedback', inp_feedback.value);
    formData.append('moder', '0');
    formData.append('date', get_date());

    let url = '/admin/modules/feedback/add.php';
    fetch(url, {
      method: 'POST',
      body: formData,
    })
      .then((res) => {
        // console.log(res.text());
        // window.location.reload();
        close_popup();
        alert('Ваш отзыв успешно отправлен');
      })
      .catch(() => {
        alert('Ошибка. Попробуйте еще раз');
      });
  });
})();
