<h1>Funções Anônimas</h1>

<p>Não tem nome e não tem retorno, mas pode ou não ter parâmetro na função.</p>
<p>É executada dentro de uma variável.</p>

<br>
<h3>Passando uma função anônima para dentro de outra função.</h3>
<p>
    function teste($callback){<br>
    //Exemplo de um processo sendo chamado 'conersão de video')<br><br>

    $callback();<br><br>

    }<br><br>

    teste(function(){<br>
    echo 'Função iniciada, aguarde!!!!!! ';<br>
    }); <br><br>
</p>

<?php

function teste($callback){
    //processo

    $callback();

}

teste(function(){
    echo 'Função iniciada, aguarde!!!!!! ';
});

?>
<br><br><br>
<h3>Passando uma função anônima para uma variável.</h3>
<p>
    $fun =  function($valor){<br>
    var_dump($valor);<br>
    };<br><br>


    $dados = 'Exemplo de dados!!!';<br><br>

    $fun($dados);<br><br>
</p>

<?php
$fun =  function($valor){
            var_dump($valor);
        };


$dados = 'Exemplo de dados!!!';

$fun($dados);

?>

<br><br><br>
<button><a href="funcoesRecursivas4.php">Página anterior Função recursiva. </a></button>
<button><a href="../funcoesDate/funcaoDateTime1.php">Proxima aula Função date() / time() </a></button>
<br><br>
