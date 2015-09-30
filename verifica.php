<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário PHP </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<a class="pure-button" href="http://www.mundosa.com.br/sites/formulario">Voltar</a><br>
<?php
$nome = $_POST["nome"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$numero = $_POST["numero"];
$erro = 0;

if (empty($nome) OR strstr ($nome, ' ')==FALSE)
	{echo "Favor digitar seu nome corretamente.<br>"; $erro=1;}

if (strlen($email) < 8 || strstr($email, '@') == FALSE)
	{echo "Favor digitar seu e-mail corretamente.<br>"; $erro=1;}

if (empty($cep))
	{echo "Favor digitar seu CEP corretamente.<br>"; $erro=1;}

if (empty($endereco))
	{echo "Favor digitar seu endereço corretamente.<br>"; $erro=1;}

if (empty($bairro))
	{echo "Favor digitar seu endereço corretamente.<br>"; $erro=1;}

if (empty($cidade))
	{echo "Favor digitar sua cidade corretamente.<br>"; $erro=1;}

if (strlen($uf) != 2)
	{echo "Favor escolher seu UF corretamente.<br>"; $erro=1;}

if (empty($numero))
	{echo "Favor digitar seu endereço corretamente.<br>"; $erro=1;}

if ($erro == 0)
	{echo "Todos os dados foram digitados corretamente!";
	include "insere.inc";}
?>

</body>
</html>