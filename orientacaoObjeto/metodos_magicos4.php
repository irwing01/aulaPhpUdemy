<h1>Métodos mágicos(construtor)</h1>
<h3>__construct</h3>
<h3>__destruct</h3>
<h3>__toString</h3>
<p>
    class Endereco{<br>
    private $lougradouro;<br>
    private $numero;<br>
    private $cidade;<br><br>

    public function __construct($lougradouro,$numero,$cidade)<br>
    {<br>
    $this->lougradouro = $lougradouro;<br>
    $this->numero = $numero;<br>
    $this->cidade = $cidade;<br><br>

    }<br><br>

    public function __destruct()<br>
    {<br>
    //        var_dump('destruir');<br>
    }<br><br>

    public function __toString()<br>
    {<br>
    return $this->lougradouro.' , '.$this->numero.' , '.$this->cidade;<br>
    }<br>
    }<br><br>

    $end = new Endereco('Quandra 23 casa','68','Gama');<br>
    echo $end;<br>

</p>

<?php
class Endereco{
    private $lougradouro;
    private $numero;
    private $cidade;

    public function __construct($lougradouro,$numero,$cidade)
    {
        $this->lougradouro = $lougradouro;
        $this->numero = $numero;
        $this->cidade = $cidade;

    }

    public function __destruct()
    {
//        var_dump('destruir');
    }

    public function __toString()
    {
        return $this->lougradouro.' , '.$this->numero.' , '.$this->cidade;
    }
}

$end = new Endereco('Quandra 23 casa','68','Gama');
echo $end;
?>

<br><br><br>
<button><a href="metodos_estaticos3.php">Página anterior Metodos_Estaticos </a></button>
<button><a href="encapsulamento5.php">Proxima aula Encapsulamento</a></button>
<br><br>
