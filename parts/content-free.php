<article class="list-courses__item">
    <figure class="list-courses__image sin-margin">
        <?php
            $link = get_field('enlace');
            if( $link ):
        ?>
            <a href="<?php echo $link;?>" title="<?php the_title(); ?>">
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
        <?php
            endif;
        ?>
     </figure>
    <div class="list-courses__information">
        <?php 
            if( $link ): ?>
                <a href="<?php echo $link;?>" target="_blank" class="decoration-none" title="<?php the_title(); ?>">
                    <h3 class="sin-margin"><?php the_title(); ?></h3>
                </a>
            <?php endif; ?>        
            <?php the_content(); ?>
    </div>
    <footer class="list-courses__author">
        <?php
            if( $link ): ?>
                <a href="<?php echo $link;?>" class="button button--main" id="">Ver contenido</a>
            <?php endif; ?>
    </footer>
</article>