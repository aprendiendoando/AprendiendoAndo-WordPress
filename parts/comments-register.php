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
</section>