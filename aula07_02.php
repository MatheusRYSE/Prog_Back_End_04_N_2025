<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atv 07_02</title>
</head>
<body>
    <h1>ATIVIDADE</h1>
     <form method="post" action="">
        num1 <input type="number" name="num1"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
  if(count($_POST)==0);
    $num1 = $_POST["num1"];
    $resultado=($num1  % 2 == 0) ? "PAR" : "IMPAR";
    echo"num1 = $resultado<br>";

    ?>

</body>
</html>