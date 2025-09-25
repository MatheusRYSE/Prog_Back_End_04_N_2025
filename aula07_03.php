<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv07_03</title>
</head>
<body>
    <h1>ATIVIDADE 07 </h1>
    <?php
    if(count($_POST)==0)exit;
    $num1 = $_POST["num1"];
    $resultado=($num1  % 2 == 0) ? "PAR" : "IMPAR";
    echo"num1 = $resultado<br>";

    ?>
    
</body>
</html>