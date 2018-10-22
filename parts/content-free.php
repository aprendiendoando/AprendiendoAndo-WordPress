<article class="list-courses__item">
    <figure class="list-courses__image sin-margin">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php
                if ( has_post_thumbnail() ) :
                    the_post_thumbnail('full', ['class' => 'img-responsive']);
                else:
            ?>
                 <img src="<?php bloginfo('template_directory') ?>/img/aprendiendoando-bg.jpg" alt="<?php the_title(); ?>" /></a>
            <?php
                endif;
            ?>
        </a>        
    </figure>
    <div class="list-courses__information">
        <?php 
            $link = get_field('enlace');
            if( $link ): ?>
                <a href="<?php echo $link;?>" target="_blank" class="decoration-none" title="<?php the_title(); ?>">
                    <h3 class="sin-margin"><?php the_title(); ?></h3>
                </a>
            <?php endif; ?>        
            <?php the_content(); ?>
    </div>
    <footer class="list-courses__author">
        <?php
            $link = get_field('enlace');
            if( $link ): ?>
                <a href="<?php echo $link;?>" class="button button--main" id="">Ver contenido</a>
            <?php endif; ?>
    </footer>
</article>