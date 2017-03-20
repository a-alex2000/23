<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Введите имя.</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
<h1>Введите имя</h1>
<div>
	<form action="test.php" method="GET">
	    <input type="hidden" name="question" value="<?php echo htmlspecialchars( $_GET['question'] );?>">
	    <input type="hidden" name="test" value="<?php echo htmlspecialchars( $_GET['test'] );?>">
		<input type="text" name="username"><br>
		<input type="submit" name="go" value="Поехали.">
	</form>
</div>
<div>
Copyright.Андрей Мурашов.
</div>
</body>
</html>