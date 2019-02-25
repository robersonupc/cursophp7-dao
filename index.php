<?php 

require_once("config.php");

//Carrega um usuário
//$usuario = new Usuario();
//$usuario->loadById(3);
//echo $usuario;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("Ana Laura", "123456");
//echo $usuario;

/*
//Criando um novo usuário
$cliente = new Usuario("jbs", "4567890");
$cliente->insert();
echo $cliente;
*/
/*
//Alterar um usuário
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->update("jpaulo", "9876543");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(4);
$usuario->delete();
echo $usuario;

 ?>