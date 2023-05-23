(function () {
   const photo_section = document.querySelector('#rooms .galery__section')

   photo_section.addEventListener('click', find_icon_del)

   function find_icon_del(e) {
      if(!e.target.classList.contains("del-icon")) return
      let is_delete = confirm("Удалить фото?")
      if(!is_delete) return
      const el = e.target
      const parent = el.closest(".galery__block");
      const photo_name = parent.querySelector('.galery__img').id
      console.log(photo_name)
      for(let i=0; i<slider.length; i++) {
         if(photo_name === slider[i].name) slider.splice(i, 1);
      }
      parent.remove()
   }
})();