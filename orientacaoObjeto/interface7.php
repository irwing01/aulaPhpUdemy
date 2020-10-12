<h1>Interface</h1>
<h3>E uma classe que tem métodos que necessáriamente precisa ter em outras classes.</h3>
<h3>Ajuda na organização do código, trabalho em equipe e integração de api's</h3>
<h3 style="color: red">Quando a interface for implementada os métodos tem que ser idênticos como no exemplo abaixo. Se não for irá dar erro</h3>
<p>
    interface veiculo{ <br>
    public function acelerar($velocidade);<br>
    public function frenar($velocidade);<br>
    public function trocarMacha($macha);<br>
    }<br><br>

    class Civic implements Veiculo{<br><br>

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
    echo'O veículo engatou a '.$macha.' marcha';<br>
    }<br>
    }<br><br>

    $carro = new Civic();

</p>
<hr>

<?php
interface veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMacha($macha);
}

class Civic implements Veiculo{

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

$carro = new Civic();

?>


<br><br><br>
<button><a href="heranca6.php">Página anterior herança </a></button>
<button><a href="classe_abstrata8.php">Proxima aula Classe Abstrata </a></button>
<br><br>
