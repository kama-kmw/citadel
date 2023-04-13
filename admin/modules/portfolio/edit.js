
(function () {
   const edit_btn = document.querySelectorAll(".edit-portfolio");
   for (let i=0; i<edit_btn.length; i++) {
      edit_btn[i].addEventListener("click", show_popup);
   };
   
   function show_popup(e) {
      e.preventDefault();
      const popup = document.querySelector("#popup-edit-portfolio");
      const parent = e.target.closest('.aside__block');

      let id = parent.querySelector('.span-id').textContent;
      let name = parent.querySelector('.span-name').textContent;

      popup.querySelector('#id').value = id;
      popup.querySelector('#title').value = name;

      popup.style.display = "flex";
   }
})();
 