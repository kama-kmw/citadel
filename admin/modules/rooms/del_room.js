(function () {
   
   const btn_arr = document.querySelectorAll('#rooms .del-service')
   let url = '/admin/modules/rooms/del_by_id.php';
   for(let item of btn_arr) {
      let id = item.closest('.aside__block').querySelector('.span-id').textContent
      item.addEventListener('click', ()=>{del_room(id)})
   }

   function del_room(id) {
      // e.preventDefault();
      let is_delete = confirm("Удалить номер?")
      if(!is_delete) return

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