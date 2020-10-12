<h1>Delete dados no MYSQL</h1>
<fieldset style="border-color: red">
    <legend>Delete Dados:</legend>
    <p>
        $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");<br>
        $stmt = $conn->prepare("delete from tb_usuarios WHERE idusuario = :id");<br><br>

        $id = 10;<br><br>

        $stmt->bindParam(":id",$id);<br>
        $stmt->execute();<br><br>

        echo "dados deletados com sucesso!!!";<br>


    </p>
</fieldset>
<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$stmt = $conn->prepare("delete from tb_usuarios WHERE idusuario = :id");

$id = 10;

$stmt->bindParam(":id",$id);
$stmt->execute();

echo "dados deletados com sucesso!!!";


?>


<br><br><br>
<button><a href="conexaoBanco3InserindoDadosBanco.php">Aula Anterior Inserindo dados no banco MYSQL </a></button>
<button><a href="conexaoBanco6UsandoTransacoes.php">próxima Aula Usando Transações </a></button>



