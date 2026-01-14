<?php
	//Autor: Miguel Justiniano <angelgarrix14@gmail.com>

	require('HolaMundo.php');

	print "Introduce tu nombre:";
	$nombre = trim(fgets(STDIN));
	print new HolaMundo($nombre);

?>
