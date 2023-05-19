(function () {
  console.clear();
  const send_btn = document.querySelector('#rooms #send_data');
  const title = document.querySelector('#rooms #title');
  const price = document.querySelector('#rooms #price');
  const description = document.querySelector('#rooms #description');
  const property__section = document.querySelector('#rooms #property__section');
  const photo = document.querySelector('#rooms #photo');
  // photo.addEventListener('change', get_photo);

  const form = document.querySelector('.admin-form');

  send_btn.addEventListener('click', send);

  function send(e) {
    e.preventDefault();
    let img = '';
    if(photo.files[0]) img = photo.files[0];
    let props = JSON.stringify(get_property());
    // alert(description.value);

    const url = '/admin/modules/rooms/add.php'
    const form_data = new FormData();
    form_data.append('props', props);
    form_data.append('title', title.value);
    form_data.append('price', price.value);
    form_data.append('description', description.value);
    form_data.append('photo', img);
    console.log(img);

    fetch(url, {
      method: 'POST',
      body: form_data,
    })
    .then(res => {
      alert('Номер добавлен')
      console.log(res.text())
      // window.location.reload();
    })
    .catch(error => {
      alert('При загрузке произошла ошибка')
      console.log(error)
    });


    // const slide_arr = document.querySelectorAll(
    //   '.galery__section .galery__block'
    // );
    // if (slide_arr.length === 0) return;

    // for (let el of slide_arr) {
    //   let img = el.querySelector('.galery__img');
    //   img_to_blob(img)
    // }
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
  // function img_to_blob(img) {
  //   // берём любое изображение
  //   // let img = document.querySelector('img');

  //   // создаём <canvas> того же размера
  //   let canvas = document.createElement('canvas');
  //   canvas.width = img.clientWidth;
  //   canvas.height = img.clientHeight;

  //   // let context = canvas.getContext('2d');

  //   // копируем изображение в  canvas (метод позволяет вырезать часть изображения)
  //   context.drawImage(img, 0, 0);
  //   // мы можем вращать изображение при помощи context.rotate() и делать множество других преобразований

  //   // toBlob является асинхронной операцией, для которой callback-функция вызывается при завершении
  //   canvas.toBlob(function (blob) {
  //     // после того, как Blob создан, загружаем его
  //     let link = document.createElement('a');
  //     link.download = 'example.png';

  //     link.href = URL.createObjectURL(blob);
  //     link.click();

  //     // удаляем внутреннюю ссылку на Blob, что позволит браузеру очистить память
  //     URL.revokeObjectURL(link.href);
  //   }, 'image/png');
  // }
})();
