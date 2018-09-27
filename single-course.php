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
                <div class="courseInformation__teacher--button mt-2">
                    <div class="lp-course-buttons">

                        <?php do_action( 'learn-press/before-course-buttons' ); ?>
                        <?php
                        /**
                         * @see learn_press_course_purchase_button - 10
                         * @see learn_press_course_enroll_button - 10
                         * @see learn_press_course_retake_button - 10
                         */
                        do_action( 'learn-press/course-buttons' );
                        ?>
                        <?php do_action( 'learn-press/after-course-buttons' ); ?>

                    </div>
                </div>
            </aside>
            <!-- End Content teacher,price, duration -->
        </section>
        <!-- Start Relationship Courses -->
        <section class="list-courses pb-5 featured-courses">
            <div class="box">
                <h3 class="title--secundary w-100">Te puede interesar ...</h3>
                <?php
                    $term_list = get_the_term_list( get_the_ID(), 'course_category', '', ',', '' );
                    $term_list_string = strip_tags($term_list);
                     // Loop Last Courses LearnPress
                    $args = array(
                            'posts_per_page' => 3,
                            'post_type' => 'lp_course',
                            'post__not_in' => array(get_the_ID()),
                            'course_category' => $term_list_string
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
            </div>
        </section> <!-- End Relationship Courses -->
    </main> <!-- End Main -->
<?php get_footer(  ); ?>
