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
    <!-- Scripts -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-26861579-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-26861579-1');
	</script>



	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	     (adsbygoogle = window.adsbygoogle || []).push({
	          google_ad_client: "ca-pub-7099838184920040",
	          enable_page_level_ads: true
	     });
	</script>



</body>

</html>