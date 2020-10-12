<h1>Conexão com banco de dados</h1>
<fieldset style="border-color: red">
    <legend>Tipos de conexão:</legend>
<h2 style="color: red">Conexão com MYSQLI</h2>
<h2 style="color: red">Conexão com PDO</h2>
</fieldset>
<br>
<hr>
<br>
<fieldset>
<h1>Conexão com MYSQLI inserindo dados</h1>
<p>A classe MYSQLI e uma classe nativa do php.</p>
    <hr>
<p>
    $conn = new mysqli("localhost","root","","dbphp7");<br><br>

    if($conn->connect_error){<br>
    echo 'Error '. $conn->connect_error;<br>
    exit;<br>
    }<br><br>

    $stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) values (?,?)");<br><br>

    $login = "user";<br>
    $senha = "654321";<br>
    $stmt->bind_param("ss",$login,$senha);<br><br>

    $stmt->execute();<br>

</p>
    <hr>
    <p style="color: red">Obs: O "ss" do  $stmt->bind_param(<strong>"ss"</strong>,$login,$senha) é para informar que eé uma string que esta enviando, se fosse int seria i ou float f e assim por diante.</p>
    <p style="color: red">Como são dias string fica o "ss"</p>

</fieldset>
<?php
// comentado pois se deixar fica inserindo dados no banco a cada vez que entra na página

//$conn = new mysqli("localhost","root","","dbphp7");
//
//if($conn->connect_error){
//    echo 'Error '. $conn->connect_error;
//    exit;
//}
//
//$stmt = $conn->prepare("insert into tb_usuarios (deslogin,dessenha) values (?,?)");
//
//$login = "user";
//$senha = "654321";
//$stmt->bind_param("ss",$login,$senha);
//
//$stmt->execute();
?>

<h2>OU</h2>

<fieldset>
    <h1>Conexão com MYSQLI inserindo dados</h1>
    <p>A classe MYSQLI e uma classe nativa do php.</p>
    <hr>
    <p>
        $conn = new mysqli("localhost","root","","dbphp7");<br><br>

        if($conn->connect_error){<br>
        echo 'Error '. $conn->connect_error;<br>
        exit;<br>
        }<br><br>


        $login = "admin";<br>
        $senha = "irwing";<br><br>

        $sql = "insert into tb_usuarios (deslogin,dessenha) values ('$login' , '$senha')";<br><br>

        $stmt = $conn->prepare($sql);<br><br>

        $stmt->execute();<br><br>

    </p>
    <hr>
</fieldset>

<?php
// comentado pois se deixar fica inserindo dados no banco a cada vez que entra na página
//
//$conn = new mysqli("localhost","root","","dbphp7");
//
//if($conn->connect_error){
//    echo 'Error '. $conn->connect_error;
//    exit;
//}
//
//
//$login = "admin";
//$senha = "irwing";
//
//$sql = "insert into tb_usuarios (deslogin,dessenha) values ('$login' , '$senha')";
//
//$stmt = $conn->prepare($sql);
//
//$stmt->execute();
?>

<br>
<hr>
<br>


<fieldset>
    <h1>Conexão com MYSQLI Buscando dados</h1>
    <hr>
    <p>
        $conn = new mysqli("localhost","root","","dbphp7");<br><br>

        if($conn->connect_error){<br>
        echo 'Error '. $conn->connect_error;<br>
        exit;<br>
        }<br><br>

        $result = $conn->query("select * from tb_usuarios");<br><br>

        while($row = $result->fetch_array()){<br>
        var_dump($row);<br>
        }<br><br>

    </p>
    <hr>


<?php
// comentado pois se deixar fica inserindo dados no banco a cada vez que entra na página

$conn = new mysqli("localhost","root","","dbphp7");

if($conn->connect_error){
    echo 'Error '. $conn->connect_error;
    exit;
}

$result = $conn->query("select * from tb_usuarios");

$dados = array();
while($row = $result->fetch_assoc()){
    array_push($dados, $row);
}

echo json_encode($dados);

?>
</fieldset>


<br><br><br>
<button><a href="../orientacaoObjeto/namespace/index.php">Aula Anterior NAMESPACE</a></button>
<button><a href="conexaoBanco2.php">próxima Aula Conexao Banco PDO</a></button>

