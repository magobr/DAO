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

/*
$search = Usuario::search("th");
echo json_encode($search);
*/

/*
$usuarios = new Usuario();
$usuarios->login("root", "!@#$");

echo $usuarios;
*/

/*
$aluno = new Usuario('Aluno2', 'Senha2');
$aluno->Insert();
echo $aluno;
*/

/*
$newUser = new Usuario();
$newUser->loadById(7);
$newUser->update('Professor', '!@#$');

echo $newUser;
*/

$user = new Usuario();
$user->loadById(7);
$user->delete();