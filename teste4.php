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

//insert
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
//$stmt = $conn->prepare('insert into tb_usuarios(deslogin,dessenha) VALUES (:login,:senha)');
//$l = 'csanova';
//$s = 'bomDemais';
//$stmt->bindParam(":login", $l);
//$stmt->bindParam(":senha", $s);
//$stmt->execute();

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$stmt = $conn->prepare('select * from tb_usuarios');
$stmt->execute();
$r = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($r as $e){
    echo $e['idusuario'] . '<br>';
    echo $e['deslogin'] . '<br>';
    echo $e['dessenha'] . '<br>';
    echo $e['dtcadastro'] . '<br>';
    echo '<hr>';
}




//
//$conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");
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
