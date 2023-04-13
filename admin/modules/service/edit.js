(function () {
  const edit_btn = document.querySelectorAll(".edit-service");
  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener("click", show_popup);
  }

  function show_popup(e) {
    e.preventDefault();
    const popup = document.querySelector("#popup-edit-service");
    const parent = e.target.closest(".aside__block");

    let id = parent.querySelector(".span-id").textContent;
    let title = parent.querySelector(".span-title").textContent;
    let desc = parent.querySelector(".span-desc").textContent;

    popup.querySelector("#id").value = id;
    popup.querySelector("#title").value = title;
    popup.querySelector("#description").value = desc;

    popup.style.display = "flex";
  }
})();
