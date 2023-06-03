(function(){
   const phone_inp = document.querySelector('#social #phone_inp');
   const phone2_inp = document.querySelector('#social #phone2_inp');
   const wa_inp = document.querySelector('#social #wa_inp');
   const insta_inp = document.querySelector('#social #insta_inp');
   const send_btn = document.querySelector('#social #send_btn');

   let phoneValide = '';
   let phone2Valide = '';
   let waValide = '';

   send_btn.addEventListener('click', update);

   function update() {
      phoneValide = validate(phone_inp.value);
      phone2Valide = validate(phone2_inp.value);
      waValide = waValidate(wa_inp.value);
      send();
   }
   function validate(phone) {
      let phoneValide = '';
      const valideSymbol = ['0','1','2','3','4','5','6','7','8','9']
      for(let i=0; i<phone.length; i++) {
         for(sym of valideSymbol) {
            if(phone[i] === sym) phoneValide += sym;
         }
      }
      return phoneValide;
   }
   function waValidate(phone) {
      let phoneValide = '';
      const valideSymbol = ['0','1','2','3','4','5','6','7','8','9']
      for(let i=0; i<phone.length; i++) {
         for(sym of valideSymbol) {
            if(phone[i] === sym) phoneValide += sym;
         }
      }
      const link = 'https://wa.me/' +phoneValide;
      return link;
   }
   function send() {
      const url = '/admin/modules/social/update.php';
      const form_data = new FormData();
      form_data.append('phone', phone_inp.value);
      form_data.append('phone2', phone2_inp.value);
      form_data.append('wa', wa_inp.value);
      form_data.append('insta', insta_inp.value);
      form_data.append('phoneValide', phoneValide);
      form_data.append('phone2Valide', phone2Valide);
      form_data.append('waValide', waValide);

      fetch(url, {
         method: 'POST',
         body: form_data,
      })
      .then(res => location.reload())
      .catch((error) => {
         alert('При загрузке произошла ошибка');
         console.log(error);
      });
   }

   
})();