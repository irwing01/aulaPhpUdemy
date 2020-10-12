<?php
require_once 'link.php';
?>
<h1>Json</h1>
<strong><h3>json_encode() transforma um array e json</h3></strong>
<p>
    $pessoa = array();<br>

    array_push($pessoa, array(<br>
    'nome'=>'irwing',<br>
    'idade'=>34<br>
    ));<br><br>

    array_push($pessoa, array(<br>
    'nome'=>'larissa',<br>
    'idade'=>3<br>
    ));<br><br>

    array_push($pessoa, array(<br>
    'nome'=>'leticia',<br>
    'idade'=>10<br>
    ));<br><br>
    <strong>echo json_encode($pessoa);</strong><br>
</p>

<?php
$pessoa = array();

array_push($pessoa, array(
    'nome'=>'irwing',
    'idade'=>34
));

array_push($pessoa, array(
    'nome'=>'larissa',
    'idade'=>3
));

array_push($pessoa, array(
    'nome'=>'leticia',
    'idade'=>10
));

//mostrando dados com foreach
//foreach($pessoa as $itens){
//    foreach($itens as $key => $iten){
//        echo $key. '-> ' .$iten.'<br>';
//    }
//}

//json_encode()

echo json_encode($pessoa);

?>

<strong><h3>json_decode($variavel, true) transforma um json em array</h3></strong><br>
<?php
$json = '[{"nome":"irwing","idade":34, "sexo":"masculino"},{"nome":"larissa","idade":3},{"nome":"leticia","idade":10}]';
$data = json_decode($json, true);
var_dump($data);
echo'<br><br>---------Mostrando com foreach(){}--------------------------------<br>';
foreach($data as $q => $e){
    foreach($e as $k => $iten){
        echo $iten.'<br>';
    }
}

?>



<strong><h3>json_decode($variavel) transforma um json em objeto</h3></strong>
<p>$json = '[{"nome":"irwing","idade":34, "sexo":"masculino"},{"nome":"larissa","idade":3},{"nome":"leticia","idade":10}]';</p>
<p>$data = json_decode($json);</p>
<p>var_dump($data);</p>
<p><strong>Mostrando Objeto Ex: $data[0]->nome </strong></p>
<?php
$json = '[{"nome":"irwing","idade":34, "sexo":"masculino"},{"nome":"larissa","idade":3, "sexo":"feminino"},{"nome":"leticia","idade":10, "sexo":"feminino"}]';
$data = json_decode($json);
var_dump($data);

echo '<br><br>';
echo $data[0]->nome.'<br>';
echo $data[0]->idade.'<br>';
echo $data[0]->sexo.'<br>';

echo '<br><br> OU <br><br>';
foreach($data as $iten){
    echo 'O '.$iten->nome. ' tem '.$iten->idade. ' anos de idade, e do sexo '. $iten->sexo.'<br>';
}

?>


<br><br><br>
<button><a href="array.php">Aula Anterior Array</a></button>
<button><a href="constantes.php">próxima Aula Constantes </a></button>

