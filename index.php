<?php

require_once("config.php");

//--------------------------------------------------------
//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY idusuario");
//echo json_encode($usuarios);

//--------------------------------------------------------
//carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//--------------------------------------------------------
//carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//--------------------------------------------------------
//carrega uma lista de usuários buscando pelo login
//$busca = Usuario::search("andre");
//echo json_encode($busca);

//--------------------------------------------------------
//carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("root","root");
echo $usuario;

//--------------------------------------------------------

?>