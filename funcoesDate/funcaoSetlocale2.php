<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>

<h1>Função setlocale()</h1>


<h3>setlocale() Define padrão de linguagem que queira usar (no linux e escrito de uma maneira e windows outra)</h3>
<p>"pt_BR" - linux</p>
<p>"pt_BR.utf-8" - linux</p>
<p>"portuguese" - Windows</p>
<p>O ideal é deixar os três</p>
<strong style="color: red">setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");</strong>

<hr>
<h3>Função strftime() trazendo o nome do mes / semana em portugues </h3>
<p>%A - Dia da Semana</p>
<p>%B - Nome do Mês</p>
<a target="_blank" href="https://www.php.net/manual/pt_BR/function.strftime.php">Exemplos de parâmetros para usar com o strftime("")</a><br><br>
<strong style="color: red">strftime("%A %B");</strong><p></p>
<?php
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");
date_default_timezone_set('America/Sao_Paulo');
echo ucwords(strftime("%A   %B"));
?>

<hr>
<h3>Função strftime() trazendo o nome do mes / semana em portugues e hora </h3>
<p>%A - Dia da Semana</p>
<p>%B - Nome do Mês</p>
<p>%T - Hora completa h:i:s</p>
<p>echo strftime("%A - %d de %B de %G - %T");</p>
<a target="_blank" href="https://www.php.net/manual/pt_BR/function.strftime.php">Exemplos de parâmetros para usar com o strftime("")</a><br><br>
<strong style="color: red">strftime("%A - %d de %B de %G - %T");</strong><p></p>
<?php

echo strftime("%A - %d de %B de %G - %T");
?>

<hr>
<h3>Função strftime() Mostrando data e hora escolhida conforme timestamp </h3>
<p>%A - Dia da Semana</p>
<p>%B - Nome do Mês</p>
<p>%T - Hora completa h:i:s</p>
<p>$t = strtotime('1985/03/08 07:20:20');</p>
<p>echo strftime("%A - %d de %B de %G - %T",$t);</p>
<a target="_blank" href="https://www.php.net/manual/pt_BR/function.strftime.php">Exemplos de parâmetros para usar com o strftime("")</a><br><br>
<strong style="color: red">strftime("%A - %d de %B de %G - %T");</strong><p></p>
<?php
setlocale(LC_ALL, "pt_BR","pt_BR.utf-8","portuguese");
date_default_timezone_set('America/Sao_Paulo');
$t = strtotime('1985/03/08 07:20:20');
echo strftime("%A - %d de %B de %G - %T",$t);
?>



<br><br><br>
<button><a href="funcaoDateTime1.php">Página anterior Função date() / time(). </a></button>
<button><a href="classDataTime3.php">Proxima aula Class Data Time </a></button>
<br><br>

