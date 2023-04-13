
(function () {
   const edit_btn = document.querySelectorAll(".edit-team");
   for (let i=0; i<edit_btn.length; i++) {
      edit_btn[i].addEventListener("click", show_popup);
   };
   
   function show_popup(e) {
      e.preventDefault();
      const popup = document.querySelector("#popup-edit-team");
      const parent = e.target.closest('.aside__block');

      let id = parent.querySelector('.span-id').textContent;
      let name = parent.querySelector('.span-name').textContent;
      let status = parent.querySelector('.span-status').textContent;

      popup.querySelector('#id').value = id;
      popup.querySelector('#title').value = name;
      popup.querySelector('#status').value = status;

      popup.style.display = "flex";
   }
})();
 