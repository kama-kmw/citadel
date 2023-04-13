const close_btn = document.querySelectorAll('.close-popup');
close_btn.forEach( el => {
    el.addEventListener('click', close_popup);
});

function close_popup() {
   const popup = this.closest('.popup-container');
   popup.style.display = 'none';
}