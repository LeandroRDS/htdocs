<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Formatação de moeda e alguns números.</h1>
        <?php 
            $cotacao = 5.17;
            $real = 1000;
            $dolar = $real / $cotacao;
            print "Com formatação manual <br>";
            print "Seus R\$" . number_format($real, 2, ",", ".") . " equivalem a US\$" . number_format($dolar, 2, ",", ".") . "<br>";

            //formatação de moedas com internalização
            //biblioteca intl (internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            print "Com formatação pela biblioteca INTL <br>";
            print "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
    </main>
</body> 
</html>