<h1>Parâmetros por valor  x  Referência</h1>

<h3>Parâmetros por valor.</h3>
<p>Obs: Oque acontece na função fica so na função</p>
<p>
    $a = 10;<br>

    function trocaValor($valor){ <br>

    $valor += 50;<br>

    return $valor;<br>

    }<br>

    echo trocaValor($a);<br>
    echo $a;<br><br>

</p>
<?php
$a = 10;

function trocaValor($valor){

    $valor += 50;

    return $valor;

}

echo '<strong>'.trocaValor($a).'</strong>';
echo '<br>';
echo '<strong>'.$a.'</strong>';
?>

<hr>

<!---------------------------------------------------------------------------------------------------->
<h3>Parâmetros por Refêrencia.</h3>
<p>Obs: Quando tem o '&' significa passagem de parâmetro por referência</p>
<p>
    $b = 10;<br>

    function trocaV(&$valor){<br>

    $valor += 50;<br>

    return $valor;<br>

    }<br>

    echo trocaV($b);<br>
    echo $b;<br>


</p>

<?php
$b = 10;

function trocaV(&$valor){

    $valor += 50;

    return $valor;

}

echo trocaV($b);
echo '<br>';
echo $b;
?>

<hr>

<!---------------------------------------------------------------------------------------------->

<h3>Outro exemplo de Parâmetros por Refêrencia com foreach.</h3>
<p>Obs: Quando tem o '&' significa passagem de parâmetro por referência</p>
<p>
    $pessoa = array(
    'nome'=>'joao',
    'idade'=>20
    );<br><br>
    foreach($pessoa as &$value){<br>
    if(gettype($value)=== 'integer'){<br>
    echo $value +=10;<br>
    }else{<br>
    echo $value;<br>
    }<br>
    }<br><br>
    var_dump($pessoa);<br>




</p>



<?php
$pessoa = array(
    'nome'=>'joao',
    'idade'=>20
);
    foreach($pessoa as &$value){
        if(gettype($value)=== 'integer'){
            echo $value +=10;
        }else{
            echo $value.'<br>';
        }
    }
echo '<br><br>';
var_dump($pessoa);

?>

<br><br><br>
<button><a href="criandoFuncoesDeUsuario.php">Página anterior Criando funções de usuário </a></button>
<button><a href="novidadesFuncoes3.php">Proxima aula Novidades em funções PHP 7</a></button>
<br><br>