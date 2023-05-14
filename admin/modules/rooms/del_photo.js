(function () {
   console.clear();

   const input_photo = document.querySelector('#input_photo');
   const btn_add_photo = document.querySelector('#btn_add_photo');
   const photo_section = document.querySelector('#rooms .galery__section')

   // input_photo.addEventListener('change', choice);
   photo_section.addEventListener('click', find_icon_del)
   let photo_arr = [];

   function find_icon_del(e) {
      if(!e.target.classList.contains("del-icon")) return
      let is_delete = confirm("Удалить фото?")
      if(!is_delete) return
      const el = e.target
      const parent = el.closest(".galery__block");
      parent.remove()
   }
})();