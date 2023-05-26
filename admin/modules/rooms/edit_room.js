(function () {
  
  const edit_btn = document.querySelectorAll('#rooms .edit-icon');
  const prop_section = document.querySelector(
    '#popup-edit-room #property__section'
  );
  const slider_section = document.querySelector(
    '#popup-edit-room .galery__section'
  );
  const del_icon_btn = document.querySelectorAll(
    '#popup-edit-room .del-icon'
  );
  const add_prop_btn = document.querySelector('#popup-edit-room #prop_btn');
  const prop_inp = document.querySelector('#popup-edit-room #prop_inp');
  const desc_inp = document.querySelector('#popup-edit-room #desc_inp');
  const sebd_btn = document.querySelector('#popup-edit-room #update_room');
  const photo = document.querySelector('#popup-edit-room #photo');
  const add_slider = document.querySelector('#popup-edit-room #add_slider');

  let id;
  let props;
  let title;
  let price;
  let desc;
  let slider;
  let arr_slider = [];

  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener('click', show_popup);
  }
  slider_section.addEventListener('click', del_slider);
  prop_section.addEventListener('click', del_prop);
  add_prop_btn.addEventListener('click', add_prop);
  sebd_btn.addEventListener('click', update_room);
  

  function show_popup(e) {
    e.preventDefault();
    const popup = document.querySelector('#popup-edit-room');
    const parent = e.target.closest('.aside__block');

    id = parent.querySelector('.span-id').textContent;
    title = parent.querySelector('.span-title').textContent;
    price = parent.querySelector('.span-price').textContent;
    desc = parent.querySelector('.span-desc').textContent;
    let props_json = parent.querySelector('.span-props').textContent;
    if (props_json !== 'undefined') props = JSON.parse(props_json);
    slider = parent.querySelector('.span-slider').textContent;

    popup.querySelector('#id').value = id;
    popup.querySelector('#title').value = title;
    popup.querySelector('#price').value = price;
    popup.querySelector('#description').value = desc;
    popup.querySelector('#description').value = desc;
    if(slider.length != 0) get_arr_slider(slider);
    if (props) render_props(props);

    popup.style.display = 'flex';
  }
  function render_props(props) {
    prop_section.textContent = '';
    for (let prop of props) {
      const div = document.createElement('div');
      div.classList.add('flex');
      div.classList.add('property__item');

      const div_prop = document.createElement('div');
      div_prop.classList.add('admin-label');
      div_prop.classList.add('mr20');
      div_prop.classList.add('w-200');
      div_prop.id = 'prop';
      div_prop.textContent = prop.prop;

      const div_desc = document.createElement('div');
      div_desc.classList.add('admin-label');
      div_desc.classList.add('mr20');
      div_desc.classList.add('w-200');
      div_desc.id = 'desc';
      div_desc.textContent = prop.desc;

      const del_btn = document.createElement('div');
      del_btn.classList.add('admin-label');
      del_btn.classList.add('t-red');
      del_btn.textContent = 'Удалить';

      div.appendChild(div_prop);
      div.appendChild(div_desc);
      div.appendChild(del_btn);

      prop_section.appendChild(div);
    }
  }
  function del_prop(e) {
    if (!e.target.classList.contains('t-red')) return;
    let is_delete = confirm('Удалить свойство?');
    if (!is_delete) return;
    const el = e.target;
    const parent = el.closest('.property__item');
    const prop = parent.querySelector('#prop').textContent
    const desc = parent.querySelector('#desc').textContent
    // console.log('prop - ' + prop)
    // console.log('desc - ' + desc)
    parent.remove();
    for(let i=0; i<props.length; i++) {
      if(props[i].prop == prop && props[i].desc == desc) {
        props.splice(i, 1)
      }
    }
  }
  function add_prop() {
    let prop = prop_inp.value;
    if (!prop) {
      alert('Заполните свойство');
      return;
    }
    let desc = desc_inp.value;
    if (!desc) {
      alert('Заполните значение');
      return;
    }
    props.push({
      prop: prop,
      desc: desc,
    });
    render_props(props);
    prop_inp.value = '';
    desc_inp.value = '';
  }
  function update_room(e) {
    e.preventDefault();
    let img = '';
    if (photo.files[0]) img = photo.files[0];
    let props_json = JSON.stringify(props);
    title = document.querySelector('#popup-edit-room #title').value;
    price = document.querySelector('#popup-edit-room #price').value;
    desc = document.querySelector('#popup-edit-room #description').value;
    slider_text = ''
    let img_slider = '';
    if (add_slider.files[0]) img_slider = add_slider.files[0];

    const url = '/admin/modules/rooms/update.php';
    const form_data = new FormData();
    form_data.append('id', id);
    form_data.append('props', props_json);
    form_data.append('title', title);
    form_data.append('price', price);
    form_data.append('description', desc);
    form_data.append('photo', img);
    if(arr_slider.length != 0) form_data.append('slider', arr_slider.join('|'));
    form_data.append('add_slider', img_slider);

    // alert('props - '+props) .join(" ")

    fetch(url, {
      method: 'POST',
      body: form_data,
    })
      .then((res) => {
        alert('Номер добавлен');
        console.log(res.text());
        window.location.reload();
      })
      .catch((error) => {
        alert('При загрузке произошла ошибка');
        console.log(error);
      });
  }
  function get_arr_slider(slider) {
    arr_slider = [];
    let ind_start = 0;
    for (let i = 0; i < slider.length; i++) {
      if (slider[i] == '|') {
        arr_slider.push(slider.slice(ind_start, i));
        ind_start = i + 1;
      }
    }
    arr_slider.push(slider.slice(ind_start, slider.length));
    if (arr_slider.length == 0) return;
    render_slider(arr_slider);
  }
  function render_slider(arr) {
    for (let item of arr) {
      const imageEl = document.createElement('img');
      imageEl.src = '/img/slider/'+item;
      imageEl.classList.add('galery__img');

      const del_icon = document.createElement('img');
      del_icon.src = '/img/icons/del-red-icon.png';
      del_icon.classList.add('del-icon');

      const photo_block = document.createElement('div');
      photo_block.classList.add('galery__block');
      photo_block.classList.add('mb10');
      photo_block.append(imageEl);
      photo_block.append(del_icon);

      slider_section.append(photo_block);
    }
  }
  function del_slider(e) {
    if (!e.target.classList.contains('del-icon')) return;
    let parent = e.target.closest('.galery__block')
    let img_name = parent.querySelector('.galery__img').getAttribute("src");
    let ind_start = 0
    for(let i=0; i<img_name.length; i++) {
      if(img_name[i] == '/') ind_start = i+1
    }
    img_name = img_name.slice(ind_start, img_name.length)
    for(let i=0; i<arr_slider.length; i++) {
      if(img_name == arr_slider[i]) arr_slider.splice(i, 1)
    }
    parent.remove();
  }
})();
