<?php get_header(); ?>

	  <section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="flex flex-row items-center justify-center p-4" id="interior">
            <div class="w-11/12 md:w-9/12">
                <div class="titulo mx-3">
                    <h1><?php the_title();?></h1>
                </div>
                <div class="ml-4">
                    <?php the_content();?>
                </div>
            </div>
        </div>
			<?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>
