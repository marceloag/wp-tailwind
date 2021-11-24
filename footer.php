<!-- FOOTER -->
    <footer>
        <div class="row full">
            <div class="large-12 medium-12 small-12 columns">

                <div class="large-6 medium-6 small-12 columns logo large-text-left medium-text-left">
                    <a href="#">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo_refugio.png" alt="">
                    </a>
                </div>

                <div class="large-6 medium-6 small-12 columns logo large-text-right medium-text-right">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo_ancud.png" alt="">
                </div>
            </div>

            <div class="large-12 medium-12 small-12 columns text-center">
                <ul>
                    <a href="">
                        <li>reservas de cancelación</li>
                    </a>
                    <a href="">
                        <li>tenencia de mascotas</li>
                    </a>
                    <a href="">
                        <li>check in / check out</li>
                    </a>
                    <a href="">
                        <li>promociones</li>
                    </a>
                    <a href="">
                        <li>temporadas (alta/baja)</li>
                    </a>
                </ul>
            </div>
        </div>
    </footer>

<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 15,
            nav: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false
                }
            }
        })
    </script>


</body>

</html>
