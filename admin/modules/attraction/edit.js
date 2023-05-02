(function () {
  const edit_btn = document.querySelectorAll(".edit-attraction");
  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener("click", show_popup);
  }

  function show_popup(e) {
    e.preventDefault();
    const popup = document.querySelector("#popup-edit-attraction");
    const parent = e.target.closest(".aside__block");

    let id = parent.querySelector(".span-id").textContent;
    let name = parent.querySelector(".span-title").textContent;
    let description = parent.querySelector(".span-member").textContent;

    popup.querySelector("#id").value = id;
    popup.querySelector("#name").value = name;
    popup.querySelector("#description").value = description;

    popup.style.display = "flex";
  }
})();
