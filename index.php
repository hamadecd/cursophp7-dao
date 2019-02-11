<?php

require_once("config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

//carrega um usuario
/*$user = new usuario();
$user->loadById(3);
echo $user;*/

//carrega uma lista de usuarios
/*$lista = usuario::getList();
echo json_encode($lista);*/

//carrega uma lista de usuarios buscando pelo login
/*$search = usuario::search("lano");
echo json_encode($search);*/

//carrega um usuario usando o login e a senha
$user = new usuario();
$user->login("ciclano", "666666");
echo $user;

?>