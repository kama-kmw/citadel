
(function () {
   const edit_btn = document.querySelectorAll(".edit-faq");
   for (let i=0; i<edit_btn.length; i++) {
      edit_btn[i].addEventListener("click", show_popup);
   };
   
   function show_popup(e) {
      e.preventDefault();
      const popup = document.querySelector("#popup-edit-faq");
      const parent = e.target.closest('.aside__block');

      let id = parent.querySelector('.span-id').textContent;
      let question = parent.querySelector('.span-question').textContent;
      let answer = parent.querySelector('.span-answer').textContent;

      popup.querySelector('#id').value = id;
      popup.querySelector('#question').value = question;
      popup.querySelector('#answer').value = answer;

      popup.style.display = "flex";
   }
})();
 