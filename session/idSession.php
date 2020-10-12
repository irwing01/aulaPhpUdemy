<h1>Mostrando o Id da sessão</h1>
<p>OBS: O session_start() esta no arquivo config.php e esta icluido na página com o (require_once ('config.php');) </p>
<p>session_id();   ----------  (Isso e uma função equivalente ao session_start())</p>
<p>echo session_id();<br><br>


<?php
require_once ('config.php');

echo '<strong>'.session_id().'</strong>';

echo '<br><br><br> Mostrando oque esta dentro sa Sessão <br><br>';
var_dump($_SESSION)
?>
<hr><br>

<h1>Regenerando o ID da session com a função session_regenerate_id()</h1>
<p>session_regenerate_id();</p>
<p>echo $session_id()</p>

<?php
//para ver o id sendo regenerado descomente as linhas abaixo

//session_regenerate_id();

//echo '<strong>'.session_id().'</strong>';
?>

<br><br>
<button><a href="criandoSession2.php">Página anterior Crinado e Entendendo Sessões 2 </a></button>
<button><a href="funcoesSession.php">Proxima aula funções para Session</a></button>
