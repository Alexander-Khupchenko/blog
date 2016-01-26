<DOCUMENTTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Blog</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>My First Blog</h1>
		<div>
		<a href="index.php?action=add>">Добавить статью</a>	
		<table class="admin-table">
			<tr>
				<th>Date</th>
				<th>Title</th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach($articles as $a):?>
			<tr>
				<th><?=$a['date']?></th>
				<th><?=$a['title']?></th>
				<th>
					<a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
				</th>
				<th>
					<a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a>
				</th>
			</tr>
			<?php endforeach ?>
		</table>
			
		</div>
		<footer>
			<p>My First Blog<br>Copyright &copy; 2016</p>
		</footer>
	</div>
</body>
</html>