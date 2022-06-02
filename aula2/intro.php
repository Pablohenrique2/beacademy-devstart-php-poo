<?php

include_once "Produto.php";
include_once "Categoria.php";

$c1 = new Categoria("camiseta", " camiseta verao");
$c2 = new Categoria("bermuda", "bermuda verao");


$pro = new Produto("camisa", 122, $c2);

var_dump($pro);
