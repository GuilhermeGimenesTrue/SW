<?php 

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    if ($n1 > $n2){

        if($n1 > $n3){
            echo "O maior é $n1";
        };
    };
    if($n2 > $n1){
        if($n2 > $n3){
            echo "O maior é $n2";
        };
    };
    if($n3 > $n1){
            if($n3 > $n2){
                echo "O maior é $n3";
            };
    };
?>