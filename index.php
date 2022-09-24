<?php
include_once './assets/include/head.php';
require_once './assets/include/components/markup.php';
$markup = new Markup();
?>


<div>


  <?php
  include_once './assets/include/header.php';
  ?>

  <main>
    <section class="mt-[177px] relative">
      <div class="absolute right-0 top-1/2 -translate-y-1/2">
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
          <?= $markup->btn('Оставить заявку', 'fill', 'open-modal-window') ?>
          <?= $markup->btn('Агентский договор', 'border') ?>
        </div>



      </div>
    </section>
  </main>




</div>

<?php include_once './assets/include/footer.php' ?>