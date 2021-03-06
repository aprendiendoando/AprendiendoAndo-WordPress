<footer class="footer box">
        <figure class="sin-margin">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php the_field('header_logo', 'option'); ?>" alt="<?php bloginfo('name'); ?>">
            </a>
        </figure>
        <div class="footer__mail">
            <i class="aprendiendoando-correo"></i>
            <a class="decoration-none" href="mailto:<?php the_field('header_correo_principal', 'option'); ?>?subject=<?php bloginfo('name'); ?>">
                <?php the_field('header_correo_principal', 'option'); ?>
            </a>
        </div>
        <?php
           // https://developer.wordpress.org/reference/functions/set_query_var/
            set_query_var('flex', 'd-flex');
            get_template_part('parts/share-content');
        ?>
    </footer> <!-- end Footer -->
    <?php wp_footer(); ?>

    <!-- Add Js Slick Library -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
        (function($) {
            $(document).ready(function() {
                $('.js-slick').slick({
                    dots: true,
                    lazyLoad: 'ondemand',
                    autoplay: true,
                    autoplaySpeed: 7000,
                    infinite: true,
                    fade: true,
                    cssEase: 'linear',
                    arrows: 'false'
                });
            });
        })(jQuery);
    </script>    
</body>

</html>