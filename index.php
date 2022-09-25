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



    <section class="mt-[64px] bg-[color:var(--blue)] rounded-t-[56px]  pt-80">
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

          <div class="border-4 border-white p-8 rounded-[24px] flex flex-col justify-between">
            <div> <img src="<?= $about_blocks[$i]['img'] ?>" alt="<?= $about_blocks[$i]['img'] ?>"> </div>
            <p class="max-w-[272px] text-white text-[16px] leading-[100%] ">
              <?= $about_blocks[$i]['text'] ?>
            </p>
          </div>

        <?php endfor; ?>

      </div>
    </section>


    <section>
      <div class="container"></div>
    </section>



  </main>


</body>

</html>