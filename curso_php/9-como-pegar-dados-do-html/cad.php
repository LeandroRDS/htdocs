<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
            $nome = $_GET["nome"] ?? "Sem Nome!";
            $s = $_GET["sobrenome"] ?? "Sem Sobrenome";
            print "<p> É um praser te conhecer, $nome $s este é o meu site";
        ?>
        <p>
            <a href="javascript:history.go(-1)">Voltar</a>
        </p>
    </main>
</body>
</html>