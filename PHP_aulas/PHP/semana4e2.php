<html>

<head>

<meta charset = "utf-8">

</head>

<body>
<?php
// função sem parametro
function mensagem(){
	echo "</br> Olá, mundo";
	echo "</br> Programação em PHP";
	echo "</br>";
}
//chamada da função

mensagem();

//função com parametros
function sobrenome($nome, $cidade, $uf){
	echo "</br>" .$nome. " da Silva";
	echo "</br> É natural de " .$cidade. " Estado: ".$uf;
	 
}

sobrenome("Ana", "Campinas", "SP");
sobrenome("Camila", "São Paulo", "SP");
sobrenome("Gabriela", "Rio de Janeiro", "RJ");
sobrenome("Paula", "Recife", "PE");

?>
</body>

</html>