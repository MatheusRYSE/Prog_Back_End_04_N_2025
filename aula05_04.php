<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 05_04</title>
</head>

<body>
    <?php
    // echo "<pre>"; print_r($_REQUEST); echo"</pre>";
    $nome = $_POST["nome"];
    $data = $_POST["data"];
    $av1 = $_POST["av1"];
    $av2 = $_POST["av2"];
    echo "Nome: $nome<br>";
    echo "data: $data<br>";
    echo "av1: $av1<br>";
    echo "av2: $av2<br>";
    $media = ($av1 + $av2) / 2;
    echo "media: $media<br>";

    ?>
</body>

</html>