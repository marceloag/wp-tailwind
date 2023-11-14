<?php get_header(); ?>
    <section class="w-full relative block shadow-lg shadow-slate-600" id="hero">
      <img src="<?php bloginfo("template_directory");?>/img/hero.jpg" alt="Flores" class="object-cover w-full">
      <div class="absolute left-1/2 -translate-x-1/2 top-1/2 -translate-y-1/2 flex flex-col gap-3 w-2/5 items-center justify-center text-center">
          <!-- <h1 class="[text-wrap:balance] text-6xl font-serif text-[#2D1D0C]">Lorem Ipsum dolor sit amet</h1> -->
          <a href="" class="text-[#2D1D0C] w-3/5 py-4 text-center border-solid border-2 border-[#2D1D0C] flex flex-row items-center justify-around uppercase">
            Nuestros Productos
            <svg width="30" height="18" viewBox="0 0 30 18" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.5608 0.73003L28.9331 8.59558L28.9802 8.63638C29.1232 8.77082 29.2003 8.94381 29.2113 9.11977V9.21276C29.2003 9.38871 29.1232 9.5617 28.9802 9.69614L28.9389 9.72918L20.5608 17.6025C20.2508 17.8938 19.7482 17.8938 19.4382 17.6025C19.1282 17.3112 19.1282 16.8389 19.4382 16.5477L26.5925 9.82391L1.41351 9.82449C0.975109 9.82449 0.61972 9.49055 0.61972 9.07861C0.61972 8.66667 0.975109 8.33273 1.41351 8.33273L26.406 8.33214L19.4382 1.78487C19.1282 1.49358 19.1282 1.02132 19.4382 0.73003C19.7482 0.438745 20.2508 0.438745 20.5608 0.73003ZM28.5087 9.07798L19.9995 17.0751L28.4188 9.16642L28.4189 9.16353L28.3719 9.12305L28.3239 9.07798H28.5087Z" fill="#3B2E20"/>
            </svg>
          </a>
      </div>
    </section>

    <div class="w-full flex flex-row items-center justify-center py-4 my-4">
      <img src="<?php bloginfo("template_directory")?>/img/floresdeco.png" alt="separator">
    </div>

    <!-- Que hacemos -->
    <section class="w-full flex flex-row justify-center items-center">
      <div class="w-8/12 flex flex-row gap-4 px-10">
        <div class="w-1/2 flex flex-col p-6">
          <img src="<?php bloginfo("template_directory")?>/img/lili.webp" alt="Liliana Ortiz" class=" border-b-[10px] border-l-[10px] border-solid border-[#EDCACA]">
        </div>
        <div class="w-1/2 flex flex-col gap-4 p-10">
          <h1 class="text-[#2D1D0C] font-serif">Qué Hacemos?</h1>
          <hr>
          <p>
            <ul class="list-disc leading-6">
              <li>Cultivamos Flores y Berries en la Patagonia.</li>
              <li>Vendemos nuestros productos a través de terceros (BtoB) y entregas semanales de canasta de productos regionales a elección a nuestra cartera de clientes en Punta Arenas (BtoC)</li>
              <li>Somos Florería On Line  de flores frescas y deshidratadas, en temporada utilizando nuestros cultivos y con flores que traemos del Terminal de Flores en Santiago.
              </li>
              <li>Exportamos Peonias a través de Chilfresh.</li>
              <li>Asesoramos a Empresas en el Diseño, Educación y Acompañamiento en el desarrollo de áreas verdes utilizando flora nativa.</li>
            </ul>
          </p>
          <hr>
        </div>
      </div>
    </section>

    <!-- Distribuidores -->
    <section class="bg-[#F2EEEE] my-4 p-10 bg-[url(./img/pattern.png)] bg-no-repeat bg-cover w-full flex flex-col items-center justify-center">
      <h1  class="text-[#2D1D0C] font-serif my-4">Distribuidores</h1>
      <ul class=" flex flex-row gap-8 items-center justify-center w-10/12 my-10">
        <li><img src="<?php bloginfo("template_directory")?>/img/lavianda.png" alt="" class="mix-blend-multiply"></li>
        <li><img src="<?php bloginfo("template_directory")?>/img/corcoran.png" alt="" class="mix-blend-multiply"></li>
        <li><img src="<?php bloginfo("template_directory")?>/img/lavianda.png" alt="" class="mix-blend-multiply"></li>
        <li><img src="<?php bloginfo("template_directory")?>/img/corcoran.png" alt="" class="mix-blend-multiply"></li>
      </ul>
    </section>

    <!-- Galería -->
    <section id="gallery" class="flex w-full flex-row items-center justify-center my-10 p-10">
      <div class="w-9/12">
        <div class="grid grid-cols-4 grid-rows-2 gap-8">
          <div class="row-span-2"><img src="<?php bloginfo("template_directory")?>/img/peonias01.webp" alt="Peonias" class="w-full object-cover min-h-0 h-full"></div>
          <div class="col-span-3"><img src="<?php bloginfo("template_directory")?>/img/frutillas.webp" alt="Peonias" class="w-full object-cover min-h-0 h-full"></div>
          <div class="col-start-2 row-start-2"><img src="<?php bloginfo("template_directory")?>/img/ramo.webp" alt="Peonias" class="w-full object-cover min-h-0 h-full"></div>
          <div class="col-start-3 row-start-2"><img src="<?php bloginfo("template_directory")?>/img/frambuesa.webp" alt="Peonias" class="w-full object-cover min-h-0 h-full"></div>
          <div class="col-start-4 row-start-2"><img src="<?php bloginfo("template_directory")?>/img/trabajadores.webp" alt="Peonias" class="w-full object-cover min-h-0 h-full"></div>
        </div>
      </div>
    </section>

    <!-- Instagram -->
    <section class="w-10/12">
      <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </section>

<?php get_footer(); ?>
