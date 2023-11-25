<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vapuu</title>
    <link rel="stylesheet" href="../11-desafios/1-desafio-resultado-final/style.css">
</head>
<body>
    <?php 
        $v1 = $_GET["v1"]??0;
        $v2 = $_GET["v2"]??0;
    ?>
   <main>
    <h1>REsultado da soma</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" value="<?=$v1?>">
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" value="<?=$v2?>">
        <input type="submit" value="Enviar">
    </form>
   </main>
   <section id="resultado">
        <h2>Resultado da soma</h2>
        <?php 
            $soma = $v1 + $v2;
            print "<p> A soma entro os valores $v1 e $v2 é igaul a $soma </p>";
        ?>
   </section>
</body>
</html>