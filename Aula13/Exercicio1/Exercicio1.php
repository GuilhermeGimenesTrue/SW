<?php 

    include_once 'Aluno.class.php';

    $Aluno1 = new Aluno("Abreu",10,4);
    $Aluno2 = new Aluno("Aitoph",6,3);

    $Aluno1->VerDetalhes();
    $Aluno1->verificarSituacao();
    $Aluno2->VerDetalhes();
    $Aluno2->verificarSituacao();


?>