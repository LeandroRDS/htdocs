<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <p>
            <?php 
                $n = $_GET["num"] ?? 0;
                $a = $n - 1;
                $s = $n + 1;
                print "O número escolhido foi $n <br>";
                print "O número anterio é $a <br>";
                print "O número sucessor é $s";
            ?>
        </p>
        <!-- <button onclick="javascriot:window.location.href='index.html'">&#x2b05; Voltar</button> -->
        <button onclick="javascriot:history.go(-1)">&#x2b05; Voltar</button>
    </main>
</body>
</html>