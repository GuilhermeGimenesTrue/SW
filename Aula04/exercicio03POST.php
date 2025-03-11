
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio03GET</title>
</head>

<?php 
    $cor = $_POST['cor'];
?>

<body style="background-color: <?php echo "$cor"?>;">
    <h1>
        Crie um formulário onde o usuário seleciona uma cor em um input color e que altere a 
        cor de fundo da página. 
    </h1>
    <form method="post">
        <p>Escolha uma cor para o fundo:</p>
        <p>Color: <input type="color" name="cor" id="cor" required></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
