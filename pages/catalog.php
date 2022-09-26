<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/index.css">
  <!-- <style>
    body * {
      outline: 1px solid red;
    }
  </style> -->
  <!-- <script defer src="../assets/js/index.js"></script> -->

</head>

<body class="overflow-hiiden">

  <header class="container mt-4">
    <menu class="flex justify-between">

      <div>
        <a href="/" class="flex items-center gap-x-3 text-[color:var(--blue)]
    font-semibold text-lg leading-[22px] whitespace-nowrap">
          <img src="../assets/img/logo.png" alt="logo">
          <h1> ООО «КПС» </h1>
        </a>
      </div>

      <div id="mobile-menu" class="xl:translate-x-full xl:z-10 xl:fixed xl:overflow-hidden xl:top-o xl:right-0 xl:shadow-lg xl:bg-white xl:h-full xl:w-1/3 lg:w-1/2 md:w-2/3 xl:p-12 xl:-mt-4 xl:transition-transform">
        <span class="open-window text-xl cursor-pointer hidden xl:block"> &times; </span>
        <ul class="flex items-center h-full xl:flex-col xl:gap-y-10 gap-x-14">



          <li>
            <a href="/" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
              Главная
            </a>
          </li>
          <li>
            <a href="http://kps174.ru/index.php?id=33" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
              Каталог
            </a>
          </li>
          <li>
            <a href="#" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
              Партнерство
            </a>
          </li>
          <li>
            <a href="#" class="hover:text-[color:var(--blue-2)] transition-colors h-full block">
              Контакты
            </a>
          </li>


        </ul>

        <div class="hidden lg:flex lg:-mt-12 lg:gap-x-4 lg:justify-end">
          <a href="tel:+79320150606" class="flex gap-x-2 items-center whitespace-nowrap text-[12px]">
            <img src="../assets/img/social/phone.svg" alt="phone">
          </a>
          <a href="#"><img src="../assets/img/social/whatsapp.svg" alt="whatsapp"></a>
          <a href="#"><img src="../assets/img/social/telegram.svg" alt="telegram"></a>
        </div>

      </div>



      <div class="flex items-center gap-x-4">
        <span class="lg:hidden">
          <a href="tel:+79320150606" class="flex gap-x-2 items-center whitespace-nowrap text-[12px]">
            <img src="../assets/img/social/phone.svg" alt="phone">
            +7 (932) 015-06-06
          </a>
        </span>
        <a class="lg:hidden" href="#"><img src="../assets/img/social/whatsapp.svg" alt="whatsapp"></a>
        <a class="lg:hidden" href="#"><img src="../assets/img/social/telegram.svg" alt="telegram"></a>


        <button class=" open-window
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



  <main class="container">

    <div>
    </div>

  </main>


  <footer class="h-[88px] flex justify-center items-center bg-[#E5E5E5] text-[12px] leading-[107%]">
    © 2022 ООО «КПС»
  </footer>

</body>

</html>