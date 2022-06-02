<?php
include_once "./Alunos.php";
include "./Professor.php";
$a1 = new Alunos();
$a1->AlterarNome("pablo");
$a1->pegarNome();
//$a1 = new Alunos();
//$a1->nome = "alex";
//$a1->cpf = "565.344.343.34";
var_dump($a1);
//$pro = new Professor();
//$pro->nome = "jose";
//$pro->idade = 20;
//$pro->disciplina = "matematica";
//var_dump($pro);
