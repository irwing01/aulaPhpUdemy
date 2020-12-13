<?php
/**
 * Created by PhpStorm.
 * User: IRWING-OKUBO-AGUIAR
 * Date: 25/10/2020
 * Time: 15:47
 */

require_once ("config.php");
//testando a classe Sql()
//$sql = new Sql();
//$usuarios = $sql->select("select * from tb_usuarios");
//
//echo json_encode($usuarios);

//chamando a classe Usuario()
$root = new Usuario();
$root->loadById(13);
echo $root;