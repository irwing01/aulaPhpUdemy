<h1>startando a session_start e mostrando seus valores</h1>
<p>session_start();</p>
<?php
session_start();
?>

<p>Mostrando os valores contido nela</p>
<p>
    echo $_SESSION["nome"];<br>
    echo $_SESSION["usuario"];<br>
    echo $_SESSION["CPF"];<br>
</p>

<?php
var_dump($_SESSION);

echo '<br><br><br>'.$_SESSION["nome"].'<br>';
echo $_SESSION["usuario"].'<br>';
echo $_SESSION["CPF"].'<br>';

?>



<h1>Apagando uma variável de Sessao</h1>

<p>session_unset();                   --- Limpa as variáveis de session</p>
<p>session_unset($_SESSION["nome"];); --- Limpa somente a $_SESSION["nome"]</p>
<p>session_destroy($_SESSION);        --- Limpa a variável e remove o usuário do site</p>

<?php
//session_unset($_SESSION["nome"]);
//session_destroy($_SESSION);

//var_dump($_SESSION);

?>

<br><br>
<button><a href="criandoSession.php">Página anterior Crinado e Entendendo Sessões </a></button>
<button><a href="idSession.php">Prxima aula idSession</a></button>

