<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main data-type="background" data-speed="10">
	<div class="container">
		<section id="work">
			<h2>featured work</h2>
			<?php query_posts('category_name=featured'); ?>
			
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
			
			<a href="<?php bloginfo('blog_url'); ?>/archive" class="btn-primary">view all</a> 
			
		</section>
		
		<section id="resume">
			<h2>resume <a href="#resumeLink" target="_blank"><span aria-hidden="true" class="icon-file"></span></a></h2>
			<?php
			$my_id = 107;
			$post_id_107 = get_post($my_id);
			$content = $post_id_107->post_content;
			$content = apply_filters('the_content', $content);
			$content = str_replace(']]>', ']]>', $content);
			echo $content;
			?>
		</section>
		
		<section id="contact">
			<h2>contact</h2>
			<ul class="unstyled">
				<li><a href="mailto:nuferdan@gmail.com"><span aria-hidden="true" class="icon-mail"></span> nuferdan@gmail.com</a></li>
				<li><a href="http://twitter.com/dannufer" target="_blank"><span aria-hidden="true" class="icon-twitter"></span> @DanNufer</a></li>
				<li><a href="http://linkedin.com/pub/dan-nufer/27/512/123" target="_blank"><span aria-hidden="true" class="icon-linkedin"></span> Connect</a></li>
			</ul>
		</section>
	</div>
</main>

<?php get_footer(); ?>