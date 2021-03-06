<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= bloginfo('title'); ?></title>
	<?php wp_head(); ?>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>">
</head>
<body>
<?php 
	wp_nav_menu(
		array(
			'theme_location' => 'top-menu'
		)
	);
?>