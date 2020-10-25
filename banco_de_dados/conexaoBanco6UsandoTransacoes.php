<h1>Transações no MYSQL</h1>
<fieldset style="border-color: red">
    <legend>Transações Dados:</legend>
    <p>
    Se utilizar o comando <strong>"$conn->beginTransaction();"</strong> e necessário utilizar os comandos <strong>"$conn->commit();"</strong> para confirmar a transação (executar o sql no banco)
    ou o comando <strong>"$conn->rollBack();"</strong> para desfazer o comando do sql.<br><br>
    <strong>$conn->beginTransaction() - Inicia uma transação</strong><br>
    <strong>$conn->commit() - Confirma uma transação</strong><br>
    <strong>$conn->rollBack() - Cancela a transação</strong><br><br>

    <strong>Ex:</strong>
    <hr>
    <br>

    $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");<br>
    <strong>$conn->beginTransaction();</strong><br><br>

    $stmt = $conn->prepare("delete from tb_usuarios WHERE idusuario = :id");<br>
    $id = 8;<br>
    $stmt->bindParam(":id",$id);<br>
    $stmt->execute();<br><br>

    <strong>//$conn->rollBack();</strong><br>
    <strong>$conn->commit();</strong><br><br>



    </p>
</fieldset>

<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$conn->beginTransaction();

$stmt = $conn->prepare("delete from tb_usuarios WHERE idusuario = :id");
$id = 8;
$stmt->bindParam(":id",$id);
$stmt->execute();

//$conn->rollBack();
$conn->commit();

?>

<br><br><br>
<button><a href="conexaoBanco5DeleteDadosBanco.php">Aula Anterior Deletando dados no banco MYSQL </a></button>
<button><a href="../pdo-dao/index.php">próxima Aula PDO-DAO </a></button>



