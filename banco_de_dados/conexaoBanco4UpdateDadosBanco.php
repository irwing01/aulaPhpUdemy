<h1>Update dados no MYSQL</h1>
<fieldset style="border-color: red">
    <legend>Update Dados:</legend>
    <p>
        $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");<br>
        $stmt = $conn->prepare("update tb_usuarios set deslogin = :login, dessenha = :senha where idusuario = :id");<br><br>

        $login = "maria";<br>
        $senha = "maria123";<br>
        $id = 1;<br><br>

        $stmt->bindParam(":login", $login);<br>
        $stmt->bindParam(":senha",$senha);<br>
        $stmt->bindParam(":id",$id);<br><br>

        $stmt->execute();<br><br>

        echo "Dado alterado com sucesso!!!!";<br>


    </p>
</fieldset>
<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$stmt = $conn->prepare("update tb_usuarios set deslogin = :login, dessenha = :senha where idusuario = :id");

$login = "lala";
$senha = "lala123";
$id = 1;

$stmt->bindParam(":login", $login);
$stmt->bindParam(":senha",$senha);
$stmt->bindParam(":id",$id);

$stmt->execute();

echo "Dado alterado com sucesso!!!!";

?>


<br><br><br>
<button><a href="conexaoBanco3InserindoDadosBanco.php">Aula Anterior Inserindo dados no banco MYSQL </a></button>
<button><a href="conexaoBanco5DeleteDadosBanco.php">próxima Aula Deletando dados no banco </a></button>



