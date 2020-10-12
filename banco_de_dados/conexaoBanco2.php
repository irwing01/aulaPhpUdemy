<h1>Conexão com banco de dados MYSQL</h1>
<fieldset style="border-color: red">
    <legend>Conexão:</legend>
    <h2 style="color: red">Conexão com PDO</h2>
    <h2 style="color: red">A conexão com PDO é a mais indicada.</h2>
</fieldset>

<fieldset>
    <legend>Exemplo</legend>
    <h1>Conexão com PDO</h1>
    <p>
        $conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");<br>
        $stmt = $conn->prepare("select * from tb_usuarios");<br>
        $stmt->execute();<br>
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);<br><br>

        foreach($res as $dados){<br>
        echo $dados->idusuario;<br>
        echo $dados->deslogin;<br>
        echo $dados->dessenha;<br>
        echo $dados->dtcadastro;<br>
        echo '===============================';<br>
        }<br>
    </p>
</fieldset>

<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");
$stmt = $conn->prepare("select * from tb_usuarios");
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_OBJ);

foreach($res as $dados){
//    var_dump($dados); echo '<br>';
    echo $dados->idusuario . '<br>';
    echo $dados->deslogin . '<br>';
    echo $dados->dessenha . '<br>';
    echo $dados->dtcadastro . '<br>';
    echo '===============================<br>';
}

?>
<br><br><br>
<hr>
<br><br><br>

<h1>Conexão com banco de dados SQL Server </h1>
<fieldset style="border-color: red">
    <legend>Conexão:</legend>
    <h2 style="color: red">Conexão com PDO</h2>
    <p style="color: red">
        <strong>ConnectionPooling - Mantem o estado da conexão.</strong><br><br>
        <strong>ConnectionPooling=0</strong> Oque você pediu para executar, ele executa e encerra. <br><br>
        <strong>ConnectionPooling=1</strong> Ele mantem o estado de conexão aberta (multi threed).<br><br>

    </p>

</fieldset>

<fieldset>
    <legend>Exemplo</legend>
    <h1>Conexão com PDO</h1>
    <p>
        $conn = new PDO("sqlsrv:Database=dbphp8;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");<br>
        $stmt = $conn->prepare("select * from tb_usuarios");<br>
        $stmt->execute();<br>
        $res = $stmt->fetchAll(PDO::FETCH_OBJ);<br><br>

        //var_dump($res);<br>
        foreach($res as $dados){<br>
        echo $dados->idusuario;<br>
        echo $dados->deslogin;<br>
        echo $dados->dessenha;<br>
        echo $dados->dtcadastro;<br>
        echo '===============================';<br>
        }<br>


    </p>
</fieldset>

<?php
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

?>


<br><br><br>
<button><a href="conexaoBanco1.php">Aula Anterior Conexão Banco MYSQLI</a></button>
<button><a href="conexaoBanco3InserindoDadosBanco.php">próxima Aula Inserindo dados no Banco </a></button>



