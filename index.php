<?php get_header(); ?>
    <section class="w-full relative block shadow-lg shadow-slate-600" id="hero">
      <img src="<?php bloginfo("template_directory");?>/img/hero.jpg" alt="Flores" class="object-cover w-full">
      <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex flex-col gap-3">
          <h1 class="[text-wrap:balance] text-6xl font-serif text-[#2D1D0C]">Lorem Ipsum dolor sit amet</h1>
          <a href="" class="text-[#2D1D0C]"></a>
      </div>
    </section>

    <div class="w-full flex flex-row items-center justify-center py-4 my-4">
      <img src="<?php bloginfo("template_directory")?>/img/floresdeco.png" alt="separator">
    </div>

    <section class="w-full flex flex-row gap-4 px-10">
      <div class="w-1/2 flex flex-col p-6">
        <img src="<?php bloginfo("template_directory")?>/img/lili.jpg" alt="Liliana Ortiz">
      </div>
      <div class="w-1/2 flex flex-col gap-4 p-10">
        <h1 class="  class="text-[#2D1D0C] text-6xl font-serif"">Qué Hacemos?</h1>
        <hr>
        <p>
            Cultivamos Flores y Berries en la Patagonia.
            Vendemos nuestros productos a través de terceros (BtoB) y entregas semanales de canasta de productos regionales a elección a nuestra cartera de clientes en Punta Arenas (BtoC)
            Somos Florería On Line  de flores frescas y deshidratadas, en temporada utilizando nuestros cultivos y con flores que traemos del Terminal de Flores en Santiago.
            Exportamos Peonias a través de Chilfresh.
            Asesoramos a Empresas en el Diseño, Educación y Acompañamiento en el desarrollo de áreas verdes utilizando flora nativa.
        </p>
        <hr>
      </div>
    </section>

    <section class="bg[#F2EEEE] my-4 py-6 px-10 bg-[(./img/pattern.png)] bg-no-repeat bg-cover">
      <h1  class="text-[#2D1D0C] text-6xl font-serif">Distribuidores</h1>
    </section>
<?php get_footer(); ?>
