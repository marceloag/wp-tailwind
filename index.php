<?php get_header(); ?>
    <section>
        <div class="row full" id="nosotros">
            <div class="large-10 medium-11 small-12 columns large-centered medium-centered">
                <div class="large-6 medium-6 small-12 columns texto">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo_aike.png" width="300" alt="">

                    <p> Aike Tours es una agencia 100% magallánica con viajes al extranjero desde Punta Arenas y Santiago. Debido a la contingencia internacional nos comprometemos junto a nuestros proveedores para brindar experiencias seguras para los pasajeros, queremos que puedas cumplir tu sueño y nunca perder la magia de viajar.</p>
                    
                    <a href="#" class="button tiny">Ver Más</a>
                </div>

                <div class="large-6 medium-6 small-12 columns text-center">
                    <img src="<?php bloginfo('template_directory'); ?>/img/modelo.png" alt="" width="400">
                </div>
            </div>
        </div>

        <div class="row full" id="servicios">
            <div class="large-10 medium-11 small-12 columns large-centere medium-centered">
                <div class="text-center titulo">
                    <h2>Nuestro Servicios</h2>
                </div>

                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="icon text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icon_avion.png" alt="">
                        </div>
                        
                        <div class="text text-center">
                           <h4>Pasajes aéreos</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icon_bus.png" alt="">
                        </div>
                        
                        <div class="text text-center">
                           <h4>Traslados</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icon_hotel.png" alt="">
                        </div>
                        
                        <div class="text text-center">
                           <h4>Hoteles</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icon_mapa.png" alt="">
                        </div>
                        
                        <div class="text text-center">
                           <h4>Excursiones</h4>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="icon text-center">
                            <img src="<?php bloginfo('template_directory'); ?>/img/icon_salud.png" alt="">
                        </div>
                        
                        <div class="text text-center">
                           <h4>Seguro de Viajes </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row full" id="destinos">
            <div class="large-10 medium-11 small-12 columns large-centere medium-centered">

                <div class="large-12 medium-12 small-12 columns">
                    <div class="text-center titulo">
                        <h2>Nuestro destinos</h2>
                    </div>
                </div>

                <div class="large-12 medium-12 small-12 columns">
                    <ul class="large-block-grid-3  medium-block-grid-3 small-block-grid-1 contenedor_item">
                        <?php
                            $the_query = new WP_Query(array(
                            'post_type' => 'programas',
                            'showposts' => 15, 
                            'posts_per_page'  => -1,
                            'meta_key'      => 'fecha',
                            'order'       => 'DESC'
                            ));
                        ?>
                            <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li>
                                <div class="panel">
                                    <div class="img_destino">
                                        <?php the_post_thumbnail('homeprograma');?>
                                    </div>

                                    <div class="texto_destino text-center">
                                        <a href="#">
                                            <h2 class="nombre"><?php the_title();?></h2>
                                        </a>
                                        <h5><?php get_field('duracion')?></h5>


                                        <h3 class="valor"><?php get_field('precio')?></h3>
                                        <p>precio final p/persona</p>

                                    </div>
                                </div>
                            </li>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                        <li>
                            <div class="panel">
                                <div class="img_destino">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_miami.png" alt="">
                                </div>

                                <div class="texto_destino text-center">
                                    <a href="#">
                                        <h2 class="nombre">Miami</h2>
                                    </a>
                                    <h5>7 días 6 noches</h5>


                                    <h3 class="valor">$630.000</h3>
                                    <p>precio final p/persona</p>

                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="panel">
                                <div class="img_destino">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_miami.png" alt="">
                                </div>

                                <div class="texto_destino text-center">
                                    <a href="#">
                                        <h2 class="nombre">Miami</h2>
                                    </a>
                                    <h5>7 días 6 noches</h5>


                                    <h3 class="valor">$630.000</h3>
                                    <p>precio final p/persona</p>

                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="panel">
                                <div class="img_destino">
                                    <img src="<?php bloginfo('template_directory'); ?>/img/img_miami.png" alt="">
                                </div>

                                <div class="texto_destino text-center">
                                    <a href="#">
                                        <h2 class="nombre">Miami</h2>
                                    </a>
                                    <h5>7 días 6 noches</h5>


                                    <h3 class="valor">$630.000</h3>
                                    <p>precio final p/persona</p>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="row full" id="banner_informativo">
            <div class="large-8 medium-10 small-12 columns large-centered medium-centered">
                <div class="texto text-center">
                    <h1>solicita tu video llamada</h1>
                    <h4>te orientamos para que vivas <br> la mejor experiencia</h4>
                </div>

                <div class="horario text-center">
                    <h4>de lunes a sábado entre las</h4>
                    <h1>10:30 y 19:00 hrs</h1>
                </div>
            </div>
        </div>


        <div class="row full">
            <div class="large-12 medium-12 small-12 columns" id="redes_sociales">
                <div class="large-10 medium-11 small-12 columns large-centered medium-centered">

                    <div class="large-6 medium-6 small-12 columns text-center">
                        <div class="facebook">
                            <a href="https://www.facebook.com/aiketours-109829180469000/" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/img/icon_facebook.png" alt="" class="icono">
                            </a>
                        </div>
                    </div>

                    <div class="large-6 medium-6 small-12 columns text-center">
                        <div class="instagram">
                            <a href="#" target="_blank">
                                <img src="<?php bloginfo('template_directory'); ?>/img/icon_instagram.png" alt="" class="icono">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
