<?php
    // Template Name: Contenido Gratuito
?>
<?php get_header(); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main title--single"><?php the_title(); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <section class="box mb-5">
            <?php
            // Loop Last Courses LearnPress
                $args = array(
                        'posts_per_page' => 12,
                        'post_type' => 'contenido_gratuito'
                    );
                $lastPost = new WP_Query( $args );
                if( $lastPost->have_posts() ):
                    ?>
                    <div class="list-courses">
                    <?php
                        while( $lastPost->have_posts() ): $lastPost->the_post();
                            get_template_part( 'parts/content', 'free' );
                        endwhile;
                    ?>
                    </div>
                <?php
                else:
                    get_template_part( 'parts/content', 'missing' );
                endif;
                wp_reset_postdata();
            ?>
        </section> <!-- End List Courses -->
        <!-- Start Relationship Courses -->
            <?php get_template_part( 'parts/courses', 'rand' ); ?>
        <!-- End Relationship Courses -->
    </main> <!-- End Main -->
<?php get_footer(  ); ?>
