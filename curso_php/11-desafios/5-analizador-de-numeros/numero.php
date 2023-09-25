<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anlizado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Númeor analizado</h1>
        <?php 
            $num = $_POST["n"] ?? 0;
            print "<p>Analizando o Número informado pelo usúario <strong>". number_format($num, 3, ",", ".") ."</strong></p>";
            $int = (int) $num;
            print "<ul> <li> A parte interira do número é <strong>". number_format($int, 0, ",", ".") ."</strong> </li>";
            $fra = $num - $int;
            print "<li> A parte fracionaria do número é: <strong>". number_format($fra, 3, ",", ".")." </storng></li></ul>"
        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>