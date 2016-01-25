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
			<?php foreach($articles as $a):?>
			<div class="article">
				<h3><a href="article.php?id=<?$a=['id']?>"><?=$a['title']?></a></h3>
				<em>Опубликовано: <?=$a['date']?></em>
				<p><?=$a['content']?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>My First Blog<br>Copyright &copy; 2016</p>
		</footer>
	</div>
</body>
</html>