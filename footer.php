<!-- FOOTER -->
    <footer class="bg-[#EDCACA] w-full p-20">
      <img src="<?php bloginfo('template_directory')?>/img/logo-cultivo-patagonia.png" alt="Cultivo Patagonia" class="object-contain mix-blend-multiply">
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
