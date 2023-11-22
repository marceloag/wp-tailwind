<?php get_header(); ?>

	  <section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="flex flex-row items-center justify-center" id="interior">
            <div class="w-10/12">
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
