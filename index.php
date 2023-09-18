<?php

require_once("config.php");

/*$sql=new sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
/*Carrega um usuario
$root = new Usuario();
$root->loadById(2);
echo $root;*/

//Carrega uma lista de usuarios
/*$lista = Usuario::getList();

echo json_encode($lista);*/

//Carrega uma lista de usuarios buscando pelo login 
/*$search= Usuario::search("p");
echo json_encode($search);*/

//carrega um usuario usando login e senha
/*$usuario = new Usuario();
$usuario->login("pedro", "senha123");

echo $usuario*/

//Testando Precudere e colocando insert
/*$aluno = new Usuario("Pedro", "23Ped@");
$aluno->insert();
echo $aluno;*/

/* Inserindo o metodo de update
$usuario = new Usuario();
$usuario->loadById(4);
$usuario->update("Professor Janilson", "Professor123");
echo $usuario;*/
?>