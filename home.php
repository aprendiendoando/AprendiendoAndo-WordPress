<!-- Este template se muestra debido a que en ajustes de lectura tenemos seleccionado en pagina de entradas una cualquiera -->
<?php get_header( ); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main">Blog</h1>
        </div>
    </aside>
    <main class="main mt-0">
        <section class="box list-courses pb-5 blog">
            <?php
                $args = array(
                        'posts_per_page' => 12
                    );
                $lastPost = new WP_Query( $args );
                if( $lastPost->have_posts() ):
                    while( $lastPost->have_posts() ): $lastPost->the_post();
                       get_template_part( 'parts/blog', 'template' );
                    endwhile;
                else:
                    get_template_part( 'parts/content', 'missing' );
                endif;
                wp_reset_postdata();
            ?>
        </section> <!-- End List Blog -->
        <?php
            get_template_part( 'parts/comments', 'register' );
        ?><!-- End Register -->
    </main> <!-- End Main -->
<?php get_footer( ); ?>
