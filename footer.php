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
            get_template_part('share-content');
        ?>
    </footer> <!-- end Footer -->
    <?php wp_footer(); ?>
    <!-- Scripts -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
            (function (b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l; b[l] || (b[l] =
                    function () { (b[l].q = b[l].q || []).push(arguments) }); b[l].l = +new Date;
                e = o.createElement(i); r = o.getElementsByTagName(i)[0];
                e.src = 'https://www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
        ga('create', 'UA-XXXXX-X', 'auto'); ga('send', 'pageview');
    </script>
</body>

</html>