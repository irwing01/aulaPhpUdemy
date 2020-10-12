<h1>Função date() / time()</h1>


<h3>Função date_default_timezone_set('America/Sao_Paulo');</h3>
<p>Definindo o lugar onde estou, para mostrar data e hora atual de brasília (hora de são paulo)</p>
<p style="color: red">date_default_timezone_set('America/Sao_Paulo');</p>
<?php
date_default_timezone_set('America/Sao_Paulo');
echo DATE('d/m/Y - H:i:s');
?>
<hr>

<h3>Função date()</h3>
<p>echo DATE('d/m/Y - H:i:s');</p>
<?php
date_default_timezone_set('America/Sao_Paulo');
echo DATE('d/m/Y - H:i:s');
?>
<hr>

<h3>Função time()</h3>
<p>timestamp atual desde 1970 (contagen de segundo desde 1 de jan de 1970)</p>
<p>echo time();</p>
<?php
echo time();
?>
<hr>

<h3>Fixando a hora conforme timestamp</h3>
<p>
    echo date('d/m/Y - H:i:s',1585514176);<br>
    echo time();<br>
</p>
<?php
echo date('d/m/Y - H:i:s',1585514176).'<br>';
echo time();
?>
<hr>

<h3>Verificando o timestamp de uma data com a função <strong>strtotime()</strong></h3>
<p>Escolha uma data Ex: 2009-09-11 </p>
<p>Pega o timestamp da data escolhida</p>
<p>echo strtotime("2009-09-11"); </p>
<?php
echo strtotime("2009-09-11");
?><br>
------------------------------------------------------------
<p>timestamp de agora</p>
<p>echo strtotime("now"); </p>
<?php
$dataAtual = strtotime("now");
echo date('d/m/Y - h:i:s',$dataAtual);
?><br>
------------------------------------------------------------
<p>timestamp do dia seguinte</p>
<p>echo strtotime("+1 day"); </p>
<?php
$dataDiaSeguinte = strtotime("+1 day");
echo date('d/m/Y - h:i:s',$dataDiaSeguinte);
?><br>
------------------------------------------------------------
<p>timestamp de uma semanda depois - 7 dias</p>
<p>echo strtotime("+1 week"); </p>
<?php
$e = strtotime("+1 week");
echo date('d/m/Y - h:i:s',$e);
?><br>
------------------------------------------------------------
<p>timestamp de uma semanda depois - 7 dias mais 5 horas</p>
<p>echo strtotime("+1 week 5 hours 2 seconds"); </p>
<?php
$e = strtotime("+1 week 5 hours 2 seconds");
echo date('d/m/Y - h:i:s',$e);
?>


<br><br><br>
<button><a href="../funcoes/funcoesAnonimas5.php">Página anterior Função anônima. </a></button>
<button><a href="funcaoSetlocale2.php">Proxima aula Definindo a configuração local co setlocale </a></button>
<br><br>
