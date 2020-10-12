<h1>Criando funções</h1>
<p>
    function ola(){     <br>
    return 'Olá mundo'; <br>
    }<br><br>


    echo ola();<br>
    $frase = ola();<br>
    $qtd = strlen($frase);<br>
    echo $qtd.' caracteres';<br><br><br>
</p>


<?php

function ola(){
    return 'Olá mundo';
}


echo '<strong>'.ola().'</strong>';
$frase = ola();
$qtd = strlen($frase);
echo '<br>'.'<strong>'.$qtd.' caracteres'.'</strong>';
?>

<hr>



<h1 style="color: red;">Criando funções passando parâmetros (Argumentos)</h1>
<h3>func_get_args()  --- (funçao que recebe vários argumentos sem informar parâmetro na função)</h3>
<p>
    function testeArgumento(){ <br>

    $argumentos = func_get_args();<br>

    return $argumentos;<br>
    }<br><br>

    $texto = testeArgumento('irwing',35, 'valnira');<br>
    var_dump($texto);<br>
</p>

<?php
    function testeArgumento(){

        $argumentos = func_get_args();

        return $argumentos;
    }

$texto = testeArgumento('irwing',35, 'valnira');
var_dump($texto);

?>
<hr>



<h1>Criando funções passando parâmetros</h1>
<p>
    function salario($multiplicador){ <br>
    return $multiplicador * 4269.00;<br>
    }   <br><br>



</p>

<?php
function salario($multiplicador){
    return $multiplicador * 4269.00;
}
echo '<strong> Irwing recebeu 3 salários: '. salario(3).'</strong>';

?>

<hr>



<h1>Outro exemplo criando funções passando parâmetros</h1>
<p>
    function olaMundo($nome){<br>
    return "Olá Mundo, $nome";<br>
    } <br><br>
    echo olaMundo('irwing');<br>
    echo olaMundo('Valnira');<br>
    echo olaMundo('victor');<br>


</p>

<?php
function olaMundo($nome){
    return "Olá Mundo, $nome";
}
echo '<strong>'.olaMundo('irwing').'</strong><br>';
echo '<strong>'.olaMundo('Valnira').'</strong><br>';
echo '<strong>'.olaMundo('victor').'</strong><br>';
?>


<br><br>
<button><a href="../session/funcoesSession.php">Página anterior Funções Session </a></button>
<button><a href="passagemParametroValorReferencia2.php">Proxima aula Passagem de parâmetro por valor x Referência</a></button>


























