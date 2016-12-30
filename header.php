<!DOCTYPE HTML>
<html>
	<head>
		<title><?php bloginfo('name');?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
		<!--[if lte IE 8]><script src="<?php bloginfo('template_directory'); ?>/assets/js/ie/html5shiv.js"></script><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie8.css" /><![endif]-->
		<?php wp_head(); ?>
	</head>
  <body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1>
							<a href="index.php">
								<strong>
									<?php bloginfo('name');?>
								</strong>
						 </a>
					 	</h1>
						<nav>
							<ul>
								<li><a href="#footer" class="icon fa-info-circle">درباره ما</a></li>
							</ul>
						</nav>
					</header>
