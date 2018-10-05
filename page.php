<?php get_header(); ?>
    <main class="main" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
        <?php
         the_title();
			while ( have_posts() ) :
				the_post();
                the_content();

			endwhile; // End of the loop.
		?>
    </main>
<?php get_footer(); ?>
