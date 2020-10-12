<h1>Autoload</h1>
<h3>Carregar páginas / classes automaticamente</h3>
<h3>Nesse exemplo foi criado o diretório autoload9 e criado dentro dele tres arquivos (Duas class, Automovel e DelRey) e um arquivo autoload9 para instanciar as classes</h3>
<h3 style="color: red">Lembrando que não foi colocado o required_once nos aqruivos da class, somente utilizando o autoload no arquivo autoload9 para inserir as classes</h3>
<h3 style="color: red">Não precisa chamar a função __autoload pois quando instancia a classes chamando o new a função do autoload e chamada automaticamente</h3>
<h3>Este exemplo e quando as classes estão no mesmo diretório do arquivo que está utilizando</h3>
<h3>Ex:</h3>
<p>
    function __autoload($nomeClasse){ <br>
        require_once ("$nomeClasse.php");<br>
    }<br><br>

    $carro = new DelRey();<br>
    $carro->acelerar(80);<br>
</p>
<?php
function __autoload($nomeClasse){
        require_once ($nomeClasse.".php");

}

$carro = new DelRey();
$carro->acelerar(80);
?>

<br>
<hr>
<br>
<h3>Ex utilizando a função  spl_autoload_register()</h3>
<p>
    function incluirClasse($nomeClasse){<br>
    if(file_exists($nomeClasse. ".php")){<br>
    require_once($nomeClasse.".php");<br>
    }<br>
    }<br><br>

    spl_autoload_register("incluirClasse");<br>
    $carro = new DelRey();<br>
    $carro->acelerar(80);<br>
</p>
<?php

function incluirClasse($nomeClasse){
    if(file_exists($nomeClasse. ".php") === true){
        require_once($nomeClasse.".php");
    }
}

spl_autoload_register("incluirClasse");
$carro = new DelRey();
$carro->acelerar(80);



?>
<br>
<hr>
<hr>
<hr>
<br>


<h3>Este exemplo e quando as classes não estão no mesmo diretório do arquivo que está utilizando</h3>
<h3>Foi criado um diretório classes com um arquivo Exemplo com a classe Exemplo para demonstrar a chamado de classes em diretórios diferentes.</h3>
<h3 style="color: red">Obs: O nome da classe tem que ser o mesmo nome do arquivo para o autoload/spl_autoload_register funcionar.</h3>
<h3>Ex utilizando a função  spl_autoload_register()</h3>
<p>
    spl_autoload_register(function($class){<br>
    if(file_exists("classes".DIRECTORY_SEPARATOR.$class.".php") === true){<br>
    require_once("classes".DIRECTORY_SEPARATOR.$class.".php");<br>
    }<br>
    });<br><br>


    $ex = new Exemplo();<br>
    $ex->aceleracao(80);<br><br><br><br><br>

    OU <br><br><br><hr>

    function dirDiferente($nomeclass){<br>
    if(file_exists("classes".DIRECTORY_SEPARATOR.$nomeclass.".php") === true){<br>
    require_once ("classes".DIRECTORY_SEPARATOR.$nomeclass.".php");<br>
    }<br>
    }<br><br>
    spl_autoload_register("dirDiferente");<br>
    $ex = new Exemplo();<br>
    $ex->aceleracao(800);<br><br><br>


    OU <br><br><br><hr>

    function __autoload($nomeClasse){<br>
    if(file_exists("classes".DIRECTORY_SEPARATOR.$nomeClasse.".php")){<br>
    require_once ("classes".DIRECTORY_SEPARATOR.$nomeClasse.".php");<br>
    }<br><br>

    }<br><br>

    $e = new Exemplo();<br>
    $e->aceleracao(110);<br>




</p>

<?php
//spl_autoload_register(function($class){
//    if(file_exists("classes".DIRECTORY_SEPARATOR.$class.".php") === true){
//        require_once("classes".DIRECTORY_SEPARATOR.$class.".php");
//    }
//});
//
//
//$ex = new Exemplo();
//$ex->aceleracao(80);


//-------------ou pode usar assim----------------------------
function dirDiferente($nomeclass){
    if(file_exists("classes".DIRECTORY_SEPARATOR.$nomeclass.".php") === true){
        require_once ("classes".DIRECTORY_SEPARATOR.$nomeclass.".php");
    }
}
spl_autoload_register("dirDiferente");
$ex = new Exemplo();
$ex->aceleracao(800);

?>


<br><br><br>
<button><a href="../polimorfismo8.php">Página anterior Polimorfismo </a></button>
<button><a href="../namespace/index.php">Proxima aula NAMESPACE </a></button>
<br><br>
