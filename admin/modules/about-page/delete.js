(function () {
  const del_btn = document.querySelectorAll(".del-about");
  for (let i = 0; i < del_btn.length; i++) {
    del_btn[i].addEventListener("click", del_about);
  }

  function del_about(e) {
    e.preventDefault();
    let is_delete = confirm("Удалить секцию?");
    if (!is_delete) {
      console.log("отмена удаления");
      return;
    }

    const parent = e.target.closest(".aside__block");
    let id = parent.querySelector(".span-id").textContent;
    let url = "/admin/modules/about-page/del_by_id.php";

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
