<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08_02</title>
</head>
<body>
    <?php
    echo md5("uninove");
    echo "<h2>".date("d/m/Y H:i:s")."<h2>";
    $diaSemana = date('w'); // Retorna o dia da semana em numero (0-6)

    switch ($diaSemana) {
        case 0:
            echo "Domingo";
            break;
        case 1:
            echo "Segunda";
            break;
        case 2:
            echo "Terça";
            break;
        case 3:
            echo "Quarta";
            break;
        case 4:
            echo "Quinta";
            break;
        case 5:
            echo "Sexta";
            break;
        case 6:
            echo "Sabado";
            break;
        default;
    } 
    

    ?>
</body>
</html>