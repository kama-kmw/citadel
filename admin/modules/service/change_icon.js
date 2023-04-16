(function () {
  const el_icons = document.querySelector(".flaticon-icon-block");
  el_icons.addEventListener("click", icon_active);

  function icon_active(e) {
    e.preventDefault();

    const child_arr = el_icons.querySelectorAll("i");
    const icon_input = document.querySelector("#service #icon_input");
    const child = e.target;

    for (let i = 0; i < child_arr.length; i++) {
      child_arr[i].classList.remove("active");
    }

    let class_name = child.classList.value;
    icon_input.value = class_name;

    child.classList.add("active");
  }
})();
