<?php

require_once("config.php");

/* $sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/
 
/* carrega 1 usuário 
$root = new Usuario();
$root->loadById(3); 
echo $root; 
*/

/* $lista = Usuario::getList();
echo json_encode($lista); 
*/

/*Carrega uma lista de usuário buscando pelo login
$search = Usuario::search("Jo");
echo json_encode($search);
*/

/*Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","54321");
echo $usuario; 
*/

/* Criando um novo usuário
$aluno = new Usuario("Aluno", "!@#$");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();
$usuario->loadById(13);
$usuario->update("professor", "112233");
echo $usuario;

?>