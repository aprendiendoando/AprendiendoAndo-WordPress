<?php
    // Template Name: Contacto
?>
<?php get_header(); ?>
    <aside class="ap-breadcrumbs">
        <div class="box">
            <h1 class="title--main title--single"><?php the_title(); ?></h1>
        </div>
    </aside>
    <main class="main mt-0">
        <section class="box contact">
            <article class="contact__box">
                <?php
                   while (have_posts()) : the_post();
                ?>
                <figure class="contact__image">
                    <?php 
                       the_post_thumbnail('full', array('class' => 'img-responsive'));
                    ?>
                </figure>
                <aside class="contact__information">
                    <?php the_content(); ?>
                </aside>
                <?php
                   endwhile;
                ?>
            </article>
            <!-- End Content information course main -->
        </section>
        <!-- Start Relationship Courses -->
            <?php get_template_part( 'parts/courses', 'rand' ); ?>
        <!-- End Relationship Courses -->
    </main> <!-- End Main -->
<?php get_footer(  ); ?>
