<?php 
	$name = "Jose Aron";
	$last = "Gonzalez";
	//concatenacion 2 maneras
	//$Convinacion = "$name $Name";
	$full = $name." ".$last;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ejemplos de PHP basicos</title>
</head>
<body>
	<!-- <?php
		// echo ($_SERVER['REMOTE_ADDR']);

		// echo ($_SERVER['HTTP_USER_AGENT']);
		
	?> -->

	<!-- <?php if(true): ?>
		<p>
			el mejor
		</p>
	<?php else: ?>
		<p>
			no el ejor
		</p>
	<?php endif ?> -->

	<h1>
		hola mi nombre es <?= $full; ?>
	</h1>

</body>
</html>