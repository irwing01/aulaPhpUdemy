<?php
require_once 'link.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array</title>
</head>
<body>
<h1>Array (VETOR)</h1>
<strong>$frutas = array("melão","melancia","manga","uva","maracujá");</strong><br>
<?php
$frutas = array("melão","melancia","manga","uva","maracujá");
var_dump($frutas);
?>

<h1>Array Bidimensional</h1>
<strong><p>Ex: <br>
    $carros[0][0] = 'gm';     <br>
    $carros[0][1] = 'cobalt'; <br>
    $carros[0][2] = 'onix';   <br>
    $carros[0][3] = 'camaro'; <br><br>

    $carros[1][0] = 'ford';   <br>
    $carros[1][1] = 'fiesta'; <br>
    $carros[1][2] = 'fusion'; <br>
    $carros[1][3] = 'eco sport'; <br><br>

    $carros[2][0] = 'fd';<br>
    $carros[2][1] = 'fa';<br>
    $carros[2][2] = 'fon';<br>
    $carros[2][3] = 'esport';<br><br>
    echo $carros[0][3];   <br>
</p></strong>
<?php
$carros[0][0] = 'gm';
$carros[0][1] = 'cobalt';
$carros[0][2] = 'onix';
$carros[0][3] = 'camaro';

$carros[1][0] = 'ford';
$carros[1][1] = 'fiesta';
$carros[1][2] = 'fusion';
$carros[1][3] = 'eco sport';

$carros[2][0] = 'fd';
$carros[2][1] = 'fa';
$carros[2][2] = 'fon';
$carros[2][3] = 'esport';

echo 'Resultado '.$carros[0][3].'<br><br>';
echo '<strong>Mostrando com print_r.</strong> <br>';
print_r($carros);

echo '<br><br><strong>Mostrando com var_dump. </strong> <br>';
var_dump($carros);

echo '<br><br><strong>Mostrando um item especifico (echo $carros[0][2]). </strong> <br>';
echo $carros[0][2];

echo '<br><br><strong>Mostrando o ultimo item do laço "0" comando ( end($carros[0]) ). </strong> <br>';
echo end($carros[0]);


echo '<br><br><strong>Mostrando todos. </strong> <br>';
echo '<p>Ex: <br>
    foreach($carros as $itens){ <br>
        foreach($itens as $item){   <br>
           echo \'-> \'.$item.\'; <br>
    }<br>
}<br>
</p>';
foreach($carros as $itens){
    foreach($itens as $item){
        echo '-> '.$item.'<br>';
    }
}
?>

<h1>Funçao para Array (array_push($variavel, array()))</h1>
<strong><p>Ex: <br>
    $pessoa = array();<br><br>

    array_push($pessoa, array(<br>
    'nome'=>'irwing',<br>
    'idade'=>34<br>
    ));<br><br>

    array_push($pessoa, array(<br>
    'nome'=>'lala',<br>
    'idade'=>3<br>
    ));<br><br>

    var_dump($pessoa);<br>
</p></strong>
<?php
$pessoa = array();

array_push($pessoa, array(
    'nome'=>'irwing',
    'idade'=>34
));

array_push($pessoa, array(
    'nome'=>'lala',
    'idade'=>3
));
echo '<br><br><strong>Mostrando com var_dump. </strong> <br>';
var_dump($pessoa);

echo '<br><br><strong>Mostrando com print_r. </strong> <br>';
print_r($pessoa);


echo '<br><br><strong>Mostrando tudo. </strong> <br>';
foreach($pessoa as $itens){
    foreach($itens as $iten){
        echo $iten.'<br>';
    }
}
?>

<br><br><br>
<button><a href="estruturaRepeticao.php">Aula Anterior estruturaRepeticao</a></button>
<button><a href="json.php">próxima Aula JSON </a></button>

</body>
</html>
