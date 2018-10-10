<?php get_header(  ); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main"><?php the_title(); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <!-- <aside class="box filterCourses">
            <form action="" class="filterCourses__form">
                <div class="filterCourses__select">
                    <select name="" id="">
                        <option value="Seleccione">Seleccione</option>
                        <option value="Seleccione">Desarrollo Web</option>
                        <option value="Seleccione">Desarrollo Mobile</option>
                        <option value="Seleccione">Programación para niños</option>
                    </select>
                </div>
                <div class="filterCourses__tags">
                    <span>Etiquetas: </span>
                    <ul class="ap-tags list-none">
                        <li><a href="#">Diseño Web</a></li>
                        <li><a href="#">Bootstrap</a></li>
                        <li><a href="#">SublimeText</a></li>
                        <li><a href="#">Css</a></li>
                    </ul>
                </div>
            </form>
        </aside> -->
        <section class="box list-courses pb-5">
            <?php
                $args = array(
                        'posts_per_page' => 12,
                        'post_type' => 'lp_course'
                    );
                $lastPost = new WP_Query( $args );
                if( $lastPost->have_posts() ):
                    while( $lastPost->have_posts() ): $lastPost->the_post();
                            get_template_part( 'parts/courses', 'template' );
                        endwhile;
                else:
                    get_template_part( 'parts/content', 'missing' );
                endif;
                wp_reset_postdata();
            ?>
        </section> <!-- End List Courses -->

        <?php
            get_template_part( 'parts/comments', 'register' );
        ?><!-- End Register -->

    </main> <!-- End Main -->

<?php get_footer(  ); ?>
