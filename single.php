<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<main data-type="background" data-speed="10">
	<div class="container">
		<section id="single">
			<?php if (have_posts()) : ?>	
				<?php while (have_posts()) : the_post(); ?>
			
					<h3><?php the_title(); ?></h3>
					<h5><?php the_excerpt(); ?></h5>
					
					<div class="post-content">
					<hr />
					<?php the_content(); ?>
					</div><!-- POST-CONTENT --> 
			
				<?php endwhile; ?>
			<?php else : ?>
			
				<h3>Sorry! Nothing to see here. <a href="http://nuferdan.com">back home</a>?</h3>
			
			<?php endif; ?>
		</section>
	</div>
</main>

<?php get_footer(); ?>