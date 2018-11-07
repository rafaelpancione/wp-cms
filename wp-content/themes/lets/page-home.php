<?php 
// Template Name: Pizzas
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<section class="main">
		<div class="container">
		<h1><?php the_title(); ?></h1>
		<h4>São mais de 20 sabores.</h4>
		
		<?php if(have_rows('tipo_pizza')) : while(have_rows('tipo_pizza')) : the_row(); ?> 
		<div class="pizza-salgada grid-8">
			<h2><?php the_sub_field('tipo_nome'); ?></h2>
		<ul class="lista-pizza">
		
		<?php if(have_rows('pizza_sabor')): while(have_rows('pizza_sabor')) : the_row(); ?>
		<li><h3><?php the_sub_field('nome_pizza'); ?></h3><p>
		<?php the_sub_field('descricao_pizza'); ?></p></li>
		<?php endwhile; else : endif; ?>

		</ul>	
		</div>
		<?php endwhile; else : endif; ?>

		</div>
	</section>

	<?php endwhile; else: endif; ?>
<?php get_footer(); ?>




	

