<?php $btn = new Component();  ?>
<header class="container">


  <menu class="flex justify-between">

    <div>
      <a href="/" class="flex items-center gap-x-3 text-[color:var(--blue)]
      font-semibold text-lg leading-[22px]">
        <img src="./assets/img/logo.png" alt="logo">
        <h1> ООО «КПС» </h1>
      </a>
    </div>

    <div>
      <?php
      $menu = [
        'Главная', 'Каталог', 'Партнерство', 'Контакты'
      ]
      ?>
      <ul class="flex items-center h-full gap-x-14">
        <?php for ($i = 0; $i < count($menu); $i++) : ?>
          <li>
            <a href="#">
              <?= $menu[$i] ?>
            </a>
          </li>
        <?php endfor; ?>
      </ul>
    </div>



    <div class="flex items-center gap-x-4">
      <span>
        <a href="tel:+79320150606" class="flex gap-x-2">
          <img src="./assets/img/social/phone.svg" alt="phone">
          +7 (932) 015-06-06
        </a>
      </span>
      <a href="#"><img src="./assets/img/social/whatsapp.svg" alt="whatsapp"></a>
      <a href="#"><img src="./assets/img/social/telegram.svg" alt="telegram"></a>
      <?= $btn->btn('Оставить заявку', 'open-modal-window', 'fill'); ?>
    </div>

  </menu>


</header>