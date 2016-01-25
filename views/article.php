<DOCUMENTTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>My First Blog</h1>
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em>Опубликовано: <?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>My First Blog<br>Copyright &copy; 2015</p>
		</footer>
	</div>
</body>
</html>