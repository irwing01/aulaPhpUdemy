<?php
require_once 'link.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Foreach com formulário</h1>
<form>
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="end" placeholder="Endereço">
    <input type="text" name="tel" placeholder="Tel">
    <input type="submit" value="Submit">
</form><br><br>
<?php
//var_dump($_GET);
    if(isset($_GET)) {
        foreach ($_GET as $key => $item) {
            echo 'Índice ' . $key . '<br>';
            echo 'Valor do campo ' . $item . '<br>';
            echo '<hr>';
        }
    }
?>

<hr>
<h1>While</h1>
<?php
$condicao = true;
while($condicao){
    $numero = rand(1,60);

    echo $numero.'<br>';

    if($numero === 3){
        echo 'Numero  atingido ';
        $condicao = false;
    }
}
?>

<hr>
<h1>Do While</h1>
<?php
$total = 1010;
$desconto = 0.9;

do{
   $total *= $desconto;
    echo $total.'<br>';
}while($total >= 100);
echo $total;
?>
<br><br><br>
<button><a href="chamadaRequired.php">Aula Anterior include / required</a></button>
<button><a href="array.php">próxima Aula Array</a></button>

</body>
</html>

