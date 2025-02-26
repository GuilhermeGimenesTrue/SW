<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <?php 

        $contador = 2;
        $soma = 1;
    
        for ($i = 0; $i < 51; $i++) {
            echo "Numero: $soma";
            $soma += $i;
            echo "<br>";
        };

        

    ?>
</body>
</html>