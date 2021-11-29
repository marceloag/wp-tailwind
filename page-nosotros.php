<?php
/*
Template Name: Nosotros
*/
?>

<?php get_header(); ?>
  <section>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row full" id="contenedor_nosotros">
            <div class="large-6 medium-8 small-12 columns large-centered medium-centered">
               
                <div class="texto text-center">
                    <div class="titulo">
                        <h1><span> nosotros</span><br> arrayanes</h1>
                    </div>

                    <?php the_content();?>
                </div>
            </div>
        </div>


        <div class="row full collapse" id="mapa">
            <div class="large-12 medium-12 small-12 columns contenedor_ubicacion">

                <div class="large-6 medium-8 small-12 columns text-center large-centered medium-centered">
                    <div class="texto">

                        <div class="titulo">
                            <h1><span> refugio </span><br> campestre</h1>
                        </div>

                        <p>Localidad en punto de intersección de Cogomó y Choroihué, a 27 kms al sur de Ancud y a 70 kms de Castro; a 33 kms del futuro puente de Chacao.</p>
                    </div>
                </div>
            </div>

            <div class="large-12 medium-12 small-12 columns">
                <div class='embed-container'><iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2971.088479194741!2d-73.83003874876123!3d-41.86944277912095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96228dfe9a09e777%3A0xbffff2a3a9d628cd!2sLos%20Ulmos%20Propiedades!5e0!3m2!1ses!2scl!4v1637674387507!5m2!1ses!2scl' width='600' height='450' style='border:0;' allowfullscreen='' loading='lazy'></iframe></div>
            </div>
        </div>
    <?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>