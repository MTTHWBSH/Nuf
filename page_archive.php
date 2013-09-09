<?php
/*
Template Name: Archive
*/
?>

<?php get_header(); ?>

<main data-type="background" data-speed="10">
	<div class="container">
		<section id="archive">
			<?php query_posts('category_name=portfolio'); ?>
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
				<div class="feature clearfix">
				<div class="thumbnail pull-left">
				
				<a href="<?php the_permalink(); ?>">
				<?php
					if ( has_post_thumbnail() ) {
					the_post_thumbnail();
					}	
				?>	
				</a>
				</div><!-- THUMBNAIL -->		
				
				<aside>
				
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<h5><?php the_excerpt(); ?>[ ...<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php 
				the_title_attribute(); ?>">read more</a> ]</h5>
				
				</aside><!-- ASIDE -->
				</div><!-- FEATURE -->
				<hr class="clearfix" />
		
			<?php endwhile; ?>
		
			<?php else : ?>
				<h2>Sorry, there are no posts to display</h2>
			<?php endif; ?> 
			
		</section>
	</div>
</main>

<?php get_footer(); ?>