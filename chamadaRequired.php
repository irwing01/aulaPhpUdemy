<?php
require_once 'link.php';
echo '<h2>Usando include/required para incluir arquivos e usar funções </h2>';
echo 'Ex: include "exemploFuncao.php"; <br>';
echo 'Ex: required "exemploFuncao.php"; <br>';
echo 'Ex: include_once "exemploFuncao.php"; <br>';
echo 'Ex: required_once "exemploFuncao.php"; <br><br><br><br>';


include 'exemploFuncao.php';

$res = somar(10,60);
echo 'Utilizando a função soma do arquivo "exemploFuncao.php" '.$res.'<br>';
echo 'Resultado:  '.$res.'<br>';


$res = multiplicar(10,600);
echo 'Utilizando a função multiplicar do arquivo "exemploFuncao.php" '.$res.'<br>';
echo 'Resultado:  '.$res.'<br><br><br><br>';




echo '<strong>Diferença</strong> <br><br>';
echo '<strong>required: Obriga que o arquivo que está incluindo exista e que esteja funcionando corretamente</strong>  <br><br>';
echo '<strong>include: Tenta funcionar mesmo que o arquivo não exista ou que estaja com erros. Só que include te da acesso  ao "include path" que é uma pasta que voce pode
 mapear no seu sistema operacional e pode fazer o include dinâmico (include pela URL)</strong><br><br>';

echo '<strong>required_once ou include_once : Se por um a caso o arquivo estiver incluido mais de uma vez ele ignora e executa nomalmente sem dar um erro.</strong>  <br><br>';







echo"<br><br><button><a href='strings.php'>Aula Anterior Strings </a></button>";
echo"<button><a href='estruturaRepeticao.php'>Próxima Aula Estrutura de repetição</a></button>";