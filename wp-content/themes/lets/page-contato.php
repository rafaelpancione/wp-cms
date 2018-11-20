<?php 
// Template Name: Contato
?>

<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="contato">
		<div class="container">
		<h1><?php the_title(); ?></h1>
		<img src="<?php the_field('imagem_contato'); ?>">
		


		<div class="lista-contato">
			<ul class="dados grid-1-3">
				<li><h2>Dados</h2></li>
				<li><p>contato@letsgo.com.br</p></li>
				<li><p>43 998439933</p></li>
			</ul>
			<ul class="horarios grid-1-3">
				<li><h2>Horários</h2></li>
				<li><p>Quem faz o horário é você! Chama a LET’S GO PIZZAS para seu evento que é sucesso.</p></li>
			</ul>
			<ul class="enredeco grid-1-3">
				<li><h2>Endereço</h2></li>
				<li><p>Rodízio certeza que você já viu, mas e rodízio de pizza na <b>sua</b> casa?</p></li>
			</ul>
		</div>
		</div>
	</section>

	<?php endwhile; else: endif; ?>
	

 <?php get_footer(); ?>
