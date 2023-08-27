<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de php</title>
</head>
<body>
    <h1>Exemplo de php</h1>
    <?php 
        date_default_timezone_set('america/sao_paulo');
        print"Hoje é dia " . date("Dd/M/y");
        echo"<br>";
        print"e a hora é " . date("G:i:s T");
    ?>
</body>
</html>