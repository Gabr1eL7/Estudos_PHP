<html>
<head>
<title> Meu programa em PHP </title>
<meta charset = "utf-8">

</head>
<body>
<?php
//declaração de variaveis

$nota1 = 6;
$nota2 = 4;
$nota = 0;

//condicional simples
//verifica se o aluno atingiu a media 6 para aprovação
$media = ($nota1+$nota2) / 2; //processo
if($media >=6){
	echo "</br> Aluno aprovado. Media = " .$media;
}

//condicional composta

$media = ($nota1+$nota2) / 2; //processo
if($media >=6){
	echo "</br> Aluno aprovado. Media = " .$media; //ação se resposta verdadeira
}else{
	echo "</br> Aluno reprovado. Media = " .$media; //ação se resposta falso
}

//condional encadeada

$media = ($nota1+$nota2) / 2; //processo
if($media < 3){
	echo "</br> Aluno reprovado. Media = " .$media; //ação se resposta verdadeira
}else if($media >=6) {
	    echo "</br> Aluno aprovado. Media = " .$media;
       }else{
	        echo "</br> Aluno em recuperação. Media = " .$media; //ação se resposta falso
       }

?>

</body>

</html>