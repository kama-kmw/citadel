(function () {
  const send_btn = document.querySelector('#rooms #send_data');
  const title = document.querySelector('#rooms #title');
  const price = document.querySelector('#rooms #price');
  const description = document.querySelector('#rooms #description');
  const property__section = document.querySelector('#rooms #property__section');
  const photo = document.querySelector('#rooms #photo');

  send_btn.addEventListener('click', send);

  function send(e) {
    e.preventDefault();
    let img = '';
    if (photo.files[0]) img = photo.files[0];
    let props = JSON.stringify(get_property());

    const url = '/admin/modules/rooms/add.php';
    const form_data = new FormData();
    form_data.append('props', props);
    form_data.append('title', title.value);
    form_data.append('price', price.value);
    form_data.append('description', description.value);
    form_data.append('photo', img);
    if (slider.length) {
      for (item of slider) {
        form_data.append('slider[]', item);
      }
    }

    fetch(url, {
      method: 'POST',
      body: form_data,
    })
      .then((res) => {
        alert('Номер добавлен');
        // console.log(res.text());
        window.location.reload();
      })
      .catch((error) => {
        alert('При загрузке произошла ошибка');
        console.log(error);
      });

  }
  function get_property() {
    const arr_el = property__section.querySelectorAll('.property__item');
    if (arr_el.length == 0) return;
    let arr_prop = [];
    for (let item of arr_el) {
      const prop = item.querySelector('#prop').textContent;
      const desc = item.querySelector('#desc').textContent;
      arr_prop.push({ prop, desc });
    }
    return arr_prop;
  }
})();
