<footer class="footer box">
        <figure class="sin-margin">
            <a href="#">
                <img src="<?php echo get_template_directory_uri() ?>/img/aprendiendoando.png" alt="AprendiendoAndo" width="223" height="">
            </a>
        </figure>
        <div class="footer__mail">
            <i class="aprendiendoando-correo"></i>
            <a class="decoration-none" href="#">yan@aprendiendoando.com</a>
        </div>
        <ul class="list-none d-flex">
            <li>
                <a class="decoration-none" href="https://twitter.com/yavallejo" title="Twitter Yan Arlex Vallejo" target="_blank">
                    <i class="aprendiendoando-twitter"></i>
                </a>
            </li>
            <li>
                <a class="decoration-none" href="https://facebook.com/aprendiendoando" title="Facebook AprendiendoAndo" target="_blank">
                    <i class="aprendiendoando-facebook"></i>
                </a>
            </li>
            <li>
                <a class="decoration-none" href="https://www.youtube.com/aprendiendoando" title="Youtube Aprendiendoando" target="_blank">
                    <i class="aprendiendoando-youtube"></i>
                </a>
            </li>
            <li>
                <a class="decoration-none" href="http://www.aprendiendoando.com/" title="RSS Aprendiendoando" target="_blank">
                    <i class="aprendiendoando-rss"></i>
                </a>
            </li>
        </ul>
    </footer> <!-- end Footer -->
    <?php wp_footer(); ?>
    <!-- Scripts -->


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')
    </script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

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