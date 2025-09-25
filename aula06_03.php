<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE</title>
</head>
<body>
    <h1>ATIVIDADE 06</h1>
     <?php
  
    $a = $_POST["num1"];
    $b = $_POST["num2"];
     
echo "Adição:" .($a + $b);
echo "<br>Subtração:" .($a - $b);
echo "<br>Multiplicação:" .($a * $b);
echo "<br>Divisão:" .($a / $b);
echo "<br>Modulo:" .($a % $b);
echo "<br>Exponenciação:" .($a ** $b);


echo "<br><br>Igualdade = " .($a == $b). "<br>";
echo "Identico = " .($a === $b). "<br>";
echo "Nao Igual = " .($a != $b). "<br>";
echo "Nao identico = " .($a !== $b). "<br>";





    ?>
</body>
</html>