<?php
//
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
//$stmt = $conn->prepare("select * from tb_usuarios");
//$stmt->execute();
//$res = $stmt->fetchAll(PDO::FETCH_OBJ);
//
////var_dump($res);
//foreach($res as $dados){
//    echo $dados->idusuario . '<br>';
//    echo $dados->deslogin . '<br>';
//    echo $dados->dessenha . '<br>';
//    echo $dados->dtcadastro . '<br>';
//    echo '===============================<br>';
//}
//echo phpinfo();


$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
$stmt = $conn->prepare("select * from tb_usuarios");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

//var_dump($res);
foreach($res as $dados){
    echo $dados->idusuario . '<br>';
    echo $dados->deslogin . '<br>';
    echo $dados->dessenha . '<br>';
    echo $dados->dtcadastro . '<br>';
    echo '===============================<br>';
}
