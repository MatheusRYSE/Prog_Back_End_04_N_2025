<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> INFORME SUA IDADE </h1>

    <form method="post" action = "">
         Idade <input type="text" name="idade" required><br>
        <input type="submit" value="Enviar."><br>

    <?php

    $idade = $_POST["idade"];

    if($idade < 0 && $idade == 0) {
        echo "Idade invalida.";
    } elseif($idade < 13) {
        echo "Você não pode criar conta, idade miníma de 13 anos.";
    } elseif($idade >= 13 && $idade <= 17) {
        echo "Você pode criar uma conta com o consentimento dos pais.";
    } elseif ($idade >= 18 && $idade <= 64) {
        echo "Você pode criar uma conta. Bem-vindo à nossa rede social!";
    } else {
        echo "Você pode criar uma conta. Lembre-se de verificar nossas configurações de privacidade.";
    }
 
    ?>
</body>
</html>