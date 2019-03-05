<?php
require_once("config.php");

/*
$root = new Usuario();
$root->loadById(2);

echo $root;
*/

/*
$lista = Usuario::getList();
echo json_encode($lista);
*/

$search = Usuario::search("th");
echo json_encode($search);