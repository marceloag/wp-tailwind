<?php get_header('interior'); ?>

	  <section>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row" id="interior">
            <div class="large-12 medium-12 small-12 columns">
                <div class="titulo">
                    <h2><?php the_title();?></h2>
                    <h5><?php echo get_field('subtitulo')?></h5>
                </div>

                <div class="texto">
                    <?php the_content();?>
                </div>

            </div>
        </div>
			<?php endwhile; endif; ?>
    </section>

<?php get_footer(); ?>
