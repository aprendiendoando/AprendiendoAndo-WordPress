<?php get_header(); ?>
    <main class="main">
        <?php
                if( have_posts() ):
                    while( have_posts() ): the_post();
                        the_title();
                        the_content();
                    endwhile;
                endif;

        ?>
        <section class="box box__courses">
            <?php
                // check if the repeater field has rows of data
                if( have_rows('caja','option') ):
                    $bandera = 0;
                    // loop through the rows of data
                    while ( have_rows('caja','option') ) : the_row();
            ?>
                        <article class="box__courses--one <?php if ($bandera != 0) { echo 'box__courses--dos'; }?> ">
                            <a href="<?php the_sub_field('url_de_la_seccion', 'option'); ?>">
                                <figure>
                                    <img src="<?php the_sub_field('populares_icono', 'option'); ?>" alt="" width="103" height="118">
                                </figure>
                                <div>
                                    <h4><?php the_sub_field('titulo_de_la_seccion', 'option'); ?></h4>
                                    <p><?php the_sub_field('subtitulo_de_la_seccion', 'option'); ?></p>
                                </div>
                            </a>
                        </article> <!-- End Courses -->
            <?php
                    $bandera++;
                    endwhile;
                endif;
            ?>

        </section> <!-- End Courses -->
        <section class="box list-courses">
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--free">Gratis</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--free">Gratis</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--premiun">Premium - $ 10</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--free">Gratis</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--free">Gratis</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
            <article class="list-courses__item">
                <figure class="list-courses__image sin-margin">
                    <a href="single-courses.html" title="Curso de Bootstrap">
                        <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
                    </a>
                    <figcaption class="price price--premiun">Premium - $ 10</figcaption>
                </figure>
                <div class="list-courses__information">
                    <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                        <h3 class="sin-margin">Bootstrap, Lo mejor del mundo Parte 1</h3>
                    </a>
                    <p>Conoce el maravilloso framework que ha revolucionado la manera de trabajar para web</p>
                </div>
                <footer class="list-courses__author">
                    <figure class="sin-margin">
                        <a href="single-courses.html" class="decoration-none" title="Curso de Bootstrap">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                            <figcaption>Yan Vallejo</figcaption>
                        </a>
                    </figure>
                    <div>
                        <a href="#" class="decoration-none">Diseño Web</a>
                        <span>11 Videos 3 Horas</span>
                    </div>
                </footer>
            </article>
        </section> <!-- End List Courses -->
            <a href="cursos.html" class="button button--main mb-5 button--animation" title="Ver todos los cursos">Ver todos los cursos</a>
        <section class="register">
            <div class="box box--center">
                <article class="register__testimonial">
                    <strong class="text--uppercase">algunos estudiantes cuentan su experiencia</strong>
                    <div class="register__user">
                        <figure class="sin-margin">
                            <img src="<?php echo get_template_directory_uri() ?>/img/yan-arlex-vallejo.jpg" alt="">
                        </figure>
                        <div class="register__information">
                            <h3>Yan Vallejo</h3>
                            <span>Bootstrap lo mejor 1</span>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</p>
                </article>
                <article class="register__newsletter">
                    <strong>REGISTRARTE AHORA</strong>
                    <p>Obten acceso a mas de 30 cursos, 100 horas de video, 30 proyectos practicos e información semanal via newsletter.</p>
                    <form action="#" class="text-center">
                        <input type="text" name="correo" id="correo" placeholder="example@gmail.com">
                        <input type="submit" value="Suscribirse" class="button button--main">
                    </form>
                </article>
            </div>
        </section> <!-- End Register -->
    </main> <!-- End Main -->
<?php get_footer(); ?>
