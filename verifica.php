<html>
<body>

<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$erro = 0;

if (empty($nome) OR strstr ($nome, ' ')==FALSE)
	{echo "Favor digitar seu nome corretamente.<br>"; $erro=1;}

if (strlen($email) < 8 || strstr($email, '@') == FALSE)
	{echo "Favor digitar seu e-mail corretamente.<br>"; $erro=1;}

if (empty($cidade))
	{echo "Favor digitar sua cidade corretamente.<br>"; $erro=1;}

if (strlen($estado) != 2)
	{echo "Favor escolher seu UF corretamente.<br>"; $erro=1;}

if ($erro == 0)
	{echo "Todos os dados foram digitados corretamente!";
	include "insere.inc";}
?>



</body>
</html>
