<?php

require_once("config.php");

/*
$root = new Usuario();
$root->loadById(1);
*/

/*
$lista = Usuario::getList();
echo json_encode($lista);*/

/*
$busca = Usuario::serach("Th");
echo json_encode($busca);
*/

/*
$usuario = new Usuario();
$usuario->login("Thiago", "123123");
*/

/*
$aluno = new Usuario("aluno", "123123");
$aluno->insert();
*/

/*
$usuario = new Usuario();
$usuario->loadById(1);
*/

$usuario = new Usuario();
$usuario->loadById(1);
$usuario->delete();

echo $usuario;