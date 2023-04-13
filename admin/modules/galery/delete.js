
(function () {
   const del_btn = document.querySelectorAll(".del-gal-photo");
   for (let i=0; i<del_btn.length; i++) {
      del_btn[i].addEventListener("click", del_category);
   };
 
   function del_category(e) {
      e.preventDefault();
      let is_delete = confirm('Удалить фото?');
      if(!is_delete) {
         console.log('отмена удаления');
         return;
      }
     
      const parent = e.target.closest(".galery__block");
      let id = parent.querySelector(".gal-photo-id").textContent;
      let url = '/admin/modules/galery/del_by_id.php';
   
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
         console.log("Ошибка удаления");
      });
   }
})();
 