
(function () {
   const del_btn = document.querySelectorAll(".slider__section .del-icon");
   for (let i=0; i<del_btn.length; i++) {
      // console.log(del_btn[i])
      del_btn[i].addEventListener("click", del_slide);
   };
 
   function del_slide(e) {
      e.preventDefault();
      let is_delete = confirm('Удалить слайд?');
      if(!is_delete) {
         console.log('отмена удаления');
         return;
      }
     
      const parent = e.target.closest(".galery__block");
      let id = parent.querySelector(".gal-photo-id").textContent;
      let url = '/admin/modules/slider/del_by_id.php';
   
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
})();
 