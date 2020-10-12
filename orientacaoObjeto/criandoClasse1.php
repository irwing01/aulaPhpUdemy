<h1>Criando uma classe</h1>

<p><strong>
    class Pessoa{  <br>
    //    atributo <br>
    public $nome;  <br><br>

    //    método <br>
    public function falar(){   <br>
    return 'Minha primeira classe '.$this->nome;<br>
    }<br>
    }<br><br>

    $n = new Pessoa();<br>
    $n->nome = 'Pessoa';<br>
    echo $n->falar(); <br></strong>
</p>

<?php

class Pessoa{
//    atributo
    public $nome;

    public function falar(){
        return 'Minha primeira classe '.$this->nome;
    }
}

$n = new Pessoa();
$n->nome = 'Pessoa';
echo $n->falar();

?>


<br><br><br>
<button><a href="../funcoesDate/classDataTime3.php">Página anterior classe DateTime() </a></button>
<button><a href="atributos_metodos2.php">Proxima aula Atributos e Metodos </a></button>
<br><br>

