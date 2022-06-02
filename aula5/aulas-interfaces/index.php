<?php
include_once "Validar.php";
include_once "ValidarBr.php";
include_once "ValidarUs.php";
$cpf = "13452343112";
$c1 = new ValidarBr();
$c1->validarDocumento($cpf);
$c2 = new ValidarUs($cpf);
$c2->validarDocumento($cpf);
