<h1>Inserindo dados no MYSQL</h1>
<fieldset style="border-color: red">
    <legend>Inserindo Dados:</legend>
    <p>
        $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");<br>
        $stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) VALUES (:login,:senha)");<br><br>

        $login = "irwing";<br>
        $senha = "irwing123";<br><br>

        $stmt->bindParam(":login",$login);<br>
        $stmt->bindParam(":senha",$senha);<br>
        $stmt->execute();<br><br>

        echo "dados cadastrados com sucesso!!!!";<br>
    </p>
</fieldset>
<?php
//$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
//$stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) VALUES (:login,:senha)");
//
//$login = "irwing";
//$senha = "irwing123";
//
//$stmt->bindParam(":login",$login);
//$stmt->bindParam(":senha",$senha);
//$stmt->execute();
//
//echo "dados cadastrados com sucesso!!!!";

?>



<br><br><br>
<button><a href="conexaoBanco2.php">Aula Anterior Conexão com banco de dados MYSQL e SQL Server </a></button>
<button><a href="conexaoBanco4UpdateDadosBanco.php">próxima Aula Update dados banco  </a></button>



