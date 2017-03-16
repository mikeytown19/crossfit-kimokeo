<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<!-- <div class="flexslider">
			<ul class="slides">
				<li>
				<img class="flexslider-img"src="<?php echo get_template_directory_uri(); ?>/img/background/home-background1.png" alt="Logo">
				</li>
				<li>
					<img class="flexslider-img"src="<?php echo get_template_directory_uri(); ?>/img/background/background-snatch.png" alt="Logo">
				</li>

			</ul>
		</div> -->









		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<!-- <?php edit_post_link(); ?> -->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<!-- <article>



			</article> -->
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
