<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário PHP </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1"
</head>
<body>
	<form class="pure-form pure-form-stacked" action="verifica.php" method="post">
    <fieldset>
        <legend>Preencha seus dados</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="first-name">Nome</label>
                <input name="nome" id="first-name" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input name="email" id="email" class="pure-u-23-24" type="email" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="city">Cidade</label>
                <input name="cidade" id="city" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="state">Estado</label>
                <select name="estado" id="state" class="pure-input-1-2">
                    <option>SP</option>
                    <option>MG</option>
                    <option>RJ</option>
                </select>
            </div>
        </div>

        <button type="submit" name="enviar" class="pure-button pure-button-primary">Envia</button>
    </fieldset>
</form>
<!-- http://www.concatenar.com.br/php/inserindo-dados-de-formulario-atraves-do-php-em-um-banco-de-dados-mysql.html -->
</body>
</html>