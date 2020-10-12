<?php
require_once ('config.php');
?>

<h1>Funcões para Session</h1>
<h3>session_save_path()</h3>
<p>Obtém e/ou define o caminho para armazenamento da sessão atual</p>
<p>echo session_save_path();</p><br>

<?php
echo session_save_path();
?>
<hr>


<h3>session_status();</h3>
<p>Retorna o status atual da sessão</p>
<p>echo session_status();</p><br>

<p>Retorno do session_status()</p>
<p>0 - PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.</p>
<p>1 - PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.</p>
<p>2 - PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir.</p><br>

<?php
//session_destroy();
//session_unset();
echo session_status();
?>
<hr>

<br><br>
<button><a href="idSession.php">Página anterior ID session </a></button>
<button><a href="../funcoes/criandoFuncoesDeUsuario.php">Proxima aula Criando funçoes de Usuáros</a></button>
