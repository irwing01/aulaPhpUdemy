<h1>Classe Abstrata</h1>
<h3>A classe abstrata não pode ser instanciada, tem que criar outra classe extendendo a classe abstrata.</h3>
<h3>E uma forma de organizar o código.</h3>
<h3>Exemplo de como criar uma classe abstrata: abstract class Automovel{}</h3>
<p>
    interface veiculo{ <br>
    public function acelerar($velocidade);<br>
    public function frenar($velocidade);<br>
    public function trocarMacha($macha);<br>
    }<br><br>

    abstract class Automovel implements Veiculo{<br><br>

    public function acelerar($velocidade)<br>
    {<br>
    echo 'O veículo acelerou até '.$velocidade.' Km/h';<br>
    }<br><br>

    public function frenar($velocidade)<br>
    {<br>
    echo 'O veículo frenou até '.$velocidade.' Km/h';<br>
    }<br><br>

    public function trocarMacha($macha)<br>
    {<br>
    echo 'O veículo engatou a '.$macha.' marcha';<br>
    }<br>
    }<br><br>

    class DelRey extends Automovel{<br><br>

    public function empurrar(){<br><br>

    }<br>
    }<br><br>

    $obj = new DelRey();<br>
    $obj->acelerar(100);<br>

</p>
<?php
interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMacha($macha);
}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade)
    {
        echo 'O veículo acelerou até '.$velocidade.' Km/h';
    }

    public function frenar($velocidade)
    {
        echo 'O veículo frenou até '.$velocidade.' Km/h';
    }

    public function trocarMacha($macha)
    {
        echo 'O veículo engatou a '.$macha.' marcha';
    }
}

class DelRey extends Automovel{

    public function empurrar(){

    }
}

$obj = new DelRey();
$obj->acelerar(100);

?>


<br><br><br>
<button><a href="interface7.php">Página anterior Interface </a></button>
<button><a href="polimorfismo8.php">Proxima aula Polimorfismo </a></button>
<br><br>

