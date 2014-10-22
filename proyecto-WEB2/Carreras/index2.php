<?php
require('comboCarreras.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo $dropdown_students; ?>
	<h1>Nuevo Estudiante:</h1>
	<form action="save_student.php" method="get" accept-charset="utf-8">
		<input type="text" name="first_name" value="" placeholder="Type your name">
		<input type="email" name="email" value="" placeholder="Type your email">
		<input type="submit" value="Send">
	</form>
</body>
</html>
