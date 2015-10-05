<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário PHP </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php

include "conecta_mysql.inc";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cep = $_POST["cep"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];
$numero = $_POST["numero"];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$numero')";
$resultado = mysqli_query($conexao, $sql);
echo 'Usuário incluído com sucesso! <br><br><a class="pure-button" href="index.php">Voltar</a>';

mysqli_close($conexao);

?>

</body>
</html>