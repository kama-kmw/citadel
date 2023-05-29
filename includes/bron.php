
   <div class="booking-form">
      <h3>Бронирование</h3>
      <form action="#" id="mailing-form">
         <div class="select-option">
            <label for="room">Номер:</label>
            <select id="room">
               <option value="Номер не выбран">Выберите номер</option>
               <option value="Стандарт +">Стандарт +</option>
               <option value="Джуниор Дабл">Джуниор Дабл</option>
               <option value="Джуниор Твин">Джуниор Твин</option>
               <option value="Люкс">Люкс</option>
            </select>
         </div>
         <div class="check-date">
            <label for="date-in">Заезд:</label>
            <input type="text" class="date-input" id="date-in" />
            <i class="icon_calendar"></i>
         </div>
         <div class="check-date">
            <label for="date-out">Выезд:</label>
            <input type="text" class="date-input" id="date-out" />
            <i class="icon_calendar"></i>
         </div>
         <div class="check-date">
            <label for="fio">ФИО:</label>
            <input type="text" id="fio" required />
         </div>
         <div class="check-date">
            <label for="phone">Телефон:</label>
            <input type="text" id="phone" required />
         </div>
         <div class="check-date">
            <label for="mail">Почта:</label>
            <input type="text" id="mail" />
         </div>
         <!-- <button type="submit">Найти номер</button> -->
         <div class="submit-btn" id="submit-btn">Забронировать</div>
      </form>
   </div>

<script src="/js/mailing.js"></script>