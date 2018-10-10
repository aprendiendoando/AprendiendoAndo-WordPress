<article class="list-courses__item">
    <figure class="list-courses__image sin-margin">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('course-full', ['class' => 'img-responsive']);
                endif;
            ?>
        </a>
    </figure>
    <div class="list-courses__information">
        <a href="<?php the_permalink(); ?>" class="decoration-none" title="<?php the_title(); ?>">
            <h3 class="sin-margin"><?php the_title(); ?></h3>
        </a>
        <?php the_excerpt(); ?>
    </div>
    <footer class="blog__footer">
        <a href="<?php the_permalink(); ?>" class="button button--main">Leer Más</a>
    </footer>
</article>