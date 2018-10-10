<aside class="courseInformation__teacher text-center">
    <div class="ap-widget">
        <h3 class="title--secundary pb-1">Últimas Noticias</h3>
        <ul class="ap-widget__list list-none">
            <?php
                $args = array(
                        'posts_per_page' => 12
                    );
                $lastPost = new WP_Query( $args );
                if( $lastPost->have_posts() ):
                    while( $lastPost->have_posts() ): $lastPost->the_post();
            ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title( ); ?>
                            </a>
                        </li>
            <?php
                endwhile;
                else:
                    get_template_part( 'parts/content', 'missing' );
                endif;
                wp_reset_postdata();
            ?>
        </ul>
    </div>
</aside>