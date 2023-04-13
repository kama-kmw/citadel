(function () {
  const edit_btn = document.querySelectorAll(".edit-doctor");
  for (let i = 0; i < edit_btn.length; i++) {
    edit_btn[i].addEventListener("click", show_popup);
  }

  function show_popup(e) {
    e.preventDefault();
    const popup = document.querySelector("#popup-edit-doctor");
    const parent = e.target.closest(".aside__block");

    let id = parent.querySelector(".span-id").textContent;
    let name = parent.querySelector(".span-title").textContent;
    let member = parent.querySelector(".span-member").textContent;

    popup.querySelector("#id").value = id;
    popup.querySelector("#name").value = name;
    popup.querySelector("#member").value = member;

    popup.style.display = "flex";
  }
})();
