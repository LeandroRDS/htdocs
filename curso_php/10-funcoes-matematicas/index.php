<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonções Matematicas</title>
</head>
<body>
    <?php 
        //entrga o valor real 
        $r = abs(500) ;
        print $r;
        print "<br>";
        //conversor de base
        $bc = base_convert(254, 10, 8);
        print $bc;
        print "<br>";
        $bc = base_convert(254, 10, 16);
        print $bc;
        print "<br>";
        $bc = base_convert(254, 10, 2);
        print $bc;
        print "<br>";
        $bc =base_convert(1011, 2, 10);
        print $bc;
        print "<br>";
        //aredondamento 
        //ciel() arredonda pra cima
        //floor() arredonda pra baixo 
        // round() arredondamento aritimetico 
        //hypot() calcula a hipotenusa
        $r = intdiv(5, 2);
        print $r;
        print "<br>";
        print min(5, 2);
        print "<br>";
        print max(1,2,3,4,5,6,7,8,);
        print pi();
        print "<br>";
        print M_PI;
        print "<br>";
        print pow(10,2);
        print "<br>";
        //raiz
        print sqrt(81);
        print "<br>";
        print $r = 81 ** (1/2);
        

         
    ?>
</body>
</html>