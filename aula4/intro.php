<?php
include_once "Usuarios.php";
include_once "Cliente.php";
include_once "Gestor.php";
include_once "GestorGeral.php";

$g1 = new Gestor("paulo@gmail.com", "13235454", 8000);
$g1->setNome("paulo");

var_dump($g1);

$gg1 = new GestorGeral("leandro@gmail.com", "13243432", 10000);
var_dump($gg1);

$c1 = new Cliente("pablo@gmail.com", "566735355");
$c1->setNome("pablo");
var_dump($c1);

$cc1 = new ClienteVip("junio@gmail.com", "77894579479");
var_dump($cc1);
