<html>

<head>

<meta charset = "utf-8">

</head>

<body>
<?php
//trabalhando com conjuntos - vetor 


$frutas = array ("Laranja", "Maça", "Banana", "Pera", "Uva", "Abacate", "Carambola");
$valores = array ("10", "20", "30");

//verificação de conteudo do vetor - saida estatica

echo "</br> ***LISTA DE FRUTAS***";
echo "</br> saida estatica";
echo "</br> ". $frutas[0];
echo "</br> ". $frutas[1];
echo "</br> ". $frutas[2];
echo "</br> ". $frutas[3];

//verificação de conteudo do vetor - saida dinamica
echo "</br> saida dinamica - laço for";
for($ind = 0; $ind < 4; $ind++){
	echo "</br> ". $frutas[$ind];
}

//conta quantidade de elemento do conjunto

$qtde = count($frutas);
echo "</br>";

echo "</br>Existem " .$qtde. " frutas dentro de um conjunto";


for($ind = 0; $ind < $qtde; $ind++){
	echo "</br> ". $frutas[$ind];
}
echo "</br>";
echo "</br> ***LISTA DE FRUTAS***";
foreach ($frutas as $ind){
	echo "</br>".$ind;
}



?>
</body>

</html>