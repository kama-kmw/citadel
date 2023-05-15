(function () {
   
   const prop_inp = document.querySelector('#prop_inp')
   const desc_inp = document.querySelector('#desc_inp')
   const btn_add_prop = document.querySelector('#prop_btn')
   const property__section = document.querySelector('.property__section')

   btn_add_prop.addEventListener('click', get_prop)
   
   function get_prop() {
      let prop = prop_inp.value
      if(!prop) {
         alert('Заполните свойство')
         return
      }
      let desc = desc_inp.value
      if(!desc) {
         alert('Заполните значение')
         return
      }
      render(prop, desc)
      reset_form()
   }
   function render(prop, desc) {
      const div = document.createElement('div')
      div.classList.add('flex')
      div.classList.add('property__item')

      const div_prop = document.createElement('div')
      div_prop.classList.add('admin-label')
      div_prop.classList.add('mr20')
      div_prop.classList.add('w-200')
      div_prop.textContent = prop

      const div_desc = document.createElement('div')
      div_desc.classList.add('admin-label')
      div_desc.classList.add('mr20')
      div_desc.classList.add('w-200')
      div_desc.textContent = desc

      const del_btn = document.createElement('div')
      del_btn.classList.add('admin-label')
      del_btn.classList.add('t-red')
      del_btn.textContent = 'Удалить'

      div.appendChild(div_prop)
      div.appendChild(div_desc)
      div.appendChild(del_btn)

      property__section.appendChild(div)
   }
   function reset_form() {
      prop_inp.value = ''
      desc_inp.value = ''
   }
})();