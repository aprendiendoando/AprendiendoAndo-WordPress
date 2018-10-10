<section class="list-courses pb-5 featured-courses">
    <div class="box">
        <h3 class="title--secundary w-100">Te puede interesar ...</h3>
        <?php
            // Loop Last Courses LearnPress
            $args = array(
                    'posts_per_page' => 3,
                    'post_type' => 'lp_course',
                    'orderby' => rand
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
</section>