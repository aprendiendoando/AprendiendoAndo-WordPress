<?php
    // Template Name: Inicio
?>
<?php get_header(); ?>
    <main class="main">
        <section class="slider" style="background-image:url(<?php the_field('imagen_destacada', 'option'); ?>)">
            <div class="overlay"></div>
            <div class="box slider__information">
                <div class="slider__left">
                    <h2 class="title title--big"><?php the_field('imagen_titulo_principal', 'option'); ?></h2>
                    <h4 class="title title--small"><?php the_field('imagen_titulo_secundario', 'option'); ?></h4>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>cursos/" class="button button--main ml-0 button--animation">Ver todos los cursos</a>
                </div>
                <div class="slider__right">
                    <img src="<?php the_field('imagen_secundaria', 'option'); ?>)" alt="<?php bloginfo('name'); ?>" width="400" height="285">
                </div>
            </div>
        </section> <!-- End Slider -->
        <section class="youtube-analytics">
            <div class="youtube-analytics__date box">
                <figure>
                    <img src="<?php echo get_template_directory_uri() ?>/img/youtube-suscriptores.png" alt="Youtube Aprendiendoando" width="119" height="119">
                </figure>
                <div class="youtube-analytics__number">
                    <span><?php apreYoutube(); ?></span>
                    <strong>< Suscriptores /></strong>
                </div>
            </div>
            <p class="youtube-analytics__information">
                <?php the_field('youtube_descripcion', 'option'); ?>
            </p>
        </section> <!-- End Youtube -->
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
        <section class="box">
            <?php
            // Loop Last Courses LearnPress
                $args = array(
                        'posts_per_page' => 6,
                        'post_type' => 'lp_course'
                    );
                $lastPost = new WP_Query( $args );
                if( $lastPost->have_posts() ):
                    ?>
                    <div class="list-courses">
                    <?php
                        while( $lastPost->have_posts() ): $lastPost->the_post();
                            get_template_part( 'parts/courses', 'template' );
                        endwhile;
                    ?>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>cursos/" class="button button--main mb-5 mt-3 button--animation" title="Ver todos los cursos">
                        Ver todos los cursos
                    </a>
                <?php
                else:
                    get_template_part( 'parts/content', 'missing' );
                endif;
                wp_reset_postdata();
            ?>
        </section> <!-- End List Courses -->
        <section class="register">
            <div class="box box--center">
                <article class="register__testimonial">
                    <strong class="text--uppercase">Algunos estudiantes cuentan su experiencia</strong>
                    <?php
                    $args = array(
                            'type' => 'post',
                            'posts_per_page' => 4,
                            'post_type' => 'testimonios',
                        );

                    $lastPost = new WP_Query( $args );
                    if( $lastPost->have_posts() ):
                    ?>
                    <div class="js-slick">
                        <?php
                        while( $lastPost->have_posts() ): $lastPost->the_post(); ?>
                            <div class="register__box">
                                <div class="register__user">
                                    <figure class="sin-margin">
                                       <?php
                                        // check if the post has a Post Thumbnail assigned to it.
                                            if ( has_post_thumbnail() ) {
                                                the_post_thumbnail();
                                            } else { ?>
                                                <img src="<?php echo get_template_directory_uri() ?>/img/user-not-found.png" alt="Usuario sin Imagen">
                                            <?php } ?>
                                    </figure>
                                    <div class="register__information">
                                        <h3> <?php the_title(); ?> </h3>
                                        <span>
                                            <?php $post_object = get_field('nombre_curso'); ?>
                                            <?php echo $post_object->post_title; ?>
                                        </span>
                                    </div>
                                </div>
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                    <?php
                        endif;
                        wp_reset_postdata();
                    ?>
                </article>
                <article class="register__newsletter">
                    <strong class="text--uppercase"><?php the_field('mailchimp_titulo', 'option'); ?></strong>
                    <p><?php the_field('mailchimp_descripcion', 'option'); ?></p>
                    <div class="text-center">
                        <?php echo do_shortcode( '[mc4wp_form id="237"]'); ?>
                    </div>
                </article>
            </div>
        </section> <!-- End Register -->
    </main> <!-- End Main -->
<?php get_footer(); ?>
