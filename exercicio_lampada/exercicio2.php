<?php 
    include_once "carro.class.php";

    $carro1 = new Carro();
    $carro2 = new Carro();
    $carro3 = new Carro();
    $carro4 = new Carro();
    $carro5 = new Carro();

    $carro1->Marca = "Toyota";
    $carro1->Modelo = "SW-4";
    $carro1->Combustivel = "Etanol";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = 500;

    $carro2->Marca = "Fiat";
    $carro2->Modelo = "Uno";
    $carro2->Combustivel = "Gasolina";
    $carro2->Portas = 4;
    $carro2->Capacidade_tanque = 300;

    $carro3->Marca = "Fiat";
    $carro3->Modelo = "Siena";
    $carro3->Combustivel = "Gasolina";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = 300;

    $carro4->Marca = "Honda";
    $carro4->Modelo = "New City Hatchback";
    $carro4->Combustivel = "Etanol";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = 500;

    $carro5->Marca = "Chevrolet";
    $carro5->Modelo = "S10";
    $carro5->Combustivel = "Etanol";
    $carro5->Portas = 4;
    $carro5->Capacidade_tanque = 500;

    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();

?>