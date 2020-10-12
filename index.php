<?php
require_once 'link.php';
echo '<h2> Como declarar variáveis! </h2>';

$nome = 'Hcode';

//echo $nome;
//var_dump($nome);


$dados = array('valnira','okubo','irwing','lala','lele');
$qtd = count($dados);
echo 'usando count para contar quantos dados existem no array  -> '. $qtd;

for($i=0; $i < count($dados); $i++){
    echo "<br>". $dados[$i]. '  - '. $i;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

echo '<h2> limpar variaveis com <strong>unset()</strong></h2>';

$nome = 'variavel $nome <br>';
echo $nome;
echo 'Isso abaixo não e um erro, o unset() foi usado na variável nome e o notice abaixo esta indicando que a variável não esta <strong>definida</strong><br>';
unset($nome);
echo $nome .'<br>';

echo 'Para validar se a variavel <strong>(existe ou esta definida)</strong> podemos usar  <strong>isset()</strong>';


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


echo '<h2> Conhecendo tipos de dados ! </h2>';
echo 'string <br>';
echo 'int <br>';
echo 'ponto flutuante (float) <br>';
echo 'boolean <br>';
echo 'array() <br>';
echo 'Como declarar um array():  <strong>Ex: $frutas = array();</strong> <br>';
echo '<br>';

echo '<strong>Usando o fopen() arquivos tipo (resourse)</strong><br>';

$arquivo = fopen('index.php','r');
var_dump($arquivo);

echo '<br><br><br>';
echo '<strong>Diferença entre null e vazio:</strong><br>';
echo '<strong>NULL - ausência de valor (não existe)</strong><br>';
echo '<strong>VAZIO - variável iniciada so não tem informação</strong><br><br><br><br><br>';



echo"<button><a href='variaveisPreDefinidas.php?a=123&b=456'>Próxima Aula Variaveis Pré-definiidas</a></button>";