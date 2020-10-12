<?php
require_once 'link.php';
/**
 * Created by PhpStorm.
 * User: Irwing-Okubo-Aguiar
 * Date: 02/02/2020
 * Time: 13:53
 */

echo '<h2>Operadores (string)</h2>';
echo '<strong>Operadores de string para Atribuição  " = "</strong> <br>';
echo 'Ex: $nome = "hcode"';
$nome = 'hcode';


echo'<br><br>';
echo '<strong>Operadores de string para Concatenação  " . "</strong> <br>';
echo 'Ex: $nome . "mais alguma coisa"<br>';
echo '<u>'.$nome.' mais alguma coisa </u>';


echo'<br><br>';
echo '<strong>Operadores Compostos  " .= "</strong> <br>';
echo 'Ex: $nome .= " Treinamentos" <br>';
$nome .= " Treinamentos";
echo '<u>'.$nome.'</u>';


echo'<br><br>';
echo '<strong>Operadores de string para Atribuição  " += "</strong> <br>';
echo 'Ex: $valor = 10 <br>';
echo 'Ex: $valor += 50 <br>';
$valor = 10;
$valor += 50;
echo '<u>'.$valor.'</u>';


echo'<br><br>';
echo '<strong>Operadores de string para Atribuição  " -= "</strong> <br>';
echo 'Ex: $valor = 10 <br>';
echo 'Ex: $valor -= 1 <br>';
$valor = 10;
$valor -= 1;
echo '<u>'.$valor.'</u>';


echo'<br><br>';
echo '<strong>Operadores de string para Atribuição  " *= "</strong> <br>';
echo 'Ex: $valor = 10 <br>';
echo 'Ex: $valor *= 3 <br>';
$valor = 10;
$valor *= 3;
echo '<u>'.$valor.'</u>';


echo'<br><br>';
echo '<h2>Operadores (Aritméticos)</h2>';
echo ' soma + <br>';
echo ' subtração -  <br>';
echo ' multiplicação * <br>';
echo ' divisão / <br>';
echo ' resto da divisão % <br><br>';

echo 'Ex: $a = 120 <br>';
echo 'Ex: $b = 10 <br>';
$a = 120;
$b = 10;

echo'<br>';
echo '<strong>Soma  " + "</strong> <br>';
echo 'Ex: $a + $b <br>';
$valor = $a+$b;
echo '<u>'.$valor.'</u>';

echo'<br><br>';
echo '<strong>Subtração  " - "</strong> <br>';
echo 'Ex: $a - $b <br>';
$valor = $a-$b;
echo '<u>'.$valor.'</u>';

echo'<br><br>';
echo '<strong>Multiplicação  " * "</strong> <br>';
echo 'Ex: $a * $b <br>';
$valor = $a*$b;
echo '<u>'.$valor.'</u>';

echo'<br><br>';
echo '<strong>Divisão  " / "</strong> <br>';
echo 'Ex: $a / $b <br>';
$valor = $a/$b;
echo '<u>'.$valor.'</u>';


echo'<br><br>';
echo '<strong>Resto da divisão (mod)  " % "</strong> <br>';
echo 'Ex: $a % $b <br>';
$valor = $a%$b;
echo '<u>'.$valor.'</u>';


echo'<br><br>';
echo '<strong>Exponenciação  " ** "</strong> <br>';
echo 'Ex: 10 ao quadrado. Que seria 10 elevado 10, como no exemplo 120 elevado a 10 <br>';
echo 'Ex: $a ** $b <br>';
$valor = $a**$b;
echo '<u>'.$valor.'</u>';


echo '<h2>Operadores de Comparação</h2>';
echo ' Compara se valores são iguais "==" <br>';
echo ' Compara se valores e tipos são iguais "===" <br>';
echo ' Compara se valores e tipos são diferentes "!===" <br>';
echo ' Compara se valores e diferentes "!=" <br>';
echo ' Compara se valores e maior ou igual ">=" <br>';
echo ' Compara se valores e menor ou igual "<=" <br><br>';
echo '<strong> SpaceShip PHP7 "<=>"<strong> <br>';
echo '<strong> Ex: $a = 55 <strong> <br>';
echo '<strong> Ex: $b = 35 <strong> <br>';
echo '<strong> var_dump($b <=> 35) <strong> <br>';
echo '<strong> Se o valor de $a for maior que $b RETORNA 1 <strong> <br>';
echo '<strong> Se o valor de $a for igual a $b RETORNA 0 <strong> <br>';
echo '<strong> Se o valor de $a for menor que $b RETORNA -1 <strong> <br><br>';

echo '<strong> Operador  Null Coalescing PHP7 Comparador de valores Null <strong> <br>';
echo '<strong> Ex: $a = null <strong> <br>';
echo '<strong> Ex: $b = null <strong> <br>';
echo '<strong> Ex: $c = 10 <strong> <br>';
echo '<strong> Forma correta de colocar no echo <br> " echo $a ?? $b ?? $c; " <strong> <br>';
echo '<strong> ele verificar se $a, $b e $c e null oque não for ele mostra <strong> <br>';
$a = null;
$b = null;
$c = 10;
echo $a ?? $b ?? $c;


echo '<h2>Operadores Incremental</h2>';
echo 'Ex: $a = 10;  <br>';
echo 'Ex: $a++  <br>';
echo 'echo $a  <br>';
$a = 10;
$a++;
echo "<u> $a </u> <br>";

echo '<br><br> OU <br><br>';

echo 'Ex: $a = 10;  <br>';
echo 'Ex: ++$a;  <br>';
echo 'echo $a  <br>';
$a = 10;
++$a;
echo "<u> $a </u> <br>";


echo '<h2>Operadores Decremental</h2>';
echo 'Ex: $a = 10;  <br>';
echo 'Ex: $a--  <br>';
echo 'echo $a  <br>';
$a = 10;
$a--;
echo "<u> $a </u> <br>";

echo '<br><br> OU <br><br>';

echo 'Ex: $a = 10;  <br>';
echo 'Ex: --$a;  <br>';
echo 'echo $a  <br>';
$a = 10;
--$a;
echo "<u> $a </u> <br>";


echo '<h2>Ordem correta das operações matemáticas</h2>';
echo'
    1º Parêntesis;<br>
    2º Expoentes;<br>
    3º Multiplicações e Divisões; (da esquerda para a direita)<br>
    4º Somas e Subtrações. (da esquerda para a direita)<br>

';


echo"<br><br><button><a href='escopoVariavel.php'>Aula Anterior Escopo variável </a></button>";
echo"<button><a href='strings.php'>Próxima Aula Strings em PHP</a></button>";