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
					<li><a href="/">Menu</a></li>
					<li><a href="/sobre/">Sobre</a></li>
					<li><a href="/contato/">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>