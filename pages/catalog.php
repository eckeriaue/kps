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
  <script defer src="../assets/js/index.js"></script>

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



  <main class="container mb-48 font-['inter']">

    <div>
      <h1 class="heading mt-[72px] mb-[48px] text-center"> Запчасти на грузовые вагоны </h1>

      <ul class="grid grid-cols-4 gap-8 2xl:grid-cols-3 lg:grid-cols-2 md:grid-cols-1">



        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>



        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>


        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>



        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>




        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>



        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>


        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>



        <li class="rounded-3xl p-8 shadow-product">
          <div class="w-full mx-auto"> <img class="w-full" src="./products/product1.jpg" alt="Шайба тарельчатая 100.10.051-0"> </div>
          <h3 class="text-[color:var(--dark)] max-h-[32px] text-ellipsis overflow-hidden font-medium text-[16px] mt-4 mb-3 leading-[100%]">
            Шайба тарельчатая 100.10.051-0
          </h3>

          <span class=" flex items-center gap-x-[5px] text-[#707070] text-[12px] leading-[100%] font-normal">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 2.25V10.25L2.25 5.25H9.875V3.75C9.875 3.61739 9.82232 3.49021 9.72855 3.39645C9.63479 3.30268 9.50761 3.25 9.375 3.25H6L4.75 1.75H1.5C1.36739 1.75 1.24021 1.80268 1.14645 1.89645C1.05268 1.99021 1 2.11739 1 2.25V2.25Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
              <path d="M10 10.25L11 5.25H2.203L1 10.25H10Z" stroke="#1860CF" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            Колесная пара
          </span>

          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block my-2"> Чертеж: 100.10.051-0 </span>
          <span class="truncate text-[14px] text-[color:var(--dark)] font-normal leading-[100%] block mb-4"> Вес, кг: 2,4 </span>

          <button class="bg-[color:var(--blue-2)] active:scale-95 transition-transform open-window rounded-[40px] block w-full text-white py-2"> Заказать </button>

        </li>


      </ul>

    </div>

  </main>




  <div id="modals" class="transition-all fixed top-0 left-0 w-full h-full z-20   opacity-0 pointer-events-none invisible">
    <div class="relative open-window flex items-center justify-center w-full h-full before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-black before:opacity-75 before:backdrop-blur-xl">


      <div class="modal-form w-1/2 lg:w-4/5 bg-white p-12 rounded-[56px] z-[30] scale-75 transition-transform">
        <div class="heading flex justify-between">
          <p>Свяжитесь с нами</p> <span class="font-normal open-window cursor-pointer"> &times; </span>



        </div>
        <form action="./handlers/send.php" method="POST">
          <div class="flex flex-col gap-y-8 py-24">
            <input name="name" class="bg-transparent w-full px-10 py-3 text-[color:var(--dark)] border-b border-[color:var(--dark)] " type="text" placeholder="Имя">
            <input name="email" class="bg-transparent w-full px-10 py-3 text-[color:var(--dark)] border-b border-[color:var(--dark)] " type="text" placeholder="Почтовый ящик">
            <input name="phone" class="bg-transparent w-full px-10 py-3 text-[color:var(--dark)] border-b border-[color:var(--dark)] " type="text" placeholder="Телефон">
          </div>
          <button type="submit" class="w-full bg-[color:var(--blue-2)] rounded-full text-white text-center py-4"> Отправить </button>
        </form>
      </div>



    </div>
  </div>



  <footer class="h-[88px] flex justify-center items-center bg-[#E5E5E5] text-[12px] leading-[107%]">
    © 2022 ООО «КПС»
  </footer>

</body>

</html>