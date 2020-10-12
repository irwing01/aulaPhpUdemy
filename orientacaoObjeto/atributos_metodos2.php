<h1>Atributos e metodos</h1>

<p>

    class Carro{        <br>
    //    atributos     <br>
    private $modelo;    <br>
    private $motor;     <br>
    private $ano;       <br><br>

    //    metodos get e set<br><br>
<i style="color: red">
    public function getModelo(){<br>
    return $this->modelo;<br>
    }<br>
    public function setModelo($params){<br>
    $this->modelo = $params;<br>
    }<br><br>

    public function getMotor(): float{<br>
    return $this->motor;<br>
    }<br>
    public function setMotor($params){<br>
    $this->motor = $params;<br>
    }<br><br>

    public function getAno():int{<br>
    return $this->ano;<br>
    }<br>
    public function setAno($params){<br>
    $this->ano = $params;<br>
    }<br><br>
</i>
    //    metodo da classe<br><br>
    public function exibir(){<br>
    $res = array(<br>
    'modelo'=>$this->getModelo(),<br>
    'motor'=>$this->getMotor(),<br>
    'ano'=>$this->getAno()<br>
    );<br>
    return $res;<br>
    }<br>
    }<br><br>

    $gol = new Carro();<br>
    $gol->setModelo('Gol');<br>
    $gol->setMotor('2.0');<br>
    $gol->setAno(2020);<br><br>

    var_dump($gol->exibir());<br>
</p>





<?php

class Carro{
//    atributos
    private $modelo;
    private $motor;
    private $ano;

//    metodos get e set

    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($params){
        $this->modelo = $params;
    }

    public function getMotor(): float{
        return $this->motor;
    }
    public function setMotor($params){
        $this->motor = $params;
    }

    public function getAno():int{
        return $this->ano;
    }
    public function setAno($params){
        $this->ano = $params;
    }

//    metodo da classe
    public function exibir(){
        $res = array(
            'modelo'=>$this->getModelo(),
            'motor'=>$this->getMotor(),
            'ano'=>$this->getAno()
        );
        return $res;
    }
}

$gol = new Carro();
$gol->setModelo('Gol');
$gol->setMotor('2.4');
$gol->setAno(2020);

var_dump($gol->exibir());



?>



<br><br><br>
<button><a href="criandoClasse1.php">Página anterior Criando uma classe</a></button>
<button><a href="metodos_estaticos3.php">Próxima aula Métodos Estáticos </a></button>
<br><br>

