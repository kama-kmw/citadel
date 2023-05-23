let slider = [];
(function () {

   const input_photo = document.querySelector('#input_photo');
   const btn_add_photo = document.querySelector('#btn_add_photo');
   const photo_section = document.querySelector('#rooms .galery__section')

   input_photo.addEventListener('change', choice);
   btn_add_photo.addEventListener('click', show_choice)
   

   function choice() {
      let file = input_photo.files[0];
      if(file.type !== 'image/jpg' && file.type !== 'image/jpeg') {
         alert('Выберите файл в формате JPG');
         return;
      }
      if(file.size > 3000000) {
         alert('Выберите фото меньше 3Мб');
         return;
      }
      slider.push(file);
      render()
   }
   function render() {
      photo_section.innerHTML = ''
      slider.map(el => {
         const photo_block = create_photo_block(el)
         photo_section.appendChild(photo_block)
      })
   }
   function show_choice() {
      input_photo.click()
   }
   function create_photo_block(photo) {
      const imageEl = document.createElement('img')
      imageEl.src = URL.createObjectURL(photo)
      imageEl.classList.add('galery__img');
      imageEl.id = photo.name;

      const del_icon = document.createElement('img')
      del_icon.src = '/img/icons/del-red-icon.png'
      del_icon.classList.add('del-icon');

      const photo_block = document.createElement('div')
      photo_block.classList.add('galery__block')
      photo_block.classList.add('mb10')
      photo_block.append(imageEl)
      photo_block.append(del_icon)

      // удаляем ссылку на файл
      URL.revokeObjectURL(photo)

      return photo_block
   }
})();