<?php 

    $nome = $_POST ["nome"];
    $email = $_POST ["email"];
    $data = $_POST ["data"];
    $bandeira = $_POST ["bandeira"];

    echo "Seu nome é: $nome <br>";
    echo "Seu email é: $email <br>";
    echo "Sua data de nacimento é: $data <br>";
    echo "A bandeira de seu cartão de crédito é: $bandeira <br>";
?>