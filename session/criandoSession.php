<strong><h1>Criando e Entendendo Sessões</h1></strong>

<strong><h3>Criando a session</h3></strong>

<p>Start na session</p>
<strong><p>Ex: session_start()</p></strong>

<?php
    session_start();
?>


<p>Passando um parâmetro para session</p>
<p>
    $_SESSION["nome"] = "irwing okubo aguiar";<br>
    $_SESSION["usuario"] = "irwinga";<br>
    $_SESSION["CPF"] = "72887001191";<br>
</p>

<?php
   $_SESSION["nome"] = "irwing okubo aguiar";
   $_SESSION["usuario"] = "irwinga";
   $_SESSION["CPF"] = "72887001191";

    var_dump($_SESSION);
?>
<hr>
<h3><u>Obs: A sessao deve ser iniciada (startada) em todas as páginas ou colocada em um arquivo de configuração e incluida em todas as páginas.<u></h3>
<h3><u>Nessa página estou startando a session_start() e passando alguns parâmentros para ser vistos na pagina seguinte.<u></h3>

<br>
<button><a href="../constantes.php">Aula Constantes</a></button>
<button><a href="criandoSession2.php">próxima Aula Crinado e Entendendo Sessões 2 </a></button>
