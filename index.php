<?php

require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

//CARREGA 1 USUÁRIO
//$root = new Usuario();
//$root->loadById(1);
//echo $root;


//CARREGA UMA LISTA DE USUÁRIOS
//$lista = Usuario::getList();
//echo json_encode($lista);


//CARREGA UMA LISTA DE USUÁRIOS BUSCANDO PELO LOGIN
//$search = Usuario::search("jo");
//echo json_encode($search);

//CARREGA UM USUÁRIO USANDO O LOGIN E A SENHA
//$usuario = new Usuario();
//$usuario->login("jose", "1234567890");
//echo $usuario;


//CRIANDO UM NOVO USUÁRIO
//$aluno = new Usuario("aluno", "@alun0");
//$aluno->insert();
//echo $aluno;


//ALTERAR 1 USUÁRIO
/*
$usuario = new Usuario();
$usuario->loadById(13);
$usuario->update("professor", "!@#$%¨&*");
echo $usuario;
*/


$usuario = new Usuario();
$usuario->loadById(12);
$usuario->delete();
echo $usuario;

?>