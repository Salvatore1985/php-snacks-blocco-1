<?php
/* Partendo da questa stringa $string = "c,i,n,q,u,e"; 
trasforma la stringa in un array con un elemento per carattere,

	$array = ['c','i','n','q','u','e'];

infine crea un array associativo della forma:
	
	$result = [
		'c' => 'c',
		'i' => 'i',
		'n' => 'n',
		'q' => 'q',
		'u' => 'u',
		'e' => 'e'
	]; */
$string = "c,i,n,q,u,e";
$explodeString = explode(',', $string);
$result = [];

foreach ($explodeString as $element) {
    $result[$element] = $element;
    echo $element . ' => ' . $element . '<br>';
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 9</title>
</head>

<body>
    <h1>Snack 9</h1>


</body>

</html>