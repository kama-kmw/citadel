(function () {
  const edit_btn = document.querySelectorAll(".edit-advantage");
  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener("click", show_popup);
  }

  function show_popup(e) {
    e.preventDefault();
    const popup = document.querySelector("#popup-edit-advantage");
    const parent = e.target.closest(".aside__block");

    let id = parent.querySelector(".span-id").textContent;
    let title = parent.querySelector(".span-title").textContent;

    popup.querySelector("#id").value = id;
    popup.querySelector("#title").value = title;

    popup.style.display = "flex";
  }
})();
