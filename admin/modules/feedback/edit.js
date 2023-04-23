
(function () {
   const edit_btn = document.querySelectorAll(".edit-feedback");
   for (let i=0; i<edit_btn.length; i++) {
      edit_btn[i].addEventListener("click", show_popup);
   };
   
   function show_popup(e) {
      e.preventDefault();
      const popup = document.querySelector("#popup-edit-feedback");
      const parent = e.target.closest('.aside__block');

      let id = parent.querySelector('.span-id').textContent;
      let date = parent.querySelector('.span-date').textContent;
      let name = parent.querySelector('.span-name').textContent;
      // let estimation = parent.querySelector('.span-estimation').textContent;
      let feedback = parent.querySelector('.span-feedback').textContent;
      let town = parent.querySelector('.span-town').textContent;
      

      popup.querySelector('#id').value = id;
      popup.querySelector('#title').value = name;
      popup.querySelector('#feedback').value = feedback;
      popup.querySelector('#town').value = town;
      popup.querySelector('#date').value = date;
      // popup.querySelector('#estimation').value = estimation;

      popup.style.display = "flex";
   }
})();
 