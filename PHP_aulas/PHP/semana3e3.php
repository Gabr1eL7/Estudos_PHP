<html>
<head>
<meta charset = "utf-8">
</head>

<body>
<?php
//laço de repetição - PARA
//variaveis
$operando = 3;
$total = 0;

//processo
echo "</br> Tabuada do numero ". $operando;
echo "</br>";
for ($multiplicador=0; $multiplicador<=10;$multiplicador++){
	$total = $operando * $multiplicador;
	echo "</br>". $operando." X ".$multiplicador. " = ".$total;
	
}

?>
</body>
</html>