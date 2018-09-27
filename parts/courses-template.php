<?php $course = LP_Global::course(); ?>
<article class="list-courses__item">
    <figure class="list-courses__image sin-margin">
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <?php echo $course->get_image( 'course_thumbnail' ); ?>
        </a>
        <?php $price = $course->get_price_html(); ?>
        <figcaption class="price <?php if($price === 'Gratis') {echo "price--free"; } else {echo "price--premiun"; } ?>">
            <?php if ( $course->has_sale_price() ) { ?>
                <span class="price--fixed">
                    <?php echo $course->get_origin_price_html(); ?>
                </span> |
            <?php } ?>
            <span class="price-promotion">
                <?php echo $price; ?>
            </span>
        </figcaption>
    </figure>
    <div class="list-courses__information">
        <a href="<?php the_permalink(); ?>" class="decoration-none" title="Curso de Bootstrap">
            <h3 class="sin-margin"><?php the_title(); ?></h3>
        </a>
        <?php the_excerpt(); ?>
    </div>
    <footer class="list-courses__author">
        <figure class="sin-margin list-courses__meta">
            <?php echo $course->get_instructor()->get_profile_picture(); ?>
            <?php echo $course->get_instructor_html(); ?>
        </figure>
        <div>
            <?php
            // https://codex.wordpress.org/Function_Reference/get_the_term_list
            $term_list = get_the_term_list( get_the_ID(), 'course_category', '<ul class="only-category list-none"><li>', '</li><li>', '</li></ul>' );
             if ( $term_list ) {
                echo $term_list;
                }
        ?>
            <span><?php echo $course->duration;?></span>
        </div>
    </footer>
</article>