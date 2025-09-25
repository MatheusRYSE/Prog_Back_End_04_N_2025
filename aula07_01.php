<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AULA07-01</title>
</head>
<body>
    /*
    <h2>Operadores Logico</h2>
    <?php
    $a=50;
    $b=120;
    $c=($a<=$b);//true 
    $d= !($a<=$b);// false
    var_dump($c);
    echo "<br>";
    var_dump($d); 
    echo"<br>";
    $e=(($a<=$b) && !($a>=200)); // COM O && ! fica true
    var_dump($e);
    echo"<br>";
    $f = (!($a<=$b) || ($a>=200)); // ! com o not fica false 
    var_dump($f);
    echo"<br>";
    $g=(($a<=$b) xor ($a>=200)); // xor precisa ser diferentes pos/neg oara ser true
    var_dump($g);
    

    /*PROVA SOBRE ESSE AULA*/ 

    ?> /

       <h2>Operador Terminario</h2>
       <?php
       $a=50;
       $b=120;
       $c=200;
       $d=($a<=$b) ? "Verdadeiro" : "Falso";
       $e=($a>=$c) ? "Verdadeiro" : "Falso";
       echo"d = $d<br>e = $e";

       ?>


</body>
</html>