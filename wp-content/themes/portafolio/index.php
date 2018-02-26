<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= bloginfo('title'); ?></title>
	<link rel="stylesheet" href="<?= bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<h1><?= bloginfo('name'); ?></h1>

	<ul>
		<li><strong>Descripción: </strong><?= bloginfo('description'); ?></li>
		<li><strong>URL: </strong><?= bloginfo('url'); ?></li>
		<li><strong>Lenguaje: </strong><?= bloginfo('language'); ?></li>
		<li><strong>URL Hoja de Estilos: </strong><?= bloginfo('stylesheet_url'); ?></li>
		<li><strong>Directorio Hoja de Estilos: </strong><?= bloginfo('stylesheet_directory'); ?></li>
	</ul>
</body>
</html>