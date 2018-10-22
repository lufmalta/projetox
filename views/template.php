<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Site MVC</title>
</head>
<body>
	<h1>Este é o topo da pagina</h1>
	<a href="<?= BASE_URL ?>">Home</a>
	<a href="<?= BASE_URL ?>galeria">Galeria</a>
	<hr>
	<?= $this->loadViewInTemplate($viewName, $dados); ?>
</body>
</html>