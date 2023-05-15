(function () {
   
   const property__section = document.querySelector('.property__section')

   property__section.addEventListener('click', del_prop)

   function del_prop(e) {
      if(!e.target.classList.contains("t-red")) return
      let is_delete = confirm("Удалить свойство?")
      if(!is_delete) return
      const el = e.target
      const parent = el.closest(".property__item");
      parent.remove()
   }
   
})();