<h1 style="color: red;">Novidade em funções no PHP 7</h1>
<h2>Determinar o tipo de dado do parâmetro , a extenção dele (parâmetro de arra's  ...) e o tipo de retorno</h2>
<h3>Determinar o tipo de dado do parâmetro e a extenção dele, no caso um array (tres pontinhos ...)</h3>
<p>
    function teste(<strong>float ...$valores</strong>){ <br>

    return array_sum($valores);<br>
    }<br>

    var_dump(teste(2,2,2));<br><br>
    Obs: função <strong>'array_sum()'</strong> soma os valores de um array<br>


</p>

<?php

    function teste(float ...$valores){

        return array_sum($valores);
    }

    var_dump(teste(2,2,2));

?>

<hr>

<!-------------------------------------------------------------------------------------------------------------------->

<h2>Determinar o tipo do retorno</h2>
<h3>Determinar o tipo do retorno 'string'</h3>
<p>
    function teste(int ...$valores)<strong>: string</strong>{ <br>

    return array_sum($valores);<br>
    }<br>

    var_dump(teste(2,2,2));<br><br>
    Obs: função <strong>'array_sum()'</strong> soma os valores de um array<br>


</p>

<?php

function testeRetorno(int ...$valores): string {

    return array_sum($valores);
}

var_dump(testeRetorno(2,2,2));

?>

<br><br><br>
<button><a href="passagemParametroValorReferencia2.php">Página anterior Parâmetro por valoe  x por referencia. </a></button>
<button><a href="funcoesRecursivas4.php">Proxima aula Funções recursivas</a></button>
<br><br>
