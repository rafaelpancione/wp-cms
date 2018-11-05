<?php 
// Template Name: Sobre
?>
<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="sobre">
		<div class="container">
			
			<div class="grid-8 img-sobre">
				<img src="<?php the_field('imagem_sobre'); ?>">
			</div>

			<div class="grid-8 txt-sobre">
			<h1><?php the_title(); ?></h1>
				<p><?php the_field('texto_sobre'); ?></p>
			</div>
		</div>
	</section>

	<?php endwhile; else: endif; ?>
	
<?php get_footer(); ?>


