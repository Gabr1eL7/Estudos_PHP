<html>
<head>
<title> Meu programa em PHP </title>
<meta charset = "utf-8">

</head>
<body>
<?php
//declaração de variaveis

$teste = true;
$user = "admin";
$pword = 1234;

//operador lógico - NÃO(!)
echo "</br> Valor da variavel TESTE = " .(boolval($teste)? 'True':'False');
echo "</br> aplicando o operador NÃO";
echo "</br> Novo valor da varivel teste = ".(boolval (!$teste)? 'True':'False');
echo "</br*******************************>";


//Operador Lógico E (&&)
echo "</br>";
echo "</br> Verificando usuario e senha...";
echo "</br>" .(boolval(($user=="admin") && ($pword==1234))?'Acesso liberado':'Acesso Negado'); 
echo "</br*******************************>";

//Operador Lógico OU (||)
echo "</br>";
echo "</br> Verificando usuario e senha...";
echo "</br>" .(boolval(($user=="admin") || ($pword==1234))?'Acesso liberado':'Acesso Negado'); 
echo "</br*******************************>";

?>

</body>

</html>