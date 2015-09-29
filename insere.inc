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
$resultado = mysql_query($sql);
echo " Usuário incluído com sucesso!";

mysql_close($conexao);

?>