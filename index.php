<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>

  <header class="container mt-4">


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
              <a href="#" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
                <?= $menu[$i] ?>
              </a>
            </li>
          <?php endfor; ?>
        </ul>
      </div>



      <div class="flex items-center gap-x-4">
        <span>
          <a href="tel:+79320150606" class="flex gap-x-2 items-center text-[12px]">
            <img src="./assets/img/social/phone.svg" alt="phone">
            +7 (932) 015-06-06
          </a>
        </span>
        <a href="#"><img src="./assets/img/social/whatsapp.svg" alt="whatsapp"></a>
        <a href="#"><img src="./assets/img/social/telegram.svg" alt="telegram"></a>


        <button class="
          px-8 h-[56px] text-white bg-[color:var(--blue-2)]
          text-center rounded-full
          active:scale-95 transition-transform
          text-[14px] font-bold leading-[17px]
         ">
          Оставить заявку
        </button>

      </div>

    </menu>


  </header>







  <main>
    <section class="mt-[177px] relative">
      <div class="absolute right-0 top-1/2 -translate-y-1/2 -z-[1]">
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



        <div class="mt-[120px] max-w-[552px] grid grid-cols-2 gap-x-8">

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


        <div class="grid grid-cols-3 gap-x-8 justify-center">
          <?php
          $catalog_layout = [
            ['img' => './assets/img/main/catalog/catalog-main-page-1.png', 'title' => 'Запчасти на грузовые вагоны'],
            ['img' => './assets/img/main/catalog/catalog-main-page-2.png', 'title' => 'Запчасти на локомотивы '],
            ['img' => './assets/img/main/catalog/catalog-main-page-3.png', 'title' => 'Услуги (логистика, хранение)'],
          ];

          for ($i = 0; $i < count($catalog_layout); $i++) : ?>

            <div class="border-2 border-[color:var(--blue-2)] flex flex-col justify-between rounded-[24px] p-8">

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


  </main>


</body>

</html>