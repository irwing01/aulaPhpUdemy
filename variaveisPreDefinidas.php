<?php
require_once 'link.php';

echo "<h2>Variáveis Pré-definidas! (array's super globais) </h2>";
echo '<STRONG>$_GET["a"]</STRONG><br>';
echo 'Passando o valor de "a" via URL: Ex http://localhost/aulaPhpUdemy/variaveisPreDefinidas.php<strong>?a=123</strong><br>';

$nome = $_GET["a"];
$nomeInt = (int)$_GET["a"];
var_dump($nome);
echo'<br>';

echo '<br><br> Do formulario para o $_get[""] os dados são enviados como string, se estiver enviando números inteiros devemos <strong>converter de string para int</strong> <br>';
echo 'Como: <br>';
echo '<strong>$nome = (int)$_GET["a"]</strong> <br>';
var_dump($nomeInt);


echo '<h4>Enviar mais de um dado via $_get[""] </h4>';
echo 'Passando o valor de "a" e "b" via URL: Ex http://localhost/aulaPhpUdemy/variaveisPreDefinidas.php<strong>?a=123&b=456</strong><br>';
$nomeA = (int)$_GET["a"];
$nomeB = (int)$_GET["b"];
var_dump($nomeA);
echo'<br>';
var_dump($nomeB);

echo '<h2>Comando para verificar o IP eo nome do arquivo </h2>';
echo 'IP - $_SERVER["REMOTE_ADDR"]  <br>';
echo 'Nome do arquivo - $_SERVER["SCRIPT_NAME"] <br><br>';

$ip = $_SERVER['REMOTE_ADDR'];
echo $ip.'<br>';

$nomeArq = $_SERVER['SCRIPT_NAME'];
echo $nomeArq.'<br><br>';

echo'<h4>Outros exemplos são: </h4>';
echo '$_REQUEST[""] <br>';
echo '$_POST[""] <br><br><br>';


echo"<button><a href='index.php'>Aula Anterior Como declarar variáveis!</a></button>";
echo"<button><a href='escopoVariavel.php'>Próxima Aula Escopo de variável</a></button>";
