<?php

include "conecta_mysql.inc";

$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$cidade', '$estado')";
$resultado = mysql_query($sql);
echo " Usuário incluído com sucesso!";

mysql_close($conexao);

?>