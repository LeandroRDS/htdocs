<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia da divisão</title>
    <link rel="stylesheet" href="../../12-Superglobais/style.css">
</head>
<body>
    <?php 
        $d1 = $_GET["d1"] ?? 0;
        $d2 = $_GET["d2"] ?? 1;
    ?>
    <main>
        <h1>Anatômia de uma divisão</h1>
        <form action="" method="get">
            <label for="d1">Divideno</label>
            <input type="number" name="d1" id="d1" min="0" value="<?=$d1?>">
            <label for="d1">Divisor</label>
            <input type="number" name="d2" id="d2" min="1" value="<?=$d2?>">
            <input type="submit" value="Analizar">
        </form>
        <section>
            <h2>Estrutura da divisão</h2>
            <?php 
                // pegando apenas a parte inteira 
                // $quociente = (int) ($d1 / $d2);
                // ou usando a função
                $quociente = intdiv($d1,$d2);
                $resto =  $d1 % $d2;

                // print"<ul>";
                // print"<li>Dividendo: $d1</li>";
                // print"<li>Divisor: $d2</li>";
                // print"<li>Quociente: $quociente</li>";
                // print"<li>Resto: $resto</li>";
                // print"</ul>";
            ?>

            <table class="divisao">
                <tr>
                    <td><?=$d1?></td>
                    <td><?=$d2?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>