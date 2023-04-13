
(function () {
   const el_icons = document.querySelector("#service-block .fa-icon");
   el_icons.addEventListener("click", show_popup);
   
   function show_popup(e) {
      e.preventDefault();

      const child_arr = el_icons.querySelectorAll(".fas");
      const icon_input = document.querySelector("#icon_input");
      const child = e.target;

      for(let i=0; i<child_arr.length; i++) {
         child_arr[i].classList.remove("active");
      }

      let class_name = child.classList.value;
      icon_input.value = class_name;
      
      child.classList.add("active");
   }
})();