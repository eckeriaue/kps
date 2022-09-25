<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/index.css">
  <!-- <style>
    body * {
      outline: 1px solid red;
    }
  </style> -->
  <script defer src="./assets/js/index.js"></script>

</head>

<body class="overflow-hiiden">

  <header class="container mt-4">


    <menu class="flex justify-between">

      <div>
        <a href="/" class="flex items-center gap-x-3 text-[color:var(--blue)]
      font-semibold text-lg leading-[22px] whitespace-nowrap">
          <img src="./assets/img/logo.png" alt="logo">
          <h1> ООО «КПС» </h1>
        </a>
      </div>

      <div id="mobile-menu" class="xl:translate-x-full xl:z-10 xl:fixed xl:overflow-hidden xl:top-o xl:right-0 xl:shadow-lg xl:bg-white xl:h-full xl:w-1/3 lg:w-1/2 md:w-2/3 xl:p-12 xl:-mt-4 xl:transition-transform">
        <?php
        $menu = [
          'Главная', 'Каталог', 'Партнерство', 'Контакты'
        ]
        ?>
        <span class="open-window text-xl cursor-pointer"> &times; </span>
        <ul class="flex items-center h-full xl:flex-col xl:gap-y-10 gap-x-14">
          <?php for ($i = 0; $i < count($menu); $i++) : ?>
            <li>
              <a href="#" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
                <?= $menu[$i] ?>
              </a>
            </li>
          <?php endfor; ?>
        </ul>

        <div class="hidden lg:flex lg:-mt-12 lg:gap-x-4 lg:justify-end">
          <a href="tel:+79320150606" class="flex gap-x-2 items-center whitespace-nowrap text-[12px]">
            <img src="./assets/img/social/phone.svg" alt="phone">
          </a>
          <a href="#"><img src="./assets/img/social/whatsapp.svg" alt="whatsapp"></a>
          <a href="#"><img src="./assets/img/social/telegram.svg" alt="telegram"></a>
        </div>

      </div>



      <div class="flex items-center gap-x-4">
        <span class="lg:hidden">
          <a href="tel:+79320150606" class="flex gap-x-2 items-center whitespace-nowrap text-[12px]">
            <img src="./assets/img/social/phone.svg" alt="phone">
            +7 (932) 015-06-06
          </a>
        </span>
        <a class="lg:hidden" href="#"><img src="./assets/img/social/whatsapp.svg" alt="whatsapp"></a>
        <a class="lg:hidden" href="#"><img src="./assets/img/social/telegram.svg" alt="telegram"></a>


        <button class="
          px-8 h-[56px] text-white bg-[color:var(--blue-2)]
          text-center rounded-full
          active:scale-95 transition-transform
          text-[14px] font-bold leading-[17px]
          md:hidden
         ">
          Оставить заявку
        </button>

        <button class="open-window hidden xl:block w-6 h-6">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

        </button>
      </div>

    </menu>


  </header>







  <main>
    <section class="mt-[177px] relative">
      <div class="absolute right-0 top-1/2 -translate-y-1/2 -z-[1] 2xl:max-w-[40vw] lg:hidden">
        <img src="./assets/img/main-img-top-content.png" alt="вагон">
      </div>
      <div class="container">

        <div>
          <h1 class="text-[color:var(--blue-2)] text-5xl font-black leading-[110%] max-w-[648px]">
            Мы продаем не запчасти, а Вашу потребность
          </h1>
        </div>


        <div class="
            pl-4 mt-24 text-[color:var(--dark)] max-w-[423px]
            relative before:absolute before:top-0 before:left-0
            before:content-[''] before:h-full before:w-[3px]
            before:rounded-lg
            before:bg-[color:var(--blue-2)]
          ">

          <h2 class="font-medium mb-3"> «Комплексное промышленное снабжение» </h2>
          <blockquote class="text-[16px] leading-[100%]">
            снабжение запчастями вагонов и локомотивов на территории России,
            Азии, Кавказа и Ближнего Востока.
          </blockquote>
        </div>



        <div class="mt-[120px] max-w-[552px] grid grid-cols-2 gap-x-8 ">
          <!-- md:flex-col md:gap-y-8 md:gap-x-0 -->
          <button class="
          px-8 h-[56px] text-white bg-[color:var(--blue-2)]
          text-center rounded-full
          active:scale-95 transition-transform
          text-[14px] font-bold leading-[17px]
         ">
            Оставить заявку
          </button>

          <button class="
          px-8 h-[56px] text-[color:var(--dark)]
          text-center rounded-full border border-[color:var(--blue-2)]
          active:scale-95 transition-transform
          text-[14px] font-bold leading-[17px]
         ">
            Агентский договор
          </button>
        </div>



      </div>
    </section>



    <section class="mt-[64px] bg-[color:var(--blue)] rounded-t-[56px]  pt-80 pb-[calc(48px+56px)]">
      <div class="container flex flex-wrap gap-y-[24px] gap-x-[26px] justify-center">

        <?php
        $about_blocks = [
          ['img' => './assets/img/about/icon-1.svg', 'text' => "Индивидуальный подход по оплате к каждому в части покупки-продажи запчастей"],
          ['img' => './assets/img/about/icon-2.svg', 'text' => "Складирование и хранение товара на нашем складе "],
          ['img' => './assets/img/about/icon-3.svg', 'text' => "Доставим до объекта на нашем транспорте"],
          ['img' => './assets/img/about/icon-4.svg', 'text' => "Для постоянных клиентов — действуют скидки"],
          ['img' => './assets/img/about/icon-5.svg', 'text' => "Гарантия оригинальности запчастей (сертификаты и паспорта качества)"],
        ];

        for ($i = 0; $i < count($about_blocks); $i++) :
        ?>

          <div class="border-4 group hover:scale-105 transition-transform border-white p-8 rounded-[24px] flex flex-col justify-between">
            <div> <img src="<?= $about_blocks[$i]['img'] ?>" alt="<?= $about_blocks[$i]['img'] ?>"> </div>
            <p class="max-w-[272px] text-white text-[16px] leading-[100%] ">
              <?= $about_blocks[$i]['text'] ?>
            </p>
          </div>

        <?php endfor; ?>

      </div>
    </section>


    <section style="background-image: url('./assets/img/about/about-logo-bg.png'); background-position: 350px;" class="-mt-[56px]  bg-no-repeat rounded-t-[56px] bg-white pb-[240px]">
      <div class="container flex justify-end  pt-48">

        <div class="max-w-[516px]">
          <h3 class=" mb-[37px]
              heading relative
              before:absolute before:content-[''] before:-bottom-[8px] before:left-0 before:w-[160px]
              before:h-[3px] before:rounded-lg before:bg-[color:var(--blue-2)]
            ">
            О нас
          </h3>

          <div class="text-[16px] text-black leading-[130%] flex flex-col gap-y-10">

            <p>
              Компания «Комплексное промышленное снабжение» является структурным
              подразделением, специализирующимся на поставках
              запчастей (грузовых вагонов и локомотивов) по всей территории России, а также
              Азии — Казахстана, Узбекистана, Туркменистана, Кыргызстана,
              Таджикистана, Кавказа – Грузия, Азербайджан и Ближнего Востока – Иран.
            </p>
            <p>
              Мы сотрудничаем с крупными отечественными и зарубежными предприятиями,
              специализирующимися на изготовлении запчастей для вагонов и локомотивов.
              Крупные поставки товара позволяют нам осуществлять продажу по
              низким ценам и всегда иметь необходимые детали на складах в большом количестве.
            </p>
            <p>
              Компания «Комплексное промышленное снабжение» предлагает комплексные решения для
              клиентов производственных и ремонтных отраслях экономики,
              предоставляя товар необходимого качества и
              высочайший уровень обслуживания. В результате, Вы получите
              плановое, оперативное и эффективное снабжение
              предприятия в нужном ассортименте и по
              выгодным ценам.
            </p>



          </div>

        </div>

      </div>
    </section>



    <section>
      <div class="container">
        <div>
          <h3 class="heading text-center mb-24"> Каталог </h3>
        </div>


        <div class="grid grid-cols-3 gap-x-8 justify-center xl:grid-cols-1 xl:grid-rows-3 xl:gap-x-0 xl:gap-y-8">
          <?php
          $catalog_layout = [
            ['img' => './assets/img/main/catalog/catalog-main-page-1.png', 'title' => 'Запчасти на грузовые вагоны'],
            ['img' => './assets/img/main/catalog/catalog-main-page-2.png', 'title' => 'Запчасти на локомотивы '],
            ['img' => './assets/img/main/catalog/catalog-main-page-3.png', 'title' => 'Услуги (логистика, хранение)'],
          ];

          for ($i = 0; $i < count($catalog_layout); $i++) : ?>

            <div class="border-2 border-[color:var(--blue-2)] flex flex-col justify-between gap-y-3 rounded-[24px] p-8">

              <div class="w-[222px] mx-auto">
                <img class="w-full" src="<?= $catalog_layout[$i]['img'] ?>" alt="<?= $catalog_layout[$i]['img'] ?>">
              </div>

              <p class="text-center font-semibold text-[18px] leading-[100%] text-[color:var(--dark)]"> <?= $catalog_layout[$i]['title'] ?> </p>

              <button class="w-full text-center border border-[color:var(--blue-2)] py-2 rounded-full text-[14px]"> Подробнее </button>

            </div>

          <?php endfor; ?>
        </div>

      </div>
    </section>



    <section class="mt-[152px]">
      <div class="container">
        <div class="grid grid-cols-3 grid-rows-2 gap-8 lg:grid-cols-1 lg:grid-rows-6">
          <h3 class="heading xl:text-center"> Реализованные запчасти </h3>

          <?php
          $realized_metall = [
            ['how' => '440', 'wht' => 'шт', 'subtitle' => 'Колесные пары (СОНК, НОНК)'],
            ['how' => '874', 'wht' => 'шт', 'subtitle' => 'Цельнокатаные колеса'],
            ['how' => '656', 'wht' => 'тонн', 'subtitle' => 'Запчасти на грузовые вагоны'],
            ['how' => '32', 'wht' => 'тонны', 'subtitle' => 'Запчасти на локомотивы'],
            ['how' => '134', 'wht' => 'лица (юр и физ)', 'subtitle' => 'Довольных клиентов'],
          ];
          for ($i = 0; $i < count($realized_metall); $i++) :
          ?>
            <div class="pb-8 border-b-4 border-[color:var(--blue-2)]">

              <div class="text-[color:var(--blue-2)] xl:text-center">
                <span class="text-[80px] font-black leading-[110%] xl:text-[64px]"><?= $realized_metall[$i]['how'] ?></span>
                <span class="font-semibold text-[24px] leading-[110%]"><?= $realized_metall[$i]['wht'] ?></span>
              </div>

              <p class="font-semibold text-[14px] leading-[110%] xl:text-center text-[color:var(--dark)] mt-4"> <?= $realized_metall[$i]['subtitle'] ?></p>


            </div>
          <?php endfor; ?>

        </div>
      </div>
    </section>


    <section class="relative mt-[175px]">
      <div class="absolute right-0 top-1/2 -translate-y-1/2 max-w-5xl 2xl:hidden"> <img src="./assets/img/main//pre-footer-tematic.png" alt=""> </div>
      <?php
      $list_benefits = [
        'Выгодное ценообразование',
        'Широкий ассортимент товаров',
        'Репутация на рынке с 2013 года',
        'Возможность доставки «под ключ»',
        'Система лояльности постоянным клиентам',
        'Различные варианты условий поставки и покупки',
        'Услуги по подготовке и мелкому ремонту запчастей',
      ]
      ?>
      <div class="container">
        <div>
          <h3 class="heading"> Наши преимущества </h3>
          <ul class="list-disc list-inside marker:text-[color:var(--blue-2)] marker:text-2xl flex flex-col gap-y-8 mt-24">
            <?php for ($i = 0; $i < count($list_benefits); $i++) : ?>
              <li class=""> <?= $list_benefits[$i] ?> </li>
            <?php endfor; ?>
          </ul>
        </div>
      </div>
    </section>



    <section class="bg-[color:var(--blue)] mt-96 rounded-t-[56px] pt-80 pb-[calc(76px+56px)]">
      <div class="container flex justify-between gap-x-44 lg:flex-col">

        <div class="w-1/2 lg:w-full">
          <p class="mb-24 text-white font-black text-[36px] leading-[110%]"> Связаться с нами </p>
          <form action="./index.php" method="POST">
            <div class="flex flex-col gap-y-8 mb-12">
              <input class="bg-[#3C58A0] w-full px-10 py-3 text-white border-b border-white " type="text" placeholder="Имя">
              <input class="bg-[#3C58A0] w-full px-10 py-3 text-white border-b border-white " type="text" placeholder="Почтовый ящик">
              <input class="bg-[#3C58A0] w-full px-10 py-3 text-white border-b border-white " type="text" placeholder="Телефон">
            </div>
            <button type="submit" class="w-full bg-white rounded-full text-[color:var(--blue-2)] text-center py-4"> Отправить </button>
          </form>
        </div>


        <div id="map" class="w-1/2 lg:w-full">

          <p class="mb-24 text-white font-black text-[36px] leading-[110%]"> Контакты компании </p>
          <div>
            <div class="rounded-[24px] overflow-hidden">
              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A806805da0c81fe4959e9f83ca05ab2dffad41806d0bf221c944c3df9a81c3ea2&amp;width=100%25&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <p class="text-[14px] text-white leading-[130%] my-8">
              Челябинская область, п. Новый Кременкуль, ул. Центральная, д. 1, этаж 3
            </p>
            <div class="text-[14px] text-white leading-[130%] flex gap-x-16 gap-y-8 flex-wrap">
              <p> <a class="flex items-center gap-x-2" href="tel:+79320150606"> <img src="./assets/img/social/phone-white.svg" alt="иконка телефона"> +7 (932) 015-06-06 </a> </p>
              <p> <a class="flex items-center gap-x-2" href="mailto:kps74@inbox.ru"> <img src="./assets/img/social/mail-white.svg" alt="иконка письма"> kps74@inbox.ru </a> </p>
            </div>
          </div>


        </div>


      </div>
    </section>


    <section class="bg-white -mt-32 pt-80 rounded-t-[56px] pb-56  ">
      <div class="container">
        <h3 class="heading text-center pb-24"> Наши дилеры </h3>


        <div class="flex justify-between gap-x-44 lg:flex-col lg:gap-y-12">
          <div class="flex flex-wrap w-1/2 lg:w-full">

            <button class="diller-active"> Республика Казахстан </button>
          </div>
          <div class="w-1/2 lg:w-full">
            <div class="rounded-[24px] overflow-hidden">
              <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A806805da0c81fe4959e9f83ca05ab2dffad41806d0bf221c944c3df9a81c3ea2&amp;width=100%25&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
            <p class="text-[14px] text-[color:var(--dark)] leading-[130%] my-8">
              Республика Казахстан, Костанайская область,г. Рудный, улица Топоркова, д.7, офис. 310
            </p>
            <div class="text-[14px] text-[color:var(--dark)] leading-[130%] flex flex-wrap gap-x-16 gap-y-3">
              <p> <a class="flex items-center gap-x-2 whitespace-nowrap" href="tel:+77773722089"> <img src="./assets/img/social/phone.svg" alt="иконка телефона"> +7 (777) 372-20-89 </a> </p>
              <p> <a class="flex items-center gap-x-2 whitespace-nowrap" href="tel:+77051939931"> <img src="./assets/img/social/phone.svg" alt="иконка телефона"> +7 (705) 193-99-31 </a> </p>
              <p> <a class="flex items-center gap-x-2 whitespace-nowrap" href="mailto:kps74@inbox.ru"> <img src="./assets/img/social/mail.svg" alt="иконка письма"> kps74@inbox.ru </a> </p>
            </div>
          </div>
        </div>


      </div>
    </section>


  </main>

</body>

</html>