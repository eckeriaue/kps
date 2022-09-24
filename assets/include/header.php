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



    <div>
      <?php
      $btn = new Component();
      echo $btn->fill_btn('Оставить заявку', 'open-modal-window');
      ?>
    </div>

  </menu>


</header>