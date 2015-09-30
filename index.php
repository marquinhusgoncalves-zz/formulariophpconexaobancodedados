<html>
<head>
	<meta charset="UTF-8">
	<title>Formulário PHP </title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type='text/javascript' src='cep.js'></script>
</head>
<body>
	<form class="pure-form pure-form-stacked" action="verifica.php" method="post">
    <fieldset>
        <legend>Preencha seus dados</legend>

        <div class="pure-g">
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="nome">Nome</label>
                <input name="nome" id="nome" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="email">E-Mail</label>
                <input name="email" id="email" class="pure-u-23-24" type="email" required>
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="cep">CEP</label>
                <input name="cep" id="cep" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="endereco">Endereço</label>
                <input name="endereco" id="endereco" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="bairro">Bairro</label>
                <input name="bairro" id="bairro" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="cidade">Cidade</label>
                <input name="cidade" id="cidade" class="pure-u-23-24" type="text">
            </div>

            <div class="pure-u-1 pure-u-md-1-3">
                <label for="uf">Estado</label>
                <input name="uf" id="uf" class="pure-u-23-24" type="text">
            </div>
            
            <div class="pure-u-1 pure-u-md-1-3">
                <label for="numero">Número</label>
                <input name="numero" id="numero" class="pure-u-23-24" type="text">
            </div>
        </div>

        <button type="submit" name="enviar" class="pure-button pure-button-primary">Envia</button>
    </fieldset>
</form>
<!-- http://www.concatenar.com.br/php/inserindo-dados-de-formulario-atraves-do-php-em-um-banco-de-dados-mysql.html -->
<!-- http://www.rafaelwendel.com/2012/08/preenchimento-automatico-do-endereco-a-partir-do-cep/ -->
</body>
</html>