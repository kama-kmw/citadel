<nav class="menu-admin">
   <div class="sticky">
      <a 
         class="menu-admin__item <?php if ($nav_active == 'Главная') echo 'menu-admin__item_active'; ?>" 
         href="/admin/pages/main/"
      >Главная</a>
   
      <a 
         class="menu-admin__item <?php if ($nav_active == 'Настройки') echo 'menu-admin__item_active'; ?>" 
         href="/admin/pages/setting/"
      >Настройки</a>
   </div>
</nav>