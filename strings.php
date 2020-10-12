<?php
require_once 'link.php';
echo '<h2>String (string)</h2>';
echo '<strong>Interpolação de variáveis recurso do PHP - quando usa uma variavel dentro de um texto sem concatenar.</strong> <br><br>';
echo '<strong>Aspas simples usadas somente quando for apresentar texto.</strong> <br><br>';
echo '<strong>Aspas duplas usadas quando for apresentar textos e variáveis.</strong> <br><br>';


echo '<h2>Função strtoupper() - função que coloca a string em maiúsculo</h2>';
echo '$nome = \'irwing\';<br>';
echo '$nomeMaiusculo = strtoupper($nome);';

$nome = 'irwing';
$nomeMaiusculo = strtoupper($nome);
echo "<br> Resultado: $nomeMaiusculo";
///////////////////////////////////////////////////////////////////////////////////////////////////////////

echo '<h2>Função strtolower() - função que coloca a string em minúscula</h2>';
echo '$nome = \'IRWING\';<br>';
echo '$nomeMinusculo = strtolower($nome);';

$nome = 'IRWING';
$nomeMinusculo = strtolower($nome);
echo "<br> Resultado: $nomeMinusculo";
///////////////////////////////////////////////////////////////////////////////////////////////////////////

echo '<h2>Função ucfirst() - função que coloca a primeira letra maiúscula</h2>';
echo '$nome = \'irwing okubo\';<br>';
echo '$nomeM = ucfirst($nome);';

$nome = 'irwing okubo';
$nomeM = ucfirst($nome);
echo "<br> Resultado: $nomeM";
///////////////////////////////////////////////////////////////////////////////////////////////////////////

echo '<h2>Função ucwords() - função que coloca a primeira letra maiúscula em todas as palavras</h2>';
echo '$nome = \'irwing okubo\';<br>';
echo '$nomeM = ucwords($nome);';

$nome = 'irwing okubo';
$nomeM = ucwords($nome);
echo "<br> Resultado: $nomeM";
///////////////////////////////////////////////////////////////////////////////////////////////////////////

echo '<h2>Função ucwords() - função que coloca a primeira letra maiúscula em todas as palavras</h2>';
echo '$nome = \'irwing okubo\';<br>';
echo '$nomeM = ucwords($nome);';

$nome = 'irwing okubo';
$nomeM = ucwords($nome);
echo "<br> Resultado: $nomeM";
///////////////////////////////////////////////////////////////////////////////////////////////////////////


echo '<h2>Função str_replace("", "", $variavel) - função que troca uma letra / string / array() por outra</h2>';
echo 'str_replace("busca (search)", "troca (replace)", $variavel) <br><br>';
echo '$nome = \'hcode\';<br>';
echo '$nomeM = str_replace("e","3",$nome);';

$nome = 'hcode';
$nomeM = str_replace('e','3',$nome);
echo "<br> Resultado: $nomeM <br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////


echo '<h2>Função strpos() - função que retorna a posição de uma letra ou palavra </h2>';
echo '$frase = "A repetição é a mãe da retenção"; <br>';
echo '$q = strpos($frase, "mãe");<br>';

$frase = 'A repetição é mãe da retenção.';
$q = strpos($frase, "mãe");
echo "<br> Resultado: $q <br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////


echo '<h2>Função substr($variavel, "", "") - função que exibe uma string (frase) de acordo com um inicio e fim  indicado. </h2>';
echo 'substr($variavel, "inicio", "fim") ou substr($variavel, "0", "10") <br>';
echo '$frase = "A repetição é a mãe da retenção"; <br>';
echo '$pos = strpos($frase, "mãe") <br>';
echo '$q = substr($frase, "0", "$pos");<br>';

$frase = 'A repetição é mãe da retenção.';
$pos = strpos($frase, "mãe");
$q = substr($frase,"0", "$pos");
echo "<br> Resultado: $q <br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////


echo '<h2>Função strlen() - função que retorna a quantidade de caracteres da string. </h2>';
echo '$frase = \'A repetição é mãe da retenção.\';<br>';
echo '$q = strlen($frase);<br>';

$frase = 'A repetição é mãe da retenção.';
$q = strlen($frase);
echo "<br> Resultado: $q <br><br>";
///////////////////////////////////////////////////////////////////////////////////////////////////////////


echo"<br><br><button><a href='operadores.php'>Aula Anterior Operadores </a></button>";
echo"<button><a href='chamadaRequired.php'>Próxima Aula Incluindo arquivos com include / required</a></button>";