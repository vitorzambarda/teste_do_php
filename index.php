<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Curso de PHP</title>
		<link rel="stylesheet" href="">
</head>
	<body>
	<div>
	<!--
	<?php  
		$preco = $_GET ["p"];
		#echo "O preço do produto é R$" . number_format($preco, 2);
		$preco += ($preco*10/100);
		#echo "<br/> E o novo preço com 10% de aumento será R$" . number_format($preco, 2);
	?>
-->

	<!--
	<?php 
	/* esse exercicio pretende demonstrar o uso de operadores de incremento e decremento*/
	$atual = $_GET ["aa"]; // essa linha vai pegar o ano na url//
	#echo "O ano atual é $atual e o ano anterior é " . --$atual; 
	?> -->

	<!-- exemplo
	<?php  
		# $nome = "Vitor";
		# $idade = "17";
		# echo "$nome tem $idade anos!";
	?> 
	-->

	<!--
	<?php
		# $n1 = 3;
		# $n2 = 2;
		$s = $n1 + $n2;
		# echo "A soma entre $n1 e $n2 é igual a $s";
	?> 
	-->
	<!--
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"];
		#echo "<h2> Valores recebidos: $n1 e $n2</h2>";
		$m = ($n1 + $n2) / 2;
		#echo " A soma vale ". ($n1+$n2);
		#echo "<br/>A subtração vale ". ($n1-$n2);
		#echo "<br/>A multiplicação vale ". ($n1*$n2);
		#echo "<br/>A divisão vale ". ($n1/$n2);
		#echo "<br/>O módulo vale ". ($n1%$n2);
		#echo "<br/> A média vale $m";
	?>
	-->
<!--
	<?php
		$a = 3;
		$b = &$a;
		$b += 5;
		#echo "A váriavel A vale $a";
		#echo "<br/> A variavel B vale $b";
	?>
	 -->
<!--
	<?php
		$x = "abc";
		$$x = "def";
		#echo "O conteúdo da variavel X é $x";
		#echo "<br/> A variavel ABC criada recebeu o valor $abc";
	?>
-->
	<?php
		$n1 = $_GET["a"];
		$n2 = $_GET["b"]
		$tipo = $_GET["op"];

	?>


	</div>
	</body>
</html>




<!--

   1:<?php
   #2:$con = mysql_connect("localhost", "banco", "abc123") or
  # 3:    die('Não foi possível conectar');
   #4: 
   #5:if(mysql_query("CREATE DATABASE my_db", $con)){
   #6:    echo 'Banco de dados criado';
   #7:}
   #8:else {
   #9:    die('Erro criando o banco de dados'.mysql_error());
  #10:}
  #11:mysql_close($con);
  #12:?> 
  -->