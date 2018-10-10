<?php get_header(  ); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main title--single"><?php the_title(); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <?php
            /* Start the Loop */
            while ( have_posts() ) : the_post();
        ?>
                <aside class="box filterCourses">
                    <div class="filterCourses__tags">
                        <span>Categoría: </span>
                        <?php
                            // https://codex.wordpress.org/Function_Reference/get_the_term_list
                            $term_list = get_the_term_list( get_the_ID(), 'category', '<ul class="ap-tags list-none"><li>', '</li><li>', '</li></ul>' );
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
                                <?php
                                    if ( has_post_thumbnail() ) :
                                        the_post_thumbnail('course-full', ['class' => 'img-responsive']);
                                    endif;
                                ?>
                            </figure>
                        </header>
                        <?php the_content(); ?>
                        <div class="comentarios">
                            <h2>Comentarios</h2>
                            <?php
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                        </div>
                    </article>
                    <!-- End Content information course main -->
                    <?php get_sidebar(); ?>
                    <!-- End Content teacher,price, duration -->
                </section>
        <?php
            endwhile; // End of the loop.
        ?>
        <!-- Start Relationship Courses -->
            <?php get_template_part( 'parts/courses', 'rand' ); ?>
        <!-- End Relationship Courses -->
    </main> <!-- End Main -->
    <?php get_footer(); ?>
