<?php
require_once 'link.php';
echo "<h2>Escopo de variável </h2>";
echo 'Para ultilizar uma variável de fora da função dentro da função e preciso utilizar o camando <strong>"global $nome"</strong> <br><br>' ;
$nome = "irwing";


function teste(){

    global $nome;
   echo $nome;
}
teste();

echo"<br><br><button><a href='variaveisPreDefinidas.php'>Aula Anterior Variáveis Pré-definidas </a></button>";
echo"<button><a href='operadores.php'>Próxima Aula Escopo de variável</a></button>";