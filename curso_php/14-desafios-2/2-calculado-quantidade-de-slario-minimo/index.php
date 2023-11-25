<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>quantidade de slarioso miniomos</title>
    <link rel="stylesheet" href="../../12-Superglobais/style.css">
</head>
<body>
    <?php 
        $minimo = 1_380.60;
        $salario = $_GET['sal'] ?? 1;

    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="">Salário</label>
        <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.01">
        <p>
            Considerando o salário minino <strong><?=number_format($minimo, 2, ",", ".")?></strong>
        </p>
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Resultado final</h2>
        <?php 
            $total = intdiv($salario, $minimo);
            $dif = $salario % $minimo;
            print"Ganha $total salarios minímos + \$".number_format($dif, 2, ",", ".")."";
        ?>
    </section>
</body>
</html>