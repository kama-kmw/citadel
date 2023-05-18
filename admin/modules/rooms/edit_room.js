(function () {
  const edit_btn = document.querySelectorAll('#rooms .edit-icon');
  const prop_section = document.querySelector(
    '#popup-edit-room #property__section'
  );
  const add_prop_btn = document.querySelector(
    '#popup-edit-room #prop_btn'
  );
  const prop_inp = document.querySelector(
    '#popup-edit-room #prop_inp'
  );
  const desc_inp = document.querySelector(
    '#popup-edit-room #desc_inp'
  );
  const sebd_btn = document.querySelector('#popup-edit-room #update_room');

  let id;
  let props;
  let title;
  let price;
  let desc;

  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener('click', show_popup);
  }
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
    props = JSON.parse(props_json);

    popup.querySelector('#id').value = id;
    popup.querySelector('#title').value = title;
    popup.querySelector('#price').value = price;
    popup.querySelector('#description').value = desc;
    render_props(props);

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
    parent.remove();
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
    let props_json = JSON.stringify(props);
    title = document.querySelector('#popup-edit-room #title').value
    price = document.querySelector('#popup-edit-room #price').value
    desc = document.querySelector('#popup-edit-room #description').value

    const url = '/admin/modules/rooms/update.php'
    const form_data = new FormData();
    form_data.append('id', id);
    form_data.append('props', props_json);
    form_data.append('title', title);
    form_data.append('price', price);
    form_data.append('description', desc);
    
    // alert('props - '+props)

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
  }
})();
