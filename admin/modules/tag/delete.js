
(function () {
   const del_btn = document.querySelectorAll(".del-tag");
   for (let i=0; i<del_btn.length; i++) {
      del_btn[i].addEventListener("click", del_category);
   };
 
   function del_category(e) {
      e.preventDefault();
      let is_delete = confirm('Удалить тег?');
      if(!is_delete) {
         console.log('отмена удаления');
         return;
      }
     
      const parent = e.target.closest(".tag__item");
      let id = parent.querySelector(".tag-id").textContent;
      let url = '/admin/modules/tag/del_by_id.php';
   
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
 