<?php get_header(); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main title--single"><?php the_title(); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <aside class="box filterCourses">
            <div class="filterCourses__tags">
                <span>Categoría: </span>
                <?php
                    // https://codex.wordpress.org/Function_Reference/get_the_term_list
                    $term_list = get_the_term_list( get_the_ID(), 'course_category', '<ul class="ap-tags list-none"><li>', '</li><li>', '</li></ul>' );
                     if ( $term_list ) {
                        echo $term_list;
                        }
                ?>
            </div>
        </aside>
        <section class="box courseInformation ">
            <article class="courseInformation__content">
                <header class="mt-1">
                    <figure class="sin-margin">
                        <?php the_post_thumbnail('course-full'); ?>
                    </figure>
                </header>
                <h2 class="title--secundary">Descripción del curso</h2>
                <?php the_content( ); ?>

                <p>vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                <div class="courseSyllabus">
                    <h2 class="title--secundary">Listado de Temas</h2>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 1 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 2 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 1 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 3 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 4 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 5 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                    <div class="courseSyllabus__item">
                        <h4 class="courseSyllabus__title">Sesión 6 - Bootstrap Cambiara tu vida</h4>
                        <ol>
                            <li>Video Numero 1, información Introductoria</li>
                            <li>Video Numero 2, información Introductoria</li>
                        </ol>
                    </div>
                </div>
                <a href="#" class="button button--main ml-0 mt-2">Suscribirse</a>
            </article>
            <!-- End Content information course main -->
            <aside class="courseInformation__teacher text-center">
                <figure class="courseInformation__teacher--image rounded-circle">
                    <?php echo $course->get_instructor()->get_profile_picture(); ?>
                    <figcaption><?php echo $course->get_instructor_html(); ?></figcaption>
                </figure>
                <div class="courseInformation__teacher--price mt-2">
                    <strong class="courseInformation__teacher--titleSecundary">Precio</strong>
                    <span class="courseInformation__teacher--value ap-price">
                        <?php echo $course->get_price_html(); ?>
                    </span>
                </div>
                 <div class="courseInformation__teacher--otherInformation mt-2">
                    <strong class="courseInformation__teacher--titleSecundary">Duración</strong>
                    <span class="courseInformation__teacher--value"><?php echo $course->duration;?></span>
                 </div>
                <div class="courseInformation__teacher--otherInformation mt-2">
                    <strong class="courseInformation__teacher--titleSecundary">Contenido</strong>
                    <span class="courseInformation__teacher--value">10 videos</span>
                </div>
                <div class="courseInformation__teacher--button mt-2">
                    <a href="#" class="button button--main">Suscribirse</a>
                </div>
            </aside>
            <!-- End Content teacher,price, duration -->
        </section>
        <!-- Start Relationship Courses -->
        <section class="list-courses pb-5 featured-courses">
            <div class="box">
                <h3 class="title--secundary w-100">Te puede interesar ...</h3>
                <article class="list-courses__item">
                    <figure class="list-courses__image sin-margin">
                        <a href="single-courses.html" title="Curso de Bootstrap">
                            <img class="img-responsive" src="img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
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
                                <img class="img-responsive" src="img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
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
                            <img class="img-responsive" src="img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
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
                                <img class="img-responsive" src="img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
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
                            <img class="img-responsive" src="img/item-courses.jpg" alt="Bootstrap 3" width="640" height="420">
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
                                <img class="img-responsive" src="img/yan-arlex-vallejo.jpg" alt="Yan Arlex Vallejo" width="100" height="100">
                                <figcaption>Yan Vallejo</figcaption>
                            </a>
                        </figure>
                        <div>
                            <a href="#" class="decoration-none">Diseño Web</a>
                            <span>11 Videos 3 Horas</span>
                        </div>
                    </footer>
                </article>
            </div>
        </section> <!-- End Relationship Courses -->
    </main> <!-- End Main -->
<?php get_footer(  ); ?>
