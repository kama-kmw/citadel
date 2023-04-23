
(function () {
   const edit_btn = document.querySelectorAll(".edit-feedback-moder");
   for (let i=0; i<edit_btn.length; i++) {
      edit_btn[i].addEventListener("click", show_popup);
   };

   const del_btn = document.querySelector(".js-feedback_moder_del");
   del_btn.addEventListener("click", del_feedback);

   function del_feedback(e) {
      e.preventDefault();
      let is_delete = confirm("Удалить отзыв?");
      if (!is_delete) {
        console.log("отмена удаления");
        return;
      }
  
      const parent = e.target.closest("#popup-edit-feedback-moder");
      let id = parent.querySelector("#id").value;
      // console.log(id);
      let url = "/admin/modules/feedback/del_by_id.php";
  
      const formData = new FormData();
      formData.append("id", id);
  
      fetch(url, {
        method: "POST",
        body: formData,
      })
        .then((res) => {
          // console.log(res.text());
          window.location.reload();
        })
        .catch(() => {
          alert("Ошибка удаления");
        });
   }
   
   
   function show_popup(e) {
      e.preventDefault();
      const popup = document.querySelector("#popup-edit-feedback-moder");
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
 