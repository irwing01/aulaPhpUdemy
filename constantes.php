<?php
require_once 'link.php';
?>

<strong><h1>Constantes e array's constantes</h1></strong>

<strong><h3>Definindo uma constante</h3></strong>
<P>Ex: define("SERVIDOR", "127.0.0.1");</P>
<P>echo SERVIDOR;</P>
<?php
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR;
?>

<strong><h3>Definindo uma array's constantes</h3></strong>
<P>Ex: define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
    ]);</P>
<P>echo BANCO_DE_DADOS;</P>

<?php
define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'teste'
]);

print_r(BANCO_DE_DADOS);
echo '<br><br>------Mostrando de um por um------------<br>';
echo '<p>
echo banco_de_dados[0]; <br>
echo banco_de_dados[1]; <br>
echo banco_de_dados[2]; <br>
echo banco_de_dados[3]; <br>
</p>';

echo BANCO_DE_DADOS[0].'<br>';
echo BANCO_DE_DADOS[1].'<br>';
echo BANCO_DE_DADOS[2].'<br>';
echo BANCO_DE_DADOS[3].'<br>';

?>


<strong><h1>ou</h1></strong>
<P>Ex: define("BANCO", [
    'servidor'=>'127.0.0.1',
    'usuario'=>'root',
    'senha'=>'password',
    'banco'=>'teste'
    ]);
</P>
<P>print_r (BANCO);</P>

<?php
define("BANCO", [
    'servidor'=>'127.0.0.1',
    'usuario'=>'root',
    'senha'=>'password',
    'banco'=>'teste'
]);

print_r(BANCO);
echo '<br><br>------Mostrando de um por um------------<br>';
echo '<p>
echo banco["servidor"]; <br>
echo banco["usuario"]; <br>
echo banco["senha"]; <br>
echo banco["banco"]; <br>
</p>';

echo BANCO["servidor"].'<br>';
echo BANCO['usuario'].'<br>';
echo BANCO['senha'].'<br>';
echo BANCO['banco'].'<br>';

echo $_SERVER['REMOTE_ADDR'];
?>

<hr>
<strong><h3>Outra constante padrão</h3></strong>
<P>Ex: PHP_VERSION</P>
<P>echo PHP_VERSION;</P>
<P>MOSTRA A VERSÃO DO PHP QUE ESTA USANDO</P>
<?php
echo PHP_VERSION;

?>



<hr>
<strong><h3>Outra constante padrão</h3></strong>
<P>Ex: DIRECTORY_SEPARATOR;</P>
<P>echo DIRECTORY_SEPARATOR;</P>
<P>MOSTRA UMA BARRA DE DIRETÓRIOS QUE AUTOMATIZA PARA WINDOWS E LINUX</P>
<?php
echo DIRECTORY_SEPARATOR;

?>



<br><br><br>
<button><a href="json.php">Aula Anterior Array</a></button>
<button><a href="session/criandoSession.php">próxima Aula Crinado e Entendendo Sessões </a></button>
