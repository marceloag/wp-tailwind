<?php get_header(); ?>
<div id="slider">
	<div class="row">
		<ul class="example-orbit" data-orbit>
		  <li>
		    <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
		    <div class="orbit-caption">
		      Caption One.
		    </div>
		  </li>
		  <li>
		    <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
		    <div class="orbit-caption">
		      Caption Two.
		    </div>
		  </li>
		  <li>
		    <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
		    <div class="orbit-caption">
		      Caption Three.
		    </div>
		  </li>
		</ul>
	</div>
</div>
<section>
	<div class="row">
			<div class="large-8 columns">
					<h1>Content</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto omnis deleniti quo. Ab labore, vel reiciendis omnis aut tenetur amet non quo inventore vitae, sunt. Vel ut consequatur dolorum sint?</p>
			</div>
			<div class="large-4 columns">
					<?php get_sidebar( ); ?>
			</div>
	</div>
</section>
<?php get_footer(); ?>
