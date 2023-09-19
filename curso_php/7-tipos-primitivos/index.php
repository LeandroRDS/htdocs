<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>
<body>
    <?php 
        $num = 300;
        print"O valor da vriavle é $num <br>";
        
        $num = 0x1A;
        print"O valor da vriavle é $num <br>";

        $num = 0b1111;
        print"O valor da vriavle é $num <br>";
        
        $num = 010;
        print"O valor da vriavle é $num <br>";

        $num = 3e2;
        print"O valor da vriavle é $num <br>";

        var_dump($num);

        $v = 300;
        var_dump($v);

        $v2 = (int) 300;
        var_dump($v2);

        $num = "950";
        var_dump($num);

        $num = (int) "950";
        var_dump($num);

        $casado = false;
        print "e casado ? $casado";

        $vet = [1, 2, 3, "maria", false, 2.10];
        var_dump($vet);

        class pessoa {
            private string $nome;
        }

        $p = new pessoa;
        var_dump($p)
    ?>
</body>
</html>