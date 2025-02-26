<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio02</title>
</head>
<body>
    <?php 

        $numero = 1;
        $tabuada = 1;

        for ($i = 1; $i < 11; $i++) {
            $tabuada*$numero;
            echo "$tabuada <br>";
            $numero++;
        }
        
    ?>
</body>
</html>