<html>
<head>
<meta charset = "utf-8">
</head>

<body>

<?php
//varivel

$voto = 0;

//entrada de dados

$voto = 45;

//processo -  condicional multipla

switch($voto){
	
	case 10 : 
	echo "</br> Tarcisio de Freitas";
	echo "</br> Partido: Republicanos";
	break;
	
	
	case 13 : 
    echo "</br> Fernando Haddad";
	echo "</br> Partido: PT";
	break;
	
	case 45 : 
    echo "</br> Rodrigo Garcia";
	echo "</br> Partido: PSDB";
	break;
	
	case " ":
	echo "</br> Voto em branco";
	break;
	
	
	default:
	echo "</br> voto nulo";
	break;
	
	
}

?>
</body>
</html>