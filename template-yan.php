<?php
    // Template Name: Acerca de
?>
<?php get_header(); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main title--single"><?php the_title( ); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <section class="box yan mb-5">
            <?php
               while (have_posts()) : the_post();
                        the_content();
               endwhile;

            ?>
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
<?php get_footer(); ?>
