<html>
<head>
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/gen-css.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Share+Tech|Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/function.js"></script>
</head>
<body>
	<div class="header">
		<div class="container">
			<a href="<?php echo get_site_url(); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a>
			<?php wp_nav_menu(array('theme_location' => 'Header_Nav',)); ?>
		</div>
	</div>