<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();  ?>/style.css">	

	<title><?php bloginfo('name'); ?></title>
	<!-- header wp -->
	<?php wp_head(); ?>
</head> 
<body>

	<header class="header">
		<div class="container">
			<nav class="grid-16 menu">
				<ul>
					<li><a href="index.php">Menu</a></li>
					<li><a href="sobre.php">Sobre</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>