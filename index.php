<?php

require_once("config.php");
/*
$root = new Usuario();
$root->loadById(5);
*/

/*
$lista = Usuario::getList();
echo json_encode($lista);*/

/*
$busca = Usuario::serach("Th");
echo json_encode($busca);
*/

$usuario = new Usuario();
$usuario->login("Thiago", "123123");

echo $usuario;