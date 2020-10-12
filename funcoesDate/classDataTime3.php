
<h1>Class DateTime()</h1>
<a href="https://www.youtube.com/watch?v=xWKHeD-3JkU" target="_blank">Outra video mostrando como utilizar a classe Datetime()</a>
<a href="https://www.youtube.com/watch?v=T7IAriI1zoY" target="_blank">Outra video mostrando como utilizar a classe Datetime()</a>


<h3>Como utilizar a classe DateTime() mostrando data atual</h3>
<p><strong style="color: red">$dt = new DateTime('now',new DateTimeZone('America/Sao_Paulo'));</strong></p>
<p><strong style="color: red">echo $dt->format('d/m/Y - H:i:s');</strong></p>
<?php
$dt = new DateTime('now',new DateTimeZone('America/Sao_Paulo'));
echo $dt->format('d/m/Y - H:i:s');
?>

<hr>

<h3>Somando 15 dias e mostrando a data (Usando a classe  DateInterval('P15D') para informar o período/intervalo de 15 dias)</h3>
<p><strong style="color: red">$periodo = new DateInterval('P15D');</strong></p>
<p><strong style="color: red">$dt->add($periodo);</strong></p>
<p><strong style="color: red">echo $dt->format('d/m/Y - H:i:s');</strong></p>
<?php
$periodo = new DateInterval('P15D');
$dt->add($periodo);
echo $dt->format('d/m/Y - H:i:s');
?>

<hr>

<h3>Subtraindo 15 dias e mostrando a data (Usando a classe  DateInterval('P10D') para informar o período/intervalo de 15 dias)</h3>
<p><strong style="color: red">$data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));</strong></p>
<p><strong style="color: red">$p = new DateInterval('P10D');</strong></p>
<p><strong style="color: red">$data->sub($p);</strong></p>
<p><strong style="color: red">echo'Data atual menos 10 dias '. $data->format('d/m/Y - H:i:s');</strong></p>
<?php
$data = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));
echo'Data atual '. $data->format('d/m/Y - H:i:s');
$p = new DateInterval('P10D');
$data->sub($p);
echo '<br><br>';
echo'Data atual menos 10 dias '. $data->format('d/m/Y - H:i:s');
?>

<hr>

<h3>Somando 5 anos 2 meses 1 dia 10 horas 5 minutos 20 segundos (Usando a classe  DateInterval('P5Y2M1DT10H5M20S') para informar o período/intervalo de 15 dias)</h3>
<p><strong style="color: red">$d = new DateTime();</strong></p>
<p><strong style="color: red">echo $d->format('d/m/Y H:i:s');</strong></p>
<p><strong style="color: red">$d->add(new DateInterval('P5Y2M1DT10H5M20S'));</strong></p>
<p><strong style="color: red">echo $d->format('d/m/Y - H:i:s');</strong></p>
<?php
$d = new DateTime();
echo 'Data atual <br>';
echo $d->format('d/m/Y H:i:s');
$d->add(new DateInterval('P5Y2M1DT10H5M20S'));
echo '<br> Somando 5 anos 2 meses 1 dia 10 horas 5 minutos 20 segundos <br>';
echo $d->format('d/m/Y - H:i:s');
?>


<hr>

<h3>Veridficando a diferençã de uma data e outra (verificando seu niver)</h3>
<p><strong style="color: red">Informando data de niver: (sempre usar padrão amenricano na data para fazer as operações)</strong></p>
<p><strong style="color: red">$dataNiver = new DateTime('1985/03/08');</strong></p>
<p><strong style="color: red">$dataAtual = new DateTime('now');</strong></p>
<p><strong style="color: red">$idade = $dataNiver->diff($dataAtual);</strong></p>
<p><strong style="color: red">echo $idade->format('%Y Anos  %m meses %d dias  -  %h horas %i minutos %s segundos');</strong></p>
<?php
$dataNiver = new DateTime('1985/03/08 18:27:30');
$dataAtual = new DateTime('now');

$idade = $dataNiver->diff($dataAtual);
echo $idade->format('%Y Anos  %m meses %d dias  -  %h horas %i minutos %s segundos');


?>

<hr>

<h3>Veridficando o Timestamp() de uma data escolhida</h3>
<p><strong style="color: red">$timestamp = new DateTime('1985/03/08 18:27:30', new DateTimeZone('America/Sao_paulo'));</strong></p>
<p><strong style="color: red">echo'Timestamp da data '. $nu = $timestamp->getTimestamp();</strong></p>
<p><strong style="color: red">echo'mostrando a data '. $timestamp->format('d/m/Y - H:i:s');</strong></p>
<?php
$timestamp = new DateTime('1985/03/08 18:27:30', new DateTimeZone('America/Sao_paulo'));
echo'Timestamp da data '. $nu = $timestamp->getTimestamp();
echo '<br>';
echo'mostrando a data '. $timestamp->format('d/m/Y - H:i:s');

?>
<br><br><br>
<button><a href="funcaoSetlocale2.php">Página anterior Função setlocale() </a></button>
<button><a href="../orientacaoObjeto/criandoClasse1.php">Proxima aula Orientação a Objeto </a></button>
<br><br>

