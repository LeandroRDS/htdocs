<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números aleatorios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>trabalhando com números aleatorios</h1>
        <?php 
            $min = 0;
            $max = 1000000;
            $num = mt_rand($min, $max);

            print "<P>Gerando um número aleatorio entre minimo e maximo...  <br>
            O valor gerado foi <storng>$num</strong>.
            </P>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504; Gerar</button>
    </main>
</body>
</html>